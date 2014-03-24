<!DOCTYPE html>
<html>
	<title>Practica 6</title>
	<h4><p align=center>Practica 6</p></h4>
	<body>
		<table border="1"; align = "center";>
				<tr>
					<td></td>
					<td>Producto</td>
					<td>Precio</td>
				</tr>
				
				<tr>
					<td>1</td>
					<td align = "center";>
						<?php
							$prod1 = $_POST["producto1"];
							echo $prod1;
						?>
					</td>
					<td align = "center";>
						<?php
							$prec2 = $_POST["precio1"];
							echo $prec2;
						?>					
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td align = "center";>
						<?php
						$prod2 = $_POST["producto2"];
						echo $prod2;
					?>
					</td>
					<td align = "center";>
						<?php
						$prec2 = $_POST["precio2"];
						echo $prec2;
					?>					
					</td>
				</tr>

				<tr>
					<td>3</td>
					<td align = "center";>
						<?php
						$prod3 = $_POST["producto3"];
						echo $prod3;
					?>
					</td>
					<td align = "center";>
						<?php
						$prec3 = $_POST["precio3"];
						echo $prec3;
					?>
					</td>
				</tr>
		</table>
		
	</body>
</html>
