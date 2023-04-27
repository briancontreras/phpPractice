<?php
include_once 'php.ini';

use Exception;
use MongoDB\Client;
use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://group3:HotelManager1@hotelmanagement.yblofwr.mongodb.net/?retryWrites=true&w=majority';

// Specify Stable API version 1
$apiVersion = new ServerApi(ServerApi::V1);

// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('sample_restaurants')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}



// $dbServername = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "hotels";

// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

