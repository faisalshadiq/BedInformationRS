<?php
/**
 * Copyright © 2020 RS Sumber Hurip. All rights reserved. 
 * Name 			:  	Informasi TT
 * Description 		:	Aplikasi Display Tempat Tidur
**/

class DBConnection {
	/*Production*/
	protected $dbconnection;
	protected $host     = '192.168.1.29';
	protected $dbuser   = 'root';
	protected $dbpass   = '2011rssh';
	protected $dbname   = 'livedata';
	protected $dbport   = '3306';	
	

	public function __construct()
	{

	}


	//initializing to database
	public function dbConnect() {
		try {
			$this->dbconnection = new PDO("mysql:host=".$this->host.";
											port=".$this->dbport.";
											dbname=".$this->dbname.";
											charset=latin1",
											$this->dbuser,$this->dbpass,
											array(PDO::ATTR_PERSISTENT => true)
									);
			$this->dbconnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo "<h1>Can't connect to Database</h1> <br> 
					<h2>You can check your database connection and network information.</h2> <br>
				 ";
		}		
	}


}

?>