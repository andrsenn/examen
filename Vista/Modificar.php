<html>
		<head>
			
			<style type="text/css">
				body{
	                background-color: #BDBDBD;
	            }
	            #contenedor{
	                width: 35%;
	                background-color: #F2F2F2;
	                border-radius: 10px;
	                margin: auto;
	                padding: 30px;
	            }
			</style>
		</head>
		<body> <br><br><br>
			<?php foreach ($cliente as $value){
				$id=$value['id_cliente'];$dni=$value['dni'];$nombre=$value['nombre'];
				$apellidos=$value['apellidos'];$direccion=$value['direccion'];$telefono=$value['telefono'];
				$fecha=$value['fechanacimiento'];$correo=$value['correo'];;
				}
			?>
			<div class="container" id="contenedor"> 
				<center><h3> Modificar Cliente</h3></center> <br>
				<?php $Action="../Controlador/Cliente.php?Cliente=1 & Accion=2" ?>
				<form class="form-horizontal" action="<?php echo $Action; ?>" method="POST">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					<div class="form-group">
					    <label class="col-sm-3 control-label">DNI Cliente</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="dni" value="<?php echo $dni;?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Nombre</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>">
					    </div>
					</div>
				  	<div class="form-group">
					    <label class="col-sm-3 control-label">Apellidos</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos;?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Direccion</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="direccion" value="<?php echo $direccion;?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Telefono</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="telefono" value="<?php echo $telefono;?>" required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Fecha Nacimiento</label>
					    <div class="col-sm-9">
					      <input type="date" class="form-control" name="fechanacimiento" value="<?php echo $fecha;?>" required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Correo</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="correo" value="<?php echo $correo;?>" required>
					    </div>
					</div>
					<div class="form-group">
					    <center>
					    	<button type="submit" class="btn btn-success">Modificar</button>
					    	<button type="button" class="btn btn-danger" onclick="window.location='../Controlador/Cliente.php'">Cancelar</button>
					    </center>
					</div>
				</form>
			</div>
		</body>
</html>