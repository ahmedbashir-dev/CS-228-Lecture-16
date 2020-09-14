<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<table class="table table-striped">
    <?php 
            for($i = 0; $i < 10; $i = $i+1){
                echo "<tr>";
                for($j = 0; $j<10; $j++){
                        echo "<td>".($i * $j)."</td>";
                }
                echo "</tr>";
            }
    ?>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- <?php 
  /*
    $a = 9;
    $b = 10;
    echo "<h1>". ($a+$b) . "</h1>";
    echo $a - $b."</br>";
    echo ($a * $b) ."</br>";
    echo ($b % $a);
    */
    $a = "Hello this is a variable of string type";
    echo "<h1>".$a."</h1>";

    $num1 = 2; 
    $num2 = 1;

    if($num1 > $num2){
        echo $num1." is greater than ".$num2;
    }
    elseif ($num2 > $num1) {
        echo $num2." is greater than ".$num1;
    }
?> -->







