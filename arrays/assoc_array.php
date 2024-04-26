<?php>
$person = array("name" => "John", "age" => 30, "city" => "New York");

// Accessing elements
echo "Name: " . $person["name"]; // Outputs: John

// Looping through array
foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}

// Adding elements
$person["gender"] = "Male";

// Removing elements
unset($person["age"]);

// Counting elements
echo "Number of properties: " . count($person); // Outputs: 3