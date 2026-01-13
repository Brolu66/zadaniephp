<?php
//Zadanie 1
function randomEmoji(){
	$x = rand(1,3);
	if($x == 1){
		return ":)";
	}
	elseif($x == 2){
		return ":D";
	}
	else
		return ":(";
}
print(randomEmoji());
echo "<br>";
//Zadanie 2
function cube($x){
	return $x**3;
}
print(cube(3));
echo "<br>";
//Zadanie 19
function indexOf($arr, $value) {
    foreach ($arr as $i => $v) {
        if ($v === $value) {
            return $i;
        }
    }
    return -1;
}
$x = [1,3,5];
print(indexOf($x, 3));
echo "<br>";
//Zadanie 11
function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}
print(sumArray($x));
echo "<br>";
//Zadanie 9
function triangleArea($a, $h){
	return 1/2*$a*$h;
}
print(triangleArea(5,3))
?>