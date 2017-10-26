<html>
	<head>
	<title>구구단</title>
	</head>
	<body>
	<h1>구구단 출력 - while</h1>
		<table border='1'>
		<tr align='center'>
			<td>2단</td><td>3단</td><td>4단</td><td>5단</td>
			<td>6단</td><td>7단</td><td>8단</td><td>9단</td>
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