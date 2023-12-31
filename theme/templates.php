<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> |MCB</title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">

 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">

  <link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/mcblogo.webp" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="css/style1.1.css">

        <title>Responsive plants website - Bedimcode</title>
   
 <style type="text/css">

.p {

  color: white;
   margin-bottom: 0;
  margin-top: 0;
  /*padding: 0;*/
  /*float: right;*/
  list-style: none;
}

.p > a { 
  color: white;
  /*text-align: center;*/
  margin-bottom: 0;
  margin: 0;
  padding: 0;
  text-decoration:none;
  background-color:  #0000FF;
}
.p > a:hover ,
.p > a:focus {
   color: black; 
   text-decoration:none;
   background-color: black;
}


 
.title-logo  {
  margin-top-15px
   color: black;
    font-size: 32px;
    margin-left: -20px
   
  
  
  }
.title-logo:hover {
  color: black; 
  text-decoration:none; 
}
.carttxtactive {
  color: red;
  font-style: bold;
  box-shadow: red;

}
.carttxtactive:hover {
   color: white;
}

.menu  li {
  left: 0px;
  width: 150px;
  padding: 0 3px 0 3px;
  text-align: center;
 
}

</style>
<?php 
$sem = new Semester();
$resSem = $sem->single_semester();
$_SESSION['SEMESTER'] = $resSem->SEMESTER; 
?>
 <?php
if (isset($_SESSION['gvCart'])){
  if (count($_SESSION['gvCart'])>0) {
    $cart = '<span class="carttxtactive">('.count($_SESSION['gvCart']) .')</span>';
  } 
 
} 
$currentyear = date('Y');
  $nextyear =  date('Y') + 1;
  $sy = $currentyear .'-'.$nextyear;
  $_SESSION['SY'] = $sy;
 ?>

</head>

<body style="Pbackground-color:#e0e4e5" >

<div class="navbar-fixed-top navbar-TOPsm  col-md-10    col-md-offset-1"    role="navigation" style="margin-left: 0%; width: 100%;">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" >Mabini College of Batangas</h5>
         <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
    </div>
      <div  class="collapse navbar-collapse  smMenu "> 


        
      </div>

  </div>
</div>


 <!-- <div class="col-md-10 col-md-push-1 " style=" margin-top:-2%">  -->
  <div class="col-md-10 col-md-offset-1 " > 

  

   </div>

 <div class="navbar navbar-static-top navbar-magbanua col-md-10    col-md-offset-1 "    role="navigation" style="margin-left: 0; width: 100%;"> 
    
      <div class="container ">
        <div class="navbar-header"> 
            <div class="navbar-menu p" >Menu</div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
            <span class="icon-bar">dasda</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

      
        </div>
       
<?php
  
  ?>
         <!--==================== HEADER ====================-->
         <header class="header1">

        <a href="index.php" class="logo"  style="color: #fff; font-size: 19px;">
            <img src="img/mcblogo.webp" alt=""> Mabini College of Batangas
        </a>

        <nav class="navbar1" >
            <div id="close" class="fas fa-times"></div>

            <a href="index.php" class="nav_item" style="color: #fff;">Home</a>
           
            
           



        </nav>

        <div id="menu" class="fas fa-bars"></div>

        

    </header>
         
               
       


<div class="row">
             
                
                  <div class="panel-body">
                 
                    <?php require_once $content; ?>
           
                     
                  </div>
                <!--   <div class="panel-footer">
                      Panel Footer
                  </div> -->
            
           <div class="col-lg-4">
          
                  <?php 
                
                
                    ?>
             </div>
        </div>
        <?php 

?>
       </div>
         
      </div>

  </div>  
<!-- end of page  -->


 <!-- modalorder -->

<!-- end -->
 
  <!-- jQuery -->
  <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 

  <!-- Metis Menu Plugin JavaScript --> 
  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <!-- Custom Theme JavaScript --> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
<script>
      //Datemask2 mm/dd/yyyy
    

   
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var pmethod = document.getElementById('paymethod').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&paymethod="+pmethod+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     
 <!-- method for saving and retrieving data without refreshing the page. -->
<script type="text/javascript" > 

$(document).on("click", "#load", function () {
 /* load all variables */
  
   
   var depid = $(this).data("id");
   
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "menu1.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:depid},               
        success: function(data){                    
         $('#loaddata'+ depid).html(data); 
          

        }

    }); 

  
}); 
</script>
<script type="text/javascript" > 

$(document).on("keyup", "#PartialPayment", function () {
 /* load all variables */
 //alert("goooog")
   
   var totsem = document.getElementById("totsem").value;
   var partial = document.getElementById("PartialPayment").value;
   var bal;

   document.getElementById("partial").value = partial;

   bal = parseFloat(totsem) - parseFloat(partial);

   document.getElementById("Balance").innerHTML = bal.toFixed(2);
   document.getElementById("txtBalance").innerHTML = bal.toFixed(2);
   
}); 
</script>
<script type="text/javascript" > 

$(document).on("click", "#btnpay", function () {
 /* load all variables */
 //alert("goooog")
   
 var partial = document.getElementById("PartialPayment").value;
 
Session.set("PartialPayment", partial);
 
// retreive a session value/object
Session.get("PartialPayment");

// alert(Session.get("PartialPayment"));

 if (partial >= 1600) {
  return true;
 }else{


  alert("invalid payment. Minimum of 1600 pesos in-order to enroll.");
  return false;
 };

 // store a session value/object

 
// clear all session data
// Session.clear();
  
// dump session data
// Session.dump();

   
}); 
</script>
</body>
</html>