<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

/* If the slug from databse is equal to super_admin, that will return a true */

if (!function_exists('isSuperAdmin')) {

    function isSuperAdmin()
    {
        return Session::get('role_slug') == 'super_admin';
    }
}
