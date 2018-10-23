<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";

}
    	$login = 'testLogin';
		$pass = 'testPass';
		//$ipaddress = $_SERVER['REMOTE_ADDR'];

		$user = 'jakubadamus';
		$DBpassword = 'Kubaadamus1991';
		$db = 'jakubadamus';
		$host = 'mysql.cba.pl';
		$port = 3360;

		function get_client_ip_env() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
				$ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
		 
			return $ipaddress;
		}

		$ipa = get_client_ip_env();

		$database = mysqli_connect($host,$user,$DBpassword,$db) OR die('Niedaradyyy' . mysqli_connect_error());

		$query = "INSERT INTO `visit_counter` (`date`, `ip`) VALUES (NOW(), '".$ipa."')";

		mysqli_query($database,$query);

		$query2 = "SELECT * FROM visit_counter";

		$response = mysqli_query($database,$query2);

		$visitors = mysqli_num_rows($response);

		echo $visitors;

        if ($database) {
		  echo 'conected';
		} else {
		  echo 'not conected';
		}
?>