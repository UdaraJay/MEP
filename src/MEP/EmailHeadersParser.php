<?php

namespace UJ\MEP;

class EmailHeadersParser extends EmailModel
{

  public static function parse(EmailModel $parsed, $arrayed)
  {
    $arrayedHeaders = explode("\n", $arrayed[0]);
    $namedHeaders = array();

    array_walk($arrayedHeaders, function($v, $k) use (&$namedHeaders) {
      $header = explode(': ', $v);
      if(count($header) == 2) {
        $namedHeaders[$header[0]] = $header[1];
      }
    });

    $parsed->setHeaders($arrayed[0]);
    $parsed->setDeliveredTo($namedHeaders['Delivered-To']);
    $parsed->setFrom($namedHeaders['From']);
    $parsed->setTo($namedHeaders['To']);
    $parsed->setSubject($namedHeaders['Subject']);
    $parsed->setContentType($namedHeaders['Content-Type']);
    $parsed->setContentLanguage($namedHeaders['Content-Language']);
    $parsed->setMessageId($namedHeaders['Message-ID']);
    $parsed->setMimeVersion($namedHeaders['MIME-Version']);

    return $parsed;
  }
}