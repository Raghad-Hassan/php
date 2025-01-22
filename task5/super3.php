<?php
if($_POST['hello'] == "+"){
    echo($_POST["num1"] + $_POST["num3"] );
}

if($_POST['hello'] == "-"){
    echo($_POST["num1"] - $_POST["num3"] );
}

if($_POST['hello'] == "*"){
    echo($_POST["num1"] * $_POST["num3"] );
}


if($_POST['hello'] == "/"){
    echo($_POST["num1"] / $_POST["num3"] );
}
?>