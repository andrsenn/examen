<html>
		
		</head>
		<body> <br>
			<div class="container" id="contenedor">
				<center><h2>Bienvenido Usuario:<?php echo $_SESSION['usuario']; ?></h2></center>
				<div>
					<a href="Cliente.php?Cliente=1<?php echo '&'?>Accion=4">Nuevo Registro</a>
					<a href="../index.php" role="button">Cerrar Session</a>
				</div>	<br>
				<table>
					<thead>
						<th><center> # </center></th>
						<th><center> DNI </center></th>
						<th><center> Nombre </center></th>
						<th><center> Apellidos </center></th>
						<th><center> Direccion </center></th>
						<th><center> Accion </center></th>
					</thead>
					<tbody>
						<?php foreach ($usuario as $value){ ?>
							<tr>
								<td> <center> <?php echo $value['id_cliente']?> </center></td>
								<td> <center> <?php echo $value['dni']?> </center> </td>
								<td> <center> <?php echo $value['nombre']?> </center></td>
								<td> <center> <?php echo $value['apellidos']?> </center></td>
								<td> <center> <?php echo $value['direccion']?> </center></td>
								<td> <center> 
									<a href="Cliente.php?Cliente=<?php echo $value['id_cliente'];?><?php echo '&'?>Accion=3">Modificar</a>
									<a href="Cliente.php?Cliente=<?php echo $value['id_cliente'];?><?php echo '&'?>Accion=1">Eliminar</a>
								</center></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</body>
</html>

