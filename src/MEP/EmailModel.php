<?php

namespace UJ\MEP;

class EmailModel
{

  protected $headers = null;
  protected $body = null;
  protected $raw = null;
  protected $deliveredTo = null;
  protected $returnPath = null;
  protected $from = null;
  protected $to = null;
  protected $subject = null;
  protected $messageId = null;
  protected $contentType = null;
  protected $contentLanguage = null;
  protected $mimeVersion = null;
  protected $fragments = array();
  protected $isDraft = null;
  protected $labels = array();

  /**
   * @return null
   */
  public function getisDraft()
  {
    return $this->isDraft;
  }

  /**
   * @param null $isDraft
   */
  public function setIsDraft($isDraft): void
  {
    $this->isDraft = $isDraft;
  }

  /**
   * @return array
   */
  public function getLabels(): array
  {
    return $this->labels;
  }

  /**
   * @param array $labels
   */
  public function setLabels(array $labels): void
  {
    $this->labels = $labels;
  }

  /**
   * @return null
   */
  public function getHeaders()
  {
    return $this->headers;
  }

  /**
   * @return array
   */
  public function getFragments(): array
  {
    return $this->fragments;
  }

  /**
   * @param array $fragments
   */
  public function setFragments(array $fragments): void
  {
    $this->fragments = $fragments;
  }

  /**
   * @param null $headers
   */
  public function setHeaders($headers): void
  {
    $this->headers = $headers;
  }

  /**
   * @return null
   */
  public function getBody()
  {
    return $this->body;
  }

  /**
   * @param null $body
   */
  public function setBody($body): void
  {
    $this->body = $body;
  }

  /**
   * @return null
   */
  public function getRaw()
  {
    return $this->raw;
  }

  /**
   * @param null $raw
   */
  public function setRaw($raw): void
  {
    $this->raw = $raw;
  }

  /**
   * @return null
   */
  public function getDeliveredTo()
  {
    return $this->deliveredTo;
  }

  /**
   * @param null $deliveredTo
   */
  public function setDeliveredTo($deliveredTo): void
  {
    $this->deliveredTo = $deliveredTo;
  }

  /**
   * @return null
   */
  public function getReturnPath()
  {
    return $this->returnPath;
  }

  /**
   * @param null $returnPath
   */
  public function setReturnPath($returnPath): void
  {
    $this->returnPath = $returnPath;
  }

  /**
   * @return null
   */
  public function getFrom()
  {
    return $this->from;
  }

  /**
   * @param null $from
   */
  public function setFrom($from): void
  {
    $this->from = $from;
  }

  /**
   * @return null
   */
  public function getTo()
  {
    return $this->to;
  }

  /**
   * @param null $to
   */
  public function setTo($to): void
  {
    $this->to = $to;
  }

  /**
   * @return null
   */
  public function getSubject()
  {
    return $this->subject;
  }

  /**
   * @param null $subject
   */
  public function setSubject($subject): void
  {
    $this->subject = $subject;
  }

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
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  /**
   * @param null $contentLanguage
   */
  public function setContentLanguage($contentLanguage): void
  {
    $this->contentLanguage = $contentLanguage;
  }

  /**
   * @return null
   */
  public function getMimeVersion()
  {
    return $this->mimeVersion;
  }

  /**
   * @param null $mimeVersion
   */
  public function setMimeVersion($mimeVersion): void
  {
    $this->mimeVersion = $mimeVersion;
  }
}