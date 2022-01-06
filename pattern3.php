<html>
	<body>
		<p>pattern printing</p>
		<?php
			for($i=6;$i>=1;$i--)  
    		{  
        		for($j=1;$j<=$i-1;$j++)  
        		{  
          			for($k=1;$k<=1;$k++)  
        			{  
            			print_r("^");  
        			}  
        		}
        		echo "<br>";
        	}
        	for($i=1;$i<=6;$i++)  
    		{  
        		for($j=1;$j<=$i-1;$j++)  
        		{  
          			for($k=1;$k<=1;$k++)  
        			{  
            			print_r("^");  
        			}  
        		}
        		echo "<br>";
        	}
		?>
	</body>
</html>