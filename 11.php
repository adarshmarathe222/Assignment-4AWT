<?php
     if($_POST)  
    {   
        $names = $_POST['item']; 
        $price = $_POST['price'];
        $nme = explode(',',$names);
        $x = count($nme);
        $prc = explode(',',$price);

        echo '<body><table>
            <tr>
                <th>Item Name</th>
		<th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    		echo "<tr>";
        	echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
    echo "</table>";
        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }
        echo 'Total : '.$total;
        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest Item is: '.$nme[$ky];
        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest Item is: '.$nme[$key];
}     
?>
<br>
<html>
<head>
<title>ITEM BILL</title>
</head>
<body>
<form method="post">
<table>
<tr>
	<th colspan="2">Item Store</th>
</tr>
<tr>
	<td>Enter the item names:</td>
	<td><input type="text" name="item" required></td>
</tr>
<tr>
	<td>Enter the item price:</td>
	<td><input type="text" name="price" required></td>
</tr>
<tr>
	<td><input type="submit" name="store" value="Store"></td>
	<td><input type="reset" name="" value="Reset">
			</td>
</tr>
</table>
</form>
</body>
</html>