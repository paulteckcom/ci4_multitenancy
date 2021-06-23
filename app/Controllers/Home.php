<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		$db = db_connect();

		$builder = $db->table('users');
		$query = $builder->get();

		foreach ($query->getResult() as $row)
		{
		    echo $row->name;
		}

		//var_dump($GLOBALS['TENANT']);
	}
}
