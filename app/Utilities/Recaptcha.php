<?php

namespace App\Utilities;

class Recaptcha
{

    private $secret_key;
    
    public function __construct($secret_key){
        $this->secret_key = $secret_key;
    }

    public function verify($verification_token){
        
        if (!empty($verification_token)) {
            
            // google recaptcha verification url
            $url = "https://www.google.com/recaptcha/api/siteverify";
            
            // data to be sent through the HTTP post request
            $data = array(
                'secret' => $this->secret_key,
                'response' => $verification_token
                // 'remoteip' => $_SERVER['REMOTE_ADDR']
            );
            
            // check if the curl extension is installed on our web server
            if (function_exists('curl_version')) {
                
                //initialize curl session url
                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $url); //set the url option
                curl_setopt($curl, CURLOPT_HEADER, false); // set header option
                curl_setopt($curl, CURLOPT_POST, 1); // set http method option
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data); //pass data to the query string
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // set return option
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // set the ssl verification to false
                
                $response = curl_exec($curl); // the http response
                
                curl_close($curl);

            }

            if (empty($response) || is_null($response)) {
                return false;
            }

            $json = json_decode($response);
            return $json->success;


        }else{
            return false;
        }
    }

}