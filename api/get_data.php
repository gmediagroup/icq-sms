<?php
if(isset($_GET['message'])){
	foreach($orders_files as $i => $v){
		$orders_data = file($v);
		if(strcmp(trim($orders_data[0]),'sss0'.trim($message[1]))==0){
			echo("\n");
			echo(trim($orders_data[2]).'; Code: '.trim($orders_data[1]));
	}
}
?>