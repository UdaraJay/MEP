<?php

namespace UJ\MEP;

class EmailBodyParser extends EmailModel
{
  public static function parse(EmailModel $parsed, $arrayed)
  {

    // Looping through every message in the email
    foreach($arrayed as $key=>$value) {
      if($key == 0 ) continue;
      $subArrayed = explode("\n\n", $value);

      if(count($subArrayed) > 1) {
        $headers = $subArrayed[0];
        $body = $subArrayed[1];
        $decodedBody= quoted_printable_decode(EmailBodyParser::base64url_decode($body));

        $fragment = new EmailModelFragment;
      }
    }

    return $parsed;
  }

  public static function base64url_decode($data) {
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
  }

}