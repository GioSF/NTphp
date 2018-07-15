<?php

include_once('IConnectInfo.php');

class UniversalConnect implements IConnectInfo{
    
	private static $servidor =IConnectInfo::HOST;
	private static $BD = IConnectInfo::DB;
	private static $login = IConnectInfo::LOGIN;
	private static $senha = IConnectInfo::SENHA;
	private static $conecta;
	
	public function MySQLConectar(){
            
		self::$conecta = mysqli_connect(self::$servidor, self::$login, self::$senha, self::$BD);
		if(self::$conecta){
                    //echo "Conectado com sucesso.<br/>";
		}
		elseif (mysqli_connect_error(self::$conecta)){
                    echo('Não foi possível conectar: '  . mysqli_connect_error() . "<br/>");
		}
                
		return self::$conecta;
	}
}
?>
