<?php

use yii\helpers\Url;

class ContactCest
{
    public function _before(\AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/contact'));
    }
    
    public function contactPageWorks(AcceptanceTester $I)
    {
        $I->wantTo('ensure that contact page works');
        $I->see('Contact', 'h1');
    }

    public function contactFormCanBeSubmitted(AcceptanceTester $I)
    {
       
        $I->amGoingTo('submit contact form with correct data');
        $I->fillField('ContactForm[name][0][user_id]', 1);
        $I->fillField('ContactForm[name][0][priority]', 3);

        $I->click('contact-button');
        
        $I->wait(2); // wait for button to be clicked

        $I->see('contact Form Submitted');
        $I->wait(3); // wait for 3 secs
       // $I->see('Thank you for contacting us. We will respond to you as soon as possible.');
    }
}
