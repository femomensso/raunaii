<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;

class Newsletter

{
    public function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);
    }

    public function subscribe(string $email)
    {
        return $this->client()->lists->addListMember(config('services.mailchimp.list'), [
            "email_address" => $email, 
            "status" => "subscribed"
        ]);
    }

}