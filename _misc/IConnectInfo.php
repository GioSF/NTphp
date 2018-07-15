<?php

//IConnectInfo.php

interface IConnectInfo{
    
	const HOST = "localhost";
	const LOGIN = "root";
	const SENHA = "";
	const DB = "sistemaNoticias";
	
	public function MySQLConectar();
}

?>
