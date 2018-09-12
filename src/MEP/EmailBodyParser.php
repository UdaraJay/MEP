<?php

namespace UJ\MEP;

class EmailBodyParser extends EmailModel
{
  public static function parse(EmailModel $parsed, $arrayed)
  {
    $fragments = array();

    //TODO this may need to be recursive?
    // Looping through every message in the email
    foreach($arrayed as $key=>$value) {

      if($key == 0 ) continue;
      $subArrayed = explode("\r\n\r\n", $value, 2);

      if(count($subArrayed) > 1) {
        $headers = $subArrayed[0];
        $body = $subArrayed[1];
        $decodedBody= quoted_printable_decode(EmailBodyParser::base64url_decode($body));
        $headersArray = explode("\n", $headers);
        $namedHeaders = array();

        array_walk($headersArray, function($v, $k) use (&$namedHeaders) {
          $header = explode(': ', $v);
          if(count($header) == 2) {
            $namedHeaders[$header[0]] = $header[1];
          }
        });

        $fragment = new EmailModelFragment;
        $fragment->setMessageId($headersArray[0]);
        $fragment->setContentType(isset($namedHeaders['Content-Type']) ? $namedHeaders['Content-Type'] : null);
        $fragment->setContentId(isset($namedHeaders['Content-ID']) ? $namedHeaders['Content-ID'] : null);
        $fragment->setContentTransferEncoding(isset($namedHeaders['Content-Transfer-Encoding']) ? $namedHeaders['Content-Transfer-Encoding']: null);

        if (strpos($fragment->getContentType(), 'text/html') !== false) {
          $fragment->setIsHtml(true);
          $fragment->setDecodedHtmlBody($decodedBody);
        } else {
          $fragment->setIsHtml(false);
          $fragment->setDecodedTextBody($decodedBody);
        }

        array_push($fragments, $fragment);
      }
    }

    // Merge the html and text versions on here
    $fragments = EmailBodyParser::mergeTextAndHTML($fragments);
    $parsed->setFragments($fragments);

    return $parsed;
  }

  public static function mergeTextAndHTML($fragments){

    foreach($fragments as $key=>$fragment){
      if(!$fragment->getIsHtml()) continue;

      $id = $fragment->getMessageId();

      foreach($fragments as $keyIn=>$fragmentIn){
        if($fragment->getIsHtml()) continue;

        $idIn = $fragmentIn->getMessageId();

        if($id == $idIn){
            $text = $fragmentIn->getDecodedTextBody();
            $fragment->setDecodedTextBody($text);
            unset($fragments[$keyIn]);
        }
      }
    }



    return $fragments;
  }

  public static function base64url_decode($data) {
    $decoded = null;
    if ( base64_encode(base64_decode($data)) === $data){
      $decoded = base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    } else {
      $decoded = $data;
    }
    return $decoded;
  }

}