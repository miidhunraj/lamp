
<html>
<body>
<h2>Student Marks</h2>
<?php
$stdMarks = array(
    "nived" => array(
        "Java" => 28,
        "Php" => 38,
        "Networking" => 78
    ),
    "Midhun" => array(
        "Java" => 83,
        "Php" => 90,
        "Networking" => 82
    ),
    "Nandu" => array(
        "Java" => 89,
        "Php" => 70,
        "Networking" => 29 
    )
);
foreach ($stdMarks as $std => $subjectArray) {
    echo "Marks of $std:<br>";
    foreach ($subjectArray as $subject => $marks) {
        echo "$subject = $marks <br>";
    }
    echo "<br><br>";
}
?>
</body>
</html>
