<?php

use UJ\MEP\EmailDethreader;
use PHPUnit\Framework\TestCase;

/**
 * @covers UJ\MEP\EmailParser
 */

final class EmailWithoutAttachmentTest extends TestCase
{
  public function testDefaultTypeWithBody()
  {
    $directory = __DIR__.'/SampleEmails/internal/';
    $emails = array();

    if (! is_dir($directory)) {
      exit('Invalid diretory path');
    }

    $files = array();

    foreach (scandir($directory) as $file) {
      if ('.' === $file) continue;
      if ('..' === $file) continue;

      $files[] = $file;
    }

    foreach($files as $file){
      $file = $directory . $file;
      $fileContents = file_get_contents($file);
      array_push($emails, $fileContents);
    }

    $parsed = EmailDethreader::dethread($emails);
  }
}