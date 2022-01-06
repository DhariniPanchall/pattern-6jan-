<html>
	<body>
		<p>pattern printing</p>
		<?php
			$ptrn = "#";
			for($i = 1; $i <= 3; $i++)
			{
				for($j = 1; $j <= $i; $j++)	
				{
					for($k = 1; $k <= $j; $k++)
					{
						echo $ptrn;	
					}
					echo "<br>";
				}
				echo "<br>";
			}
      
		?>
	</body>
</html>