Armstrong Number:
<?php
// Set the number you want to check
$number = 153;  // You can change this to test another number

// Save the original number for comparison later
$original = $number;

// This will store the sum of cubes of digits
$sum = 0;

// Start loop: extract each digit one by one
while ($original != 0) {

    // Get the last digit using modulo operator
    $digit = $original % 10;

    // Cube the digit (since this is for 3-digit number, we cube it)
    $cube = $digit * $digit * $digit;

    // Add the cube to the running total
    $sum += $cube;

    // Remove the last digit from the number
    $original = (int)($original / 10);
}

// After the loop, check if the sum of cubes equals the original number
if ($sum == $number) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
?>


<!-- Palindrom number  -->

<?php
$number = 120; // You can test with any number
$originalNumber = $number; // Save original for comparison
$reversed = 0;

while ($number > 0) {
    $digit = $number % 10; // Get the last digit
    $reversed = ($reversed * 10) + $digit; // Append digit to reversed number
    $number = (int)($number / 10); // Remove last digit from number
}

if ($originalNumber === $reversed) {
    echo "$originalNumber is a palindrome.";
} else {
    echo "$originalNumber is not a palindrome.";
}
?>

<!-- Palindrom string  -->

<?php
// Step 1: Define the string
$string = "madam";

// Step 2: Reverse the string using strrev() function
$reversed = strrev($string);

// Step 3: Compare original and reversed strings
if ($string === $reversed) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>




<?php
// Input string
$string = "madam";

// Reverse the string manually
$reversed = "";
$length = strlen($string);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

// Compare original and reversed string
if ($string === $reversed) {
    echo "$string is a Palindrome.";
} else {
    echo "$string is NOT a Palindrome.";
}
?>


<!-- Fibonacci Sequence -->

<?php
$n = 10; // Number of terms
$a = 0;
$b = 1;

echo "Fibonacci Sequence:\n";
for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;

?>
<!-- Count Digits in a Number -->

$number = 123456;
$count = 0;

while ($number != 0) {
    $number = (int)($number / 10);
    $count++;
}

echo "The number of digits is: $count";




<!-- Celsius to Fahrenheit in PHP -->


$celsius = 30;

$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius°C = $fahrenheit°F";
// Output: 30°C = 86°F


<!-- Fahrenheit to Celsius in PHP -->

$fahrenheit = 86;

$celsius = ($fahrenheit - 32) * 5/9;

echo "$fahrenheit°F = $celsius°C";
// Output: 86°F = 30°C


<!-- Check If a Year Is a Leap Year -->


$year = 2024; // Input year

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year.\n";
} else {
    echo "$year is not a leap year.\n";
}


<!-- Sum of digit  -->
<?php
$number = 1234;
$sum = 0;
$original = $number;

while ($number > 0) {
    $digit = $number % 10;
    $sum += $digit;
    $number = (int)($number / 10);
}

echo "Sum of digits of $original is $sum.";
?>

<!-- Prime Number Program in PHP (Without Function) -->

<?php
$number = 13; // You can change this value to test other numbers

if ($number <= 1) {
    echo "$number is NOT a Prime number.";
} else {
    $isPrime = true;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number is a Prime number.";
    } else {
        echo "$number is NOT a Prime number.";
    }
}
?>



<!-- Count Digits in a Number -->

<?php
  $number = 123456;
$count = 0;

while ($number != 0) {
    $number = (int)($number / 10);
    $count++;
}

echo "The number of digits is: $count";
?>



<!-- Find Factorial -->
<?php

$number = 5; // Input number
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is $factorial";

?>


<!-- Check if a String is a Palindrome -->

<?php
$str = "madam";
$rev = strrev($str);

if ($str === $rev) {
    echo "$str is a Palindrome";
} else {
    echo "$str is NOT a Palindrome";
}
?>

<!-- Reverse a String (Manual Loop) -->

<?php

$string = "hello"; // Input string
$reversedString = "";

$i = 0;
while (isset($string[$i])) {
    $i++;
}

for ($j = $i - 1; $j >= 0; $j--) {
    $reversedString .= $string[$j];
}

echo "Reversed String: $reversedString";

?>
<!-- Check if a Number Is Odd or Even -->

<?php
$number = 4; // Input number

if ($number % 2 == 0) {
    echo "$number is even";
} else {
    echo "$number is odd";
}
?>


<!-- Swapping two variables without using a third variable  -->

<?php
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b\n";

// Swap using addition and subtraction
$a = $a + $b; // $a becomes 15
$b = $a - $b; // $b becomes 5 (original value of $a)
$a = $a - $b; // $a becomes 10 (original value of $b)

echo "After swapping: a = $a, b = $b\n";
?>
<!-- Recursion  -->
<!-- Sum of Digits Using Recursion -->

<?php
function sumOfDigits($n) {
    if ($n == 0) {
        return 0;
    }
    return ($n % 10) + sumOfDigits((int)($n / 10));
}

echo sumOfDigits(1234); // Output: 10
?>







<!-- Check If a Number Is Palindrome Using Recursion -->
<?php
function isPalindromeRecursive($number, $original = null, $reversed = 0) {
    if ($original === null) {
        $original = $number;
    }

    if ($number == 0) {
        return $original == $reversed;
    }

    $digit = $number % 10;
    $reversed = ($reversed * 10) + $digit;

    return isPalindromeRecursive((int)($number / 10), $original, $reversed);
}

// Example
$num = 121;
if (isPalindromeRecursive($num)) {
    echo "$num is a palindrome.";
} else {
    echo "$num is not a palindrome.";
}
?>


<!-- Find the Factorial of a Number Using Recursion -->

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

$number = 5; // Input number
echo "Factorial of $number is " . factorial($number) . "\n";
<!-- Find Factorial Using Recursion -->

<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5); // Output: 120
?>



<!-- Print Fibonacci Sequence Using Recursion
  -->

  function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$terms = 5;
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i) . " ";
}
// Output: 0 1 1 2 3



<!-- ARRAY  -->

<!-- Remove Duplicates from an Array -->

$array = [1, 2, 3, 2, 4, 5, 3, 6, 4, 7];
$uniqueArray = [];

foreach ($array as $value) {
    if (!in_array($value, $uniqueArray)) {
        $uniqueArray[] = $value;
    }
}

print_r($uniqueArray);

<!-- Find the Sum of All Elements in an Array -->
$array = [1, 2, 3, 4, 5];
$sum = 0;

foreach ($array as $value) {
    $sum += $value;
}

echo "Sum of all elements: $sum\n";


<!-- Find Largest and Smallest Element in an Array -->


<?php
$arr = [4, 1, 8, 3, 2];
$largest = $arr[0];
$smallest = $arr[0];

foreach ($arr as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
    if ($num < $smallest) {
        $smallest = $num;
    }
}

echo "Largest: $largest, Smallest: $smallest.";


?>


<!-- Sort an Array Without Built-in Functions -->
$array = [5, 2, 9, 1, 5, 6];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

print_r($array);



<!-- Find Common Elements in Two Arrays -->
<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$common = [];

foreach ($array1 as $value) {
    if (in_array($value, $array2)) {
        $common[] = $value;
    }
}

echo "Common elements: ";
print_r($common);
?>

<!-- Sum of Even and Odd Numbers in an Array -->

$array = [1, 2, 3, 4, 5, 6]; // Input array
$evenSum = 0;
$oddSum = 0;

for ($i = 0; isset($array[$i]); $i++) {
    if ($array[$i] % 2 == 0) {
        $evenSum += $array[$i];
    } else {
        $oddSum += $array[$i];
    }
}

echo "Sum of even numbers: $evenSum, Sum of odd numbers: $oddSum";


<!-- Find Largest and Smallest Element in an Array -->

$array = [3, 5, 1, 8, 2]; // Input array
$largest = $array[0];
$smallest = $array[0];

for ($i = 1; isset($array[$i]); $i++) {
    if ($array[$i] > $largest) {
        $largest = $array[$i];
    }
    if ($array[$i] < $smallest) {
        $smallest = $array[$i];
    }
}

echo "Largest: $largest, Smallest: $smallest";



<!-- ARRAY FUNCTIONS -->

<!-- count()

sort()

rsort()

ksort()

krsort()

in_array()

asort()

arsort()

array_key_exists()

array_keys()

array_reverse()

array_search()

array_unique()
array_slice()

array_splice()

array_map()

array_filter()

array_values()

array_push()

array_pop()

array_shift()

array_unshift()

array_merge() -->




<!-- STRING -->

<!-- 
strlen()

str_replace()

substr()

strtolower()

strtoupper()

str_word_count()

strrev()

strpos()

ucwords()

ucfirst()

lcfirst()

wordwrap()

trim()

strip_tags() -->


<!-- Remove Spaces from a Sentence in PHP -->

$sentence = "Hello World, I am learning PHP!";
$noSpaces = str_replace(' ', '', $sentence);

echo $noSpaces; // Output: HelloWorld,IamlearningPHP!




<?php
$input = "P H P   L o g i c";
$output = "";

for ($i = 0; $i < strlen($input); $i++) {
    if ($input[$i] != ' ') {
        $output .= $input[$i];
    }
}

echo "Original String: '$input'\n";
echo "Without Spaces: '$output'";
?>

<!-- Count Vowels in a String -->

<?php
$str = "PHP is awesome!";
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;

$str = strtolower($str);

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
        $count++;
    }
}

echo "Number of vowels: $count";
?>

<!-- Reverse a String -->

$string = "hello"; // Input string
$reversedString = "";

$i = 0;
while (isset($string[$i])) {
    $i++;
}

for ($j = $i - 1; $j >= 0; $j--) {
    $reversedString .= $string[$j];
}

echo "Reversed String: $reversedString";


<!-- PHP Program to Count Words in a String -->

<?php
$string = "  Learn PHP with simple examples.  ";
$words = explode(" ", trim($string));
$filtered = array_filter($words); // remove empty elements
echo "Word count: " . count($filtered);
?>

<!-- Reverse a String (Using strrev) -->

<?php
$str = "hello";
$reversed = strrev($str);

echo "Reversed string: $reversed";

?>

<!-- Convert String to Number Built-in Functions -->

$string = "-12345"; // Input string

if (is_numeric($string)) {
    $number = (int)$string; // Convert string to integer
    echo "The number is: $number";
} else {
    echo "Invalid numeric string";
}



}




<!-- OTHERS FUNCTIONS -->
<!-- Other Useful Functions
isset() – Check if a variable is set

empty() – Check if a variable is empty

is_array() – Check if variable is array

explode() / implode() – String to array / array to string

json_encode() / json_decode() – Handle JSON

date() / time() – Work with date and time

include() / require() – File inclusion -->


<!-- Password Validation in PHP -->

$password = "MySecure@123";

if (
    strlen($password) >= 8 &&             // At least 8 characters
    preg_match("/[A-Z]/", $password) &&   // At least one uppercase letter
    preg_match("/[a-z]/", $password) &&   // At least one lowercase letter
    preg_match("/[0-9]/", $password) &&   // At least one number
    preg_match("/[\W]/", $password)       // At least one special character
) {
    echo "Strong Password";
} else {
    echo "Weak Password";
}
