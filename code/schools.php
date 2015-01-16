<?php 
@session_start();
class schools{
	
	private $connection, $crypto, $req;

	public function __construct($req='') {
		
		//Simple Page initialization
		chdir("../");
		$id = "schools.php";
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

	function sanitize($value){
	
		return htmlspecialchars(str_replace("'","\'",$value));
	
	}
	
	
/* The addSchool function  */
	public function addSchool(){
		
		if( gettype($this->req) == "array"){
			
			$fields 	= array('_index','_name','_addr','_tel','_email','_town','_candidates','_category','_status','_head');
			$expected 	=  array('_index','_name','_email', '_user_', '_key_' );
			
			//Check if all the expected values are filled in
			foreach( $expected as $k => $v ){
				if(@$this->req[$v] == ""){
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the school ".str_replace('_', '',$v ), "command"=>"" ) ) );
				}
								
			}
			
			
			/* Continue with the database insert if all the required fields are filled */
			
			//Generate an sql query 
			$query = "INSERT INTO schools (_index , _name , _addr , _tel , _email , _town , _candidates , _category ,  _status , _head, _user ) VALUES (";
			foreach($fields as $k => $v){
				$query .= "'".@$this->sanitize($this->req[$v])."',";
			}
			$query .= "'".$this->sanitize($this->req['_user_'])."')";
						
			//Execute the Query
			$query  = $this->connection->query($query);
			if($query){
				/*
				$row = $this->connection->query("SELECT id FROM schools WHERE '_index'='".$this->req['_index']."' LIMIT 1 ");
				while($da = mysqli_fetch_array($row)){
					$id = $da['id'];
				}
				*/
				
				//get the AI value of the previous insert
				$ids = $this->connection->query(" SELECT id FROM schools WHERE _index='".$this->sanitize($this->req['_index'])."' LIMIT 1 ");
				
				while($i =  mysqli_fetch_array($ids)){
					$id = $i['id'];
				}
				
				//Add the user credentials to the relevant database table
				$query = $this->connection->query("INSERT INTO users ( _user_, _index_, _key_, _email_, _inst_) VALUES ( '".$this->sanitize($this->req['_user_'])."', '".$this->sanitize($this->req['_index'])."', '".$this->sanitize($this->crypto->makePass($this->req['_key_']))."', '".$this->sanitize($this->req['_email'])."', '".$id."' ) ");

				if($query){
					return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Successfully added School ", "command"=>"" ) ) );
				}else{
					if( $this->connection->query("DELETE FROM schools WHERE _index = '".$this->req['_index']."'") ){}
					
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to associate the user account<br><h4>That username  is already in use</h4>", "command"=>"" ) ) );
				}
				
				
			}else{
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops <br> Failed to add school <br> A school with the same index or email already exists!", "command"=>"" ) ) );
			}
			
		//If the request variable is empty	
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Please provide the required details so as to add a school. ", "command"=>"" ) ) );
		}
		
	}
/* End of the addSchool function */	
	
	
	
/* Add student to database */
	public function addStudent(){
		
		if(gettype($this->req) == "array"){
			
			$fields 	= array('_school_index', '_candidate_index', '_kcpe_index', '_year', '_subjects' , '_is_candidate' );
			$subjects   = array(  '_sub1', '_sub2', '_sub3', '_sub4', '_sub5', '_sub6', '_sub7', '_sub8', '_sub9', '_sub10', '_sub11', '_sub12' );
			$required 	= array('_school_index', '_candidate_index', '_kcpe_index', '_year', '_sub1', '_sub2', '_sub3', '_sub4', '_sub5', '_sub6', '_sub7');
			
//PACK THE SUBJECT DATA MANUALLY FOR THE FIRST THREE SUBJECTS [ " Mbu, to save on the banwidth!"]
$this->req['_sub1'] = "101"; 			$this->req['_sub2'] = "102"; 			$this->req['_sub3'] = "121";
			
			//Check if all the expected student basic values are filled in
			foreach( $required as $k => $v ){
				if(@$this->req[$v] == ""){
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the student ".@str_replace('_', ' ', $v), "command"=>"" ) ) );
				}
			}
			
			
			
			//pack the subject data into a query string for insertion into the 'student_data' table
			$query = "INSERT INTO student_data ( _sub1 , _sub2 , _sub3 , _sub4 , _sub5 , _sub6 , _sub7 , _sub8 , _sub9 , _sub10 , _sub11 , _sub12 , _school_id , _student_id , _student_class, actif ) VALUES ( " ;
			foreach ($subjects as $k => $v ){
				$query .= "'".@$this->sanitize($this->req[$v])."',";
			}
			$query .= "'".@$this->sanitize($this->req['_school_index'])."','".@$this->sanitize($this->req['_candidate_index'])."', '".@$this->sanitize($this->req['_is_candidate'])."', '1' )";
			//Process the database insert  
			$query = $this->connection->query($query, false);
									
			/* Continue with the database insert if all the required fields are filled */
			if($query){
				
				//Track the position of the previous insert
				$query = $this->connection->query("SELECT id FROM student_data WHERE _school_id='".@$this->sanitize($this->req['_school_index'])."' AND _student_id='".@$this->sanitize($this->req['_candidate_index'])."' LIMIT 1");
				
					while($q = mysqli_fetch_array($query)){
						$id = $q['id'];						
					}
					
					//return json_encode( array("response"=>"ERROR", "data"=>array("message"=>" $id ", "command"=>"" ) ) );
				
				//Inserting the student data
				//Generate an sql query
				$query = "INSERT INTO students ( id, _school_index, _candidate_index, _kcpe_index, _year, _subjects, _is_candidate ) VALUES ( '".@$id."', ";
				foreach($fields as $k => $v){
					if($v != '_subjects'):
						$query .= "'".@$this->sanitize($this->req[$v])."',";
					else:
						$query .= "'".@$this->sanitize($id)."',";
					endif;
				}
				$query = rtrim($query, ',');
				$query .= " )";
			
				//Insert a student record referencing the student subject data
				$query = $this->connection->query($query, false); 
				
				if($query):
					return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Success, \n\r<br> Student successfully added ", "command"=>"" ) ) );
				else:
					if( $this->connection->query("DELETE FROM student_data WHERE _school_id='".@$this->sanitize($this->req['_school_index'])."' AND _student_id='".@$this->sanitize($this->req['_candidate_index'])."' LIMIT 1" , true )){}
					return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops, \n\r<br> That student's records already exist ", "command"=>"" ) ) );
				endif;
				
			}else{
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops, \n\r<br> Failed to add subject data for the given student \n\r<br> That student's records aready exist! ", "command"=>"" ) ) );
			}
			
		//if the request variable is empty	
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Please provide the required details so as to add a student. ", "command"=>"" ) ) );
		}
		
	}	
/* End Of student addition database*/


/* CATEGORY ADDITION {categories} */
	public function addCategory(){
		
		$required = array("_title");
		
		//Ensure that all the required fields are filled
		foreach($required as $k => $v ){
			if(@$this->req[$v] == ""){
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the category ".str_replace('_', ' ',$this->req[$v]), "command"=>"" ) ) );
			}
		}
		
		//Generate an sql query
		$query = $this->connection->query("INSERT INTO categories ( _title ) VALUES ('".@$this->sanitize($this->req['_title'])."')");
		
		//Execute the generated query
		if($query){
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Successfully added category ", "command"=>"" ) ) );
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops \n\r Failed to add category ", "command"=>"" ) ) );
		}
		
		
		
		
	}
/* End of category addition */
	

/* School accomodation status addition {status} */
	public function addStatus(){
		
		$required = array('_title', '_abbr');
		
		//Ensure that all the required fields are filled
		foreach($required as $k => $v){
			if (@$this->req[$v] == ""):
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to get the accomodation status ".str_replace('_', ' ',$this->req[$v]), "command"=>"" ) ) );
			endif;
		}
		
		//Generate the SQL query
		$query = $this->connection->query("INSERT INTO staus ( _title, _abbr ) VALUES ( '".@$this->sanitize($this->req['_title'])."', '".@$this->sanitize($this->req['_abbr'])."' )");
		
		//Execute the generated query
	if($query){
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Successfully added accomodation status ", "command"=>"" ) ) );
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops \n\r Failed to add accomodation status", "command"=>"" ) ) );
		}
		
		
	}
/* End of school accomodation status addition */

	
/* Display School data */
	public function getSchools($identification=''){
		
		
		if($identification != ""){
			//fetch Specific school data
			return $this->connection->printQueryResults("SELECT * FROM schools WHERE _index='".$this->sanitize($identification)."' LIMIT 1");
						
		}else{
			//fetch all school data
			return $this->getTable("schools");	
		}
	}
/*End of school data display*/

	
/* Display student data */
	public function getStudents(){
		
		$school_index = @$this->req['_school'];			
		$candidate_index = @$this->req['_candidate'];
		
		//Get students from a particular school
		if($school_index != "" && $candidate_index == ""){			
			$res["students"] 	=  $this->connection->printQueryresults("SELECT * FROM students WHERE _school_index='".$school_index."' ORDER BY _is_candidate ");
			$res["student_data"]=  $this->connection->printQueryResults(" SELECT * FROM student_data WHERE _school_id='".$school_index."' ORDER BY _student_class ");
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=> $res, "command"=>"" ) ) );
			
		//Get a specific student's data
		}elseif ($school_index != "" && $candidate_index != ""){
			$res["students"]	=	$this->connection->printQueryresults("SELECT * FROM students WHERE _school_index='".$school_index."' AND _candidate_index='".$candidate_index."' LIMIT 1 ");
			$res["student_data"]= 	$this->connection->printQueryResults(" SELECT * FROM student_data WHERE _school_id='".$school_index."' AND _student_id='".$candidate_index."' LIMIT 1 ");
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=> $res, "command"=>"" ) ) );
			
		//Get a list of all students and there data
		}else if($school_index == "all"){
			$res["students"]	=	$this->getTable("students");
			$res["student_data"]= 	$this->getTable("student_data");
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=> $res, "command"=>"" ) ) );
			
		}
		
	}
/* End of student data */


/* Display KCPE result Data */
	public function getKcpe($index = ""){
		
		//Get the results as the provided index dictates
		$res['kcpe'] 		= $this->connection->printQueryResults("SELECT * FROM kcpe WHERE _index LIKE '%".$index."%'");
		$res['kcpe_data'] 	= $this->connection->printQueryResults("SELECT * FROM kcpe_data WHERE _kcpe_id LIKE '%".$index."%'");
		return $res;
		
		
	}	
/*  */
	
/* Display a list of all field from the given table */
	public function getTable($tablename){
		return  array( "response" => "SUCCESS", "data" => array( "message" => $this->connection->printQueryResults("SELECT * FROM  $tablename "), "command" => "" ) );
	}
/* End of table list display*/


/* Authenticate School Data Access */
	public function doAuth(){	
        
        
        
				
		if( @$this->req['_user_'] != "" && $this->req['_key_'] != "" ){ 
            
            if( @$this->req['_admin_']  == true ){
                    
                if( @$this->req['_user_'] == "demo" && @$this->req['_key_'] == "demo" ){
                    
                    return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Success! <br> Loging you in!", "command"=>"" ) ) ); 
                    
                }else{
                    
                    return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Oops! <br> Please make sure you are using the correct credentials!", "command"=>"" ) ) );
                    
                }
                
            }
		
			$isUser = $this->connection->num_rows("SELECT * FROM users WHERE ( _key_ = '".$this->sanitize( $this->crypto->makePass($this->req['_key_']) )."' AND   _user_ = '".$this->sanitize( $this->req['_user_'] )."' ) OR (  _index_ = '".$this->sanitize( $this->req['_user_'] )."'  AND _key_ = '".$this->sanitize( $this->crypto->makePass($this->req['_key_']) )."' ) ");
						
			if($isUser == 1):
				$_SESSION['login45'] = @$this->sanitize($this->req['_user_']);
				if( $_SESSION['login45'] ):
					return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=>"Success! <br> Loging you in!", "command"=>"" ) ) );
				endif;
			else:
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Login Failed! <br> Username or Password is incorrect <br> Please make sure that you are registered for this service", "command"=>"" ) ) );
			endif;
			
		}else{
			
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Error. <br> Incomplete set of credentials supplied.", "command"=>"" ) ) );
			
		}
		
		
	}
/* End of School Data Access authentication */
	
/* Load all the categories and statuses */
	public function asmPrerequisites(){
		
		//fetch all data from the categories and status tables
		return json_encode( array("response"=>"SUCCESS", "data"=>  array("message"=>  array( 'categories' => @$this->getTable('categories') , 'status' => @$this->getTable('status')   ), "command"=>"" ) ) );
		
	}
/* EO categories & s' */
	
	
/* CHECK THE AUTHENTICITY OF A USER'S LOGIN STATUS */
	function loginAuth(){
		
		if( $_SESSION['login45'] == "" ){
			
			return 0;
			
		}else{
			
			//validate the actual existance
			$isUser = $this->connection->num_rows("SELECT id FROM users WHERE _user_ = '".$this->sanitize(@$_SESSION['login45'])."' OR _index_ = '".$this->sanitize(@$_SESSION['login45'])."' ");
			
			if($isUser == 1){
				return @$this->sanitize( str_replace(" ", "", $_SESSION['login45']) );
			}else{
				return 0;
			}
			
		}
		
	}	
/* EO AUTHENTICITY TEST */
	
	
/* PERFORM USER LOGOUT */
	function doLogout(){
		
		if( session_unset() || session_destroy() ){
			
			return 1;
			
		}else{
			
			return 0;
			
		}
		
	}
/* EO USER LOGOUT FUNCTIONALITY */
	
/*  DO PASSWORD RECOVERY */
	function doRecovery(){
		
		$field 	= @$this->sanitize($this->req['_field']);
		$val	= @$this->sanitize($this->req['_val']);
		
		if( $field != ""  && $val != "" ){
		
			$query = $this->connection->query("SELECT id,_email FROM schools WHERE ".$field." = '".$val."' LIMIT 1", true);
			while($q = mysqli_fetch_array($query)){
				$id = $q['id'];
				$email = $q['_email'];
			}

		if( $id != "" && $email != "" ):
			
			$query = $this->connection->query("SELECT _user_, _key_ FROM users WHERE _inst_ = '$id' LIMIT 1");
			while($q = mysqli_fetch_array($query)){
				$user = $q['_user_'];
				$key  = $q['_key_'];
			}

			if( $user != "" && $key != "" ):
			
				$message = '<p> Your login credentials for the holemark examination  management portal are as follows </p>  <p></p> <p> Username : <code>'.$user.'</code> </p><p> Password : <code>'.$this->crypto->getPass($key).'</code> </p> <p></p> <p> Please ignore this message if you did not request a password recovery.</p>';
			
				$mail = new mailer($user, $email, "Holemark printers | Password Recovery", $message,"", 'sendmail');
			
				return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=> $email , "command"=> '' ) ) );
			
			else:
				return json_encode( array("response"=>"ERROR", "data"=>array("message"=> " Could not aquire a username and password with the provided value " , "command"=>$user) ) );
			endif;
					
		else:
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"<b>Error!</b> <br> could not find that school ".str_replace("_", "", $field), "command"=>"" ) ) );
		endif;
			
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"Failed to establish recovery evaluation protocol!", "command"=>"" ) ) );
		}
		
	}
/* EO PASSWORD RECOVERY */

	
/* USER DATA FETCH */
	function getData( ){
		
		if( $_SESSION['login45'] != "" ){
			
			$data = $this->connection->printQueryResults(" SELECT id, _index, _user, _email, _name, _head FROM schools WHERE _user = '".$_SESSION['login45']."' OR  _index = '".$_SESSION['login45']."' ");
			
			return json_encode( array("response"=>"SUCCESS", "data"=>array("message"=> $data , "command"=>"" ) ) );
			
		}else{
			return json_encode( array("response"=>"ERROR", "data"=>array("message"=>"The current user is not legally loged in!", "command"=>"" ) ) );
		}
		
	}
/* EO USER DATA FETCH */
	

/* STUDENT PROMOTION  */
	function doPromote(){
		
		$type = @$this->req['_type'];
		$whom = @$this->req['_whom'];
		
		if($type == "all"){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate + 1 ) WHERE _school_index = '".@$whom['school']."' ; UPDATE student_data SET _student_class = ( _student_class + 1 ) WHERE _school_id = '".@$whom['school']."'; DELETE FROM students WHERE _is_candidate > 5; DELETE FROM student_data WHERE _student_class > 5 ";
			$query = $this->connection->mquery($query, true );	
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED ALL STUDENT RECORDS!", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE ALL STUDENT RECORDS!", "command" => "") ) );
			}	
				
		}else if( $type == "class" ){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate + 1 ) WHERE _school_index = '".@$whom['school']."' AND _is_candidate = '".@$whom['class']."' ; UPDATE student_data SET _student_class = ( _student_class + 1 ) WHERE _school_id = '".@$whom['school']."' AND _student_class = '".@$whom['class']."'; DELETE FROM students WHERE _is_candidate > 5; DELETE FROM student_data WHERE _student_class > 5 ";
			$query = $this->connection->mquery($query, true );
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED ALL FORM {$whom['class']} CLASS RECORDS! ", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE ALL FORM {$whom['class']} CLASS RECORDS!", "command" => "") ) );
			}
			
		}else if($type == "single" ){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate + 1 ) WHERE _school_index = '".@$whom['school']."' AND id = '".@$whom['class']."' ; UPDATE student_data SET _student_class = ( _student_class + 1 ) WHERE _school_id = '".@$whom['school']."' AND id = '".@$whom['class']."'; DELETE FROM students WHERE _is_candidate > 5; DELETE FROM student_data WHERE _student_class > 5 ";
			$query = $this->connection->mquery($query, true );
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED THE STUDENT RECORDS! ", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE THE STUDENT RECORDS!", "command" => "") ) );
			}
			
		}else{
			return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO CAPTURE PROMOTION PROCESS CRITERIA!", "command" => "") ) );
		}
		
		
	}
	
/* EO STUDENT PROMOTION */
	
/* STUDENT DEMOTION  */
function doDemote(){

$type = @$this->req['_type'];
		$whom = @$this->req['_whom'];
		
		if($type == "all"){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate - 1 ) WHERE _school_index = '".@$whom['school']."' ; UPDATE student_data SET _student_class = ( _student_class - 1 ) WHERE _school_id = '".@$whom['school']."' ";
			$query = $this->connection->mquery($query, true );	
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED ALL STUDENT RECORDS!", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE ALL STUDENT RECORDS!", "command" => "") ) );
			}	
				
		}else if( $type == "class" ){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate - 1 ) WHERE _school_index = '".@$whom['school']."' AND _is_candidate = '".@$whom['class']."' ; UPDATE student_data SET _student_class = ( _student_class - 1 ) WHERE _school_id = '".@$whom['school']."' AND _student_class = '".@$whom['class']."' ";
			$query = $this->connection->mquery($query, true );
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED ALL FORM {$whom['class']} CLASS RECORDS! ", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE ALL FORM {$whom['class']} CLASS RECORDS!", "command" => "") ) );
			}
			
		}else if($type == "single" ){
			
			$query = "UPDATE students SET _is_candidate= ( _is_candidate - 1 ) WHERE _school_index = '".@$whom['school']."' AND id = '".@$whom['class']."' ; UPDATE student_data SET _student_class = ( _student_class - 1 ) WHERE _school_id = '".@$whom['school']."' AND id = '".@$whom['class']."'";
			$query = $this->connection->mquery($query, true );
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY UPDATED THE STUDENT RECORDS! ", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO UPDATE THE STUDENT RECORDS!", "command" => "") ) );
			}
			
		}else{
			
			$query = "DELETE FROM students WHERE _school_index = '".@$whom['school']."' AND id = '".@$whom['class']."' ; DELETE FROM student_data WHERE _school_id = '".@$whom['school']."' AND id = '".@$whom['class']."'";
			$query = $this->connection->mquery($query, true );
			if($query){
				return json_encode( array( "response" => "SUCCESS", "data" => array( "message" => "SUCCESSFULLY PURGED THE STUDENT RECORDS! ", "command" => "") ) );
			}else{
				return json_encode( array( "response" => "ERROR", "data" => array( "message" => "FAILED TO PURGE THE STUDENT RECORDS!", "command" => "") ) );
			}
		}


}

/* EO STUDENT DEMOTION */

	
/*  */
/*  */
	
}
/*End of class */	
	



?>
