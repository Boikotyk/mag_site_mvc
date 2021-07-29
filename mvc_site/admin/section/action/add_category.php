<?

if($id=Lib_Category::getInstance()->addCategory($_POST))
	$response=array("msg"=>"Створена категорія № $id","status"=>true);
else
	$response=array("msg"=>"Невадалося створити категорію","status"=>false);	
echo json_encode($response);