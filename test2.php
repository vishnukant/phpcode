<?php
require('conn.php');
class test2{
	public function insert_data ($data){
		$key = array_keys($data);
		$val = array_values($data);
		$fields = "";
		$values = "";
		#-----------------------------Identify fields & rows for insertinto db----------------
		for($i=0;$i<count($data);$i++){
		$fields =$fields.$key[$i];
		$values = $values."'$val[$i]'";
			if($i<count($data)-1){
				$fields = $fields .',';
				$values = $values.',';
			}
		}
		mysql_query('insert into table1 ('.$fields.') values('.$values.')');
	}

}
?>