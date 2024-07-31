<html>
<head>
  <title>Form reciept</title>
  <style>
  body {background-color:Lightsteelblue; font-family:Calibri;}
  </style>
 </head>
 <body>
  <p>
     Welcome <?php echo $_POST["fname"]; ?> <br />
	 Your last name is <?php echo $_POST["lname"]; ?> <br />
     Your email address is <?php echo $_POST["email"]; ?> <br />
     Your password is <?php echo $_POST["password"]; ?> <br />
     Your response to how long have you been playing is <?php echo $_POST["less than a year"]; ?> <br />
	 <?php echo $_POST["1 to 3 years"]; ?> <br />
	  <?php echo $_POST["more than 3 years"]; ?> <br />
	  <?php echo $_POST["more than 5 years"]; ?> <br />
	  
     The expansion packs you picked <?php echo $_POST["Get to Work"]; ?> <br />                                    <?php echo $_POST["Get to Together"]; ?> <br />
	 <?php echo $_POST["Cats & Dogs"]; ?> <br /> 
	 <?php echo $_POST["Seasons"]; ?> <br />
	 <?php echo $_POST["Get Famous"]; ?> <br />
	 <?php echo $_POST["Island Living"]; ?> <br />
	 <?php echo $_POST["Discover University"]; ?> <br />
	 <?php echo $_POST["Eco Lifestyle"]; ?> <br />
	 <?php echo $_POST["Snowy Escape"]; ?> <br />
	 <?php echo $_POST["Cottage Living"]; ?> <br />
	 <?php echo $_POST["Highschool Years"]; ?> <br />
	 
	 The feedback you entered <?php echo $_POST["comments"]; ?> <br />
	 
	 </p>
	 
 
	 
  
  
  </body>
 </html>