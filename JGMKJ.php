<?php
$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	
	$Applications = $json->result->parameters->Applications;
	switch ($Applications){
		case 'hi':
		$speech = "JGMKJ";
		break;
		default:
		$speech = "Sorry";
		break;
	}
	
$response = new \stdClass();
$response->speech = "";
$response->displayText = "";
$response->source = "webhook";
echo json_encode($response);
}

else{
	echo "Method Not Allowed";
}
?>

