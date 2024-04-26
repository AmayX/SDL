<?php>
$fruits = array("Apple", "Banana", "Orange", "Mango");

// Accessing elements
echo "First fruit: " . $fruits[0]; // Outputs: Apple

// Looping through array
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Adding elements
$fruits[] = "Grapes";

// Removing elements
unset($fruits[1]); // Removes Banana

// Counting elements
echo "Number of fruits: " . count($fruits); // Outputs: 4
