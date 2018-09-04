<?php

use UJ\MEP\EmailParser;
use PHPUnit\Framework\TestCase;

/**
 * @covers UJ\MEP\EmailParser
 */

final class EmailWithoutAttachmentTest extends TestCase
{
  public function testDefaultTypeWithBody()
  {
    $file = __DIR__.'/SampleEmails/email_without_attachment.txt';
    $this->assertEquals('382084092df7b7adeb9767f9af93ec76', md5_file($file));
    $fileContents = file_get_contents($file);
    $parser = EmailParser::parse($fileContents);
  }
}