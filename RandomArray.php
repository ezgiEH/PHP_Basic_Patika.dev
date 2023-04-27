<?php 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function RandomArray($arr, $num){
    $newArr = array_filter($arr); // Clear Nulls
    $randomKeys = array_rand($newArr, $num); //randomly generated keys
    //Using the randomly generated keys as an index in the filtered array,
    $RandomArray = array_map(function($planet) use ($newArr){
        return $newArr[$planet];
    }, $randomKeys);

    return $RandomArray;
}


echo "<pre>";
print_r(RandomArray($planets, 2));
print_r(RandomArray($planets, 3));
print_r(RandomArray($planets, 2));
print_r(RandomArray($planets, 4));
print_r(RandomArray($planets, 5));
?>
