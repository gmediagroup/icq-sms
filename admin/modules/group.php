<?

if(isset($_GET['delete'])){
		}
	}
}else{
		// Get coutries quatity
	    $read_temp = file('../../profit-bill_tariffs.csv');
	    $csv = array();
	    $countries_temp = array();
        foreach($read_temp as $i => $v){
        	if($i>0){
	        	$csv[($i-1)] = explode(';',trim($v));
	        	$countries_temp[($i-1)] = $csv[($i-1)][0];
	        }
        }
        $countries = array_unique($countries_temp);

		// New group file name
  		$ok = 0;
  		$all_letters = '0123456789abcdefghijklmnopqrstuvwxyz';
  		while($ok == 0){
	  		}

  		if(isset($_POST['group_id'])){$new_file_name = $_POST['group_id'];}

		// Save new group file
        $file = fopen('../../groups/'.$new_file_name.'.txt', "w");
        if(isset($_POST['name'])){
		fputs($file, trim($_POST['name']).'
--
');
        }else{
--
');
        }

        foreach($countries as $i => $v){
			if(isset($_POST['c'.$i])){
');
');
			}
		}
		fclose($file);
}
		// Return back
		print('
		<script>
			window.location.replace("../index.php?p=2");
		</script>
		');

?>