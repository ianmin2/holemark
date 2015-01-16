<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)--><link href="assets/css/bootstrap.min.css" rel="stylesheet"><!-- MAIN CSS (REQUIRED ALL PAGE)--><link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"><link href="assets/css/style.css" rel="stylesheet"><link href="assets/css/custom.css" rel="stylesheet"><link href="assets/css/style-responsive.css" rel="stylesheet"><!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)--><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.min.js"></script><!-- MAIN APPS JS --><script src="assets/js/apps.js"></script>
<div class="container"
<div class="row">
	<div class="col-lg-12">
<?php 

chdir("..");
	$id = "mailer.php"; 
	$connect = true;
	include 'r_main.php';
	
chdir("code");
$y = "";

$y = json_encode( $connection->printQueryResults("SELECT * FROM subjects") );

/*
	$query = $connection->query("SELECT * FROM subjects");
	while( $q = mysqli_fetch_array($query)){
		$y .= ('<div class="alert col-sm-2 btn text-info text-center alert-default subjects" v="_s'.$q['id'].'" code="'.$q['_code'].'" >'.$q['_title'].'</div>');
			if( $q['_papers'] > 1 ){
				$end = $q['_papers'];
				for($i = 2; $i <= $end; $i++ ){
					$y .= ('<div class="alert col-sm-2 btn text-info text-center alert-warning subjects" sub="1234" v="_s'.$q['id'].'" code="'.$i.'" >'.$q['_title']." p".$i.'</div>');
				}
			}
	}
*/
	
	
	echo $y;
	
	
	

?>
<br><br><input type="button" class="btn btn-lg text-info btn-success btn-perspective" onclick="sort()" value="SORT" >
	</div>
</div>

<script>
	$(function(){
		
		$(".subjects").on('click', function(){

			var cl = Object.keys($__obj).length
				
				var me = this
				var id = me.getAttribute('v')
				var va = me.getAttribute('code')
				var ex = me.getAttribute('sub')
				
				//console.log($__obj)
				//console.log(id)
				//console.log( $__obj[id])
								
				if( $__obj[id] != null ){
					
					this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-default subjects')
					delete $__obj[id]
					//console.log( "Item Removed!" )
				
				}else{
					
					if( cl < 12 ){
						this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-success subjects')
						//$__obj[id] = me.innerHTML
						//console.log(id)
						if( ex === null ){
							$__obj[id] = va
							//console.log( $__obj[id] )
							
						}else{
							
							this.setAttribute('style', 'display:none !important;');
							$__sub[id +"_"+ va] =  va
							//console.log( $__sub)
						}
						//console.log( "Item added!" )
						//console.log( $__obj )
					}else{
						console.log("Maximum length reached!");
					}
						
				}		

			

			//console.log( Object.keys($__obj).length )
			
			
			
		})
	});


	function sort(){

		var dat = $__obj
		if( Object.keys(dat).length > 6 ){
			
			$__obj = {}
			
			var i = 1;
			for( var $o in dat){

				//console.log( $o + " : " + dat[$o] );
							
				$__obj['_sub' + i] =  dat[$o]
				
				i += 1
				
			}
			
			console.log( $__obj )
			console.log( $__sub)
		}

		console.log( Object.keys($__obj).length )
	}

/* ianmin2 */	
</script>