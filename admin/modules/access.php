<?
	$access_data = file('access.txt');
	$user_founded=0;
	if(isset($_POST["user"]) && isset($_POST["pass"])){
			setcookie("user_id",trim($access_data[3]));
	}else{

	if(isset($_GET["logout"])){
  		$user_founded=0;
  		print('
		<script>
			window.location.replace("index.php");
		</script>
		');


?>