<?php
    $url = "https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services";
    require './vendor/autoload.php';
    $client = new GuzzleHttp\Client();
    $data = $client->request('GET','https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services');
        // echo $data->getStatusCode();
    // echo $data->getHeader('content-type')[0];
    $body = $data->getBody();
    
    
    $json_data = json_decode($body);
    
    
    for($i=0;$i<7;$i++){   
        echo "<h1>".($i+1).". ".$json_data->data[$i]->attributes->title."</h1>";
        print_r($json_data->data[$i]->attributes->body->summary);
        if($i < 5)
            echo $json_data->data[$i]->attributes->field_services->value;
        $url = $json_data->data[$i]->relationships->field_image->links->related->href;
        $data1 = $client->request('GET',$url);
        $body2 = $data1->getBody();
        $json_data2 = json_decode($body2);
        $img_src = "https://ir-revamp-dev.innoraft-sites.com".$json_data2->data->attributes->uri->url;  
        echo "<img src= '$img_src'></br>";
    }
?>
