<?php 


## HERE IS EXAMPLE OF HOW TO ADD CUSTOM SHORTLINKS
## YOU STILL NEED TO ENABLE IN ADMIN PANEL

$settings['sldata']['10001'] = array(
    'id' => '10001',
    'name' => 'shorti.io',
    'apilink' => 'https://shorti.io/api?api={apikey}&url=https://usalink.io/api?api={apikey}&url={url}',
    'views' => '1',
    'cpm' => '21.00',
    'referral' => 'https://shorti.io',
    'status' => 'N'
);


$settings['sldata']['10001'] = array(
    'id' => '10001', // Start with id greater than 10000
    'name' => 'usalink.io', // Name of Shortlink
    'apilink' => 'https://usalink.io/api?api={apikey}&url={url}', // leave ?api={apikey}&url={url} just change url!
    'views' => '1', // Max view count of shortener
    'cpm' => '21.00', // CPM of Shortener
    'referral' => 'https://shorti.io', // Your Referral link
    'status' => 'N' // Should be Y unless you dont want it to show in list then put N
);


