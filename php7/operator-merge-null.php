<?php 

//$name = isset($_GET['name']) ? $_GET['name'] : 'so-and-so';

$name = $_GET['name'] ?? 'so-and-so';

echo $name;