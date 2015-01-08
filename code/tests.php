<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)--><link href="assets/css/bootstrap.min.css" rel="stylesheet"><!-- MAIN CSS (REQUIRED ALL PAGE)--><link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"><link href="assets/css/style.css" rel="stylesheet"><link href="assets/css/custom.css" rel="stylesheet"><link href="assets/css/style-responsive.css" rel="stylesheet"><!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)--><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.min.js"></script><!-- MAIN APPS JS --><script src="assets/js/apps.js"></script>
<div class="container">
<div class="row">
	<div class="row">
		<hr>
		GROUP 2
		<div class="col-lg-12" id="g2" ></div>
		<div class="col-sm-12" >
			<div class="progress no-rounded progress-xs">
			   <div class="progress-bar progress-bar-success" id="g2R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
			  </div>
			</div>
		</div>
	</div><div class="row">
		<hr>
		GROUP 3
		<div class="col-lg-12" id="g3" ></div>
		<div class="col-sm-12">
			<div class="progress no-rounded progress-xs">
			   <div class="progress-bar progress-bar-success" id="g3R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
			  </div>
			</div>
		</div>
	</div><div class="row">
		<hr>
		GROUP 4
		<div class="col-lg-12" id="g4" ></div>
		<div class="col-sm-12" >
			<div class="progress no-rounded progress-xs">
			  <div class="progress-bar progress-bar-success " id="g4R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
			  </div>
			</div>
		</div>
	</div><div class="row">
		<hr>
		GROUP 5
		<div class="col-lg-12" id="g5" ></div>
		<div class="col-sm-12" >
			<div class="progress no-rounded progress-xs">
			  <div class="progress-bar progress-bar-success" id="g5R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
			  </div>
			</div>
		</div>
	</div>
	
<br><br>
<input type="button" class="btn btn-lg text-info btn-success btn-perspective" onclick="sort()" value="SORT" >
<div id="resp" ></div>
	</div>
</div>

<br><br>


<script>






	$(function(){

g2R = $("#g2R"); g3R = $("#g3R"); g4R = $("#g4R"); g5R = $("#g5R");		
		
/*
 * 
 ** LOADING AND HANDLING PAGE DATA 
 * 
 */

//GROUP 2 SUBJECTS
		$y = "";
		for( gSub in gSubs.g2){
			var $q = gSubs.g2[gSub];
			$y += '<div class="alert col-sm-2 btn text-info text-center alert-default g2" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
		}
		$("#g2").html( $y );
		
//HANDLE CLICKING
		$(".g2").on('click', function(){
			var cl = Object.keys($__g2).length;
				
				var me = this;
				var id = me.getAttribute('v');
				var va = me.getAttribute('code');
				var ex = me.getAttribute('sub');
												
				if( $__g2[id] != null ){
					
					this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-default g2');
					delete $__g2[id];
					var len = ( ( Object.keys($__g2).length / 2 ) * 100 ) + "%";
					var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
					g2R.css({'width': len , 'background' : tr } );
					//console.log( "Item Removed!" );
				
				}else{
					
					if( cl < 2 ){
						this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-success g2');
						if( ex === null ){
							$__g2[id] = va;

							var len = ( ( Object.keys($__g2).length / 2 ) * 100 ) + "%";
							var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
							g2R.css({'width': len , 'background' : tr } );
							//console.log( $__g2[id] );
							
						}else{
							
							this.setAttribute('style', 'display:none !important;');
							$__gs2[id +"_"+ va] =  va;
							//console.log( $__gs2);
						}
						//console.log( "Item added!" );
						//console.log( $__g2 );
					}else{
						//console.log("Maximum length reached!");
						$('html, body').animate( { scrollTop: $("#g2").offset().top }, 'slow' );
					}
						
				}			

			//console.log( "g2 :" + Object.keys( $__g2).length );	
					
			
		})
	

	
//GROUP 3 SUBJECTS
		$y = "";
		for( gSub in gSubs.g3){
			var $q = gSubs.g3[gSub];
			$y += '<div class="alert col-sm-2 btn text-info text-center alert-default g3" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
		}
		$("#g3").html( $y );
		
//HANDLE CLICKING
		$(".g3").on('click', function(){
			var cl = Object.keys($__g3).length;
				
				var me = this;
				var id = me.getAttribute('v');
				var va = me.getAttribute('code');
				var ex = me.getAttribute('sub');
												
				if( $__g3[id] != null ){
					
					this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-default g3');
					delete $__g3[id];
					
					var len = ( ( Object.keys($__g3).length / 1 ) * 100 ) + "%";
					var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
					g3R.css({'width': len , 'background-color' : tr } );
					//console.log( "Item Removed!" );
				
				}else{
					
					if( cl < 1 ){
						this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-success g3');
						if( ex === null ){
							$__g3[id] = va;

							var len = ( ( Object.keys($__g3).length / 1 ) * 100 ) + "%";
							var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
							g3R.css({'width': len , 'background-color' : tr } );
							//console.log( $__g3[id] );
							
						}else{
							
							this.setAttribute('style', 'display:none !important;');
							$__gs3[id +"_"+ va] =  va;
							//console.log( $__gs3);
						}
						//console.log( "Item added!" );
						//console.log( $__g3 );
					}else{
						//console.log("Maximum length reached!");
						$('html, body').animate( { scrollTop: $("#g3").offset().top }, 'slow' );
					}
						
				}			

			//console.log("g3 :" + Object.keys($__g3).length );		
			
		})

		
//GROUP 4 SUBJECTS
		$y = "";
		for( gSub in gSubs.g4){
			var $q = gSubs.g4[gSub];
			$y += '<div class="alert col-sm-2 btn text-info text-center alert-default g4" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
		}
		$("#g4").html( $y );
		
//HANDLE CLICKING
		$(".g4").on('click', function(){
			var cl = Object.keys($__g4).length;
				
				var me = this;
				var id = me.getAttribute('v');
				var va = me.getAttribute('code');
				var ex = me.getAttribute('sub');
												
				if( $__g4[id] != null ){
					
					this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-default g4');
					delete $__g4[id];

					var len = ( ( Object.keys($__g4).length / 1 ) * 100 ) + "%";
					var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
					g4R.css({'width': len , 'background-color' : tr } );
					//console.log( "Item Removed!" );
				
				}else{
					
					if( cl < 1 ){
						this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-success g4');
						if( ex === null ){
							$__g4[id] = va;

							var len = ( ( Object.keys($__g4).length / 1 ) * 100 ) + "%";
							var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
							g4R.css({'width': len , 'background-color' : tr } );
							//console.log( $__g4[id] );
							
						}else{
							
							this.setAttribute('style', 'display:none !important;');
							$__gs4[id +"_"+ va] =  va;
							//console.log( $__gs4);
						}
						//console.log( "Item added!" );
						//console.log( $__g4 );
					}else{
						//console.log("Maximum length reached!");
						$('html, body').animate( { scrollTop: $("#g4").offset().top }, 'slow' );
					}
						
				}			

			//console.log("g4 :" + Object.keys($__g4).length )			
			
		})

		
//GROUP 5 SUBJECTS
		$y = "";
		for( gSub in gSubs.g5){
			var $q = gSubs.g5[gSub];
			$y += '<div class="alert col-sm-2 btn text-info text-center alert-default g5" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
		}
		$("#g5").html( $y );
		
//HANDLE CLICKING
		$(".g5").on('click', function(){
			var cl = Object.keys($__g5).length;
				
				var me = this;
				var id = me.getAttribute('v');
				var va = me.getAttribute('code');
				var ex = me.getAttribute('sub');
												
				if( $__g5[id] != null ){
					
					this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-default g5');
					delete $__g5[id];

					var len = ( ( Object.keys($__g5).length / 1 ) * 100 ) + "%";
					var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
					g5R.css({'width': len , 'background-color' : tr } );
					//console.log( "Item Removed!" )
				
				}else{
					
					if( cl < 1 ){
						this.setAttribute('class', 'alert col-sm-2 btn text-info text-center alert-success g5');
						if( ex === null ){
							$__g5[id] = va;

							var len = ( ( Object.keys($__g5).length / 1 ) * 100 ) + "%";
							var tr = ( len == "100%" ) ? 'green !important' : 'red !important';
							g5R.css({'width': len , 'background-color' : tr } );
							//console.log( $__g5[id] );
							
						}else{
							
							this.setAttribute('style', 'display:none !important;');
							$__gs5[id +"_"+ va] =  va;
							//console.log( $__gs5);
						}
						//console.log( "Item added!" );
						//console.log( $__g5 );
					}else{
						//console.log("Maximum length reached!");
						$('html, body').animate( { scrollTop: $("#g5").offset().top }, 'slow' );
					}
						
				}			

			//console.log("g5 :" + Object.keys($__g5).length );			
			
		})

		
});


function sort(){


	$(function(){

	//EVALUATE GROUP  SUBJECTS
		//AT LEAST 2 IN G2
		if( Object.keys( $__g2 ).length === 2 ){
			//AT LEAST 1 SUBJECT IN G3
			if( Object.keys( $__g3 ).length === 1 ){
				//AT LEAST 1 SUBJECT IN EITHER G4 OR G5
				if( Object.keys( $__g4 ).length  != 0 || Object.keys( $__g5 ).length != 0 ){

					//clear the already existing values in the global object array
					$__obj = {};
					
					//merge the different objects into 1
					var dat = $.extend( true, {}, $__g2, $__g3, $__g4, $__g5 );
					//var arr = $.map( dat, function(el){ return el; });
					//console.log(arr)
											
						var i = 4;
						for( var $o in dat){
			
							//console.log( $o + " : " + dat[$o] );
										
							$__obj['_sub' + i] =  dat[$o];
							
							i += 1;
							
						}
						
						console.log( $__obj );
						//console.log( $__sub);
					
			
					
					
				}else{
					//g4R.focus();
					$('html, body').animate( { scrollTop: $("#g4").offset().top }, 'slow' );
				}
				
			}else{
				//g3R.focus();
				$('html, body').animate( { scrollTop: $("#g3").offset().top }, 'slow' );
			}
			
		}else{
			//g2R.focus();
			$('html, body').animate( { scrollTop: $("#g2").offset().top }, 'slow' );
		}
		
	
	});
	
}


</script>