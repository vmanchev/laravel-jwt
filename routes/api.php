<?php

use Dingo\Api\Routing\Router;
use Illuminate\Http\Request;
use App\Http\Requests;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
  $api->group(['prefix' => 'auth'], function(Router $api) {
    $api->post('signup', 'App\\Api\\V1\\Controllers\\SignUpController@signUp');
    $api->post('login', 'App\\Api\\V1\\Controllers\\LoginController@login');

    $api->post('recovery', 'App\\Api\\V1\\Controllers\\ForgotPasswordController@sendResetEmail');
    $api->post('reset', 'App\\Api\\V1\\Controllers\\ResetPasswordController@resetPassword');
  });

  $api->group(['middleware' => 'jwt.auth'], function(Router $api) {
    $api->get('protected', function() {
      return response()->json([
                  'message' => 'Access to protected resources granted! You are seeing this text as you provided the token correctly.'
      ]);
    });

    $api->resource('books', 'App\Api\V1\Controllers\BookController');

  });

  $api->get('refresh', function(Request $Request) {
    $input=$Request->all();
        $token = $input['Token'];

   if(!$token){
    $Err['status']='error';
    $Err['msg']='There is no token';
    return response()
    ->json($Err, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE| JSON_PRETTY_PRINT);

    }

    try{
        $token = JWTAuth::refresh($token);

  }catch (JWTException $e) {
    $ERR['status']='error';
    $ERR['MSG']= "the was erorr on you token ";
    return response()
    ->json($ERR, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE| JSON_PRETTY_PRINT);

            }

     $Sucss['status']='success';
     $Sucss['token']= $token;
     return response()
    ->json($Sucss, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE| JSON_PRETTY_PRINT);

      });

  $api->get('hello', function() {
    return response()->json([
                'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
    ]);
  });
});
