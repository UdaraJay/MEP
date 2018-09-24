<?php

namespace UJ\MEP;

class EmailDethreader extends EmailModel
{
  // Pass in an array of raw emails
  public static function dethread($emails)
  {

    $parsedEmails = array();

    // 1. Parse every email and push it into an array
    foreach($emails as $email){
      $parsed = EmailParser::parse($email);
      array_push($parsedEmails, $parsed);
    }
    g
    // 2. Thread the emails in order with proper parent child relationship
    // Remember to order by date before messing with this
      // Find the first email
      // Find the next thing with in-reply-to for this email and attach as child ... mark each email as it's used.

    // 3. Go parse through the bodies and calculate diff
    //    3a. Split by reply, signature and old.

    var_dump(count($parsedEmails));

    return $parsedEmails;
  }
}