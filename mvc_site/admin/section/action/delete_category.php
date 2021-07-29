<?
if($id=Lib_Category::getInstance()->delCategory($_POST['id']))
	$response=array("msg"=>"Видалена категорія № {$_POST['id']}","status"=>true);
else
	$response=array("msg"=>"Не вдалося видалити!","status"=>false);	
echo json_encode($response);