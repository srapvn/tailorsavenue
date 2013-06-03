<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
   return "dbname=d8ki0i49v7lhbb host=ec2-23-21-130-168.compute-1.amazonaws.com port=5432 user=unwuohctyzsbld password=4a-J-WDOFHozX4aBvwMq0clDY5 sslmode=require"
}

# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}

$result = pg_query($db, "SELECT statement goes here");
?>
