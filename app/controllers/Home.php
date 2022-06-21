<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{

	public function index()
	{
		$this->home('home/index');
	}
	public function show ()
	{
		$data['row_show'] ="ini file app/controllers/index.php - show()"; 
		$this-> 
	}

}
