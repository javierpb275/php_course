<?php 

//parameter1: server; parameter2: user; parameter3: password
//or die: if there's no connection we will stop the execution of the page so it will not load any
//info that we don't wanna show
/*
$connection = mysql_connect('localhost', 'root', '') or die('unable to connect to db');

//parameter: name of db; parameter2: connection
mysql_select_db('test_console', $connection);

$results = mysql_query('SELECT * FROM t_users');

while(mysql_fetch_array($results)) {
    echo $row['a_name'];
    echo "<br>";
}
*/

/*
//FIRST ROW
$row = mysql_fetch_object($results);

echo $row->a_name;

//SECOND ROW
$row = mysql_fetch_object($results);

echo $row->a_name;
*/
?>