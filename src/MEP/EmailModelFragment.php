<?php

namespace UJ\MEP;

class EmailModelFragment
{
  protected $messageId = null;
  protected $contentType = null;
  protected $contentId = null;
  protected $contentTransferEncoding = null;
  protected $decodedHtmlBody = null;
  protected $decodedTextBody = null;
  protected $isHtml = null;

  /**
   * @return null
   */
  public function getDecodedHtmlBody()
  {
    return $this->decodedHtmlBody;
  }

  /**
   * @param null $decodedHtmlBody
   */
  public function setDecodedHtmlBody($decodedHtmlBody): void
  {
    $this->decodedHtmlBody = $decodedHtmlBody;
  }

  /**
   * @return null
   */
  public function getDecodedTextBody()
  {
    return $this->decodedTextBody;
  }

  /**
   * @param null $decodedTextBody
   */
  public function setDecodedTextBody($decodedTextBody): void
  {
    $this->decodedTextBody = $decodedTextBody;
  }

  /**
   * @return null
   */
  public function getMessageId()
  {
    return $this->messageId;
  }

  /**
   * @return null
   */
  public function getisHtml()
  {
    return $this->isHtml;
  }

  /**
   * @param null $isHtml
   */
  public function setIsHtml($isHtml): void
  {
    $this->isHtml = $isHtml;
  }

  /**
   * @param null $messageId
   */
  public function setMessageId($messageId): void
  {
    $this->messageId = $messageId;
  }

  /**
   * @return null
   */
  public function getContentType()
  {
    return $this->contentType;
  }

  /**
   * @param null $contentType
   */
  public function setContentType($contentType): void
  {
    $this->contentType = $contentType;
  }

  /**
   * @return null
   */
  public function getContentId()
  {
    return $this->contentId;
  }

  /**
   * @param null $contentId
   */
  public function setContentId($contentId): void
  {
    $this->contentId = $contentId;
  }

  /**
   * @return null
   */
  public function getContentTransferEncoding()
  {
    return $this->contentTransferEncoding;
  }

  /**
   * @param null $contentTransferEncoding
   */
  public function setContentTransferEncoding($contentTransferEncoding): void
  {
    $this->contentTransferEncoding = $contentTransferEncoding;
  }

}