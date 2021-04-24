<?php include 'db.php'; ?>








<!DOCTYPE html><!-- HTML5 Declaration -->

<html>
<head>
<title>Tour| Administration</title>

<link href="styles/desktop.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="images/favicon/favicon.png" rel="icon">
<script src="js/jquery-3.4.1.js"></script>





  <link rel="stylesheet" href="test_summernote/css/bootstrap.min.css">
    <link rel="stylesheet" href="test_summernote/css/font-awesome.min.css">
	<link rel="stylesheet" href="atest_summernote/css/summernote/summernote.css">
	
	<style>
.btn {    color: #2e2e2e;}
	</style>
	






 <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
     
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/style.css">

<style>


.navbar-header {
    width: 100%;
    float: left;
}
.navbar-right-header {
    width: 100%;
    float: left;
	margin-top: -40px;
}
.header {
    height: 90px;
}
ul.subnavbar-right {
    z-index: 1;
}
a {
    color: #c6852b;
}
.content_box {
    padding: 0;
}
.content {
    width: 75%;
    float: left;
    PADDING: 10px;
}


.btn {
    color: #2e2e2e;
    
}

</style>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8" />
<body>
 <div class="container">
   <div class="header">
     <div class="navbar-header">
	  <h1><a class="admin_name" style="font-family:'Great Vibes', cursive;color:#faf5ea">| Administration  </a></h1>
	 </div><!-- /.navbar-header -->
	 
	 <div class="navbar-right-header">
	 
	 <ul class="dropdown-navbar-right">
	   <li>
	     <a><i class="fa fa-user" style="color:#c6852b"></i>&nbsp;<i class="fa fa-caret-down" style="color:#c6852b"></i></a>
		 
		 <ul class="subnavbar-right">
		   <li><a>Compte d'utilisateur</a></li>
		   <li><a href="logout.php" style="font-family:'Great Vibes', cursive;color:#c6852b">Se déconnecter</a></li>
		 </ul>
	   </li>
	 </ul>

	 
	 </div><!-- /.navbar-right-header -->
	 
   </div><!-- /.header -->
   
   <div class="body_container">
     <div class="left_sidebar">
	   <div class="left_sidebar_box">
	   
	   <ul class="" style="font-family:'Great Vibes', cursive";>

         <li><a href="INDEX" target="_blank" ><i class="fa fa-globe" style="font-size:18px; "></i> Mon site</a></li>	   
	     
		 <li>
                                <a href="#"><i class="fa fa-product-hunt" style="font-size:18px;"></i>&nbsp;DAYS <i
                                        class="arrow fa fa-angle-left"></i></a>

                                <ul class="left_sidebar_second_level">
                                    <li><a href="AdminPanel.php?action=add_pro">Ajouter day</a></li>
                                    <li><a href="AdminPanel.php?action=view_pro">Afficher days</a></li>
                                </ul><!-- /.left_sidebar_second_level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-th-large" style="font-size:18px;"></i>&nbsp;TOURS<i
                                        class="arrow fa fa-angle-left"></i></a>

                                <ul class="left_sidebar_second_level">
                                    <li><a href="AdminPanel.php?action=add_pack">Ajouter Tour</a></li>
                                    <li><a href="AdminPanel.php?action=view_pack">Afficher les Tours</a></li>
                                </ul><!-- /.left_sidebar_second_level -->
                            </li>
                             
							  <li>
                                <a href="#"><i class="fa fa-th-large" style="font-size:18px;"></i>&nbsp;BLOGS <i
                                        class="arrow fa fa-angle-left"></i></a>

                                <ul class="left_sidebar_second_level">
                                    <li><a href="AdminPanel.php?action=add_blog">Ajouter un blog</a></li>
                                    <li><a href="AdminPanel.php?action=view_blog">Afficher les blogs</a></li>
                                </ul><!-- /.left_sidebar_second_level -->
                            </li>
							
							 <li>
		 <a href="#"><i class="fa fa-bars" style="font-size:18px;"></i>&nbsp;GALERIE <i class="arrow fa fa-picture-o"></i></a>
		 
		   <ul class="left_sidebar_second_level">
		     <li><a href="AdminPanel.php?action=add_galerie">Ajouter dans galerie</a></li>
			 <li><a href="AdminPanel.php?action=view_galerie">Afficher</a></li>
		   </ul><!-- /.left_sidebar_second_level -->
		 </li>
							
                            <li>
                                <a href="#"><i class="fa fa-calendar" style="font-size:18px;"></i>&nbsp;RÉSERVATION <i
                                        class="arrow fa fa-angle-left"></i></a>

                                <ul class="left_sidebar_second_level">
                                    <li><a href="AdminPanel.php?action=view_reserv">Afficher les réservations</a></li>
                                </ul><!-- /.left_sidebar_second_level -->
                            </li>

		 
		 </ul><!-- /.left_sidebar_first_level -->
	   </div><!-- /.left_sidebar_box -->
	   
	 </div><!-- /.left_sidebar -->
	 
	 <div class="content">
	   <div class="content_box">
	   <?php 
	   if(isset($_GET['action'])){
	    $action = $_GET['action'];
	   }else{
	    $action ='';
	   }
	   
	    switch($action){
	    case 'add_pro';
		include 'includes/insert_product.php';
		break;
		
		case 'view_pro';
		include 'includes/view_products.php';
		break;
		
		case 'edit_pro';
		include 'includes/edit_product.php';
		break;
		
		case 'add_blog';
		include 'includes/insert_blog.php';
		break;
		
		case 'view_blog';
		include 'includes/view_blog.php';
		break;
		
		case 'edit_blog';
		include 'includes/edit_blog.php';
		break;
		
		case 'add_pack';
		include 'includes/insert_pack.php';
		break;
		
		case 'view_pack';
		include 'includes/view_pack.php';
		break;
		
		
		case 'edit_pack';
		include 'includes/edit_pack.php';
		break;
		
		case 'add_galerie';
		include 'includes/insert_galerie.php';
		break;
		
		case 'view_galerie';
		include 'includes/view_galerie.php';
		break;

		case 'view_reserv';
		include 'includes/view_reserv.php';
		break;
	
		
	   }
	   ?>
	   </div><!-- /.content_box -->
	
	 </div><!-- /.content -->
	 
   </div><!-- /.body_container -->
   
 </div><!-- /.container -->
 
 
      
 
  
 
 
 
  <!-- jquery
		============================================ -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
     
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
 
 
	
 
    <script src="test_summernote/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="test_summernote/js/bootstrap.min.js"></script>
    <script src="test_summernote/js/summernote/summernote-updated.min.js"></script>
    <script src="test_summernote/js/summernote/summernote-active.js"></script>
 
 
</body>

</html>



<script>
$(document).ready(function(){
  
  // Drop Down Menu Right
  $(".dropdown-navbar-right").on('click',function(){
   $(this).find(".subnavbar-right").slideToggle('fast');
  });
  
  // Collapse Left Sidebar
  $(".left_sidebar_first_level li").on('click',this,function(){
    $(this).find(".left_sidebar_second_level").slideToggle('fast');
  });
  
});






  function change_(){
      
      
    
      
      
      
      document.getElementById('form_summer').submit();
//	alert(atext);
//		alert(text);
  }











</script>

