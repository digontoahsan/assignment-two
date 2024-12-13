<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        $cookie_name = "access_token";
        $cookie_value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $http_only = true;

        return response($data, 200)->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $http_only);
    }
}
