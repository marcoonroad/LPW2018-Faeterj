
<?php
class Conexao {
	private $servername = "localhost";
	private $username = "u241162422_root";
	private $password = "lpw20182";
	private $dbname = "u241162422_lpw";
	private $con;
    public function __construct() {
		try{
		$this->con = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname,
		  $this->username,
			$this->password);
		// Set the PDO error mode to exception
		$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			die("ERRO: Não foi possível conectar. " . $e->getMessage());
		}
	}
    public function getCon() {
        return $this->con;
    }
}
