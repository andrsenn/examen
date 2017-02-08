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
		<script type="text/javascript">
                    function Letras(e){
			tecla = e.keyCode || e.which; 
			base =/[a-zñ ]/; 
			teclado = String.fromCharCode(tecla).toLowerCase(); 
			return base.test(teclado); 
			}

		    function Numeros(e){
			tecla = e.keyCode || e.which; 
			base =/[0-9]/; 
			teclado = String.fromCharCode(tecla).toLowerCase(); 
			return base.test(teclado); 
			}
                </script>
    </head>
	<body> <br><br><br>
			<div class="container" id="contenedor">
					<center><h3>Registro Nuevo Cliente</h3></center><br>
				<?php $Action="../Controlador/Cliente.php?Cliente=1 & Accion=0"?>
				<form class="form-horizontal" action="<?php echo $Action; ?>" method="POST">
					<div class="form-group">
					    <label class="col-sm-3 control-label">DNI Cliente</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="dni" onkeypress="return Numeros(event)" required maxlength="8" minlength="8">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Nombre</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="nombre" onkeypress="return Letras(event)" required>
					    </div>
					</div>
				  	<div class="form-group">
					    <label class="col-sm-3 control-label">Apellidos</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="apellidos" onkeypress="return Letras(event)" required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Direccion</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="direccion" onkeypress="return Letras(event)" required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Telefono</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="telefono" onkeypress="return Numeros(event)"  required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Fecha Nacimiento </label>
					    <div class="col-sm-9">
					      <input type="date" class="form-control" name="fechanacimiento" max="<?php echo date('Y-m-d');?>" required>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Correo</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="correo" required>
					    </div>
					</div>
					<div class="form-group">
					    <center>
					    	<button type="submit" class="btn btn-success">Guardar</button>
					    	<button type="button" class="btn btn-danger" onclick="window.location='../Controlador/Cliente.php'">Cancelar</button>
					    </center>
					</div>
				</form>
			</div>
	</body>
</html>