<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
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

foreach ($students as $name => $grade) {
    echo $name . " - " . $grade . " : ";

    if ($grade >= 75) {
        echo "Passed";
    } else {
        echo "Failed";
    }

    echo "<br>";
}
?>

</body>
</html>