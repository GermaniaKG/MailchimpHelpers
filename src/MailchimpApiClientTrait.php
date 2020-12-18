<?php
namespace Germania\MailchimpHelpers;

use MailchimpMarketing\ApiClient;

trait MailchimpApiClientTrait
{

    /**
     * @var null|MailchimpMarketing\ApiClient
     */
    protected $mailchimp;


    public function getMailchimpApiClient() : ?ApiClient
    {
    	return $this->mailchimp;
    }

    public function setMailchimpApiClient( ApiClient $mailchimp ) : self
	{
		$this->mailchimp = $mailchimp;
		return $this;
	}
}
