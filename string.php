<?php

$vowels = ['a', 'e', 'i', 'o', 'u'];
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $count=0;
    $lowerCaseStr = strtolower($string);
    foreach(str_split($lowerCaseStr) as $vletter){
if(in_array($vletter,$vowels)){
    $count++;

    
}
    }
    echo "Original String: $string, Vowel Count: $count, Reversed String: " . strrev($string) . "\n";

}


