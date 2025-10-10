<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php//2
    //echo "single line comment";
    /*echo "multiple line 
    comment"; */
    /** echo"documentation
      * comme
     * nt" */
    ?>
<?php
 echo "string value <br>";
 echo 65;
 echo "<br>";

 print("my name is emeline<br>");
 $p= 3.141;
 printf("the value of p is %.2f <br>",$p);

 $colors=array('red','blue','gray','yellow');
 print_r($colors);
    echo "<br>";

    $height=1.23;
    var_dump($height);
    echo "<br>";
    ?>

    <?php
  //valid valiable declaration for each case
    $name="emeline"; echo($name."<br>");
    $Name="emeline"; echo($Name."<br>");
    $_name="emeline"; echo($_name)."<br>";
    $name1="emeline"; echo($name1."<br>");
    $naMe="emeline"; echo($naMe."<br>");
    echo("<br>");
  //invalid variable declaration for each case    
    /*var$1name="emeline"; echo($1name."<br>");
    $na-me="emeline"; echo($na-me."<br>");
    $na@me="emeline"; echo($na@me."<br>");*/  

 //valid variable declaration by using var_dump()
    $age=20; var_dump($age); echo("<br>");  
    $weight=65.5; var_dump($weight); echo("<br>");

//invalid variable declaration by using var_dump()
    /*$1age=20; var_dump($1age); echo("<br>");
    $we!ght=65.5; var_dump($we!ght); echo("<br>");*/
    ?>

    <?php
    //5
    $x = 10;
    $y = 20;    
    function sumNumbers() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
     sumNumbers();
    echo "<b>\$GLOBALS:</b> Sum of x and y = " . $z . "<br><br>";
    ?>
<?php
//1. Arithmetic Operators
$a = 15;
$b = 4;
echo "$a + $b = " . ($a + $b) . "<br>";//Adds two numbers        
echo "$a - $b = " . ($a - $b) . "<br>";//Subtracts right operand from left  
echo "$a * $b = " . ($a * $b) . "<br>";//Multiplies two numbers 
echo "$a / $b = " . ($a / $b) . "<br>";//Divides left operand by right       
echo "$a % $b = " . ($a % $b) . "<br><br>"; //Remainder after division

//2. Assignment Operators
$c = 10;  
echo "c = $c<br>";//Assign values

$c += 5;
echo "c += 5 → $c<br>";//Add and assign
$c -= 5;
echo "c -= 5 → $c<br>";//Subtract and assign

$c *= 5;
echo "c *= 5 → $c<br>";//Multiply and assign
echo "<br>";

//3. Comparison Operators
$x = 16;
$y = "10";
echo "$x == $y : " . ($x == $y ? 'true' : 'false') . " <br>";
echo "$x != $y : " . ($x != $y ? 'true' :   'false') . "<br>";
?>
<?php
$i=0;
if($i>1){
    goto sub;
}
elseif($i<1){
    goto add;
}
else
echo"invalid";

add:
    echo $i+2;
    exit;
sub:
    echo $i-2;
    exit;
?>

</body>
</html>