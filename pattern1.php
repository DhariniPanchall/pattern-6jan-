<html>
	<body>
		<p>pattern printing</p>
		<?php
			$ptrn = "*";
			for($i = 0; $i <= 3; $i++)
			{
				for($j = 0; $j <= $i; $j++)	
				{
					echo $ptrn;
				}
				echo "<br>";
			}
			for ($i = 5; $i >= 1; --$i) 
			{
      			for ($j = 1; $j <= $i; ++$j) 
      			{
         			printf("*");
      			}
      			echo "<br>";
      		}
      
		?>
	</body>
</html>