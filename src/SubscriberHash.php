<?php
namespace Germania\MailchimpHelpers;

class SubscriberHash
{

    /**
     * @var string
     */
	public $email;


    /**
     * @param string $email Subscriber email address
     */
	public function __construct(string $email)
	{
		$this->setMail($email);
	}

	public function __toString()
	{
		return $this->getHash();
	}


    /**
     * Returns subscriber email address hash as used with Mailchimp ApiClient.
     * @return string
     */
	public function getHash(  ) : string
	{
		return md5(strtolower($this->email));
	}


    /**
     * @param string $email Subscriber email address
     */
	public function setMail( string $email ) : self
	{
		$this->email = $email;
		return $this;
	}
}
