<?php
 
/**
 * calculate total price of items in array
 * 
 * pass in array $items if function
 * loop each item in array and pass in the key "price"
 * to get their value
 * add each value to the output variable
 * return the output
*/
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];
function calculateTotalPrice (array $shoppingCart): float{
    $output = 0;
    foreach ($shoppingCart as $item) {
    $output += $item['price'];
    }
    return $output;
}
echo "The total price is " . calculateTotalPrice($items);
 




/**
 * Remove spaces from string then turn it lowercase
 * 
 * pass in string as parameter
 * remove space
 * convert to lowercase
 * return the output
*/
$string = "This is a poorly written program with little structure and readability.";
function removeSpaceThenConvertToLowercase(string $text): string{
    $output = strtolower(str_replace(' ', '', $text));

    return $output;
}
echo "<br>";
echo "\nModified string: " . removeSpaceThenConvertToLowercase($string);




/**
 * Check if number is even or odd
 * 
 * pass in int as parameter
 * use modulo operator and divide by 2 to check if there's remainder
 * pass in the value to the if statement
 * if the value is 0 then it is even
 * else: it is odd
 * return string that says wether it is odd or not
 */
function checkIfEvenOrOdd(int $number): string{
    $checkRem = $number % 2;
    if ($checkRem == 0) {
        return "\nThe number " . $number . " is even.";
    } else {
        return "\nThe number " . $number . " is odd.";
    }
}
$number = 42;
echo "<br>";
echo checkIfEvenOrOdd($number)
?>