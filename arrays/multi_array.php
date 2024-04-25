$employees = array(
    array("name" => "John", "age" => 30, "position" => "Manager"),
    array("name" => "Alice", "age" => 25, "position" => "Developer"),
    array("name" => "Bob", "age" => 35, "position" => "Designer")
);

// Accessing elements
echo "Employee 1 name: " . $employees[0]["name"]; // Outputs: John

// Looping through array
foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . ", Age: " . $employee["age"] . ", Position: " . $employee["position"] . "<br>";
}

// Adding elements
$newEmployee = array("name" => "Emily", "age" => 28, "position" => "Analyst");
$employees[] = $newEmployee;

// Counting elements
echo "Number of employees: " . count($employees); // Outputs: 4
