<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function login() {
        return view('login');
        $authKey = "f44cc6f735a968bd6937337ffa5804a7";
        $senderId = "aasawo";
        $route = "template";
        $mobileNumber =9691626878;
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => 'Test',//$message,
            'sender' => $senderId,
            'route' => $route
        );
		//print_r($postData);
		//die;
        $url = "http://sms.bulksmsserviceproviders.com/api/send_http.php";
        // reciver account to get a message
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS =>$postData

        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        echo "A";
        print_r(curl_close($ch));
    }
}
