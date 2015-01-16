<?php

class exports{
	
	public $connection;
	
	public function __construct(){
		
		chdir('..');
		$id = "exports.php";
		$connect = true;
		include 'r_main.php';
		chdir('code');
		
		$this->connection = $connection;
		unset($connection);
		
	}
	
	public function getInfo( $request ){
		
		if($request == "student" ){
			
			$select = "SELECT students.id, students._school_index, students._candidate_index, students._kcpe_index, students._year, student_data._student_class, student_data._sub1, student_data._sub2, student_data._sub3, student_data._sub4, student_data._sub5, student_data._sub6, student_data._sub7, student_data._sub8, student_data._sub9, student_data._sub10, student_data._sub11, student_data._sub12  FROM
					  students INNER JOIN student_data ON students.id = student_data.id ORDER BY students._school_index";
			/*
			 $select = "SELECT * FROM Customers
						INNER JOIN Orders
						ON Customers.CustomerID=Orders.CustomerID
						ORDER BY Customers.CustomerName;";
			*/
			
			$export = $this->connection->query( $select, true );
			
			$fields = $this->connection->num_rows( $select, true );
			
			
			
			for ( $i = 0; $i < $fields; $i++ )
			{
				While( $fdat = mysqli_fetch_field($export) ){
					$header .= $fdat->name . "\t";
				}
			}
			
			while( $row = mysqli_fetch_row( $export ) )
			{
				$line = '';
				foreach( $row as $value )
				{
					if ( ( !isset( $value ) ) || ( $value == "" ) )
					{
						$value = "\t";
					}
					else
					{
						$value = str_replace( '"' , '""' , $value );
						$value = '"' . $value . '"' . "\t";
					}
					$line .= $value;
				}
				$data .= trim( $line ) . "\n";
			}
			$data = str_replace( "\r" , "" , $data );
			
			if ( $data == "" )
			{
				$data = "\n(0) Records Found!\n";
			}
			
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=Holemark_student_data_".date('d/m/Y').".xls");
			header("Pragma: no-cache");
			header("Expires: 0");
			print "$header\n$data";
			
			
		}elseif ( $request == "school" ){
			
			
		}else{
			
			die( "Failed to get valid export instructions" );
			
		}
		
		
		
		
	}
	
	
}

$i = new exports();
$i->getInfo("student");

/* ianmin2 */	
?>