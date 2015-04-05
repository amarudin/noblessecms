<?php

function isLogin()
{
    $valid=Validator::check(array(

    Cookie::get('email')=>'email|max:150|slashes',

    Cookie::get('password')=>'min:2|slashes'

    ));

    if(!$valid)
    {
        return false;
    }
       
    $username = Cookie::get('email');
    $password = Cookie::get('password');

    // if (!isset($username[1]) && !isset($password[1])) {
    //     return false;
    // }

    // $dbName=Multidb::renderDb('users');

    // $query = Database::query("select userid,nodeid,groupid from $dbName where email='$username' AND password='$password' AND is_admin='1'");

    // $numRows = Database::num_rows($query);

    // if((int)$numRows == 0)
    // {
    //     return false;      
    // }

    $loadUser=Users::get(array(
        'where'=>"where email='$username' AND password='$password' AND is_admin='1' AND status='1'"
        ));

    // die("where email='$username' AND password='$password' AND is_admin='1'");


    if(!isset($loadUser[0]['userid']))
    {
        return false;
    }

    // $row=Database::fetch_assoc($query);

    Session::make('groupid',$loadUser[0]['groupid']);    

    Session::make('userid',$loadUser[0]['userid']);

    return true;
}

function isUser($username, $password)
{
    $_REQUEST['email']=$username;
    
    $_REQUEST['password']=$password;
    
    $valid=Validator::make(array(

    'email'=>'email|max:150|slashes',

    'password'=>'min:2|slashes'

    ));

    if(!$valid)
    {
        return false;
    }

   
    $password = md5($password);

    // $dbName=Multidb::renderDb('users');

    // $query = Database::query("select userid,nodeid,groupid from $dbName where email='$username' AND password='$password' AND is_admin='1'");

    // $numRows = Database::num_rows($query);

    $loadUser=Users::get(array(
        'where'=>"where email='$username' AND password='$password' AND is_admin='1'"
        ));

    if (isset($loadUser[0]['userid'])) {  
//        Create cookie store login info,expires is 1 day

        // $row=Database::fetch_assoc($query);

        Cookie::make('email', $username, 8460);

        Cookie::make('password', $password, 8460);

        Session::make('groupid',$loadUser[0]['groupid']);

        Session::make('userid',$loadUser[0]['userid']);

        UserGroups::loadCaches();

        return true;
    }

    return false;

}

?>