<?php

namespace UJ\MEP;

class EmailHeadersParser
{

  
  public static function parse($arrayed)
  {
    $headers = new EmailHeadersParser;
    $arrayedHeaders = explode("\n", $arrayed[0]);
    $namedHeaders = array();

    array_walk($arrayedHeaders, function($v, $k) use (&$namedHeaders) {
      $header = explode(': ', $v);
      if(count($header) == 2) {
        $namedHeaders[$header[0]] = $header[1];
      }
    });

    // Useful to extract
    // 1. Delivered-To
    // 2. Return-Path
    // 3. From
    // 4. To
    // 5. Subject
    // 6. Message-ID (think this is Gmail specific)
    // 7. Content-Type
    // 8. Content-Language
    // 9. MIME-Version

    return $headers;
  }
}