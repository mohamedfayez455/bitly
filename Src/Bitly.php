<?php

namespace MohamedFayez\Bitly;

class Bitly
{

    public static function shorten($long_url = '')
    {
        if (empty($long_url)){
            throw new \Exception('PLease Provide Long url');
        }

        if (is_null($token == config('bitlyConfig.token')  )){
            throw new \Exception('please provide token in bitlyConfig.php ');
        }

        $requestBody = json_encode([
            "domain"    => "bit.ly",
            "long_url"  => $long_url
        ]);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api-ssl.bitly.com/v4/shorten',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>$requestBody,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response) ;
        return $response->link ? $response->link :   '';
    }


}