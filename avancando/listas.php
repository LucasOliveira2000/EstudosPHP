<?php

$idadeList = [21, 23, 19, 25, 30 , 41, 18];

echo count($idadeList);
echo "".PHP_EOL;

for( $idade = 0; $idade < count($idadeList); $idade++){
    echo $idadeList[$idade].PHP_EOL;

}