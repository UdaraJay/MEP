<?php

namespace UJ\MEP;

class EmailParser
{

  protected $headers = null;
  protected $body = null;
  protected $raw = null;

  public static function parse($email)
  {
    $arrayed = explode("--", $email);
    // sections[0] will always be the headers, the rest will be the body
//     var_dump($arrayed);

    $parser = new EmailParser;
    $parser->raw = $email;

    $parser->headers = EmailHeadersParser::parse($arrayed);
//    $parser->body = EmailBodyParser::parse($arrayed, $parser->headers);

    return $parser;
  }
}