<!-- Begin page heading -->
	<h1 class="page-heading " onclick="hpl();" style=" cursor: pointer; " >HoleMark Printers <small>| Administrative panel >> <username></username> </small></h1>
<!-- End page heading -->

	<!-- BEGIN SiTE INFORMATIONS -->
					<div class="row" id="menu1">
						<div class="col-sm-3" style="cursor:pointer;" onclick="hsa()">
							<div class="the-box no-border bg-success tiles-information fly-out-l">
								<i class="fa fa-users icon-bg "></i>
								<div class="tiles-inner text-center ">
									<p></p>
									<h3 class="bolded" style="text-shadow: 1px 2px teal;">ADD STUDENT</h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-success -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="getStudents();">
							<div class="the-box no-border bg-primary tiles-information fly-out-l">
								<i class="fa fa-clock-o icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded" style="text-shadow: 1px 2px teal;"> EDIT STUDENT DATA </h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-primary -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="facilitators()">
							<div class="the-box no-border bg-danger tiles-information fly-out-l">
								<i class="fa fa-user icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded " style="text-shadow: 1px 2px teal;">ASSISTANCE</h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-danger -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="">
							<div class="the-box no-border bg-warning tiles-information fly-out-l">
								<i class="fa fa-lock icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded " style="text-shadow: 1px 2px teal;">ADMIN</h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-warning -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
					</div><!-- /.row -->
					<!-- END SITE INFORMATIONS -->
<!-- STUDENT MANAGEMENT PANEL -->
	<div class="row"><div class=" col-lg-12" id="menus"></div></div>
<!-- EO STUDENT MANAGEMENT PANEL -->
					
<!--  MAIN STUDENT ADDITION PANEL -->	
	<div style="font-family: courier; display: none; " class="  alert alert-success center-block alert-bold-border fade in alert-dismissable col-lg-12 "  id="newStudent"  >
					<!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="font-weight:bold; color: red;">&times;</button> -->
						<h3 class="text-success " style="font-weight: bold;"><u>Student Addition</u></h3>
						<br>
						
						<!-- school_index && candidate_index --> 
						<div class="row text-info">
							<div class="col-lg-12">
							<div class="col-sm-3 smt ">
									school index <sup style="color: red; font-weight: bold;">*</sup>
								</div>
								<div class="col-sm-3">
									<input type="text" maxlength="6" disabled required placeholder="school_index" id="_school_index" name="_school_index" class="text-center text-info">
								</div>
								<div class="col-sm-3 smt ">
									candidate index<sup style="color: red; font-weight: bold;">*</sup>
								</div>
								<div class="col-sm-3">
									<input type="text" maxlength="5" required placeholder="candidate_index" id="_candidate_index" name="_candidate_index" class="text-center text-info">
								</div>
							</div>
						</div>
						<br>
						
						<!-- Kcpe_index & Kcpe_year --> 
						<div class="row ">
							<div class="col-lg-12">
							<div class="col-sm-3 smt text-info">
									KCPE index <sup style="color: red; font-weight: bold;">*</sup>
								</div>
								<div class="col-sm-3">
									<input type="text" maxlength="9" required placeholder="KCPE INDEX" id="_kcpe_index" name="_kcpe_index" class="text-center text-info">
								</div>
								<div class="col-sm-3 smt text-info">
									KCPE year <sup style="color: red; font-weight: bold;">*</sup>
								</div>
								<div class="col-sm-3" >
									<select id="_year" name="_year" required>
										<script>
											var d 	= document.getElementById('_year');
											var dat = '<option selected value="">Kcpe Year</option>';
											var da 	= $__d.getFullYear();
											
											for( var y = da - 10; y <= da; y++ ){
												dat += '<option> ' + y + '</option>';
											}
											d.innerHTML = dat;
										</script>
									</select>
									
								</div>
							</div>
						</div>
						<br>
						
						<!-- Kcpe_index & Kcpe_year --> 
						<div class="row ">
							<div class="col-lg-12">
							<div class="col-sm-3 smt text-info">
									Class <sup style="color: red; font-weight: bold;">*</sup>
								</div>
								<div class="col-sm-3">
									<select name="_is_candidate" id="_is_candidate">
										<option value="1" selected> Form 1</option><option value="2"> Form 2</option><option value="3"> Form 3</option><option value="4"> Form 4</option>
									</select>
								</div>
								<div class="col-sm-3 smt text-info">
								
								</div>
								<div class="col-sm-3" >
																		
								</div>
							</div>
						</div>
						<br>
					
						<!-- SUBJECTS --> 
						<div class="row txt-info">
							<div class=" panel col-lg-12 >
			<!-- SUBJECT DATA -->							
								
				<div class="col-lg-10 row center-block" >
					<hr class="gr2">
					<span style="font-weight: bold;" >GROUP 2</span>
				<div class="col-lg-12" id="g2" style=" font-weight: bold !important; " ></div>
					<div class="col-sm-12" >
						<div class="progress no-rounded progress-xs">
						   <div class="progress-bar progress-bar-success " id="g2R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
						  </div>
						</div>
					
				</div><div class="col-lg-12 row center-block">
					<hr class="gr3">
					<span style="font-weight: bold;" >GROUP 3</span>
					<div class="col-lg-12" id="g3" style=" font-weight: bold !important; " ></div>
					<div class="col-sm-12">
						<div class="progress no-rounded progress-xs">
						   <div class="progress-bar progress-bar-success " id="g3R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
						  </div>
						</div>
					</div>
				</div><div class="col-lg-12 row center-block">
					<hr class="gr4">
					<span style="font-weight: bold;" >GROUP 4</span>
					<div class="col-lg-12" id="g4" style=" font-weight: bold !important; " ></div>
					<div class="col-sm-12" >
						<div class="progress no-rounded progress-xs">
						  <div class="progress-bar progress-bar-success" id="g4R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
						  </div>
						</div>
					</div>
				</div><div class="col-lg-12 row center-block">
					<hr class="gr5">
					<span style="font-weight: bold;" >GROUP 5</span>
					<div class="col-lg-12" id="g5" style=" font-weight: bold !important; " ></div>
					<div class="col-sm-12" >
						<div class="progress no-rounded progress-xs">
						  <div class="progress-bar progress-bar-success " id="g5R" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0.1%">
						  </div>
						</div>
					</div>
				</div>
											
			<!-- EO SUBJECT DATA -->								
								
								
							</div>
						</div>
						<br>
						
						
						
						<div class="row">
							<div class="col-lg-12">
								<div style="color: navy;" id="gResp" class="center-block col-lg-12"></div>
							</div>
						</div>
							<br>					
						<!-- Signup && recovery -->
						<div class="row">
							<div class="col-lg-12">
								<div class="col-sm-3">
									
									<input type="button" style="background-color: white; color: navy;"  class="btn " data-toggle="modal" data-target=".newSchoolSignup" onclick="hpl()" value="Main Panel" >
								</div>
								<div class="col-sm-6">
									
								</div>
								<div class="col-sm-3 " >
									<input style="font-weight:bold;" type="button" class="btn btn-success perspective" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="addStudent" onclick="sort()" >
								</div>
							</div>
						</div>
						</div>
<!-- EO MAIN STUDENT ADDITION PANEL  -->		
	
	
<!-- STUDENT EDITING PANEL -->	
						
<!-- EO STUDENT EDITING PANEL -->
	
	
	
<script>

//Handle login Requests
function hsa(){

	//Hide Menu1
	$(function(){
		$('#menu1').hide('slow');
		$('.page-heading').html('<h1 class="page-heading " onclick="hpl();" style=" cursor: pointer; " > HoleMark Printers <small>| Student Addition </small> </h1>');
		$('#newStudent').css({ display: 'block'});
		$('#menus').css({ display: 'none'});
	})			
	
}

function hpl(){
	
	//Hide Menu1
	$(function(){
		var ud = JSON.parse( localStorage.getItem("userData") );
		ud = ud[0];
		$('#newStudent').hide('slow');
		$('.page-heading').html('<h1 class="page-heading " onclick="hpl();" style=" cursor: pointer; " > HOLEMARK PRINTERS <small>| Administrative panel >> ' + ud._name + '</small> </h1>');
		$('#menu1').css({ display: 'block'});
		$('#menus').css({ display: 'none'});
		
	})			
	
}



/* DISPLAY GROUP 1 INFO */
									
$(function(){

	/*
	* HANDLE PANEL HEADER SETTING
	*/
	var ud = JSON.parse( localStorage.getItem("userData") );
	ud = ud[0];
	//site the username in the page header
	$("username").html( ud._name );
	$('title').html(' HOLEMARK | ' + ud._name  );
	
	//set the value of the school index
	$("#_school_index").val( ud._index )

	//SETTING UP LOCAL {GLOBAL} VARIABLES
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
				$y += '<div style="font-weight: bold !important;" class="alert col-sm-2 btn text-info text-center alert-default g2" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
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
				$y += '<div style="font-weight: bold !important;" class="alert col-sm-2 btn text-info text-center alert-default g3" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
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
				$y += '<div style="font-weight: bold !important;" class="alert col-sm-2 btn text-info text-center alert-default g4" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
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
				$y += '<div style="font-weight: bold !important;" class="alert col-sm-2 btn text-info text-center alert-default g5" v="_s'+$q['id']+'" code="'+$q['_code']+'" >'+$q['_title']+'</div>';
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

/*
 * HANDLE THE SUBJECT SORTING 
 */
function sort(){


	$(function(){

		
		
	//HANDLE THE GENERAL DATA PROVISIONS
	var _si = $("#_school_index");
	var _ci = $("#_candidate_index");
	var _ki = $("#_kcpe_index");
	var _ky = $("#_year");
	var _sy = $("#_is_candidate");
	var gresp = $("#gResp");

	//EVALUATE FOR THE COMPULSORY FIELDS
	if( _ci.val().length >= 3 && !isNaN( _ci.val() ) ){
		
		if( _ki.val().length >= 9 && !isNaN( _ki.val() ) ){
			
			if( _ky.val().length != 0 && !isNaN( _ky.val() ) ){

				if( _sy.val().length > 0 ){

/* SUBJECT EVALUATION */			
				//EVALUATE GROUP  SUBJECTS
				//AT LEAST 2 IN G2
				if( Object.keys( $__g2 ).length === 2 ){
					//AT LEAST 1 SUBJECT IN G3
					if( Object.keys( $__g3 ).length === 1 ){
						//AT LEAST 1 SUBJECT IN EITHER G4 OR G5
						if( Object.keys( $__g4 ).length  != 0 || Object.keys( $__g5 ).length != 0 ){

							//Give the user a go ahead and hide the 'Add Student' button
							gresp.removeClass('alert-danger');
							gresp.addClass('btn alert-success ');
							gresp.html(' <i class="fa fa-cog fa-spin fa-2x " style="color: navy;"> </i> <i style="font-weight: bold; font-size : 20px; color: white;" > Processing request </i>');
							$('#addStudent').hide('slow');
							
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

								var dat = $.extend( true, {}, $__obj , { action : "addStudent", _school_index : _si.val(), _candidate_index : _ci.val(), _kcpe_index : _ki.val(), _year : _ky.val(), _is_candidate: _sy.val() } );
								$__obj = dat;
								delete dat;
								//console.log( $__obj );
								//console.log( $__sub);		
								
									
								//POST THE DATA TO THE SERVER FOR PROCESSING!
								$.post('proc.php',
										$__obj,
										function(resp){
											
											if( resp.response == "SUCCESS" ){
												
												gresp.removeClass('alert-danger');
												gresp.addClass('btn alert-success ');
												gresp.html(' <i class="fa fa-check fa-5x " style="color: green;"> </i> <code style="font-weight: bold; " class="text-default" > '+ resp.data['message'] +'</code> ');
												//Clear the student details
												_ci.val('');
												_ki.val('');
												$('#addStudent').show('fast');
												
											}else{

												$('#addStudent').show('slow');
												gresp.removeClass('alert-success');
												gresp.addClass('btn alert-danger ');
												gresp.html(' <i class="fa fa-times fa-2x " style="color: red;"> </i> <code style="font-weight: bold; " class="text-default" > '+ resp.data['message'] +'</code> <i class="fa fa-times fa-2x " style="color: red;"> </i> ');
												$('#addStudent').show('slow');
												
											}
									
										}
								);
					
							
							
						}else{
							//g4R.focus();
							$('html, body').animate( { scrollTop: $(".gr4").offset().top }, 'slow' );
						}
						
					}else{
						//g3R.focus();
						$('html, body').animate( { scrollTop: $(".gr3").offset().top }, 'slow' );
					}
					
				}else{
					//g2R.focus();
					$('html, body').animate( { scrollTop: $(".gr2").offset().top }, 'slow' );
				}

/* EO SUBJECT EVALUATION*/

				}else{

					_sy.focus();
					gresp.removeClass('alert-success');
					gresp.addClass('btn alert-danger');
					gresp.html(' <i class="fa fa-times fa-2x " style="color: red;"> </i> <code style="font-weight: bold; " class="text-default" > Please select the year of study. </code> <i class="fa fa-times fa-2x " style="color: red;"> </i> ');
				}
				
			}else{
				_ky.focus();
				gresp.removeClass('alert-success');
				gresp.addClass('btn alert-danger ');
				gresp.html(' <i class="fa fa-times fa-2x " style="color: red;"> </i> <code style="font-weight: bold; " class="text-default" > Please select the KCPE year </code> <i class="fa fa-times fa-2x " style="color: red;"> </i> ');
			}
			
		}else{
			_ki.focus()
			gresp.removeClass('alert-success');
			gresp.addClass('btn alert-danger ');
			gresp.html(' <i class="fa fa-times fa-2x " style="color: red;"> </i> <code style="font-weight: bold; " class="text-default" > Please provide a valid KCPE index </code> <i class="fa fa-times fa-2x " style="color: red;"> </i> ');
		}
		
	}else{
		_ci.focus()
		gresp.removeClass('alert-success');
		gresp.addClass('btn alert-danger ');
		gresp.html(' <i class="fa fa-times fa-2x " style="color: red;"> </i> <code style="font-weight: bold; " class="text-default" > Please provide a numeric candidate index</code> <i class="fa fa-times fa-2x " style="color: red;"> </i> ');
	}

	
	
		
	
	});
	
}
</script>
<!-- EO STUDENT ADDITION -->



<!-- HANDLE STUDENT DATA MANIPULATION -->

<script>
$_o = {};
dat = "";
sSubs = "";
subS =  { 
		"101" : "ENGLISH",
		"102":"KISWAHILI",
		"121":"MATHEMATICS",
		"231":"BIOLOGY",
		"232":"PHYSICS",
		"233":"CHEMISTRY",
		"237":"GENERAL SCIENCE",
		"311":"HISTORY & GOVERNMENT",
		"312":"GEOGRAPHY",
		"313":"C.R.E",
		"314":"I.R.E",
		"315":"H.R.E",
		"441":"HOME SCIENCE",
		"442":"ART & DESIGN",
		"443":"AGRICULTURE",
		"444":"WOODWORK",
		"445":"METALWORK",
		"446":"BUILDING CONSTRUCTION",
		"447":"POWER MECHANICS",
      	"448":"ELECTRICITY",
      	"449":"DRAWING & DESIGN",
      	"450":"AVIATION TECHNOLOGY",
      	"451":"COMPUTER STUDIES",
      	"501":"FRENCH",
      	"502":"GERMAN",
      	"503":"ARABIC",
      	"504":"KENYA SIGN LANGUAGE",
      	"511":"MUSIC",
      	"565":"BUSINESS STUDIES",
		
	};
function getStudents(){

	$(function(){

		$('#menu1').hide('slow');
		$('.page-heading').html('<h1 class="page-heading " onclick="hpl();" style=" cursor: pointer; " > HoleMark Printers  <small>| Student Data Manipulation </small></h1>');
		$('#newStudent').css({ display: 'none'});
		$('#menus').css({ display: 'block'});
		
				
		 dat = JSON.parse( localStorage.getItem('userData') );
		$.post('proc.php', 
				{ action: "getStudents", _school : dat[0]._index  },
				function( resp ) {
					
					var studs = resp.data.message.students;
					var colors = { "1": " bg-success ", "2": " bg-primary ", "3": " bg-warning ", "4": " bg-danger " };
					//console.log(resp.data.message.student_data );
	
					localStorage.setItem("student_data", JSON.stringify( resp.data.message.student_data ) );
					
					
					//Initialize the localstorage data
					sSubs = JSON.parse( localStorage.getItem('student_data') );	
					var $pa ="'all'";
					
					
					$ins = '<div col="row">  <div class="row"><div class="col-sm-3" style="cursor:pointer;" onclick="doPromote( ' +  $pa + ');"><div class="the-box no-border bg-info tiles-information fly-out-l"><i style="color: black;" class="fa fa-arrow-up icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> PROMOTE ALL  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->     <div class="row"><div class="col-sm-3" style="cursor:pointer;" onclick="showClasses();"><div class="the-box no-border bg-info tiles-information fly-out-l"><i style="color: black;" class="fa fa-arrow-circle-o-up icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> PROMOTE PER CLASS  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->       ';		
					$ins += '<div class="col-sm-2 the-box no-border">#search box for student id goes here </div>  <div class="col-sm-3" style="cursor:pointer;" onclick=""><div class="the-box no-border bg-default tiles-information "><i style="color: black;" class="fa fa-compass fa-2x icon-bg "></i> <div class="tiles-inner text-center ">  <div class="bolded col-sm-3 bg-success fly-out-l" style="text-shadow: 1px 2px teal;"> f1 </div>  <div class="bolded col-sm-3 bg-primary fly-out-l" style="text-shadow: 1px 2px teal;"> f2 </div>  <div class="bolded col-sm-3 bg-warning fly-out-l" style="text-shadow: 1px 2px teal;"> f3 </div>   <div class="bolded col-sm-3 bg-danger fly-out-l" style="text-shadow: 1px 2px teal;"> f4 </div>  </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->    </div>';
					$ins += "<div col='row'>";
					//build student portfolio
					for( stud in studs ){
	
						//console.log(studs[stud]._subjects + " == " + d[stud].id );
						$ins += '<div class="col-sm-3" style="cursor:pointer;" onclick="getStudent('+ stud +')"><div class="the-box no-border ' + colors[ studs[stud]._is_candidate ]  + ' tiles-information fly-out-l"><i class="fa fa-user icon-bg "></i><div class="tiles-inner text-center "><p></p><h3 class="bolded" style="text-shadow: 1px 2px teal;">'+ studs[stud]._candidate_index  +  ' </h3> '+ studs[stud]._kcpe_index  +  ' ~ ' + studs[stud]._year +  '</div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->';
						
					}
					$ins += '</div>';

					$("#menus").html($ins);
					
				}
			);
	
	
	});
	
}

function getStudent( pos ){

	$(function(){

		var _ = sSubs[pos];
		var dats = "";

		//iterate through the subjects while displaying those that are available
		dats = '<center><h1>' + _._student_id +'\'s data </h1></center><div class="row">';
		//console.log( _ )
		for( var i = 1; i <= 12; i++ ){
			if( _['_sub'+i] != '' ){
				//console.log( '_sub'+i + " == " + subS[  _['_sub'+i] ] );
				dats += '<div class="col-sm-2" style="cursor:pointer;" onclick=""><div class="the-box no-border bg-warning tiles-information fly-out"><i style="color: black;" class="fa fa-clipboard icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;">'+ subS[  _['_sub'+i] ] + ' </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->';
			}
		}
		var $sa = "'single'";
		dats += '</div><div class="row"><div class="col-sm-2" style="cursor:pointer;" onclick=""><div class="the-box no-border bg-success tiles-information fly-out-l"><i style="color: black;" class="fa fa-edit icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> EDIT INFO  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->   <div class="col-sm-2" style="cursor:pointer;" onclick="sPA(' + _.id +') "><div class="the-box no-border bg-success tiles-information fly-out-l"><i style="color: black;" class="fa fa-arrow-up icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> PROMOTE STUDENT  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->   <div class="col-sm-2" style="cursor:pointer;" onclick="sDA(' + _.id +') "><div class="the-box no-border bg-success tiles-information fly-out-l"><i  style="color: black;" class="fa fa-arrow-down icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> DEMOTE STUDENT  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->    <div class="col-sm-2" style="cursor:pointer;" onclick="aDA(' + _.id +') "><div class="the-box no-border bg-danger tiles-information fly-out-l"><i  style="color: black;" class="fa fa-cross icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> DELETE STUDENT  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 --> </div>';
		
		
		$("#menus").html(dats);

	});

	
	
}

function showClasses(){

	var $ca = "'class'";
	var $ira = '<div class="row center-block"> <h2 style="color: white;">STUDENT PROMOTION BY CLASS</h2> Click on the class to Promote all it\'s members </div><div class="row">     <div class="col-lg-12" style="cursor:pointer;" onclick="">  <div class="bolded col-sm-3 bg-success fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cPA(1)"> f1 </div>  <div class="bolded col-sm-3 bg-primary fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cPA(2)"> f2 </div>  <div class="bolded col-sm-3 bg-warning fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cPA(3)"> f3 </div>   <div class="bolded col-sm-3 bg-danger fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cPA(4)"> f4 </div>    </div>  <div class="row">    <div class="col-sm-3" style="cursor:pointer;" onclick="showClassesD( );"><div class="the-box no-border bg-info tiles-information fly-out-l"><i style="color: black;" class="fa fa-arrow-down icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> DEMOTE STUDENTS  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->   </div>  ';

	$('#menus').html($ira);
	
}

function showClassesD(){

	var $ca = "'class'";
	var $ira = '<div class="row center-block"> <h2 style="color: white;">STUDENT DEMOTION BY CLASS</h2> Click on the class to Demote all it\'s members </div> <div class="row">     <div class="col-lg-12" style="cursor:pointer;" onclick="">  <div class="bolded col-sm-3 bg-success fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cDA(1)"> f1 </div>  <div class="bolded col-sm-3 bg-primary fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cDA(2)"> f2 </div>  <div class="bolded col-sm-3 bg-warning fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cDA(3)"> f3 </div>   <div class="bolded col-sm-3 bg-danger fly-out-l the-box" style="text-shadow: 1px 2px teal;" onclick="cDA(4)"> f4 </div>    </div>  <div class="row">    <div class="col-sm-3" style="cursor:pointer;" onclick="showClasses( );"><div class="the-box no-border bg-info tiles-information fly-out-l"><i style="color: black;" class="fa fa-arrow-up icon-bg "></i><div class="tiles-inner text-center "><p></p><h5 class="bolded" style="text-shadow: 1px 2px teal;"> PROMOTE STUDENTS  </h5> </div><!-- /.tiles-inner --></div><!-- /.the-box no-border --></div><!-- /.col-sm-3 -->   </div>  ';
	
	$('#menus').html($ira);
	
}

function cPA( d ){

	delete $_o.action;
	delete $_o._type;
	delete $_o._whom;

	$_o.action	=   "doPromote";
	$_o._type	=   "class";
	$_o._whom	=   { school : dat[0]._index , class : d };
	
	doPromote($_o);
	
}

function sPA( d ){

	delete $_o.action;
	delete $_o._type;
	delete $_o._whom;

	$_o.action	=   "doPromote";
	$_o._type	=   "single";
	$_o._whom	=   { school : dat[0]._index , class : d };
	
	doPromote($_o);
	
}

function doPromote ( t ){
//console.log(t);
	//Update all school data 
	if( t === "all" ){

		var ira = confirm("DO YOU REALLY WANT TO PROMOTE ALL STUDENTS?");
		
		if( ira ){
		$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING SCHOOL DATA');
		//console.log('updating all school records! ==> Promotion');
		$.post( 'proc.php',
				{ action : 'doPromote', _type : t , _whom : { school : dat[0]._index } },
				function(resp){
					
					if( resp.response == "SUCCESS" ){
						//console.log(resp.data.message);
						alert( resp.data.message );
						getStudents();
					}else{
						alert(resp.data.message);
					}
					
				}
			);
		}
	//Update all class data
	}else if( t._type === "class" ) {

		var ira = confirm("DO YOU REALLY WANT TO PROMOTE ALL STUDENTS IN THIS CLASS?");
		
		if( ira ){
		$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING CLASS DATA');
		//console.log('updating all class records! ==> Promotion');
		$.post( 'proc.php',
				t,
				function(resp){

					if( resp.response == "SUCCESS" ){
						//console.log(resp.data.message);
						alert( resp.data.message );
						getStudents();
					}else{
						alert(resp.data.message);
					}
					
				}
			);
		}

	}else if( t._type === "single" ){

		var ira = confirm("DO YOU REALLY WANT TO PROMOTE THIS STUDENT?");
		
		if( ira ){
		$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING PERSONAL DATA');
		//console.log('updating the personal record! ==> Promotion');
		$.post( 'proc.php',
				t,
				function(resp){

					if( resp.response == "SUCCESS" ){
						//console.log(resp.data.message);
						alert( resp.data.message );
						getStudents();
					}else{
						alert(resp.data.message);
					}
					
				}
			);
		}
		
	}
	
	
}

function cDA( d ){

	delete $_o.action;
	delete $_o._type;
	delete $_o._whom;

	$_o.action	=   "doDemote";
	$_o._type	=   "class";
	$_o._whom	=   { school : dat[0]._index , class : d };
	
	doDemote($_o);
	
}

function sDA( d ){

	delete $_o.action;
	delete $_o._type;
	delete $_o._whom;

	$_o.action	=   "doDemote";
	$_o._type	=   "single";
	$_o._whom	=   { school : dat[0]._index , class : d };

	//console.log($_o)
	doDemote($_o);
	
}

function aDA( d ){

	delete $_o.action;
	delete $_o._type;
	delete $_o._whom;

	$_o.action	=   "doDemote";
	$_o._type	=   "";
	$_o._whom	=   { school : dat[0]._index , class : d };

	//console.log($_o)
	doDemote($_o);
	
}

function doDemote ( t ){
	//console.log(t);
		//Update all school data 
		if( t === "all" ){

			var ira = confirm("DO YOU REALLY WANT TO DEMOTE ALL STUDENTS?");
			
			if( ira ){
			$("#menus").html(' <center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING SCHOOL DATA');
			//console.log('updating all school records! ==> Demotion');
			$.post( 'proc.php',
					{ action : 'doDemote', _type : t , _whom : { school : dat[0]._index } },
					function(resp){
						
						if( resp.response == "SUCCESS" ){
							//console.log(resp.data.message);
							alert( resp.data.message );
							getStudents();
						}else{
							alert(resp.data.message);
						}
						
					}
				);
			}
		//Update all class data
		}else if( t._type === "class" ) {
			
			var ira = confirm("DO YOU REALLY WANT TO DEMOTE ALL STUDENTS IN THIS CLASS?");
			
			if( ira ){
			$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING CLASS DATA');
			//console.log('updating all class records! ==> Demotion');
			$.post( 'proc.php',
					t,
					function(resp){

						if( resp.response == "SUCCESS" ){
							//console.log(resp.data.message);
							alert( resp.data.message );
							getStudents();
						}else{
							alert(resp.data.message);
						}
						
					}
				);
			}

		}else if( t._type === "single" ){

			var ira = confirm("DO YOU REALLY WANT TO DEMOTE THIS STUDENT?");
			
			if( ira ){
			$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING PERSONAL DATA');
			console.log('updating the personal record! ==> Demotion');
			$.post( 'proc.php',
					t,
					function(resp){

						if( resp.response == "SUCCESS" ){
							//console.log(resp.data.message);
							alert( resp.data.message );
							getStudents();
						}else{
							alert(resp.data.message);
						}
						
					}
				);
			}
			
		}else{

			var ira = confirm("DO YOU REALLY WANT TO PURGE ALL RECORDS BELONGING TO THIS STUDENT?");
			
			if( ira ){
			$("#menus").html('<center> <i class="fa fa-cog fa-4x fa-spin" style="color: white;"></i> UPDATING PERSONAL DATA');
			console.log('updating the personal record! ==> Demotion');
			$.post( 'proc.php',
					t,
					function(resp){

						if( resp.response == "SUCCESS" ){
							//console.log(resp.data.message);
							alert( resp.data.message );
							getStudents();
						}else{
							alert(resp.data.message);
						}
						
					}
				);
			}

		}
		
		
	}

</script>


