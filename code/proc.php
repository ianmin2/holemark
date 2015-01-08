<?php
//capture the passed data
header("Content-Type:application/json");
header("X-Powered-By: ieGlobal");
$data = @$_REQUEST;	
//sleep(7);


//Include the processing page
	include 'schools.php';
	$hsm = new schools( $data );

//Switch through data['action'] to take the appropriate action

		switch ($data['action']) {
			case 'addSchool':
			 echo $hsm->addSchool();
			//print_r($data);
			break;
			
			case 'addStudent':
				echo $hsm->addStudent();
				break;
			
			case 'addCategory':
				;
				break;
				
			case 'addStatus':
				;
				break;
				
			case 'getSchools':
				;
				break;
				
			case 'getStudents':
				;
				break;
				
			case 'getKcpe':
				;
				break;
			
			case 'getTable':
				;
				break;
				
			case 'doAuth':
				echo $hsm->doAuth();
				break;
				
			case 'asmPrerequisites':
				echo $hsm->asmPrerequisites();
				break;
				
			case 'loginAuth':
				header('content-type: text/html');
				echo $hsm->loginAuth();
				break;
				
			case 'doLogout':
				echo $hsm->doLogout();
				break;
				
			case 'doRecovery':
				echo $hsm->doRecovery();
				break;

			case 'getData':
				echo $hsm->getData();
				break;
			
			default:
				echo json_encode( array("response"=>"ERROR", "data"=>array("message"=>"FAILED TO AUTHENTICATE THE APPLICATION REQUEST", "command"=>"" ) ) );;
			break;
		}
	
	

	
	