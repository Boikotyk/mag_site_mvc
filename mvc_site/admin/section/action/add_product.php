<?
$model=new Application_Models_Product;	
if($id=$model->addProduct($_POST))
	$response=array("msg"=>"Товар створений № $id","status"=>true);
else
	$response=array("msg"=>"Не вдалося створити товар!","status"=>false);	
echo json_encode($response);
?>