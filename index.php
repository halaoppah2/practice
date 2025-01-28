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

//associative array
$employee = [
    "name" => "Oppah",
    "age" => 32,
    "hometown" => "Mankessim",
    "address" => [
        "box" => "Box 125",
        "city" => "Cape Coast"
    ]
];

echo "{$employee['name']} <br>";
echo "{$employee["address"]["box"]} <br>";

//indexed array
$numbers = array(1,2,3,5,"jon");
echo $numbers[4];
echo "<br>";
echo $numbers[4] = "Kaw";
echo "<br>";
echo $numbers[] = 10;
echo "<br>";
print_r($numbers);
echo "<br>";

//looping through an array
foreach($numbers as $thisnumbers)
print $thisnumbers. "<br>";

//class exercise
echo "<u><b>Office Hours:</b></u> <br>";
$office_hours = array(
    "Monday" => "2:45 PM to 3:45 PM",
    "Tuesday" => "2:15 PM to 4:45 PM",
    "Wednesday" => "2:45 PM to 3:45 PM",
    "Thursday" => "2:15 PM to 4:15 PM",
    "Friday" => "By appointment");

    foreach($office_hours as $thishours => $time)
    print $thishours. " : ". $time. "<br>";

//functions

function myfuction(){

   // global $ival;
   static $ival = 0; //initial value
   $ival++;
   return($ival);

}
myfuction();

print "The value is " .myfuction() ."<br>";
print "The value is " .myfuction() ."<br>";

//array functions
echo "<u><b>New Office Hours:</b></u> <br>";
$new_office_hours = array(
    "Monday" => "2:45 PM to 3:45 PM",
    "Tuesday" => "2:15 PM to 4:45 PM",
    "Wednesday" => "2:45 PM to 3:45 PM",
    "Thursday" => "2:15 PM to 4:15 PM",
    "Friday" => "By appointment");

    //count
   echo "Number of elements is: ".count($new_office_hours) ."<br>";

   //index
   echo "Tuesday is at index ". array_key_exists("Tuesday", $new_office_hours) ."<br>";

   //echo array_keys($new_office_hours);

    //in_array
   $username = "Oppah";
   $user = array("Oppah", "Enoch");

   if (in_array($username, $user))
   print $username . " is a valid user" ."<br>";

   //search
   print array_search("Enoch", $user);

?> 

<!-- <script type="text/javascript" lang="javascript">

grade = prompt("Enter score");



</script> -->
