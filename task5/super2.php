<?php
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit;
    } else {
        echo "The entered URL is invalid. Please enter a valid URL starting with http:// or https://";
    }
} else {
    echo "No URL was entered.";
}
?>