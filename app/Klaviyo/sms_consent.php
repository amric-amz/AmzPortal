<?php

namespace App\Klaviyo;

class sms_consent{

    public static function klaviyoSmsConsent($responMessage, $contact , $email)
    {
        return $responMessage;

        $url = "https://a.klaviyo.com/api/v2/list/RwsWzv/subscribe?api_key=pk_82fe5905b8f0506aa01f3acd6e451ad39b";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json,",
            "Cache-Control: no-cache",
            "Content-Type: application/json",
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
        {
        "api_key": "pk_82fe5905b8f0506aa01f3acd6e451ad39b",
        "profiles": [
            {
                "phone_number": ".$contact.",
                "emails": "lojot@mailinator.com",
                "sms_consent": true
            }
        ]
        }
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($resp,true);
        return $response;


    }

}

?>
