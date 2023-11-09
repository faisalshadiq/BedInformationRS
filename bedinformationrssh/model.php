<?php
/**
 * Copyright © 2020 RS Sumber Hurip. All rights reserved. 
 * Name 			:  	Informasi TT
 * Description 		:	Aplikasi Display Tempat Tidur
**/

include(__DIR__ . '/connection.php');


class Model extends DBConnection {
	public function __construct() {
		$this->dbConnect();
	}

	/* Load bed information */	
	public function getBedInformation(){ 
		$db = $this->dbconnection;
		try {
		$stmt = $db->prepare("SELECT 
								koderuang,
								namaruang,
								kodekelas,
								namakelas,
								kapasitas,
								if(tersedia=0,'-',tersedia) AS tersedia,
								if(tersediapria=0,'-',tersediapria) AS tersediapria,
								if(tersediawanita=0,'-',tersediawanita) AS tersediawanita,
								if(tersediapriawanita=0,'-',tersediapriawanita) AS tersediapriawanita,
								(IF(kapasitas-tersedia=0,'-',kapasitas-tersedia)) AS dipakai  
							  FROM bed_available_bpjs ORDER BY kodekelas,namaruang");		
			
			$stmt->execute();
			$stat = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $stat;
			$this->connection = null;
		}
		catch(PDOException $ex) {
			$stat = $ex->getMessage();
			return $stat;
		}
	}	


}


?>