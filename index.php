<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 39(PHP Loop & Conditional Statement)</title>
</head>
<body>
    
</body>
</html> -->

<?php
//  foreach loop 
    echo "foreach loop <br>";
     $indexArray = [34, 54, 76, 54];
     foreach($indexArray as $element){
        echo $element. "<br>";
     }

    //  while loop 
    echo "while loop <br>";
     $i= 0;
     
     while( $i<=3){
         echo $indexArray[$i]. "<br>";
         $i++;
    }    

     //  while loop 
    echo "do while loop <br>";
     $j = 0;

    do{
    echo $indexArray[$j]. "<br>";
    $j++;
    }

while($j<=3);

 //  while loop with h1 tag
 echo "do while loop h1 tag <br>";
 $j = 0;

do{
echo "<h1>".$indexArray[$j]."</h1>". "<br>";
$j++;
}

while($j<=3);

$marks = 90;

if($marks>=80){
    echo "The Grade is A+". "<br>";
}

else if($marks>=70){
    echo "The Grade is A". "<br>";
}
else if($marks>=60){
    echo "The Grade is A-". "<br>";
}
else if($marks>=50){
    echo "The Grade is B". "<br>";
}
else if($marks>=40){
    echo "The Grade is C". "<br>";
}
else if($marks>=33){
    echo "The Grade is D". "<br>";
}

else{
    echo "Failed". "<br>";
}
?>



