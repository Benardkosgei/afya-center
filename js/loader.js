$(document).ready(function(){
//-----------------page loaders-----------------------------
          $(".hamburger").click(function(){
          	 $(".wrapper").toggleClass("collapse");
		     });
          /*----------------------------------------------*/
          	$(".dashboard").click(function(){
            $('#everything').load('dashboard.php');
              
	       });
            /*----------------------------------------------*/ 
          	$(".diagnose").click(function(){
            $('#everything').load('diagnose.php');
	       });
             /*----------------------------------------------*/
            $(".profile").click(function(){
            $('#everything').load('profile.php');
     
         });
            /*----------------------------------------------*/
               $(".health").click(function(){
               $('#everything').load('health.php');
         });
           /*----------------------------------------------*/
            $(".emergency").click(function(){
            $('#everything').load('emergency.php');
         });
            /*------------------About us ------------------------------------*/
            $(".about").click(function(){
            $('#everything').load('about.html');
         });
           /*---------------------CONTACT US HERE-------------------------*/
            $(".contact").click(function(){
            $('#everything').load('follow.php');
         });
           /*----------------------------------------------*/
           /*------------------Login loader---------------*/
            
           //ANIMATION-----------------------------------------
        
      
             // $("").load("editprofile.php");

      /*----------------------------------------------------*/
      });