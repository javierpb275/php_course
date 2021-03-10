<?php
/*
if(file_exists('document.txt')) {
    echo "The file exists";
} else {
    echo "The file does not exist";
}
*/

//echo file_get_contents('document.txt');

//FILE_APPEND: add this text to the file
//file_put_contents('document.txt', "Hello World! \n", FILE_APPEND);
/*
file_put_contents('document.txt', '');

for ($i=1; $i <= 10; $i++) { 
    file_put_contents('document.txt', "$i \n", FILE_APPEND);
}
*/

//if you have for example a list of emails you can use this function
//to display them in an array and be able to access that email 
//in the position where it is
$file = file('document.txt');

/*
echo "<pre>";
print_r($file);
echo "</pre>";
*/

echo $file[7];

?>