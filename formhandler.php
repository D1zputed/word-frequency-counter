<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $text = htmlspecialchars($_POST["inputedText"]);
    $sortBy = htmlspecialchars($_POST["sort"]);
    $wordLimit = htmlspecialchars($_POST["wordLimit"]);
}
echo $wordLimit + 1;