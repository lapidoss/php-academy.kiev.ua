<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=[];
$ru=[];


foreach ($arr as $key => $value) {
   array_push( $en, $key);
   array_push($ru, $value);

}

echo '</br>English:';
print_r($en);
echo '</br>Русский:';
print_r($ru);
?>
