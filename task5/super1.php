<?php
if($_SERVER ['REQUEST_METHOD'] == "POST"){
    echo 'Data has been sent using POST.<br>';
    echo "Email" .htmlspecialchars($_REQUEST['email'])."<br>";
    echo "password".htmlspecialchars($_REQUEST['password'])."<br>";
}

elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
echo 'Data has been sent using Get .<br>';
echo "Email" .htmlspecialchars($_REQUEST['email'])."<br>";
echo "password".htmlspecialchars($_REQUEST['password'])."<br>";
    }
?>