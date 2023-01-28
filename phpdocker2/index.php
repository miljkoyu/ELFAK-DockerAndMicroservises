<?php

if(isset($_GET['ckid'])) {
	
	$outcome=rand(0,100);
	
	if($outcome>50){
		echo "OK";
	}else{
		echo "NOT VALID";
	}
		
}else{
	echo "Kupac id not set";
}

?>