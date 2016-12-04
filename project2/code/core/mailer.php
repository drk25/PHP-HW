<?php

class Mailer
{
    private $_recipients;

    public function addRecipient($email)
    {
        $recipient = new Addressbook($email);
        $this->_recipients[] = $recipient;
    }

    public function send($message)
    {
        foreach ($this->_recipients as $recipient) {
            mail($recipient->getPhone(), 'Alert', $message);
            echo sprintf("Text sent to %s<br>", $recipient->getPhone());
        }
    }
}
