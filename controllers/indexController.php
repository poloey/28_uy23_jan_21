<?php 

require 'models/indexModel.php';

$statement = $con->prepare('select * from teachers');
$statement->execute();
$teachers = $statement->fetchAll(PDO::FETCH_OBJ);


$fruits = [
  'apple', 
  'orange',
  'banana'
];
require 'views/indexView.php';

 ?>