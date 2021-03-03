<?php 
$alex = array('phone' => '12343215532', 'age'=> '30', 
'surname'=> 'johnson', 'country' => 'USA');
echo $alex['age'] . '<br/>';
echo $alex['country'] . '<br/>';
echo $alex['surname'] . '<br/>';
echo $alex['phone'] . '<br/>';

$alex['phone'] = '1245643525';
echo "alex's phone is: " . $alex['phone'] . '<br/>';
?>