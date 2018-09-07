<?php

namespace UJ\MEP;

class EmailModelFragment extends EmailModel
{
  protected $messageId = null;
  protected $contentType = null;
  protected $contentId = null;
  protected $contentTransferEncoding = null;
  protected $decodedBody = null;

  /**
   * @return null
   */
  public function getMessageId()
  {
    return $this->messageId;
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

  /**
   * @return null
   */
  public function getDecodedBody()
  {
    return $this->decodedBody;
  }

  /**
   * @param null $decodedBody
   */
  public function setDecodedBody($decodedBody): void
  {
    $this->decodedBody = $decodedBody;
  }
}