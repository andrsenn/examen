<?php
	require_once 'Conexion.php';
	session_start();
	class Cliente_model{
	    private static $instancia;
	    private $dbh;
	 
	    private function __construct(){
	 		$this->dbh = Conexion::conectando();
	    }
	 
	    public static function conectar(){ 
	        if (!isset(self::$instancia)) {
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase; 
	        }
	 		return self::$instancia; 
	    }
            
            
            public function Mostrar(){	
			try {				
				$sql = "select *from cliente";
				$query = $this->dbh->prepare($sql);
				$query->execute(); $this->dbh = null;

				$Datos=array();
				while( $datos = $query->fetch()){
    				$Datos[]=$datos;	
    			}
				return $Datos;			
			}catch(PDOException $e){
				print "Error!: " . $e->getMessage();	
			}				
		}
                
                
             public function Guardar($dni,$nombre,$apellidos,$direccion,$telefono,$fecha,$correo){	
			try {				
				$sql = "insert into cliente(dni,nombre,apellidos,direccion,telefono,fechanacimiento,correo) values
				('".$dni."','".$nombre."','".$apellidos."','".$direccion."','".$telefono."','".$fecha."','".$correo."')";
				
				$query = $this->dbh->prepare($sql);
				$query->execute(); $this->dbh = null;		
			}catch(PDOException $e){
				print "Error!: " . $e->getMessage();	
			}				
		}   
		
		
		
		
		
	       

	    
	}
	
?>