<html>
	<head>
	<title>������</title>
	</head>
	<body>
	<h1>������ ��� - while</h1>
		<table border='1'>
		<tr align='center'>
			<td>2��</td><td>3��</td><td>4��</td><td>5��</td>
			<td>6��</td><td>7��</td><td>8��</td><td>9��</td>
		</tr>
		
		<?
			$num1=1;
			
			while($num1<=9){
				echo "<tr align='center'>";
				
				$num2=2;
				
				while($num2<=9){
					$num3=$num2*$num1;
					echo "<td>".$num2." * ".$num1." = ".$num3."</td>";
					$num2++;
				}
				
				$num1++;
				
				echo "</tr>";
			}
		?>
	</body>
</html>