<?php 

class schools{
	
	private $connection, $crypto, $req;

	public function __construct($req='') {
		
		//Simple Page initialization
		chdir("../");
		$id = "addSchool.php";
		$connect = "true";
		/* INCLUDE THE ENCRYPTION CREDENTIAL SETTER PAGE */
		include 'crypt.php';
		
		/*Initialize aLL imports*/
		include 'r_main.php';
		
		$this->connection = $connection;
		$this->crypto	  = $crypto;
		$this->req 		  = $req;
		
		unset($connection);
		unset($crypto);
		unset ($req);
		chdir("code");
		
	}

/* The addSchool function  */
	public function addSchool(){
		
		if( gettype($this->req) == "array"){
			
			$fields 	= array('_index','_name','_addr','_tel','_email','_town','_candidates','_category','_status','_head');
			$expected 	=  array('_index','_name','_email', '_user_', '_key_' );
			
			//Check if all the expected values are filled in
			foreach( $expected as $k => $v ){
				if($this->req[$v] == ""){
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the school ".str_replace('_', '',$this->req[$v]), "command"=>"" ) ) );
				}
			}
			
			
			/* Continue with the database insert if all the required fields are filled */
			
			//Generate an sql query 
			$query = "INSERT INTO schools (_index , _name , _addr , _tel , _email , _town , _candidates , _category ,  _status , _head ) VALUES (";
			foreach($fields as $k => $v){
				$query .= @$req[$v].",";
			}
			$query = rtrim($query, ',');
			$query .= " )";
			
			//Execute the Query
			$query  = $this->connection->query($query);
			if($query){
				
				$row = $this->connection->query("SELECT id FROM schools WHERE '_index'='".$this->req['_index']."' LIMIT 1 ");
				while($da = mysqli_fetch_array($row)){
					$id = $da['id'];
				}
				
				//Add the user credentials to the relevant database table
				$query = $this->connection->query("INSERT INTO users ( _user_, _key_, _email_, _inst_) VALUE ( '".$this->req['_user_']."', '".$this->req['_key_']."', '".$this->req['_email']."', '".$id."' ) ");

				if($query){
					return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Successfully added School ", "command"=>"" ) ) );
				}else{
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to associate the user account", "command"=>"" ) ) );
				}
				
				
			}else{
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops \n\r Failed to add school ", "command"=>"" ) ) );
			}
			
		//If the request variable is empty	
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Please provide the required details. ", "command"=>"" ) ) );
		}
		
	}
/* End of the addSchool function */	
	
/* Add student to database */
	public function addStudent(){
		
		if(gettype($this->req) == "array"){
			
			$fields 	= array('_school_index', '_candidate_index', '_kcpe_index', '_year', '_subjects', '_is_candidate');
			$required 	= array('_school_index', '_candidate_index', '_kcpe_index', '_year', '_sub1', '_sub2', '_sub3', '_sub4', '_sub5', '_sub6', '_sub7', '_');
			
			//Check if all the expected values are filled in
			foreach( $expected as $k => $v ){
				if($this->req[$v] == ""){
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the s tudent".str_replace('_', ' ',$this->req[$v]), "command"=>"" ) ) );
				}
			}				
				
			/* Continue with the database insert if all the required fields are filled */
			
			
			
		//if the request variable is empty	
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Please provide the required details. ", "command"=>"" ) ) );
		}
		
	}	
/* End Of student addition database*/
	
	
}	
	

?>