<?php


// This is a single line comment
// echo "The comment will not display!";

/* this is 
a multi line comment
*/
// echo "<br>The multi line comment will not display!";

# This is another single line comment

#   VARIABLE 
//  Is container that store/save value(s)/data(s). Variable start with leading dollar sign ($), follows by either aphabet or underscore (_)
// $string = "Ibrahim Yusuf";

// echo $string;
# BIDMAS

// INCREAMENT
// $int = 14;
// $int--; 
// echo $int;



// $a = 12;
// $b = 158;
// $c = $a +$b;
// echo $c;

// $pi = pi()
// echo $pi;

// echo true;
// echo false;

// $int = 4;
// $name = "9";
// $surname = 9;

// echo $name === $surname;


// DIFFERENT BETWEEN DOUBLE QUOTES("") AND SINGLE QUOTES('')

// $descr = "My name is \"$name\" and my email is $email";
// echo $descr;

// CONCATINATION
// $descr = 'My name is '.$name.' and my email is '.$email;
// $detail = "My name is $name and my email is $email. I am a staff of lincoln college of science, management and technology. <br />";
// $detail .= "I am a nigerian by birth and I will to become Nigeria president!";
// echo $detail;
// $email = 'IBRAHIM@LINCOLN.EDU.NG';
// $name = "ibrAHim YUSuf omoTOSho <br />";
// echo ucwords(strtolower($name));

// echo strtolower($email);

#   ARRAY is a variable that can store multiple values;

// INDEX ARRAY
// $names = array("Ibrahim Yusuf", "Samuel Andrew", "Olisa Chioma", "Babu Ponon");



// echo $names[0].", ".$names[3];


// $ages = [24, 19, 16, 40];

//     print_r($ages);

// BIDMAS 

// echo 2 * (4 / 7) / 3


//  ARRAY gives room to save multiple values inside one variable
#   TYPES OF ARRAY (Index, Associative and Multi-dimensional array)

// INDEX ARRAY
// $names = [
//     "Ibrahim",
//     "Yusuf",
//     "Omotosho",
//     "Bukola"
// ];
// // $names = ['Anthony', 'Benjamin', 'Babu', "Sini"];
// $names[] = "Babu";
// $names[0] = "";
// array_push($names, "David");
// print_r($names);


// $numbers = array(20, 30, 40, 50);
// $numbers[2] = 60;
// $numbers[7] = 70;
// array_push($numbers, 100);
// print_r($numbers);


# //   ASSOCIATIVE ARRAY (key and value)
// $names = ['firstname' => 'Ibrahim', 'lastname'=>'Yusuf', 'othername'=>'Omotosho', 'email' => 'ibrahim@lincoln.edu.ng'];
// $names['lastname'] = "Bibi";

// print_r($names);

#   MULTI-DIMENSIONAL ARRAY
// $names = array(
//     ['fistname'=>'Ibrahim', 'lastname'=>'Yusuf', 'othername'=>'Omotosho'],
//     ['fistname'=>'Babu', 'lastname'=>'Ponon', 'othername'=>'Biliyaminu'],
//     ['fistname'=>'Deborah', 'lastname'=>'Okike', 'othername'=>'Chizoba']
// );
// $names[2]['fistname'] = "Gifted Girl";
// $names[] = ['fistname'=>'Adaugo', 'lastname'=>'Ibemere', 'othername' => 'Gift'];
// $popped = array_pop($names);
// echo $popped;

// print_r($names);


#   CONDITIONAL STATEMENT (if, if...else, if...elseif..else, and if...elseif...elseif)
// IF statement is used to execute block of code if a condition is true
// if ( condition ) { BLOCK OF CODE }

// $age = 35;

// if ($age < 3) {
//     echo "You are an infant!";
// } elseif ($age < 9 ) {
//     echo "You are a preteen!";
// } elseif ($age <= 16) {
//     echo "You are teenager!";
// } elseif ($age <= 24) {
//     echo "You're an adult!";
// } elseif ($age <= 34) {
//     echo "You're aged!";
// } elseif ($age > 34) {
//     echo "You're old, go and marry!";
// }


# LOOPS
/*
In PHP, just like any other programming language, loop are used to execute the same block of code for a specific period of time.

COMMON TYPES OF LOOP
FOR LOOP, WHILE LOOP, DO...WHILE
FOREACH (JS & C)
*/
# FOR LOOP
// Is used when the programmer know in advance how many times the block of code should be execute (FOR LOOP is the most common type of loop encounter in almost all programming language)
// for (initialization; condition; step) {BLOCK OF CODE}

// for ($i = 0; $i < 5; $i++) {
//     echo "This is for loop number $i <br />";
// }
// $names = ["Ibrahim", "Yusuf", "Omotosho", "Bukola"];

// for ($i=0; $i< count($names); $i++) {
//     echo $names[$i] . "<br />";
// }


// $clothes = [
//     ['type'=>'T-Shirt', 'color'=>'Onion', 'price'=>15],
//     ['type'=>'Palazo Trouser', 'color'=>'Black', 'price'=>35],
//     ['type'=>'Senator Wear', 'color'=>'Green', 'price'=>70],
//     ['type'=>'Mini Gown', 'color'=>'Black and White', 'price'=>20],
//     ['type'=>'Sweater', 'color'=>'Coat of many color', 'price'=>100]
// ];

// for ($i=0; $i < count($clothes); $i++) {
//     echo "This cloth is ".$clothes[$i]['type']. ", the color is ".$clothes[$i]['color']. " and the price is ".$clothes[$i]['price']. "<br />";
// }


#   WHILE LOOP
// WHILE LOOP is used when we want to execute a block of code as long as test expression is continue to be true

// $i=0; // INITIALIZATION
// while ($i < 5) {  // CONDITION
//     echo "This is while loop number $i <br />";
//     $i++;  //  STEP
// }



# DO...WHILE
// Is used when we want to execute a block of code at least once and then as long as a test expression is continue to be true

// $i=0;  //   INITIALIZATION
// do {
//     $i++;  // STEP
//     echo "This is a do while loop number $i <br />";
// } 
// while ($i < 6);  // CONDITION

// $clothes = [
//     ['type'=>'T-Shirt', 'color'=>'Onion', 'price'=>15],
//     ['type'=>'Palazo Trouser', 'color'=>'Black', 'price'=>35],
//     ['type'=>'Senator Wear', 'color'=>'Green', 'price'=>70],
//     ['type'=>'Mini Gown', 'color'=>'Black and White', 'price'=>20],
//     ['type'=>'Sweater', 'color'=>'Coat of many color', 'price'=>100]
// ];

// $i=0;
// do {
//     echo $clothes[$i]['type']." - ". $clothes[$i]['color']." - ". $clothes[$i]['price']."<br />"; 
//     $i++;
// } while ($i < count($clothes));


# FOREACH
// Is used to loop through arrays, using a logic where FOREACH pass, the array element is considered a value. The array pointer is advanced by one, so the next element can be processed.

$clothes = [
    ['type'=>'T-Shirt', 'color'=>'Onion', 'price'=>15],
    ['type'=>'Palazo Trouser', 'color'=>'Black', 'price'=>35],
    ['type'=>'Senator Wear', 'color'=>'Green', 'price'=>70],
    ['type'=>'Mini Gown', 'color'=>'Black and White', 'price'=>20],
    ['type'=>'Sweater', 'color'=>'Coat of many color', 'price'=>100]
];


// foreach ($clothes as $item) {
//     echo "This product is ".$item['type'].", the color is ".$item['color']." and the price is ".$item['price'].". <br />";
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <ol>
        <?php foreach ($clothes as $product) { ?>
            <li>This is <?php echo $product['type']; ?> the color is <?php echo $product['color']; ?> and the price is <?php echo $product['price']; ?></li>
        <?php } ?>
    </ol>


<script>
//   window.addEventListener("load", window.print());
</script>
</body>
</html> 