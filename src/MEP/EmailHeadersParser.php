<?php

namespace UJ\MEP;

class EmailHeadersParser extends EmailModel
{

  public static function parse(EmailModel $parsed, $arrayed)
  {
    $arrayedHeaders = explode("\n", $arrayed[0]);
    $lastHeader = 0;

    // Concat tabbed header content to the right header
    foreach($arrayedHeaders as $key=>$value) {
      if(ltrim($value) != $value) {
        $arrayedHeaders[$lastHeader] = $arrayedHeaders[$lastHeader] . $value;
        unset($arrayedHeaders[$key]);
      } else {
        $lastHeader = $key;
      }
    }

    $namedHeaders = array();
    array_walk($arrayedHeaders, function($v, $k) use (&$namedHeaders) {
      $header = explode(': ', $v);
      if(count($header) == 2) {
        $namedHeaders[$header[0]] = $header[1];
      }
    });

    $parsed->setHeaders(isset($arrayed[0]) ? $arrayed[0] : null);
    $parsed->setDeliveredTo(isset($namedHeaders['Delivered-To']) ? $namedHeaders['Delivered-To'] : null);
    $parsed->setFrom(isset($namedHeaders['From']) ? $namedHeaders['From'] : null);
    $parsed->setTo(isset($namedHeaders['To']) ? $namedHeaders['To'] : null);
    $parsed->setSubject(isset($namedHeaders['Subject']) ? $namedHeaders['Subject'] : null);
    $parsed->setContentType(isset($namedHeaders['Content-Type']) ? $namedHeaders['Content-Type'] : null);
    $parsed->setContentLanguage(isset($namedHeaders['Content-Language']) ? $namedHeaders['Content-Language'] : null);
    $parsed->setMessageId(isset($namedHeaders['Message-ID']) ? $namedHeaders['Message-ID'] : null);
    $parsed->setMimeVersion(isset($namedHeaders['MIME-Version']) ? $namedHeaders['MIME-Version'] : null);

    return $parsed;
  }
}