<?php 

$players = array("Sachin","Ganguly","Dravid","Kohli","Kumble","Jadeja","Dhawan","Bumrah","Sharma","Chahal");

echo "<center><table border='3' width=' 200' height ='100'>";
echo "<tr><th><h1>Players</h1></th></tr>";
for($i=0;$i<count($players);$i++)
{
    echo "<tr><td>".$players[$i]."</td></tr>";
}
echo "</table>";

?>
