<?php  
//Me creo una CLASE para usar de forma ESTATICA
Class Conexion{
	private static $host;
	private static $usuario;
	private static $clave;
	private static $base;
	private static $conn;

	public static function conectar(){
		self::$host=HOST;
		self::$usuario=USER;
		self::$clave=CLAVE;
		self::$base=BASE;
		self::$conn=new mysqli(self::$host, self::$usuario, self::$clave, self::$base);
		return self::$conn;
	}

	public static function desconectar(){
		self::$conn->close();
	}
}




?>