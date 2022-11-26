<?php
$texts = [
    "Hello, World!",
    "What are you doing?)",
    "How are you?)",
    "Where are you from?"
];
function reduce_array($n, $text){
    $n .= $text."-";
    return $n;
}
function map_to_lower($text){
    return strtolower($text);
}
function to_lower($array){
    $lower_case_array = array_map("map_to_lower", $array);
    return array_reduce($lower_case_array, "reduce_array", "");
}
$new_texts = to_lower($texts);
print(str_replace(")-", "", $new_texts));
