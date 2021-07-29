<?php

require_once "./config.php"; 

//-------------------------------------
$router=new Lib_Application; 
$member=$router->Run();

if(isset($member)) 
  foreach ($member as $key => $value)
	{
	 	$$key= $value; 
	}
require_once "./function.php";
require_once "./template/index.php";