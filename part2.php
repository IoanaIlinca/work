<?php

    echo "1.";
    $color = array('white', 'green', 'red', 'blue', 'black');

    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet,
    the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M.
    Nixon <br> <br>";

    echo "2.";

    $color = array('white', 'green', 'red');
    foreach($color as $value)
    {
        echo "$value, ";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    foreach($color as $value)
    {
        echo "$value <br> ";
    }

    echo "<br> 3. <br>";
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
            "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
            "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
            "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
            "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
            "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    ksort($ceu);
    foreach($ceu as $key => $value)
    {
        echo "The capital of $key is $value <br> ";
    }

    echo "<br> 4. <br>";
    $x = array(1, 2, 3, 4, 5);
    var_dump($x);
    echo "<br>";
    array_splice($x, 1, 1);
    var_dump($x);
    echo "<br>";

    echo "<br> 5. <br>";
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo reset($color) . "<br>";

    echo "<br> 6. <br>";
    $string = file_get_contents("6.json");

    function parseArray($arr)
    {
        foreach($arr as $key => $value)
        {
            if(is_array($value))
            {
                parseArray($value);
            }
            else
            {
                echo "$key: $value <br> ";
            }

        }
    }
    parseArray(json_decode($string, true));


    echo "<br> 7. <br>";
    $array = array(1, 2, 3, 4, 5);
    array_splice( $array, 2, 0, "$");
    foreach($array as $value)
    {
        echo "$value ";
    }

    echo "<br> <br> 8. <br>";
    $array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($array);
    foreach($array as $key => $value)
    {
        echo "$key => $value, ";
    }
    echo "<br>";
    ksort($array);
    foreach($array as $key => $value)
    {
        echo "$key => $value, ";
    }
    echo "<br>";
    arsort($array);
    foreach($array as $key => $value)
    {
        echo "$key => $value, ";
    }
    echo "<br>";
    krsort($array);
    foreach($array as $key => $value)
    {
        echo "$key => $value, ";
    }
    echo "<br>";


    echo "<br> 9. <br>";
    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
        62, 62, 65, 64, 68, 73, 75, 79, 73);

    $temperatures = array_unique($temperatures);
    sort($temperatures);
    $sum = 0;
    foreach($temperatures as $value)
        {
            $sum += $value;
        }
    $average = $sum / count($temperatures);
    echo "the average is $average <br>";
    for($index = 0; $index < 5; $index++)
    {
        echo "$temperatures[$index], ";
    }
    echo "<br>";

    for($index = 5; $index >= 1; $index--)
    {
        echo $temperatures[count($temperatures) - $index]. ", ";
    }
    echo "<br>";


    echo "<br> 10. <br>";
    function columns($myArray) {
        if (count($myArray) == 0)
            return array();
        else if (count($myArray) == 1)
            return array_chunk($myArray[0], 1);
        array_unshift($myArray, NULL);
        $transpose = call_user_func_array('array_map', $myArray);
        return array_map('array_filter', $transpose);
    }

    function bead_sort($myArray) {
        foreach ($myArray as $e)
            $poles []= array_fill(0, $e, 1);
        return array_map('count', columns(columns($poles)));
    }

    $array = array ( 0 => 5, 1 => 3, 2 => 1, 3 => 3, 4 => 8, 5 => 7, 6 => 4, 7 => 1, 8 => 1, 9 => 3 );

    echo implode(', ',bead_sort($array));

    echo "<br>";
    echo "<br> 11. <br>";
    $array1 = array(0 => array(77, 87), 1 => array(23, 45));
    $array2 = array(0 => "w3resource", 1 => "com");
    $final = array();
    $final[] = (array_merge(array($array2[0]), $array1[0]));
    $final[] = (array_merge(array($array2[1]), $array1[1]));
    var_dump($final);
    echo "<br>";
    echo "<br> 12. <br>";
    $array = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    foreach($array as $key => $value)
    {
        $array[$key] = strtolower($value);
    }
    var_dump($array);
    $array = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    foreach($array as $key => $value)
    {
        $array[$key] = strtoupper($value);
    }
    echo "<br>";
    var_dump($array);
    echo "<br>";
    echo "<br> 13. <br>";
    $number = 200;
    /*
    function checkEnd($number) {
         ($number >= 250) ? throw new Exception() : "true";
    }
    function divisile($number) {

         try {
            echo "$number, ";
            $number += 4;
            checkEnd($number);
            divisile($number);
         }
         catch (Exception) {
             return;
         }

    }
    divisile($number);*/
    $array = range(200, 250);
    $array = array_filter($array, function ($val) {
        return ($val % 4 === 0);
    });
    echo implode(", ", $array);
    echo "<br>";
    echo "<br> 14. <br>";
    $array = array ("abcd","abc","de","hjjj","g","wer");
    $shortest = 1000;
    $longest = -1;
    foreach($array as $value) {
        if (strlen($value) < $shortest)
        {
            $shortest = strlen($value);
        }
        if (strlen($value) > $longest)
        {
            $longest = strlen($value);
        }
    }
    echo "the shortest is shortest $shortest and the longest is $longest <br>";

    echo "<br> 15. <br>";
    for($counter = 0; $counter < 10; $counter++)
    {
        echo rand(11, 20) . ", ";
    }
    echo "<br> <br> 16. <br>";
    echo max(array_keys($array)) . "<br>";

    echo "<br> 17. <br>";
    function one() {
        return  PHP_INT_MIN;
    }
    echo one() . "<br>";
    echo "<br> 18. <br>";
    function floorWithPrecision($number, $decimals, $separator)
    {
        $hundreds = 1;
        for($counter = 0; $counter < $decimals; $counter++)
        {
            $hundreds *= 10;
        }
        return number_format(floor(($number * $hundreds))/$hundreds, $decimals, $separator);
    }

    echo floorWithPrecision(1.155, 2, ".") . "<br>";
    echo floorWithPrecision(100.25781, 4, "."). "<br>";
    echo floorWithPrecision(-2.9636, 3, "."). "<br>";
    echo "<br> 19. <br>";
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));
    echo $color["holes"][5] . "<br>";
    echo $color["color"]['a'] . "<br>";

    echo "<br><br> 40. <br>";
    $array = array(3, 2, 5, 1, 4, 6, 10, 7);
    sort($array);
    var_dump($array);


    echo "<br><br> 41. <br>";
    function findNotUnique($array) {
        $res = array();
        for($counter = 0; $counter < count(array_keys($array)); $counter++) {
            $index = array_keys($array)[$counter];
            $element = $array[$index];
            $copy = $array;
            array_splice($copy, $counter, 1);
            if(in_array($element, $copy)) {
                if (!in_array($element, $res)) {
                    $res[] = $element;
                }

            }

        }
        $array = $res;
        return $array;
    }
    $array =  array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third", 5, 4));
    $res = array();
    flattenArray($array, $res);

    print_r(findNotUnique($res));


    echo "<br><br> 42. <br>";
    function flattenAndUnique($array) {
        $res = array();
        flattenArray($array, $res);
        $array = $res;
        //var_dump($array);
        $res = array();
        for($counter = 0; $counter < count(array_keys($array)); $counter++) {
            $index = array_keys($array)[$counter];
            $element = $array[$index];
            $copy = $array;
            array_splice($copy, $counter, 1);
            if(!in_array($element, $copy)) {
                $res[] = $element;
            }

        }
        $array = $res;
        return $array;
    }

    $array =  array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third", 5, 4));
    print_r(flattenAndUnique($array));

    echo "<br><br> 43. <br>";
    function unique($list1, $list2) {
            $res = array();
         $array1 = explode(",", $list1);
         $array2 = explode(",", $list2);
         foreach ($array1 as $value)
         {
            if(!in_array($value, $array2)) {
                $res[] = $value;
            }
         }
        foreach ($array2 as $value)
        {
            if(!in_array($value, $array1)) {
                $res[] = $value;
            }
        }
        return implode(", ", $res);
    }
    $info = array('coffee', 'brown', 'caffeine');
    $info2 = array('milk', 'white', 'caffeine');

    // Listing all the variables
    $list = implode(",", $info);
    $list2 = implode(",", $info2);
    echo unique($list, $list2);

    echo "<br><br> 44. <br>";
    function removeDuplicate(&$array, $value) {
        $found = false;
        for($counter = 0; $counter < count(array_keys($array)); $counter++) {
            $index = array_keys($array)[$counter];
            if ($array[$index] === $value) {
                if (!$found) {
                    $found = true;
                }
                else {
                    array_splice($array, $counter, 1);
                }
            }
        }
    }
    $array = array("a"=>"red", "b"=>"green", "c"=>"blue", "green", "black", "green", "red");
    removeDuplicate($array, "green");
    print_r($array);

    echo "<br><br> 45. <br>";
    function compare($value1, $value2)
    {
        if ($value1 === $value2)
        {
            return 0;
        }
        return ($value1 > $value2) ? 1 : -1;
    }

    $array1=array("a"=>"red","b"=>"green","c"=>"blue");
    $array2=array("a"=>"blue","b"=>"black","e"=>"blue");

    $result = array_udiff($array1, $array2, "compare");
    print_r($result);

    echo "<br><br> 46. <br>";
    function checkStrings($array) : bool {
        foreach ($array as $value) {
            if(!is_string($value)) {
                return false;
            }
        }
        return true;
    }
    $array = array ( "a" => "Red", "b" => "Green", "c" => "White");
    echo checkStrings($array);

    echo "<br><br> 47. <br>";
    $array = array ( "a" => "Red", "b" => "Green", "c" => "White");
    function first($array)
    {
        return array(array_keys($array)[0], $array[array_keys($array)[0]]);
    }
    print_r(first($array));

    echo "<br><br> 48. <br>";
    $res = array();
    function union($array1, $array2, &$res) {
        $res = $array1;
        foreach ($array2 as $value) {
            if (!in_array($value, $res)) {
                $res[] = $value;
            }

        }
    }


    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third"));
    $color2 = array ( "color" => array ( "a" => "Blue", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 8, 6 ),
        "holes" => array ( "First", 5 => "Second", "Fourth"));
    $result = array();
    flattenArray($color, $result);
    $color = $result;
    $result = array();
    flattenArray($color2, $result);
    $color2 = $result;
    union($color, $color2, $res);
    var_dump($res);

    echo "<br><br> 49. <br>";
    $array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');

    function letKeys($key) {
        $array2 = array('c2', 'c4');
        return in_array($key, $array2);
    }
    print_r(array_filter($array, "letKeys", ARRAY_FILTER_USE_KEY));

    echo "<br><br> 50. <br>";
    $array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    echo $array[array_keys($array)[count(array_keys($array)) - 1]];

    echo "<br><br> 51. <br>";
    $array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');

    function getRidOfKeys($key) {
        $array2 = array('c2', 'c4');
        return !in_array($key, $array2);
    }
    print_r(array_filter($array, "getRidOfKeys", ARRAY_FILTER_USE_KEY));

    echo "<br><br> 52. <br>";
    function value2($val): bool
    {
        return $val === 2;
    }
    function exercise($array) {
        $result = array();
        flattenArray($array, $result);
        return array_filter($result, "value2");
    }
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White", 2),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 2, 5 => "Second", "Third"));
    print_r(exercise($color));

    echo "<br><br> 53. <br>";
    function value($val): bool
    {
        return $val !== 2;
    }
    $array = array(1, 2, 3, 4, 5);
    print_r(array_filter($array, "value"));

    echo "<br><br> 54. <br>";
    function removeWhitespaces(&$array) {
        for($counter = 0; $counter < count($array); $counter++) {
            if (ctype_space($array[$counter])) {
                array_splice($array, $counter, 1);
            }
        }
    }
    $array = array("A", "n", "a", " ", "a", "r", "e", " ", "m", "e", "r", "e", "\n");
    removeWhitespaces($array);
    var_dump($array);

    echo "<br><br> 55. <br>";
    function stringToArray($string, &$array) {
        for($counter = 0; $counter < strlen($string); $counter++) {
            if (ctype_space($string[$counter]) && $string[$counter] !== " ") {
                continue;
            }
            $array[] = $string[$counter];
        }
    }
    $result = [];
    stringToArray("Ana are mere\n si prune", $result);
    var_dump($result);

     echo "<br><br> 56. <br>";
     $result = array();
     $partial_result = array();
     for($counter = 0; $counter < 10; $counter++) {
         $partial_result[] = 10;
     }
    for($counter = 0; $counter < 10; $counter++) {
        $result[] = $partial_result;
    }
     var_dump($result);

    echo "<br><br> 57. <br>";
    $res = array();
    function flattenArray($arr, &$res)
    {
        foreach($arr as $key => $value)
        {
            if(is_array($value))
            {
                flattenArray($value, $res);
            }
            else
            {


                array_push($res, $value);

            }

        }
    }

    function difference($array1, $array2, &$result) {
        $copy = array();
        flattenArray($array1, $copy);
        $array1 = $copy;
        $copy = array();
        flattenArray($array2, $copy);
        $array2 = $copy;
        foreach ($array1 as $value) {
            if (!in_array($value, $array2)) {
                $result[] = $value;
            }
        }
        foreach ($array2 as $value) {
            if (!in_array($value, $array1)) {
                $result[] = $value;
            }
        }
    }
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));
    $color2 = array ( "color" => array ( "a" => "Blue", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 8, 6 ),
        "holes" => array ( "First", 5 => "Second", "Fourth"));


    difference($color, $color2, $res);
    var_dump($res);

    echo "<br><br> 58. <br>";
    var_dump(array_combine(array('x', 'y', 'y'), array(10, 20, 30)));

    echo "<br><br> 59. <br>";
    echo array_product(range(1, 20));
?>
