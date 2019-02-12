<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function simpleGreet() {

    	$data = view('simplegreet');

    	return $data;
    }

    public function advancedGreet($name) {

    	return view('advancedgreet')->with(compact('name'));

    }

    public function bestGreet($name,$city) {

    	$user['name'] = $name;
    	$user['city'] = $city;

    	return view('bestgreet')->with(compact('user'));
    }

    private sum($num1,$num2) {

       return ($num1+$num2);
    }
}
