<?
$array = [6, 1, 2, 3, 4, 5, 6, 6];

$maxs = array_keys($array, max($array));

echo "<br> index " . $maxs[0] . "<br>";
echo "<br> data " . $array[$maxs[0]] . "<br>";
