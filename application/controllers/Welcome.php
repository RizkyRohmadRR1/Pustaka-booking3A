<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo"<h1> Perkenalan </h1>";
		echo"Nama  				:Rizky Rohmad Ramdhoni<br>
			Tempat Lahir 		:Kulon Progo<br>
			Tanggal Lahir 		:11 Agustus<br>
			Tempat Tinggal  	:Kulon Progo, DIY<br>
			Motivasi Kuliah 	:Mengembangkan pola pikir untuk lebih maju";
	}
}
