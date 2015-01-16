<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Holemark exam printers Kenya online examination management system">
		<meta name="keywords" content="Holemark, Kenya exam management, exam printers, exam printing, examinations, kcpe, kcse, school exam management, online exam management ">
		<meta name="author" content="Ian Innocent, ianmin2, ieGlobal">
		<title>Holemark | Exam Management | ADMIN </title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">		
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
 		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/apps.js"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
		
		
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index.php"><img src="assets/img/sentir-logo-primary.png" alt="Holemark Exam Management"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content no-left-sidebar">
						
						<div class=" collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search" >
								<div class="form-group">
									<code id="hi1" style="font-family:Courier New, Courier, monospace; font-size: 25px; color: green;text-shadow: 1px 1px blue;  ">Holemark Online Exam Management Portal</code>
									 <!-- <input type="text" id="search" class="form-control" placeholder="search for person">  -->
								</div>
							</form>
							<!-- End nav search form --> 
						</div><!-- /.navbar-collapse -->
						
						
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right">
						<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							<li class="dropdown">
							  
								<img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
								 <strong id="usernom">Guest</strong>
								<ul class="dropdown-menu square primary margin-list-rounded with-triangle">
	                                <li ><a href="#notYet" style="text-decoration: line-through" >Change picture</a></li>
	                                <li class="divider"></li>
	                                <li><a href="#Logout" onclick="doLogout()">Log out</a></li>
							  	</ul>
							 
							  
							  
							 
							</li>
							 </a>
						</ul>
						<!-- End user session nav -->
						
						
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			
			
			
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content no-left-sidebar">
				<div class="container-fluid ieGMain" style="min-height: 113px; background: rgb(55,53,191); /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  rgba(55,53,191,1) 0%, rgba(35,34,122,1) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(55,53,191,1)), color-stop(100%,rgba(35,34,122,1))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  rgba(55,53,191,1) 0%,rgba(35,34,122,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  rgba(55,53,191,1) 0%,rgba(35,34,122,1) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  rgba(55,53,191,1) 0%,rgba(35,34,122,1) 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  rgba(55,53,191,1) 0%,rgba(35,34,122,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3735bf', endColorstr='#23227a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */">
					
					<!-- Begin page heading -->
                                <h1 class="page-heading ">HoleMark Printers <small>| MAIN ADMINISTRATOR PANEL </small></h1>
				<!-- End page heading -->
				
						
								
				<!-- LOGIN TO ADMIN PANEL -->
				<div class="alert alert-info center-block alert-bold-border fade in alert-dismissable col-lg-12 " style="display:block; font-family: courier, arial; font-weight: bold;" id="sma">
					<l class="text-info">Please login to use the main admin functions</l><br>
					<div  >
						<input class="text-center text-warning _user" type="text"  placeholder="Username" >
						<input class="text-center text-warning _key " type="password" placeholder="password" >
						<input class="text-center  btn btn-info " type="submit" value="Login" id="smaLogin"><span id="smaL" style="color: navy"></div>
					</span><br>
					<div id="smaresp" class="text-danger">
					
					</div>
				</div>
				
					
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer id="footer">
					
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
		</div>
		
	
		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->		
		<script src="assets/js/bootstrap.min.js"></script>
		
		
		<script>
			
		$(function(){
		
			
			

//HANDLE THE ACTUAL LOGING IN
			$('#smaLogin').on('click', function(){
				
				_user = $('._user');
				_key  = $('._key');
				L	  = $('#smaL'); 
				
				//Check the credibility of the provided variables
				if(_user.val().length < 3 ){
					_user.focus();
				}else if( _key.val().length < 3 ){
					_key.focus();
				}else{
					L.html(' &nbsp; &nbsp; <i class="fa fa-cog fa-spin fa-2x"></i>');
					$('#smaLogin').hide('fast');
					//Check whether the specified credentials are valid.
					$.post( 'proc.php',
							{ action: 'doAuth', _user_ : _user.val(), _key_ : _key.val(), _admin_ : true },
							function( resp ){ 
								//console.log(resp);
								L.html('');
								if(resp.response == "SUCCESS"){
									getData();
									//Display the Management Layout
									$('#sma').fadeOut('slow');
									
									$.post('main_admin',
											{}, 
											function(data){ 
												
												usernom.html( _user.val() );
												localStorage.setItem("username", _user.val());
												$('.ieGMain').html( data );
												
											}
									)
									
								}else{
									
									$('#smaLogin').show('fast');
									_key.val('');
									$('#smaresp').append(resp.data['message']);
									setTimeout(function(){$('#smaresp').html('')}, 5000);
									
								}
							}			
					);
				}
				
			});
			


	
			
			
			
//LOAD THE SIGNUP PREQUISITES	
	$.post('proc.php', { action:'asmPrerequisites' } , 
			function( d ){
				 
				$(function(){
						cats = ( d.data.message.categories );
						stats = ( d.data.message.status );
						
						//console.log( JSON.stringify(cats) + '\n\n' + JSON.stringify(stats) )
						
						//Display all the categories
						$c = '<option value="" selected> PICK A CATEGORY </option>';
						for( cat in cats ){
							$c += ' <option value="' + cats[cat].id + '" >' + cats[cat]._title + '</option>';
						}
						$('#_category').html($c);
						
						//Display all the statuses
						$s = '<option value="" selected> Accomodation STATUS </option>';
						for( stat in stats ){
							$s += ' <option value="' + stats[stat]._abbr + '" >' + stats[stat]._title + '</option>';
						}
						$('#_status').html($s);
						
						//console.log( $c )
						//console.log( $s )
				});
		
			}				
	);
			
		});
		
		</script>
		
		
	</body>
</html>