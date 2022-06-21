<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function home($view, $data = [])
	{
		require_once ROOT . "layouts/home.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}
