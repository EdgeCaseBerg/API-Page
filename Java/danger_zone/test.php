<?php
//Danger Socket Test

//Send Text of "LON 91.12 LAT 40.78"
$host ="dangerzone.cems.uvm.edu";  
$hostport = 5480;  

$sock = stream_socket_client($host . ':' . $hostport,$errno,$errstr,10);
if(!$sock){
	echo $errstr;
}else{
	fwrite($sock, "LON 13 LAT 9 NUM 3\r");
	//while(!feof($sock)){
		$msg =  fgets($sock,1024);
	//	if($msg){
			echo $msg;
	//	}
	//	fclose($sock);
	//	$sock = stream_socket_client($host . ':' . $hostport,$errno,$errstr,10);
	//	fwrite($sock, "LON 91.12 LAT 40.78 NUM 3\r");
	//}
	
	fwrite($sock, "KILLSERVER0x0000");
	fclose($sock);
}


?>