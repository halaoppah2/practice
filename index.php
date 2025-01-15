<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPHP</title>

</head>

<body>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus id quasi atque distinctio magni enim architecto a repellendus illum totam, deserunt vero dolores laudantium. Autem iusto similique ex voluptate aliquid.</p>

<form method="post">
    Enter the score: <input type="number" name="grade">
    <button type="submit">Submit</button>
</form>



</body>

</html>

<?php

echo "<br>";

define("Welcome", "Welcome to PHP practice");
echo constant("Welcome");

echo "<br>";

$x = 5;
$y = 5;

$z = $x + $x;

echo $z;

echo "<br>";

echo "Oppah"."Enoch";

echo "<br>";

$hour = 12;
var_dump($hour);

echo "<br>";

$cars = array("Volva", "Range Rover", "Hyndai");
var_dump($cars);
//echo $cars;
echo "<br>";

print date("F jS, Y");

echo "<br>";

$g = 7;

echo $g++;
echo "<br>";
echo $g + 4;

echo "<br>";

$grade = 0;

// if($grade == 93)
//     print "Student's grade is A";
// elseif($grade > 89)
//     print "Student's grade is not A";
// else
//     print "Student did not take the exam";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = (int)$_POST["grade"]; // Retrieve and convert the input to an integer

    // Process the input using if statements
    if ($grade >= 80) {
        echo "Student's grade is A";
    } elseif ($grade >=75) {
        echo "Student's grade is B+";
    }elseif ($grade >=70){
        echo "Student's grade is B";
    }elseif ($grade >=65){
        echo "Student's grade is C+";
    }elseif ($grade >=60){
        echo "Student's grade is C";
    }elseif ($grade >=55){
        echo "Student's grade is D+";
    }elseif ($grade >=50){
        echo "Student's grade is D";
    }
     else {
        echo "Student Failed with grade E";
    }
}

// $count = 1;
// while($count < 5)
//     print "$count ";
//     $count ++;

echo "<br>";

for($count = 0; $count <= 5; $count++){

    echo "$count <br>";
}

?> 

<!-- <script type="text/javascript" lang="javascript">

grade = prompt("Enter score");



</script> -->
