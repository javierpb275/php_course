<?php 

declare(strict_types=1);

//we can especified what type we wanna return 

function getAge() : int {
    $age = 23;
    return $age;
}

echo getAge();