<?php 

// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
	// * PATHINFO_FILENAME // Devuelve el nombre del archivo


//PATHINFO_BASENAME: name of the file with its extension
echo pathinfo('document.txt', PATHINFO_BASENAME);

echo '<br>';

//PATHINFO_FILENAME: name of the file 
echo pathinfo('document.txt', PATHINFO_FILENAME);

echo '<br>';

//PATHINFO_DIRNAME: name of the folder where the file is
echo pathinfo('parent/child/document.txt', PATHINFO_DIRNAME);

echo '<br>';

//PATHINFO_EXTENSION: the extension of the file (ex: txt)
echo pathinfo('parent/child/document.txt', PATHINFO_EXTENSION);

echo '<br>';

//glob: allows us to search for files inside a directory 
//by using some pattern
//GLOB_BRACE: all files that end in different extensions
$result = glob('a*.{php,html,txt}', GLOB_BRACE);

echo basename('folder1/folder2/file.php', '.php');

echo '<br>';

echo dirname('folder1/folder2/file.php');

echo '<br>';

print_r($result);


?>