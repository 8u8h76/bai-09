<?php
/* First method to create array. */ 
$numbers = array( 1, 2, 3, 4, 5);

foreach( $numbers as $value ) {
    echo "Value is $value <br />";
}

/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers [4] = "five";

foreach( $numbers as $value) { echo "Value is $value <br />";
}
?>



<?php
    /* First method to associte create array. */
    $salaries = array(
        "mohammad" => 2000,
        "qadir" => 1000,
        "zara" => 500
    );
    echo "Salary of mohammad is ". $salaries['mohammad'] . "<br/>";
?>
<br/>

<?php
$marks = array(
    "mohammad" => array (
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
),
    "qadir" => array (
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
),
    "zara" => array (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
)
);
/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics :";
echo $marks['mohammad']['physics']  . "<br />";
?>

<br/>

<?php
$array = array( 
    'amzuni.com',
'Website học lập trình online'
);
echo count($array); // output: 2
?>

<br/>

<?php
$array = array( 
    'amzuni.com',
'Website học lập trình online'
);
print_r(array_pop($array));
?>

    