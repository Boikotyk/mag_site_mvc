<?
$id = $_POST['id'];
unset($_POST['id']);
if(Lib_Category::getInstance()->editCategory($id,$_POST))
	$response=array("msg"=>"Зміна категорії № $id ","status"=>true);
else
	$response=array("msg"=>"Не вдалося видалити категорію!","status"=>false);	
echo json_encode($response);