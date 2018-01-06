<?php

include('skillinput.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>search-box</title>
</head>
<body>
	<form method="GET">
		<input type="text" id="s" name="s" placeholder="search...." >
		<input type="submit"  value="Go" >

	</form>

	<?php 

if(isset($_GET["s"])){
	$search = $_GET["s"];
}

if(!empty($search)){
   
  $sql_search = "SELECT id, user, skill1, skill2, skill3 FROM skillsearch 
  WHERE skill1 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		echo $row["user"];
	}
}


}

echo "<br>";


if(isset($_GET["s"])){
	$search = $_GET["s"];
}

if(!empty($search)){
   
  $sql_search = "SELECT id, user, skill1, skill2, skill3 FROM skillsearch 
  WHERE skill2 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		echo $row["user"];
	}
}


}


echo "<br>";

if(isset($_GET["s"])){
	$search = $_GET["s"];
}

if(!empty($search)){
   
  $sql_search = "SELECT id, user, skill1, skill2, skill3 FROM skillsearch 
  WHERE skill3 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		echo $row["user"];
	}
}


}


?>

</body>
</html>