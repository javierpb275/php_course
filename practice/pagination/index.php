<?php 

try {

    $connection = new PDO(
        'mysql:host=localhost;dbname=practice_pagination',
        'root', 
        ''
    );

} catch(PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
}

//does the variable $page have a value? 
//true: page = the value that we pass in the url; 
//false: page = by default is 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$postPerPage = 5;

$beginnig = ($page < 1) ? ($page * $postPerPage - $postPerPage) : 0;

//SQL_CALC_FOUND_ROWS: let us know the amount of rows
$articles = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * 
FROM t_article LIMIT $beginnig, $postPerPage");

$articles->execute();
$articles = $articles->fetchAll();

//if there is no articles then redirect me to the main page
if (!$articles) {
    header('Location: http://localhost/php_course/practice/pagination/');//or Location: index.php
}

$totalArticles = $connection->query('SELECT FOUND_ROWS() AS total');
$totalArticles = $totalArticles->fetch()['total']; 



//ceil(): round a number
$numberPages = ceil($totalArticles / $postPerPage);

echo $numberPages;

require 'index.view.php';

?>