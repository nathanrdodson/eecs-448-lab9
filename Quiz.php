<?php 
$count = 0;
$a1 = $_POST["action1"];
$a1correct = "Coffee";
$count += ($a1 == $a1correct) ? 1 : 0;
$a2 = $_POST["action2"];
$a2correct = "India";
$count += ($a2 == $a2correct) ? 1 : 0;
$a3 = $_POST["action3"];
$a3correct = "Pound";
$count += ($a3 == $a3correct) ? 1 : 0;
$a4 = $_POST["action4"];
$a4correct = "Grimey";
$count += ($a4 == $a4correct) ? 1 : 0;
$a5 = $_POST["action5"];
$a5correct = "Campbell's";
$count += ($a5 == $a5correct) ? 1 : 0;

echo "<p>Brazil is the largest producer of...</p>You Answered: " . $a1 . "<br>Correct Answer: " . $a1correct ."<br>";
echo "<p>Which country is infamously known as the arch rival of Pakistan?</p>You Answered: " . $a2 . "<br>Correct Answer: " . $a2correct ."<br>";
echo "<p>What is the currency of the UK?</p>You Answered: " . $a3 . "<br>Correct Answer: " . $a3correct ."<br>";
echo "<p>Which is not a primary flavor?</p>You Answered: " . $a4 . "<br>Correct Answer: " . $a4correct ."<br>";
echo "<p>Which brand of soup feature in one of Andy Warhol's most famous pop art pieces?</p>You Answered: " . $a5 . "<br>Correct Answer: " . $a5correct ."<br>";
echo "<hr>";
echo "Total correct: " . $count . "/5<br>";
echo "Percent correct: " . ($count / 5)*100 . "%";

?>
