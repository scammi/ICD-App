<?php

$filename = 'icd10cm_order_2020.csv';

// The nested array to hold all the arrays
$the_big_array = [];

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE)
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 0, "$")) !== FALSE)
  {
    // Each individual array is being pushed into the nested array
    $data[1] = trim($data[1]);
    $the_big_array[] = $data;
  }

  // Close the file
  fclose($h);
}

// Display the code in a readable format
echo "<pre>";
var_dump($the_big_array);
echo "</pre>";
