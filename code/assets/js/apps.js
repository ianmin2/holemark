/* 
 * 
 *VARIABLE DECLARATION 
 * 
 */

$__g1 = {}; $__g2 = {};  $__g3 = {}; $__g4 ={}; $__g5 = {}; $__gs1 = {}; $__gs2 = {}; $__gs3 = {}; $__gs4 = {}; $__gs5 = {};
$__url = "http://127.0.0.1/holemark/code/";
//$__layouts = 'layouts/smaLayout.exe';
$__layouts = 'layout.php';
$__d = new Date();
gSubs = { 
		
		g1 : [
		      	{"id":"1","_code":"101","_title":"ENGLISH","_papers":""},
		      	{"id":"2","_code":"102","_title":"KISWAHILI","_papers":""},
		      	{"id":"3","_code":"121","_title":"MATHEMATICS","_papers":""}
	      	],

		g2 : [
		      	{"id":"4","_code":"231","_title":"BIOLOGY","_papers":""},
		      	{"id":"5","_code":"232","_title":"PHYSICS","_papers":""},
		      	{"id":"6","_code":"233","_title":"CHEMISTRY","_papers":""},
		      	{"id":"7","_code":"237","_title":"GENERAL SCIENCE","_papers":""}
	      	],

		g3 : [
		      	{"id":"8","_code":"311","_title":"HISTORY & GOVERNMENT","_papers":""},
		      	{"id":"9","_code":"312","_title":"GEOGRAPHY","_papers":""},
		      	{"id":"10","_code":"313","_title":"C.R.E","_papers":""},
		      	{"id":"11","_code":"314","_title":"I.R.E","_papers":""},
		      	{"id":"12","_code":"315","_title":"H.R.E","_papers":""}
	      	],

		g4 : [
		      	{"id":"13","_code":"441","_title":"HOME SCIENCE","_papers":""},
		      	{"id":"14","_code":"442","_title":"ART & DESIGN","_papers":""},
		      	{"id":"15","_code":"443","_title":"AGRICULTURE","_papers":""},
		      	{"id":"16","_code":"444","_title":"WOODWORK","_papers":""},
		      	{"id":"17","_code":"445","_title":"METALWORK","_papers":""},
		      	{"id":"18","_code":"446","_title":"BUILDING CONSTRUCTION","_papers":""},
		      	{"id":"19","_code":"447","_title":"POWER MECHANICS","_papers":""},
		      	{"id":"20","_code":"448","_title":"ELECTRICITY","_papers":""},
		      	{"id":"21","_code":"449","_title":"DRAWING & DESIGN","_papers":""},
		      	{"id":"22","_code":"450","_title":"AVIATION TECHNOLOGY","_papers":""},
		      	{"id":"23","_code":"451","_title":"COMPUTER STUDIES","_papers":""}
	      	],

		g5 : [
		      {"id":"24","_code":"501","_title":"FRENCH","_papers":""},
		      {"id":"25","_code":"502","_title":"GERMAN","_papers":""},
		      {"id":"26","_code":"503","_title":"ARABIC","_papers":""},
		      {"id":"27","_code":"504","_title":"KENYA SIGN LANGUAGE","_papers":""},
		      {"id":"28","_code":"511","_title":"MUSIC","_papers":""},
		      {"id":"29","_code":"565","_title":"BUSINESS STUDIES","_papers":""}
	      ]

};
$__obj = {};
$__sub = {};

$(document).ready(function(){

	usernom = $('#usernom');
	
/* Custom force sidebar color */

     $(function(){"use strict";
        //$(".logo-brand").removeClass("white-color");
        //$(".logo-brand").removeClass("primary-color");
        $(".logo-brand").removeClass("info-color");
        $(".logo-brand").removeClass("success-color");
        $(".logo-brand").removeClass("danger-color");
        $(".logo-brand").removeClass("warning-color");
        $(".logo-brand").addClass("white-color");
        $(".sidebar-left").addClass("light-color");
     });    

     /* Ira basic footer message setter  */

	 todate = new Date();
     ftr = $("#footer");
     ftr.html("&copy;" + todate.getFullYear() + " <a href='#lets_code'>ieGlobal</a> for <a href='http://holemark.co.ke/' > Holemark Printers</a>");
        

     
});


     
/* Simple Email validation */
     function ismail( mail ){
    	 if( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( mail )  ){
    		 return true;
    	 }else{
    		 return false;
    	 }
     }
     
     
 /* CHECK THE USER's LOGIN STATUS */
	function loginAuth(){
		
		$(function(){
			
		     $.post('proc.php',
		    		 { action:'loginAuth' },    		 
		    		 function( resp ){ 
		    			 
		    			 if(resp != 0){
		    				var u = resp.trim();
		    				 usernom.html( resp );
		    				 localStorage.setItem("username", u);
		    				var ud = JSON.parse(localStorage.getItem("userData"));
		    				 $.post($__layouts,
										{}, 
										function(data){ 
											if( u == null ){
												getData();
											}else{
												if( ud[0]._user == u || ud[0]._index == u  ){
													console.log( 'Woo hoo! you are a maestro!' );
												}else{
													//console.log( "[ " + ud[0]._user + "," + ud[0]._index + " ]" + " : " + u );
													getData();
												}
											}
											$('.ieGMain').html( data );
										}
								)
		    			 } 
		    			 
		    });
	     
		});
		
	}

/* GET THE LOGED IN USER's MAIN DATA */
	function getData(){
		
		$(function(){
			
			$.post('proc.php',
					{ action:'getData' },
					function( dat ){
						if( dat.response == "SUCCESS" ){
							localStorage.setItem("userData", JSON.stringify(dat.data['message']) );
						}else{
							console.log( dat.data['message'] );
						}
					}
			)
			
		})
		
	}

//HANDLE USER LOGOUT REQUEST
function doLogout(){
	
	$.post( 'proc.php',
			{ action: 'doLogout' },
			function( data ){
				if(data == 1 ){
					location.reload();
				}else{
					doLogout();
				}
			}
	)

}	
	
	
