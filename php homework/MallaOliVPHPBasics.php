<?php
    $addOn = "again";
    $addOn2 = 'and again';
    $addOn3 = ' and again';
    echo "First Attempt: Hello World $addOn $addOn2 <br />";
    echo "Second Attempt: Hello World $addOn $addOn2{$addOn3}";
    echo "Third Attempt: "."{$addOn}"." {$addOn2}"."{$addOn3} <br /><hr />";
?>

<?php
    define("DaysInYear", 365);
    echo DaysInYear."<br /><hr />";
    define("DaysInYear", 235);
    echo DaysInYear."<br /><hr />";
?>

<?php
    $test1 = 3;
    $test2 = 3;
    settype($test1, "string");
    (string) $test2; 
    echo "Data Type test1: ".gettype($test1)."<br />";
    echo "Data Type test2: ".gettype($test2)."<br />";
?>

<?php
    $first = "The quick red fox";
    $second = "jumped over the laxy brown dog.";
    $third = $first;
    $fourth = $first . " " . $second;
    $fifth = "      " . "jumped over the lazy brown dog.";

    echo "Lower: " . strtolower($first) . "<br />";
    echo "Upper: " . strtoupper($second) . "<br />";
    echo "First Word: " . ucfirst($second) . "<br />";
    echo "All words: " . ucwords($second) . "<br />";
    echo "Trim: " . trim($fifth) . "<br />";
    echo "Replace: " . trim(str_replace("dog", "cat", $fifth)) . "<br />";
    echo "Length: " . strlen($first) . "<br />";
    echo "Substring: " . substr($second, 16, 4) . "<br />";
    echo "Find: " . strstr($second, "lazy") . "<br />";
    echo "Repeat: " . $first . str_repeat(" " . $second, 2) . "<br />";
    echo "The position of brown begins at index: " . strpos($fourth, "brown") . "<br />";
    echo "String Fragment: " . strchr($fourth, "z") . "<br />";
    echo "String comparison: " . strcmp($first, $third) . "<br />";
    echo "String comparison ignoring case: " . strcasecmp($first, strtoupper($third)) . "<br />";
?>

<?php
    echo "<hr />Type Juggling<br />";
    $count = "2 cats";
    echo "$count Data Type: " . gettype($count) . "<br />";
    $count += 3;
    echo "$count Data Type: " . gettype($count) . "<br />";
    $cats = "I have " . $count . " cats.";
    echo "$cats Data Type: " . gettype($cats) . "<br />";
    echo "<hr />Type Casting<br />";
    $count3 = $count;
    settype($count3, "integer");
    echo "Count 3: " . gettype($count3) . "<br />";
    $count4 = (string) $count3;
    echo "Count 3 Again: " . gettype($count3) . "<br />";
    echo "Count 4: " . gettype($count4) . "<br />";
?>

