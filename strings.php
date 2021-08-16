<?php
    echo "<br>1. Write a PHP script to : <br>
    a) transform a string all uppercase letters.<br>
    b) transform a string all lowercase letters.<br>
    c) make a string's first character uppercase.<br>
    d) make a string's first character of all the words uppercase.<br>";

    $toUpper = 'ana are mere';
    echo strtoupper("$toUpper") . "<br>";
    
    $toLower = 'ANA ARE MERE';
    echo strtolower("$toLower") . "<br>";

    $toUpperFirst = 'ana are mere';
    echo ucfirst("$toUpperFirst") . "<br>";
    
    $toUpperAll = 'ana are mere';
    echo ucwords("$toUpperAll") . "<br>";

    echo "<br> 2.Write a PHP script to split the following string.<br>
    Sample string : '082307'<br>
    Expected Output : 08:23:07<br>";

    $myString = "082307";
    echo wordwrap($myString , 2 , ':' , true ) . "<br>";

    echo "<br> 3. Write a PHP script to check if a string contains specific string?<br>
    Sample string : 'The quick brown fox jumps over the lazy dog.'<br>
    Check whether the said string contains the string 'jumps'.<br>";

    $myString = 'The quick brown fox jumps over the lazy dog.';
    
    if (str_contains($myString, 'jumps'))
    {
        echo 'true <br>';
    }

    echo "<br> 4. Write a PHP script to convert the value of a PHP variable to string. <br>";

    $myNumber = 22;
    $convertedToString = strval($myNumber);
    var_dump($convertedToString);

    echo "<br> <br> 5.Write a PHP script to extract the file name from the following string. <br>
    Sample String : 'www.example.com/public_html/index.php' <br>
    Expected Output : 'index.php' <br>";

    $myString = "www.example.com/public_html/index.php";
    $myArray = explode("/", $myString);
    echo end($myArray);


    echo "<br> <br> 6. Write a PHP script to extract the user name from the following email ID. <br>
    Sample String : 'rayy@example.com' <br>
    Expected Output : 'rayy' <br>";

    $myString = "rayy@example.com";
    $myArray = explode("@", $myString);
    echo $myArray[0];

    echo "<br> <br> 7. Write a PHP script to get the last three characters of a string. <br>
    Sample String : 'rayy@example.com' <br>
    Expected Output : 'com'<br>";

    $myString = "rayy@example.com";
    echo substr($myString, strlen($myString) - 3, 3);
    
    echo "<br> <br> 8. Write a PHP script to format values in currency style. <br>
    Sample values : value1 = 65.45, value2 = 104.35 <br>
    Expected Result : 169.80 <br>";

    $value1 = 65.45;
    $value2 = 104.35;
    echo number_format($value1 + $value2, 2);

   
    echo "<br> <br>9. Write a PHP script to generate simple random password [do not use rand() function] from a given
    string. <br>
    Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' <br>
    Note : Password length may be 6, 7, 8 etc. <br>";

    $myString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';;
    $shuffled = str_shuffle($myString);
    echo substr($shuffled, 0, 8);

    echo "<br> <br> 10. Write a PHP script to replace the first 'the' of the following string with 'That'.  <br>
    Sample date : 'the quick brown fox jumps over the lazy dog.'  <br>
    Expected Result : That quick brown fox jumps over the lazy dog. <br>";

    $myString = 'The quick brown fox jumps over the lazy dog.';
    $replaced = str_replace("The", "That", $myString);
    echo  $replaced;
    
    echo "<br> <br> 11. Write a PHP script to find first character that is different between two strings. <br>
    String1 : 'football' <br>
    String2 : 'footboll' <br>
    Expected Result : First difference between two strings at position 5: \"a\" vs \"o\" <br>";

    $string1 = "football";
    $string2 = "footboll";
    $pos = strspn($string1 ^ $string2, "\0");

    
    echo "First difference at position $pos: \"$string1[$pos]\" vs \"$string2[$pos]\"";

    echo "<br> <br> 12.Write a PHP script to extract the file name from the following string. <br>
    Sample String : 'www.example.com/public_html/index.php' <br>
    Expected Output : 'index' <br>";

    $myString = "www.example.com/public_html/index.php";
    $myArray = preg_split('/[.\s\/]/', $myString);
    echo $myArray[count($myArray)-2];
    
    echo "<br> <br> 13. Write a PHP script to print the next character of a specific character. <br>
    Sample character : 'a' <br>
    Expected Output : 'b' <br>
    Sample character : 'z' <br>
    Expected Output : 'a' <br>";

    $myChar = 'a';
    $nextChar = ++$myChar; 
    if (strlen($nextChar) > 1) { 
    $nextChar = $nextChar[0];
    }
    echo $nextChar;
    
    echo "<br> <br> 14. Write a PHP script to remove a part of a string from the beginning. <br>
    Sample string : 'rayy@example.com' <br>
    Expected Output : 'example.com' <br>";

    $myString = 'rayy@example.com';
    $myString = substr($myString, 5);
    echo $myString;
    
    echo "<br> <br> 15. Write a PHP script to get a hex dump of a string. <br>
    Sample string : 'rayy@example.com' <br>";

    $myString = 'rayy@example.com';
    echo bin2hex($myString);
    
    echo "<br> <br>16. Write a PHP script to insert a string at the specified position in a given string. <br>
    Original String : 'The brown fox' <br>
    Insert 'quick' between 'The' and 'brown'. <br>
    Expected Output : 'The quick brown fox' <br> ";

    $myString = 'The brown fox';
    $myString = substr_replace($myString, "quick ", 4, 0);
    echo $myString;
    
    echo "<br> <br>17. Write a PHP script to get the first word of a sentence. <br>
    Original String : 'The quick brown fox' <br>
    Expected Output : 'The' <br>";

    $myString = 'The quick brown fox';
    $myArray = explode(" ", $myString);
    echo $myArray[0];
    
    echo "<br> <br>18. Write a PHP script to remove all leading zeroes from a string.  <br>
    Original String : '000547023.24'  <br>
    Expected Output : '547023.24'     <br>";

    $myString = '000547023.24';
    echo ltrim($myString, "0");
    
    echo "<br> <br>19. Write a PHP script to remove part of a string.  <br>
    Original String : 'The quick brown fox jumps over the lazy dog' <br>
    Remove 'fox' from the above string. <br>
    Expected Output : 'The quick brown jumps over the lazy dog'    <br>";

    $myString = 'The quick brown fox jumps over the lazy dog';
    echo str_replace('fox ', '', $myString);

    echo "<br> <br>20. Write a PHP script to remove trailing slash from a string. <br>
    Original String : 'The quick brown fox jumps over the lazy dog///' <br>
    Expected Output : 'The quick brown fox jumps over the lazy dog'<br>";

    $myString = 'The quick brown fox jumps over the lazy dog///';
    echo rtrim($myString, "/");

    echo "<br> <br>21. Write a PHP script to get the characters after the last '/' in an url. <br>
    Sample URL : 'http://www.example.com/5478631' <br>
    Expected Output : '5478631' <br>";

    $myString = 'http://www.example.com/5478631';
    $myArray = explode("/", $myString);
    echo end($myArray);
    
    echo "<br> <br>22. Write a PHP script to replace multiple characters from the following string. <br>
    Sample String : '\"\1+2/3*2:2-3/4*3' <br>
    Expected Output : '1 2 3 2 2 3 4 3'<br>";

    $myString = '\"\1+2/3*2:2-3/4*3';
    echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $myString)."\n";

    echo "<br> <br>23. Write a PHP script to select first 5 words from the following string. <br>
    Sample String : 'The quick brown fox jumps over the lazy dog' <br>
    Expected Output : 'The quick brown fox jumps' <br>
    ";

    $myString = 'The quick brown fox jumps over the lazy dog';
    $myArray = explode(" ", $myString);
    echo implode(" ", array_slice($myArray, 0, 5));

    echo "<br> <br>24. Write a PHP script to remove comma(s) from the following numeric string. <br>
    Sample String : '2,543.12' <br>
    Expected Output : 2543.12    <br>";

    $myString = '2,543.12';
    echo str_replace(',', '', $myString);

    echo "<br> <br>25. Write a PHP script to print letters from 'a' to 'z'. <br>
    Expected Result : abcdefghijklmnopqrstuvwxyz <br>";

    for($char = 'a'; $char < 'z'; $char++)
    {
        echo $char;
    }
    echo $char;

    echo '<br> <br 26.>What will display the next code: <br>
    $d = "Aoo"; <br>
    echo ++$d; <br>';

    echo 'Aop';
?>