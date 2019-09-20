<?php 


class Visits{
	static public function get(){
		$filepath="../db.json";	
		$fp=fopen($filepath,'r');
		$contents = fread($fp, filesize($filepath));//read file  
		fclose($fp);//close file    

		return (json_decode($contents))->visitas;
	}

	static public function increase(){
		$filepath="../db.json";	
		$actual = self::get() + 1;
		$data = (object) array('visitas' => $actual);

		$fp = fopen($filepath, 'w');
		fwrite($fp, json_encode($data));
		fclose($fp);
		return true;
	}
}


 ?>