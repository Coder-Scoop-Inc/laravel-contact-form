<?php

namespace Coderscoop\LaravelContact\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
		echo "HOWDY world!";
	}
	
	 public function store(Request $request)
    {
		echo "HOWDY world two!";
	}
}
