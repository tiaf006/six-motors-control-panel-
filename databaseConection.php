<?php
$servername="localhost";
$username="root";
$password="";
$database_name="test";
$conn=mysqli_connect($servername,$username,$password,$database_name); ;

if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());

}
if(isset($_POST['save']))
{
//	$min = $_POST['arr'];
	$myRange = (int)$_POST['Engine1'];// demo//$myRange//Engine1 slider output
	$myRange2 = (int)$_POST['Engine2'];
	$myRange3 = (int)$_POST['Engine3'];
	$myRange4 = (int)$_POST['Engine4'];
	$myRange5 = (int)$_POST['Engine5'];
	$myRange6 = (int)$_POST['Engine6'];

	$sql_query = "INSERT INTO engines (Engine1, Engine2, Engine3, Engine4, Engine5, Engine6)
	VALUES ('$myRange','$myRange2','$myRange3','$myRange4','$myRange5','$myRange6')";
	if(mysqli_query($conn , $sql_query))//&&($numrows>0)
	{

		$query1 = "SELECT * FROM engines ORDER BY id DESC LIMIT 1";
		$result1 = mysqli_query($conn,$query1);
		while($rows = mysqli_fetch_assoc($result1)){

     echo (int)$rows['Engine1']," ";
     echo (int)$rows['Engine2']," ";
		 echo (int)$rows['Engine3']," ";
		 echo (int)$rows['Engine4']," ";
		 echo (int)$rows['Engine5']," ";
		 echo (int)$rows['Engine6']," ";

		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}


if(isset($_POST['start']))
{
	$sql_query = "INSERT INTO start ( start)
	VALUES ('on')";

	if(mysqli_query($conn , $sql_query))
	{
	$query = "SELECT * FROM start ORDER BY start DESC LIMIT 1";
	$result = mysqli_query($conn,$query);

		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['start'];


		}

		echo"<br>";
	echo "New Details Entry inserted to start table successfully !";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}

	mysqli_close($conn);



}
?>
