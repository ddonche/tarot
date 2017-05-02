<?php

class Reading {
	public function fetch_all() {
		global $pdo;
		
		$query = $pdo->prepare("SELECT * FROM readings");
		$query->execute();
		
		return $query->fetchAll();
	}
	
	public function fetch_data($id) {
		global $pdo;
		
		$query = $pdo->prepare("SELECT * FROM readings WHERE id = ?");
		$query->bindValue(1, $id);
		$query->execute();
		
		return $query->fetch();
	}
    
	public function fetch_count() {
	        global $pdo;
	        
	        $query = $pdo->prepare("SELECT COUNT(*) FROM readings");
	        $query->execute();
	        
	        return $query->fetch();
	}

}

?>