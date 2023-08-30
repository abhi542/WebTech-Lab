<?php
$allstates ="Mississippi Alabama Texas Massachusetts Kansas";
$arr = explode(" ".$allstates);

$states = [
    array_filter($arr, fn($s)=> str_ends_with($s, "xas"))[0],
    array_filter($arr, fn($s)=> str_starts_with($s, "K") && str_ends_with($s, "s"))[0],
    array_filter($arr, fn($s)=> str_starts_with($s, "M") && str_ends_with($s, "s"))[0],
    array_filter($arr, fn($s)=> str_ends_with($s, "a"))[0],
];

foreach($states as $i=>$state){
    echo"{$i}->{$state} <br>";
}
?>