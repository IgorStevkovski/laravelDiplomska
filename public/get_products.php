<?php

try{
    $dbhandler = new PDO('mysql:host=localhost;dbname=laraveldiplomska_baza','root','igorsic');
}
catch (PDOException $e){
    echo $e->getMessage();
    die('Unable to connect DB!');
}

$name= $_POST['name'];
$sql="SELECT * FROM products WHERE name LIKE '".$name."%'";
$query = $dbhandler->query($sql);

$data=array();
while($row=$query->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row;
}

print json_encode($data);