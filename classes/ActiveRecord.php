<?php

abstract class ActiveRecord {
	
	public static function getAll($filter="") {
		$db=  Db::getConn();
		$res= $db->query("select * from ".static::$table." ".$filter); 
		$res->setFetchMode(PDO::FETCH_CLASS, 'Products');
		$output = array();
		while ($proizvod = $res->fetch()) 
		{	
		$output[]= $proizvod;
		}
		return $output;
	}

		
		public static function get($id) {
		$db=  Db::getConn();
		$res= $db->query("select * from ".static::$table." where " .static::$idProizvoda. " = ".$id);
		$res->setFetchMode(PDO::FETCH_CLASS, 'Products');
		return $res->fetch();
		}	
		
		public function update() {
			$q="update ".static::$table." set ";
			foreach($this as $k=>$v) {
				if($k==static::$idProizvoda) {
					continue;
				}
				if(is_numeric($v)) {
					$q.=$k."=".$v.",";
				}
				else {
					$q.=$k."='".$v."',";
				}	
			}
			$q=rtrim($q,",");
			$key=static::$idProizvoda;
			$q.= "where ".static::$idProizvoda." = ".$this->$key;
			$db=  Db::getConn();			
			$db->exec($q);
			
			}
		
		public function insert() {
			$fields= get_object_vars($this);
			$keys=array_keys($fields);
			$values=array_values($fields);
			$q="insert into ".static::$table." (";
			$q.=implode(", ",$keys);
			$q.=") values ('";
			$q.=implode("', '",$values);
			$q.="')";
			$db=  Db::getConn();			
			$db->exec($q);
			$key=static::$idProizvoda;
			$this->$key = $db->lastInsertId();
			}
			
			
		public static function del($id) {
			$db=  Db::getConn();	
			$q = "delete from ".static::$table. " where ".static::$idProizvoda." = ". $id;			
			$db->exec($q);
			
		}


	public static function numCol () {
		$db=  Db::getConn();
		$res= $db->query("select * from " . static::$table);
		print $res->columnCount();
		}
				
}		

			

