?>
<html>
	<body>
		<?php
			$prod1=100;
			$prod2=200;
			$prod3=300;
			$prod4=400;
			$prod5=500;
			define('iva', 0.16);
			$subTotal=$prod1+$prod2+$prod3+$prod4+$prod5;
			$todIva=$subTotal*iva;
			$total=$todIva+$subTotal;
		?>
		<table>
			<tr>
				<td>Prod1</td>
				<td><?php echo $prod1;?></td>
			</tr>
			<tr>
				<td>Prod2</td>
				<td><?php echo $prod2;?></td>
			</tr>
			<tr>
				<td>Prod3</td>
				<td><?php echo $prod3;?></td>
			</tr>
			<tr>
				<td>Prod4</td>
				<td><?php echo $prod4;?></td>
			</tr>
			<tr>
				<td>Prod5</td>
				<td><?php echo $prod5;?></td>
			</tr>
			<tr>
				<td>SubTotal</td>
				<td><?php echo $subTotal;?></td>
			</tr>
			<tr>
				<td>iva</td>
				<td><?php echo $todIva;?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php echo $total;?></td>
			</tr>
		</table>
	</body>
<?php
