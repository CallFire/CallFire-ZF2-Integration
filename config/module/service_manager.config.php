<?php
return array(
    'factories' => array(
        'CallFire\Config\Api' => 'CallFire\Config\Factory\Api',
    ),
    'abstract_factories' => array(
        'CallFire\ClientFactory',
    ),
);
