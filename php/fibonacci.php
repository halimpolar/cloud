<html>
<body>

<?php
if ( $_POST['button'] == "" )
{
?>

	<H2> Fibonacci Number Load Test</H2>
    <form action="fibonacci.php" method="post">
        Calculate Series of Fibonacci Numbers to Stress CPU. 
        <br/>
        <br/>
        <input type="submit" name="button" value="Start Test">
    </form>

<?php
}
else
{
	$count = 0 ;
	$f1 = 0;
	$f2 = 1;
	while ($count < 999999999999999999999999999999999999999 )
	{
		$f3 = $f2 + $f1 ;
		$f1 = $f2 ;
		$f2 = $f3 ;
		$count = $count + 1;
	}
	echo "<H1>DONE!</H1>" ;
}


?>

</body>
</html>