<?php


class ControllerAdmin {

public  static function formLoginSite() {

include_once ('veiwAdmin/formLogin.php');


}

//  форма авторизации админа

public static function loginAction() {

$login=modelAdmin::userAuthentication();
if(isset($login) and $login==true) {

include_once ('veiwAdmin/statAdmin.php');
}
else{
$_SESSION['errorString']='Неправильное имя пользователя или пароль';
include_once ('veiwAdmin/formLogin.php');
}
}


//  выход  из админ панели

public static  function logoutAction() {

modelAdmin::userLogout();

include_once ('veiwAdmin/formLogin.php');
}


// страница error404

public static function error404() {

include_once ('veiwAdmin/error404.php');
}


} //end class

?>
