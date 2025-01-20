<!-- 1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number  -->

<?php
$number = 3 ; 
if($number <= 1){
echo $number . "is not a prime number.";
} else{
        $isPrime = true;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break; 
            }
        }
        if ($isPrime) {
            echo $number . " is a prime number.";
        } else {
            echo $number . " is not a prime number.";
        }
    }
?>

<!-- 2.	Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer -->

<?php
$text = "remove" ;
$raghad = strrev($text);
echo "Reversed String:" . $raghad;
?>


<!--3. Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->

<?php
$inputString = "Hallo World";
 if(ctype_lower($inputString)){
    echo "Your String is Ok";
 }else{
    echo "Your String contains uppercase letters or other characters";
 }
?>

<!-- 4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->
<?php

$x = 12;
$y = 10; 

echo "Before swap: x = $x, y = $y <br>";

// Swapping Operation
$x = $x ^ $y;
$y = $x ^ $y;
$x = $x ^ $y;
echo "After swap: x = $x, y = $y <br>"
?>

<!-- 5.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->

<!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number  -->

<?php
// دالة للتحقق مما إذا كان الرقم Armstrong
function isArmstrong($number) {
    // تحويل الرقم إلى سلسلة للحصول على الأرقام الفردية
    $numStr = (string)$number;
    $numLength = strlen($numStr);
    $sum = 0;

    // لكل رقم في الرقم الأصلي، نحسب مكعبه ونضيفه إلى المجموع
    for ($i = 0; $i < $numLength; $i++) {
        // نحصل على الرقم الفردي
        $digit = (int)$numStr[$i];
        // نضيف مكعب الرقم إلى المجموع
        $sum += pow($digit, 3); // أو $digit * $digit * $digit
    }

    // إذا كان مجموع المكعبات يساوي الرقم الأصلي
    if ($sum == $number) {
        echo "$number is Armstrong Number\n";
    } else {
        echo "$number is not Armstrong Number\n";
    }
}

// اختبار الدالة
isArmstrong(407);  // النتيجة: 407 is Armstrong Number
isArmstrong(123);  // النتيجة: 123 is not Armstrong Number
?>


<!-- 7.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome  -->
<?php
// دالة للتحقق مما إذا كانت الجملة Palindrome
function isPalindrome($string) {
    // إزالة الفراغات والفواصل وتحويل الحروف إلى حروف صغيرة
    $string = strtolower(preg_replace("/[^a-z0-9]/", "", $string));

    // عكس السلسلة
    $reversedString = strrev($string);

    // مقارنة السلسلة الأصلية مع العكس
    if ($string === $reversedString) {
        echo "Yes, it is a palindrome\n";
    } else {
        echo "No, it is not a palindrome\n";
    }
}

// اختبار الدالة
isPalindrome("Eva, can I see bees in a cave?"); // النتيجة: Yes, it is a palindrome
isPalindrome("Hello, world!");  // النتيجة: No, it is not a palindrome
?>


<!-- 8.	Write a PHP function to remove duplicates from an array ?

Sample Input:  

$array1 = array(2, 4, 7, 4, 8, 4);


Expected Output:

$array1 = array(2, 4, 7, 8); -->

<?php
// دالة لإزالة التكرار من المصفوفة
function removeDuplicates($array) {
    // استخدام الدالة array_unique لإزالة التكرارات
    return array_values(array_unique($array));
}

// اختبار الدالة
$array1 = array(2, 4, 7, 4, 8, 4);

// إزالة التكرارات
$array1 = removeDuplicates($array1);

// طباعة المصفوفة بعد إزالة التكرارات
print_r($array1);
?>
