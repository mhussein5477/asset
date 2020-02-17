<!DOCTYPE html>
<html>
<head>
	<title>Data capture</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">  
  </head>
  <body>

   

   <?php include 'navbar.php'; ?>

 <h5 style="text-align: center; margin-top: 1%">IT ASSET MOVEMENT FORM</h5>
 <center>
<section style="font-size: 12px; margin-right: 1%; margin-left: 1%;">

	<form>
		<div class="row" style="width: 100%; border: 1px solid black; padding-top: 1%; ">
			<div class="col-md-4">
									<div class="form-group">
    				<label for="exampleInputEmail1">Asset type</label>
    				<select>
    					<option>VDI</option>
    					<option>DESKTOP</option>
    				</select>
  					</div>

					<div class="form-group">
   					 <label for="exampleInputPassword1">Model</label>
    					<input type="text"  id="exampleInputPassword1" placeholder="EG HP , DELL">
  					</div>

 					 <div class="form-group">
   					 <label for="exampleInputEmail1">Serial no</label>
  					  <input type="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EG 2DSS...">
 					 </div>
 					 <div class="form-group">
   					 <label for="exampleInputPassword1">Model no</label>
   					 <input type="text"  id="exampleInputPassword1" placeholder="EG CNC2...">
 					 </div>

			</div>

			<div class="col-md-4">

					<div class="form-group">
   					 <label for="exampleInputPassword1">Monitor Model</label>
   					 <input type="text"  id="exampleInputPassword1" placeholder="EG HP , DELL">
  					</div>

 					 <div class="form-group">
   					 <label for="exampleInputPassword1">Monitor Serial no</label>
   					 <input type="text"  id="exampleInputPassword1" placeholder="EG 8CG...">
  					</div>

  					<div class="form-group">
    					<label for="exampleInputPassword1">Monitor Asset tag</label>
   					 <input type="text"  id="exampleInputPassword1" placeholder="">
  					</div>
				
			</div>
			 	<div class="col-md-3">
 						 <div class="form-check">
   				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Domain</label>
  				</div>
				<div class="form-check">
   				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Laps</label>
  				</div>
				<div class="form-check">
   				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
   				 <label class="form-check-label" for="exampleCheck1">ADSS</label>
 				 </div>

				<div class="form-check">
   				 <input type="checkbox" class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">KASPESKI</label>
 				 </div>
 				 <div class="form-check">
    				<input type="checkbox" class="form-check-input" id="exampleCheck1">
   				 <label class="form-check-label" for="exampleCheck1">Wake on LAN</label>
  				</div>
  				
 	</div>
		</div>



<div class="row" style="width: 100%; border:1px solid black; padding-top: 1%;">
	<div class="col-md-4">
				 <div class="form-group" style="margin-top: 3%;">
    			<label for="exampleInputPassword1">Mac address</label>
  		 		 <input type="text"  id="exampleInputPassword1" placeholder="Ethernet adapter">
  				</div>

				<div class="form-group">
   				 <label for="exampleInputPassword1">Computer Name</label>
   				 <input type="text"  id="exampleInputPassword1" placeholder="Eg 6A01xxxxxxx">
  				</div>
				<div class="form-group">
    			<label for="exampleInputPassword1">OS</label>
  			 			 <input type="text"  id="exampleInputPassword1" placeholder="EG windows 10">
 			 </div>
				
	</div>
	<div class="col-md-4">
				
			
 			 				
  					
				<div class="form-group">
   				 <label for="exampleInputPassword1">Ram</label>
   				 <input type="text"  id="exampleInputPassword1" placeholder="Ram size in GB">
  				</div>
  					<div class="form-group">
    				<label for="exampleInputPassword1">OS</label>
   				 <input type="text"  id="exampleInputPassword1" placeholder="Windows 10">
  				</div>
  				
 				<div class="form-group">
   			 <label for="exampleInputPassword1">Done By</label>
   			 <input type="text"  id="exampleInputPassword1" placeholder="Full names">
 			 </div>


 	
 	</div>


</div>
 <h5 style="text-align: center; margin-top: 1%">Current Owner</h5>
 <div class="row" style="width: 100%; border:1px solid black; padding-top: 1%;">

				

				<div class="form-group" style="margin-right: 0.5%;">
   				 <label for="exampleInputPassword1">Full Name</label>
   				 <input type="text"  id="exampleInputPassword1" >
  				</div>
				<div class="form-group" style="margin-right: 0.5%;">
    			<label for="exampleInputPassword1">P/No</label>
  			 			 <input type="number"  id="exampleInputPassword1">
 			 </div>
				

			
 			 				
  					
				<div class="form-group" style="margin-right: 0.5%;">
   				 <label for="exampleInputPassword1">Current Location</label>
   				 <input type="text"  id="exampleInputPassword1" placeholder="Floor and room no">
  				</div>
  					<div class="form-group" style="margin-right: 0.5%;">
    				<label for="exampleInputPassword1">Dept/Division</label>
   				 <input type="text"  id="exampleInputPassword1" placeholder="Eg DTD">
  				</div>
  				
 				<div class="form-group" >
   			 <label for="exampleInputPassword1">Section</label>
   			 <input type="text"  id="exampleInputPassword1" placeholder="Eg BMS">
 			 </div>
			<div class="form-group">
   			 <label for="exampleInputPassword1">Date</label>
   			 <input type="date"  id="exampleInputPassword1" >
 			 </div>






</div>
 
 









  <button type="submit" class="btn btn-primary" style="margin-top: 2%">Deploy</button>
</form>
</section>
</center>



</body>

</html>