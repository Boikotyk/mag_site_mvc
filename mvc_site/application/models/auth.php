<?php
//модель авторизации
 class Application_Models_Auth extends Lib_DateBase
  {	  
	//проверка данных авторизации
	  function ValidData($login,$pass)
	  {

	    $sql = parent::query("SELECT * FROM `user` WHERE login='%s' and pass='%s'",$login,$pass);
	    if( parent::num_rows($sql))
		    { 
			$row=parent::fetch_assoc($sql);
			$_SESSION["Auth"]=true;  
			$_SESSION["User"]=$login;  
			$_SESSION["role"]=$row["role"];  
			} 
		else $_SESSION["Auth"]=false;  

		if (!$_SESSION["Auth"]){
			$msg="<em><span style='color:red'>Не правильнно ввели дані!</span></em>";
		}	
		else {
			$msg="<em><span style='color:green'>Все правильно!</span></em>";
			$unVisibleForm=true;
		}
		
		$result=array("unVisibleForm"=>$unVisibleForm,
						"userName"=>$login,
						"msg"=>$msg,
						"login"=>$login,
						"pass"=>$pass,);
		return $result;
		
	  }
  } 