<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/','LoginController');	
Route::resource('/Out','LogoutController');	
Route::group(['middleware'=>'login'],function(){
	
	Route::resource('/Users','Admin\UsersController');	
	Route::resource('/Article','Admin\ArticleController');	
    Route::controller('/Cates','Admin\CatesController');    
    Route::controller('/Goods','Admin\GoodsController');    
	Route::controller('/Tt','Admin\TtController');	

});

Route::controller('/Home/index','Home\IndexController');
Route::controller('/Home/details','Home\DetailsController');


Route::any('/', function()
{
    if(Request::session()->has('uid')){
        return redirect('/Users');
    }
    if (Request::getMethod() == 'POST')
    {        
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo '<script>alert("验证码错误");window.location.href="/"</script>';
        }
        else
        {
            $username = Request::input('username');
            $password = Request::input('password');
            $res = DB::select('select * from admin where username=?',[$username]);
            if(empty($res)){
                echo '<script>alert("用户名错误!");window.location.href="/"</script>';
            }
            if($password==$res[0]['password']){
                Request::session()->put(['uid'=>$res[0]['id']]);
                Request::session()->put(['name'=>$res[0]['username']]);
                echo '<script>alert("登录成功");window.location.href="/Users"</script>';
            }else{
                echo '<script>alert("抱歉，密码错误");window.location.href="/"</script>';
            }
            
        }
    }

   /* $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';*/

   return view('/login');
});