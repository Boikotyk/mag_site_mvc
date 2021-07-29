<?
$model=new Application_Models_Product;	
$id=$_POST['id'];

unset($_POST['url']);
unset($_POST['id']);



if($model->updateProduct($_POST,$id))
	$response=array("msg"=>"Товар змінений","status"=>true);
else
	$response=array("msg"=>"Не вдалося змінити параметри товару!","status"=>false);	
echo json_encode($response);


?>