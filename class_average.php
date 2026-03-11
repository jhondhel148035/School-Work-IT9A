<!DOCTYPE html>
<html>
<head>
    <title>Class Average</title>
</head>
<body>

<?php
$students = [
    "Alice" => 85,
    "Bob" => 72,
    "Charlie" => 90,
    "Diana" => 67,
    "Ethan" => 78
];

$total = 0;
$count = 0;

foreach ($students as $name => $grade) {
    echo $name . " - " . $grade . "<br>";
    $total += $grade;
    $count++;
}

$average = $total / $count;

echo "<br>Total: " . $total . "<br>";
echo "Class Average: " . $average;
?>

</body>
</html>