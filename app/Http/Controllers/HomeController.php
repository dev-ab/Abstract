<?php

namespace App\Http\Controllers;

use Mews\Captcha\CaptchaServiceProvider;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function send() {
        require_once('recaptchalib.php');
        $privatekey = "6LcBeiETAAAAAEbW29gwCbFqUiVoMQcAMucrATEc";
        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

        if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            $feed = false;
        } else {
            // Your code here to handle a successful verification
            $feed = true;
        }
        return response()->json([$feed]);
    }

}
