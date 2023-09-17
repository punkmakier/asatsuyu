<?php
require_once 'FunctionClass.php';
$func = new FunctionClass;
// Get the JSON data sent from JavaScript
$jsonData = file_get_contents("php://input");

// Remove extra backslashes (doubly escaped)
$cleanedData = stripslashes($jsonData);

// Decode the JSON string into a PHP array
$data = json_decode($cleanedData, true); // Passing `true` to decode as an associative array
if ($data !== null) {
    // Check if `myCart` is an array
    if (isset($data['myCart']) && is_array($data['myCart'])) {
        $trans_id = $_COOKIE['transaction_id'];
        foreach ($data['myCart'] as $item) {

            $func->insertOrder($trans_id,$_COOKIE['email'],$item['id'],$item['name'],$item['price'],$item['quantity'],$item['image']);
        }
        echo "Success";
    } else {
        echo "Invalid JSON data: 'myCart' is not an array.";
    }
} else {
    echo "Invalid JSON data: Unable to decode.";
}
?>