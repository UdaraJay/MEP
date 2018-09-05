<?php

namespace UJ\MEP;

class EmailHeadersParser
{

  protected $array = null;

  public function getFrom(){
    return $this->array['From'];
  }

  public function getTo(){
    return $this->array['To'];
  }

  public function getSubject(){
    return $this->array['Subject'];
  }

  public function getMessageID(){
    return $this->array['Message-ID'];
  }

  public function getContentType(){
    return $this->array['Content-Type'];
  }

  public function getContentLanguage(){
    return $this->array['Content-Language'];
  }

  public function getMimeVersion(){
    return $this->array['MIME-Version'];
  }

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

    $headers->array = $namedHeaders;

    return $headers;
  }
}