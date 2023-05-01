<?php 


## HERE IS EXAMPLE OF HOW TO ADD CUSTOM SHORTLINKS
## YOU STILL NEED TO ENABLE IN ADMIN PANEL

$settings['sldata']['10000'] = array(
    'id' => '10000',
    'name' => 'Shorti API',
    'apilink' => 'https://api.shorti.io/api?api={apikey}&url={url}',
    'views' => '1',
    'cpm' => '21.00',
    'referral' => 'https://example.com',
    'status' => 'Y'
);

$settings['sldata']['10001'] = array(
    'id' => '10001',
    'name' => 'USAlink.io',
    'apilink' => 'https://usalink.io/api?api={apikey}&url={url}',
    'views' => '1',
    'cpm' => '21.00',
    'referral' => 'https://example.com',
    'status' => 'N'
);

