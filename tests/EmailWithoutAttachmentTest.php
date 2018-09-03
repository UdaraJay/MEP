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
    $this->assertEquals('7faad3cb77f12bc68bd7c20a1f1aea99', md5_file($file));
    $fileContents = file_get_contents($file);
  }
}