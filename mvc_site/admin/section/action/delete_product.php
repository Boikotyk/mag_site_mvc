<?
$model=new Application_Models_Product;	
if($model->deleteProduct($_POST['id']))
	$response=array("msg"=>"Видалений товар № {$_POST['id']}","status"=>true);
else
	$response=array("msg"=>"Не вдалося видалити товар!","status"=>false);	
echo json_encode($response);
?>