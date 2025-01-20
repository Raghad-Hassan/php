<!-- Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.  
Expected Output: 1-2-3-4-5-6-7-8-9-10 -->

<?php
for ($i = 1 ; $i <= 10 ; $i++) {
    echo $i;
}if($i != 10){
echo "-";
}
?>

<!-- 2.Create a script using a for loop to add all the integers between 0 and 30 and display the total.  
 
Expected Output:  total as a number   -->
<?php
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "Total: " . $total;
?>

<!-- 3. Generate the following pattern using nested for loops
php
Copy code -->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= $i) {
            echo "A ";
        } else {
            echo chr(64 + $j) . " ";
        }
    }
    echo "\n";
}
?>

<!-- 4. Generate the following pattern using nested for loops
php
Copy code -->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= $i) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo "\n";
}
?>

<!-- 5. Generate the following pattern using nested for loops
php
Copy code -->
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }
    echo "\n";
}
?>

<!-- 6. Calculate and print the factorial of a number
php
Copy code -->
<?php
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo "Factorial: " . factorial(5);
?>

<!-- 7. Calculate and print the Fibonacci sequence
php
Copy code -->
<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;
    echo $a . ", " . $b . ", ";
    for ($i = 2; $i < $n; $i++) {
        $next = $a + $b;
        echo $next . ", ";
        $a = $b;
        $b = $next;
    }
}

fibonacci(10);
?>

<!-- 8. Count the "c" characters in the text "Orange Coding Academy"
php
Copy code -->
<?php
$text = "Orange Coding Academy";
$count = substr_count(strtolower($text), 'c');
echo "Count of 'c': " . $count;
?>

<!-- 9. Create a multiplication table using for loops
php
Copy code -->
<?php
echo "<table cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . $i . " * " . $j . " = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<!-- 10. FizzBuzz: Repeating integers from 1 to 50 with Fizz, Buzz, FizzBuzz
php
Copy code -->
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
?>

<!-- 11. Generate and display the first n lines of a Floyd triangle
php
Copy code -->
<?php
function floyd_triangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "\n";
    }
}

floyd_triangle(5);
?>

<!-- 12. Print a diamond-shaped pattern with letters
php
Copy code -->
<?php
function print_pattern() {
    $letters = range('A', 'E');
    
    // Upper part
    for ($i = 0; $i < count($letters); $i++) {
        echo str_repeat(" ", count($letters) - $i - 1);
        echo implode(" ", array_slice($letters, 0, $i + 1)) . "\n";
    }
    
    // Lower part
    for ($i = count($letters) - 2; $i >= 0; $i--) {
        echo str_repeat(" ", count($letters) - $i - 1);
        echo implode(" ", array_slice($letters, 0, $i + 1)) . "\n";
    }
}

print_pattern();
?>