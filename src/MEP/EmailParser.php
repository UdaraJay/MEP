<?php

namespace UJ\MEP;

class EmailParser
{

  protected $headers = null;
  protected $body = null;
  protected $raw = null;

  public function __construct($raw)
  {
    $this->raw = $raw;
  }

  public static function parse($email)
  {
    $parser = new EmailParser;
    $parser->raw = $email;

    

    $parser->headers = EmailHeadersParser::parse($arrayed);
    $parser->body = EmailBodyParser::parse($arrayed, $parser->headers);

    return $parser;
  }
}