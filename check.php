<?php

// display a symptoms list

include('db.php');
$sql="SELECT * FROM ds_symptoms";
$result=$db->query($sql);

?>