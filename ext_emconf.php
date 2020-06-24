<?php

$EM_CONF['mailchimp'] = [
    'title' => 'Mailchimp subscription',
    'description' => 'Simple MailChimp integration to let users register to a specific list',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => 'g.ringer@supseven.at',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.4-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'typoscript_rendering' => '1.0.5-2.99.999'
        ],
    ],
];
