<?php
include('../auth.php.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>IVMMS: Management and Monitoring System of Immunization Vaccine in the Municipality of Mabini</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
</head>
<body>

<div id="header" style="background-color:#03FFF7">
  
  <center><h3 style="color:#000;margin-top:10px">IVMMS: Management and Monitoring System of Immunization Vaccine in the Municipality of Mabini</h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">

  </ul>
</div>

<div id="sidebar" style="background-color:#00DDFF">
<a href="#" class="visible-phone">
<i class="icon icon-home"></i> Menu</a>
<ul>
  <li class="active"><a href="index.php"> <span style="color:#000">User Management</span></a> </li>
    <!-- <li class="active"><a href="schedule.php"> <span style="color:#000">Schedule</span></a> </li> -->
   <li class="active"><a href="dashboard.php"> <span style="color:#000">Dashboard</span></a> </li>
	
	
    <li><a href="../logout.php"><span style="color:#000">Logout</span></a></li>
  </ul>
</div>
   
            
<script >
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
			var x = $('#data-table tbody tr:visible').length;
			document.getElementById("box").innerHTML = 'Number of Prisoner: '+x;
					
				});
			});
			
			
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
			
			
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
			
		};
		
			
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			
			LightTableFilter.init();
			
		}
	});
})(document);
//# sourceURL=pen.js
</script>	
<div id="content">
  <div id="content-header">
    
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-content">
          <div class="row-fluid">
				<!-- s -->
					<script>
							
							function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
							</script>
							<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #00DDFF;
  color: #000;
}

input[type=button],input[type=submit] {
  background-color: #00DDFF;
  color: #000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
 <form action="#" method="POST">
		  <h3 style="margin:0px">Add User Information</h2>
		  Name:<br>
		  <input type="text" name="name" required placeholder="Enter your name" class="email"><br>
			Barangay:<br>
			<select name="address" class="email" required>
								<option></option>
								<option>Anilao Proper</option>
<option>Anilao East</option>
<option>Bagalangit</option>
<option>Bulacan</option>
<option>Calamias</option>
<option>Estrella</option>
<option>Gasang</option>
<option>Laurel</option>
<option>Ligaya</option>
<option>Mainaga</option>
<option>Mainit</option>
<option>Majuben</option>
<option>Malimatoc I</option>
<option>Malimatoc II</option>
<option>Nag-Iba</option>
<option>Pilahan</option>
<option>Poblacion</option>
<option>Pulang Lupa</option>
<option>Pulong Anahao</option>
<option>Pulong Balibaguhan</option>
<option>Pulong Niogan</option>
<option>Saguing</option>
<option>Sampaguita</option>
<option>San Francisco</option>
<option>San Jose</option>
<option>San Juan</option>
<option>San Teodoro</option>
<option>Santa Ana</option>
<option>Santa Mesa</option>
<option>Santo Niño</option>
<option>Santo Tomas</option>
<option>Solo</option>
<option>Talaga Proper</option>
<option>Talaga East</option>	
								</select>
	<br>
			Dose:<br>
			<select name="dose" class="email" required>
								<option></option>
<option>First Dose</option>
<option>Second Dose</option>
								
</select>
	<br>
	<input type="submit" name="submit" value="Add Vaccination Record">
</form>

	<form action="rexec.php" method="POST" enctype="multipart/form-data" >

<center>  </center>
							<h3>Personal Information:</h3>
							<hr>
							<input type="hidden" name="sitio">
						<table style="width:100%">
							
						<tr>
								<td>
							Name:
								</td>
								<td>
							<input type="text" name="lname"  class="email">
							</td>
							</tr>
						<tr>
								<td>
							First Name:
								</td>
								<td>
							<input type="text" name="fname"  class="email">
							</td>
							</tr>
						<tr>
							<td>
						Middle Name:
							</td>
								<td>
							<input type="text" name="mname"  class="email">
							</td>
							</tr>
						<tr>
							<td>
						Image:
							</td>
								<td>
							<input type="file" name="file" required  class="email">
							</td>
							</tr>
						<tr>
							<td>
							Address:
							</td>
								<td>
								<select name="address" class="email" required>
								<option></option>
								<option>Anilao Proper</option>
<option>Anilao East</option>
<option>Bagalangit</option>
<option>Bulacan</option>
<option>Calamias</option>
<option>Estrella</option>
<option>Gasang</option>
<option>Laurel</option>
<option>Ligaya</option>
<option>Mainaga</option>
<option>Mainit</option>
<option>Majuben</option>
<option>Malimatoc I</option>
<option>Malimatoc II</option>
<option>Nag-Iba</option>
<option>Pilahan</option>
<option>Poblacion</option>
<option>Pulang Lupa</option>
<option>Pulong Anahao</option>
<option>Pulong Balibaguhan</option>
<option>Pulong Niogan</option>
<option>Saguing</option>
<option>Sampaguita</option>
<option>San Francisco</option>
<option>San Jose</option>
<option>San Juan</option>
<option>San Teodoro</option>
<option>Santa Ana</option>
<option>Santa Mesa</option>
<option>Santo Niño</option>
<option>Santo Tomas</option>
<option>Solo</option>
<option>Talaga Proper</option>
<option>Talaga East</option>	
								</select>
							</td>
							</tr>
						<tr>
							<td>
							Type of House:
							</td>
								<td>
							<select name="type" class="email" >
								<option></option>
								<option>Owned</option>
								<option>Rented</option>
							</select>
							</td>
							</tr>
							</table>
						
						<h3>Contact Details:</h2>
						<hr>
					<table style="width:100%">
				<tr>
				<td>
						Telephone Number:
							</td>
								<td>
							
							<input type="text" name="telephone" class="email">
							</td>
							</tr>
						<tr>
							<td>
							Mobile Number:
							</td>
								<td>
							
							
							<input type="text" name="mobile" class="email" >
						</td>
							</tr>
						<tr>
							<td>
							
						
							Email Address:
							</td>
								<td>
							
							<input type="text" name="email" class="email" >
</td>
							</tr>
						<tr>
							<td>
						Date of Birth:
							</td>
								<td>
							<input type="date" name="bday" class="email" >
</td>
							</tr>
						<tr>
							<td>
							Age:
							</td>
								<td>
							<input type="number" name="age" class="email" >
							</td>
							</tr>
						<tr>
							<td>
							Gender:
							</td>
								<td>
							<select name="sex" class="email">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							<select>
							</td>
							</tr>
						<tr>
							<td>
							Civil Status:
							</td>
								<td>
							<select name="civil" class="email" >
								<option></option>
								<option>Single</option>
								<option>Married</option>
								<option>Widowed</option>
								<option>Separated</option>
							</select>
							</td>
							</tr>
						<tr>
							<td>
							Religion:
							</td>
								<td>
							<input type="text" name="religion" class="email" >
							</td>
							</tr>
						<tr>
							<td>
							Educational Attainment:
							</td>
								<td>
							<select name="education"  class="email">  
								<option></option>
								<option>Elementary Undergraduate</option>
								<option>Elementary Graduate</option>
								<option>High School Undergraduate</option>
								<option>High School Graduate</option>
								<option>College Undergraduate</option>
								<option>College Graduate</option>
								<option>Post Graduate</option>
								<option>Vocational</option>
								<option>None</option>
							</select>
							</td>
							</tr>
						<tr>
							<td>

							Employment Status:
							</td>
								<td>
							
							
							<select name="employment"  class="email">
								<option></option>
								<option>Employed</option>
								<option>Unemployed</option>
							</select>
							</td>
							</tr>
						<tr>
							<td>
							
						
						
							Type of Employment:
							</td>
								<td>
							
							
							<select name="temployment"  class="email">
								<option></option>
								<option>Permanent</option>
								<option>Regular</option>
								<option>Contractual</option>
								<option>Casual</option>
								<option>Self-Employed</option>
								<option>Season</option>
								<option>On Call</option>
							</select>
							
							</td>
							</tr>
</table>		

<h3>Family Member</h2>
						<hr>
			<div id="vi1">
				
				</div>
				
	<script src="jquery.min.js"></script>
    <div id="textboxDiv"></div>  
    <script>  
        $(document).ready(function() {  
            $("#Add").on("click", function() {  
                $("#textboxDiv").append("<div><table width='100%' border='0'><tr><td>Last Name:</td><td><input type='text' name='lname1[]' class='email'></td><td>First Name:</td><td><input type='text' name='name[]' class='email'></td><td>Middle Name:</td><td><input type='text' name='mname1[]' class='email'></td></tr><tr><td>Relationship: </td><td><input type='text' name='relationship[]' class='email' required></td><td></td><td></td></tr></table></div>");  
            });  
            $("#Remove").on("click", function() {  
                $("#textboxDiv").children().last().remove();  
            });  
        });  
    </script>  
		  
						<input type="button" value="Click to add family member" id="Add" class="myButton">
						<br><br>
							
							<input type="submit" value="Submit" name="submit" class="myButton">
			
		  
				
				<!-- e -->
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
</div>
</div>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> </div>
</div>
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.chat.js"></script> 
 

<script type="text/javascript">
  function goPage (newURL) {

      if (newURL != "") {
      
          if (newURL == "-" ) {
              resetMenu();            
          } 
          else {  
            document.location.href = newURL;
          }
      }
  }

function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
