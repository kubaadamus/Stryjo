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

		echo "<br>";

		if ($response->num_rows > 0) {
			// output data of each row
			$lp=1;
			$moje_odwiedziny=0;
			while($row = $response->fetch_assoc()) {
				if(strpos($row["ip"], "89.229.95.") === false)
				{
					echo $lp." | Date: " . $row["date"]. " - Ip: " . $row["ip"]."<br>";
					$lp+=1;
				}
				else{
					$moje_odwiedziny++;
				}

			}
		} else {
			echo "<br>0 results";
		}

		echo "W tym odwiedziny od Kuba: ".$moje_odwiedziny."<br/>";

		echo "Wiec stronę odwiedziło: ";
		echo $visitors-$moje_odwiedziny;
		echo " osób.";

?>




</body>



</html>

