<?php 


## HERE IS EXAMPLE OF HOW TO ADD CUSTOM SHORTLINKS
## YOU STILL NEED TO ENABLE IN ADMIN PANEL

$settings['sldata']['10000'] = array(
    'id' => '10000',
    'name' => 'Shorti API',
    'apilink' => 'https://shorti.io/api?api={apikey}&url={url}',
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



function get_short_link($url, $apikey) {
    // Shorten URL with first service
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://shorti.io/api?api={$apikey}&url={$url}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($result, true);

    if ($data['status'] == 'success') {
        $shorturl = $data['shortenedUrl'];
        $apiid = $data['apiId'];

        // Shorten URL with second service
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://usalink.io/api?api={$apikey}&url={$shorturl}");
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        $result2 = curl_exec($ch2);
        curl_close($ch2);

        $data2 = json_decode($result2, true);

        if ($data2['status'] == 'success') {
            $shorturl2 = $data2['shortenedUrl'];
            return $shorturl2;
        } else {
            return false;
        }
    } else {
        return false;
    }
}



