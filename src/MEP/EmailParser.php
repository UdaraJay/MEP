<?php

namespace UJ\MEP;

class EmailParser extends EmailModel
{
  public static function parse($email)
  {
    $arrayed = explode("--", $email);
    $parsed = new EmailParser;

    EmailHeadersParser::parse($parsed, $arrayed);
    EmailBodyParser::parse($parsed, $arrayed);

    return $parsed;
  }
}