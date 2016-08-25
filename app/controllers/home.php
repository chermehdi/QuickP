<?php
class home extends Controller
{
    public function index($name = ''){
	$en = new EnvParser;
	    $this->view('home/index', ['name' => $name]) ;
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
