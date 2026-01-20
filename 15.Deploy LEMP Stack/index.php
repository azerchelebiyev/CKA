<?php
// Fetch MySQL connection values from environment variables
$dbname = getenv('MYSQL_DATABASE');
$dbuser = getenv('MYSQL_USER');
$dbpass = getenv('MYSQL_PASSWORD');
$dbhost = getenv('MYSQL_HOST');

// Establish connection
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
    die("Unable to Connect to '$dbhost': " . mysqli_connect_error());
}

// Run test query
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($connect, $test_query);

if (!$result) {
    die("Error running query: " . mysqli_error($connect));
}

echo "Connected successfully to database '$dbname'";
?>
