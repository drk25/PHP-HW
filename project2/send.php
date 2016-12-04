<?php

include "code/bootstrap.php";

$mailer = new Mailer();

$mailer->addRecipient('732-111-3333');
$mailer->addRecipient('201-222-4141');
$mailer->addRecipient('604-133-2995');

$mailer->send('This message has been sent to 3 recipients');
