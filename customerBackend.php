<html>
<head>
</head>

<?php 
$pass =  $_POST["password"];
echo "<p>Thank you for your purchase!</p>";
echo "<hr>";
echo "<p>Your newly-created password is: </p>" . $pass;
echo "<hr>";
echo "Reciept: <br>";
echo "<table>";
echo "<tr><th></th><th>Quantity</th><th>Cost</th><th>Subtotal</th></tr>";
	
$socks = $_POST["socks"];	
$shirts = $_POST["shirts"];
$shorts = $_POST["shorts"];
$ship = $_POST["shipping"];
$shiptype = ($ship == 50) ? "Overnight" : (($shiptype = 5) ? "3-day" : "7-day");

echo "<tr><td>Socks</td><td>" . $socks . "</td><td>$5.00</td><td>$" . ($socks*5) . ".00</td></tr>";
echo "<tr><td>Shirts</td><td>" . $shirts . "</td><td>$20.00</td><td>$" . ($shirts*20) . ".00</td></tr>";
echo "<tr><td>Shorts</td><td>" . $shorts . "</td><td>$30.00</td><td>$" . ($shorts*30) . ".00</td></tr>";
echo "<tr><td>Shipping</td><td colspan='2'>" . $shiptype . "</td><td>$" . $ship .".00</td></tr>";  
echo "<tr><th>Total</th><th colspan='3'>$" . (($socks*5) + ($shirts*20) + ($shorts*30) + $ship) . ".00</th></tr>"
?>

</body>
<style>

table,th,tr,td {
	border: 1px solid black;
}

</style>
</html>
