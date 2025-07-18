<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <?php
// ✦ 基本參數
$apiKey   = 'CWA-89056D62-D49A-4EEC-B137-08C044E81BEC'; 
$location = '%E8%87%BA%E4%B8%AD%E5%B8%82';
$url      = 'https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-075?'
          . http_build_query([
                'Authorization' => $apiKey,
                'format'        => 'JSON',
            ]);

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    

    $data = curl_exec($ch);
    $data = json_decode($data, true);
    curl_close($ch);
    echo '<pre>';
    echo $data['records']['Locations'][0]['Location'][0]['Geocode'];
    echo '</pre>';



        ?>
        
         <?php
         /*測試Post_api.php
         $url_test      = 'http://localhost/api_example/Post_api.php';
            $ch_test=curl_init();
            curl_setopt($ch_test, CURLOPT_URL, $url_test);
            curl_setopt($ch_test, CURLOPT_RETURNTRANSFER, true);
            

            $data_test = curl_exec($ch_test);
            $data_test = json_decode($data_test, true);
            curl_close($ch_test);
            echo '<pre>';
            echo $data_test['comments'][0]['username'];
            echo '</pre>';
         */
        ?>
        
    </body>
</html>