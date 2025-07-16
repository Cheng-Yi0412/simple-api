<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <?php
// ✦ 基本參數
$apiKey   = 'CWA-89056D62-D49A-4EEC-B137-08C044E81BEC'; 
$location = '%E8%87%BA%E4%B8%AD%E5%B8%82';
$url      = 'https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-091?'
          . http_build_query([
                'Authorization' => $apiKey,
                'format'        => 'JSON',
                'LocationName'  => $location,
                'sort'          =>'time',
            ]);

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);
    $data = json_decode($data, true);
    curl_close($ch);
    echo '<pre>';
    var_dump($data);
    echo '</pre>';



        ?>
    </body>
</html>