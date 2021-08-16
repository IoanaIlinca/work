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


    echo "<br> 11. <br>";
    $array1 = array(0 => array(77, 87), 1 => array(23, 45));
    $array2 = array(0 => "w3resource", 1 => "com");
    //var_dump(array_merge_recursive($array2, $array1));
    echo "<br> 12. <br>";
    echo "<br> 13. <br>";
    echo "<br> 14. <br>";
    echo "<br> 15. <br>";
    echo "<br> 16. <br>";
    echo "<br> 17. <br>";
    echo "<br> 18. <br>";
    echo "<br> 19. <br>";
?>
