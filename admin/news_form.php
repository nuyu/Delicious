
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add news(admin)</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<style>

.form {
    padding-top: 10px;
    padding-bottom: 10px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 200;
    margin: 0;
    font-size: 15px;
    line-height: 18px;
}
input[type=text], input[type=Date],textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


.form-row {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>
  <!--banner-->
  
	
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="index.php">Home</a>
            <a href="../newsCreate.php">Announcement</a>
            <a href="Order_Reservation.php">Order</a>
            <a href="profileMain.php">Profile</a>
            <a href="feedbackList.php">Feedback</a>
            <a href="logout.php">Logout</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon"><img src="../img/menu.png" width="50"></span>
        </div>
      </header>
      

  <!-- / banner -->
 

	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1 class="header-h">Admin News Board</h1>
					</div>
				</div>
			</div>
       

  <form>
       <form action="/.php">
          <div class="form-row">
            <div><label for="nTitle">News Title :</label>
             <input type="text"  id="nTitle" name="nTitle"></input>
          </div></div>
       
     
      	<div class="form-row">
          <div><label for="nDetail">Detail :</label>
          <textarea rows="2" type="form-control" name="nDetail"></textarea>
        </div></div>
      
     
      	<div class="form-row">
            <div><label for="nDate">Date :</label>
            <input type="Date"  id="nDate" name="nDate"></input>
          </div></div>

           <div class="form-row">
                <div class="column">
                   <label for="Description"> Detail :</label>
                        <div><textarea rows = "2" cols = "50" name = "pDetail">
                            Enter more detail about product here...
                         </textarea></div>
                       </div>
                     </div>

       

                      <div>
                        <div class="column">
                          <center><div class="col-sm-2 form-group">
                              <button type="submit" class="btn btn-lg btn-warning btn-block" >Submit </button>   
                                 </div></center>
                               </div>
                       
                        <div class="column">
                          <center><div class="col-sm-2 form-group">
                              <button type="cancel" class="btn btn-lg btn-warning btn-block" >Cancel </button>   
                                 </div></center>
                               </div>

                      </div>
 </div>

</div>
</form>
	<!-- End Reservation -->
	
  

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Wahida's Homemade Bakery</h4>
            <address>Lot 885 Kampung Wakaf Bunut<br>Pasir Puteh, 16800 Kelantan</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Delicious Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../contactform/contactform.js"></script>

</body>

</html>
