<?php

    if(isset($_GET['operation'])){
      $x = $_GET['num1'];
      $y = $_GET['num2'];
      $op = $_GET['operation'];

        switch($op){
            case 'add' : $result = $x  + $y;
            break;
            case 'sub' : $result = $x  - $y;
            break;
            case 'pro' : $result = $x  * $y;
            break;
            case 'div' : $result = $x  / $y;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Operations</title>
</head>
<body>
<center>
<h2> Add , Sub ,Mul and Div</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <div>
        <label for="num1">Number1</label>
        <input type="number" name="num1" id="num1" value="<?= $x ?>">
    </div>
    <br>
    <div>
        <label for="num2">Number2</label>
        <input type="number" name="num2" id="num2" value="<?= $y ?>">
    </div>
    <br>
    <div>
        <label for="result">Result</label>
        <input type="number"  id="result" value="<?= $result ?>" disabled>
    </div>
    <br>

    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="pro" name="operation">
        <input type="submit" value="div" name="operation">
    
    
    </div>
    </center>
</body>
</html>