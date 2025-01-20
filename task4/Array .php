<!-- 1.	Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from the $colors array. -->

<?php
$color = array("red" , "white" , "green");

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[0]} carpet, 
the {$color[2]} lawn, the {$color[1]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon" ,"br";

?>

<!-- 2.	$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
●	green
●	red
●	white -->

<?php
$colors = array("white", "green", "red");
echo "<ul> <li>$colors[1] </li>
<li>$colors[2]</li>
<li>$colors[0]</li>";
?>

<!-- 3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin  -->

<?php
$cities= array( "Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki",
"France" => "Paris", 
"Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana",
"Germany" => "Berlin", 
"Greece" => "Athens", 
"Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon",
 "Spain"=>"Madrid" ); 

asort($cities);

foreach ($cities as $country => $capital){
    echo "The capital of $country is $capital<br>";
}
?>

<!-- 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white -->

<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4] , "<br>";
?>

<!-- 5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5
  -->
  <?php
  $array = array (1 ,2 ,3 ,4 ,5);   
  $Location = 4;
  $new_Item =  "$";

  array_splice($array , $Location-1,0 , $new_Item );

echo implode(" ", $array),"<br>";


  ?>

<!-- 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->
<?php
$fruits = array("d" => "lemon", 
"a" => "orange", 
"b" => "banana",
 "c" => "apple");

 asort($fruits);

 foreach($fruits as $key => $value){
    echo "$key => $value<br>";
 }
?>

<!-- 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85, -->

<?php

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);

sort($temperatures);
$lowest_temperatures = array_slice($temperatures, 0, 5);

rsort($temperatures);
$highest_temperatures = array_slice($temperatures, 0, 5);

echo "Average Temperature is: " . number_format($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest_temperatures) . "<br>";
?>

<!-- 8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
) -->

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$merged_array = array_merge($array1 , $array2); 

echo "<pre>";
print_r($merged_array);
echo "</pre>";
?>

<!-- 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow");

Expected Output :

Array
(
    RED
    BLUE
    WHITE
    YELLOW

) -->

<?php
// دالة لتحويل جميع العناصر إلى أحرف كبيرة
function convertToUpper($array) {
    // استخدام array_map لتطبيق strtoupper على كل عنصر في المصفوفة
    return array_map('strtoupper', $array);
}

// تعريف المصفوفة
$colors = array("red", "blue", "white", "yellow");

// تحويل جميع العناصر إلى أحرف كبيرة
$colors_upper = convertToUpper($colors);

// طباعة المصفوفة الناتجة
echo "<pre>";
print_r($colors_upper);
echo "</pre>";
?>
<!-- 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :

Array
(
    red
    blue
    white
    yellow

    <?php
function convertToLower($array) {
    return array_map('strtolower', $array);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$colors_lower = convertToLower($colors);

echo "<pre>";
print_r($colors_lower);
echo "</pre>";
?>

) -->
<!-- 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248 -->
<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ",";
    }
}
?>



 
<!-- 12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4. -->
<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);
$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is $shortest. The longest array length is $longest.";
?>



 
 
<!-- 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12
  -->
  <?php
$range_start = 11;
$range_end = 20;
$numbers = [];

while (count($numbers) < 10) {
    $rand_num = rand($range_start, $range_end);
    if (!in_array($rand_num, $numbers)) {
        $numbers[] = $rand_num;
    }
}

echo implode(" ", $numbers);
?>



<!-- 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2 -->

<?php
$array1 = array(2, 0, 10, 12, 6);
$array1 = array_filter($array1, function($value) {
    return $value != 0;
});
echo min($array1);
?>



<!-- 15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 ) -->

<?php
$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo "<pre>";
print_r($array);
echo "</pre>";
?>



<!-- 16.	Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator
Sample Data : 
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
Expected Output :
1.15
100.2578
-2.964 -->

<?php
function floorDecimal($number, $precision, $separator) {
    return number_format($number, $precision, $separator, '');
}

echo floorDecimal(1.155, 2, ".");
echo "<br>";
echo floorDecimal(100.25781, 4, ".");
echo "<br>";
echo floorDecimal(-2.9636, 3, ".");
?>


<!-- 17.  Write a PHP script to merge two commas separated lists with unique values only.
Sample input: list1 = "4, 5, 6, 7";
  		list2 = "4, 5, 7, 8";
Sample output: 4, 5, 6, 7, 8 -->

<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);

$merged = array_merge($array1, $array2);
$merged_unique = array_unique($merged);

echo implode(", ", $merged_unique);
?>




<!-- 18. Write a PHP function to remove the duplicate entry from an array.
sample input = 4, 5, 6, 7, 4, 7, 8
sample Output = 4, 5, 6, 7, 8 -->

<!-- 19. Write a PHP Program to find if an array is a subset of another.
sample input:
array1 = 'a','1','2','3','4'
array2 = 'a','3'
	sample output:
array2 is a subset array from array1 -->
<?php
$array = array(4, 5, 6, 7, 4, 7, 8);
$unique_array = array_unique($array);
echo implode(", ", $unique_array);
?>


<!-- -------------19----------------- -->
<?php
$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

if (empty(array_diff($array2, $array1))) {
    echo "array2 is a subset array from array1";
} else {
    echo "array2 is not a subset array from array1";
}
?>