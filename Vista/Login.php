<html lang="es">
    
 
    <body>
	<div style="height:80px;"></div>
	<div class="container" id="contenedor">
            <center><h3>Login LP4 - FISI UNSM</h3></center> <br>
	    <form class="form-horizontal" action="Controlador/Login.php" method="post">
                <div class="form-group">
                    <label class="col-md-4 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuario</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-4 control-label"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Contraseña</label>
                    <div class="col-md-8">
                       <input type="password" class="form-control" name="password">
                    </div>
                </div> <br>
                <div class="form-group">
                    <div class="col-md-12">
                        <center>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Entrar</button>
                        </center>
                    </div>
                </div> 
        </form>
    </body>
</html>
