<?php 

$month = 'January';
$boolean = false;

if ($boolean) {
    echo "true";
} else {
    echo "false";
}

if($month == 'January') {
    echo '<h1> January </h1>';
} else if($month == 'February') {
    echo '<h1> february </h1>';
} else {
    echo "It's neither January nor February";
}

?>