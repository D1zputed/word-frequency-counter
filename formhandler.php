<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $text = htmlspecialchars($_POST["inputedText"]);
    $sortBy = htmlspecialchars($_POST["sort"]);
    $wordLimit = htmlspecialchars($_POST["wordLimit"]);
    $allWords = preg_split("/[\s,.]+/", $text);
    $lowerCase = array_map('strtolower', $allWords);
    $countWords = array_count_values($allWords);
    $commonWords = array("and", "And", "Or", "or", "the", "The", "in", "In");
    if($sortBy == "asc"){
        asort($countWords);
    }
    else{
        arsort($countWords);
    }
    $count = 0;
    foreach($countWords as $word => $occurence){
        if(in_array($word, $commonWords) == false){
            echo "<strong>$word</strong> mentioned $occurence time/s";
            $count += 1;
        }
        echo "<br>";
        if($count == $wordLimit){
            break;
        }
    }
    

}
else{
    header("Location: index.php");
}


