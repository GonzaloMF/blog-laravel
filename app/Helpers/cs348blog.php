<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

/* If the slug from databse is equal to super_admin, that will return a true */
if(!function_exists('isSuperAdmin')){

    function isSuperAdmin(){

        /*$value = $request->session()->get('role_slug');

        if($value = 'super_admin'){
            return redirect('/');
        }*/
       return Session::get('role_slug') == 'super_admin';

    }
}
