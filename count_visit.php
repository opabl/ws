<?php

// Set the path to the counter file (modify if needed)
$counterFile = 'counter.txt';

// Read the current visit count
$visitCount = (int)@file_get_contents($counterFile);

// Increment the visit count
$visitCount++;

// Write the updated visit count back to the file
file_put_contents($counterFile, $visitCount);

// Echo the visit count
echo $visitCount;

?>
