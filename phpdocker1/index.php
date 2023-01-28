<?php

if(isset($_GET['ecg']) && isset($_GET['troponin'])){
	
	$ecg_value=intval($_GET['ecg']);
	$troponin_value=intval($_GET['troponin']);
	
	$outcome=$ecg_value*$troponin_value;
	
	echo $outcome;
	
}else{
	
}

?>