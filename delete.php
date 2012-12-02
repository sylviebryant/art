<?php
session_start();
	if(!isset($_SESSION['id'])){
    	header("Location: index.php");
	}
?>

<?php
include("config2.php");
echo $id;
$id = $_POST["photoid"];
//$id = "images/no.1354384139.jpg";
$test = @mysql_query("DELETE FROM gallery WHERE image='$id'");
//$test = mysql_query('DELETE FROM gallery where image= "images/mashup1.jpg"');
//$test = mysql_query('SELECT * FROM gallery where image= "images/masdfp1.jpg"');
if($test) echo ('<p>Author deleted successfully!</p>');
else echo ('<p>Error deleting author from database</p>');
echo $id;
echo ('<p> this is $id </p>');

//header('Location: http://www.google.com/');

?>