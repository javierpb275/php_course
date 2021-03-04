<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Sent through GET method";
} else {
    echo "Sent through POST method";
}

echo '<br>';

if(isset($_POST['submit-form'])) {

    echo "data sent correctly";

    echo '<br>';

    print_r($_POST['submit-form']);

}

?>