<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once "Config/Database.php";
include_once "Objects/User.php";
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
$data = json_decode(file_get_contents("php://input" , true));
 
$user->login = $data->login;
$email_exists = $user->emailExists();
 
include_once "config/core.php";
require "libs/php-jwt/vendor/autoload.php";
include_once "libs/php-jwt/vendor/firebase/php-JWT/src/BeforeValidException.php";
include_once "libs/php-jwt/vendor/firebase/php-JWT/src/ExpiredException.php";
include_once "libs/php-jwt/vendor/firebase/php-JWT/src/SignatureInvalidException.php";
include_once "libs/php-jwt/vendor/firebase/php-JWT/src/JWT.php";
use \Firebase\JWT\JWT;
 
if ($email_exists && $data->mdp === $user->mdp) {
        // $secret_key = "AYBSUBUJDSJKSZLKEJNCXNJSX68XS5XSQK";
        // $issuer_claim = "apache"; // this can be the servername
        // $audience_claim = "THE_AUDIENCE";
        // $issuedat_claim = time(); // issued at
        // $notbefore_claim = $issuedat_claim + 10; //not before in seconds
        // $expire_claim = $issuedat_claim + 60; // expire time in seconds

    $token = array(
       "iss" => $iss,
       "aud" => $aud,
       "iat" => $iat,
       "nbf" => $nbf,
    //    "exp" => $expire_claim,
       "data" => array(
           "login" => $user->login,
           "mdp" => $user->mdp
       )
    );

    http_response_code(200);
 
    $jwt = JWT::encode($token, $key, 'HS256');
    echo json_encode(
        array(
            "message" => "login succeful",
            "jwt" => $jwt
        )
    );
}
 
else {
 
    http_response_code(401);

  echo json_encode(array("message" => "login failed"));
}
?>