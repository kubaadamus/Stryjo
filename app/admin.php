<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8">
	<title></title>
</head>


<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

		$user = 'jakubadamus';
		$DBpassword = 'Kubaadamus1991';
		$db = 'jakubadamus';
		$host = 'mysql.cba.pl';
		$port = 3360;

		$database = mysqli_connect($host,$user,$DBpassword,$db) OR die('Niedaradyyy' . mysqli_connect_error());


		$query2 = "SELECT * FROM visit_counter";

		$response = mysqli_query($database,$query2);

		$visitors = mysqli_num_rows($response);

		echo "Ilosc odwiedzających: ".$visitors."<br>";

		
		echo "Status podłączenia do bazy danych: ";
        if ($database) {
		  echo 'conected';
		} else {
		  echo 'not conected';
		}
?>




</body>



</html>

