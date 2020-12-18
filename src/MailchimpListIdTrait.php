<?php
namespace Germania\MailchimpHelpers;

use MailchimpMarketing\ApiClient;

trait MailchimpListIdTrait
{

    /**
     * @var null|string
     */
    protected $mailchimp_list_id;


    public function getMailchimpListId() : ?string
    {
    	return $this->mailchimp_list_id;
    }

    public function setMailchimpListId( string $mailchimp_list_id ) : self
	{
		$this->mailchimp_list_id = $mailchimp_list_id;
		return $this;
	}
}
