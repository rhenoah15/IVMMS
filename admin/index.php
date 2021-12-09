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

<div id="header" style="background-color:#ffffe0">
  
  <center><h3 style="color:#000;margin-top:10px">IVMMS: Management and Monitoring System of Immunization Vaccine in the Municipality of Mabini</h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">

  </ul>
</div>

<div id="sidebar" style="background-color:#CCCC00">
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
  background-color: #CCCC00;
  color: #000;
}

input[type=button] {
  width: 200px;
  background-color: #CCCC00;
  color: #000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
	<?php						
include('../connect.php');
$resultpot = mysql_query("SELECT * FROM member WHERE status = 'Pending' ORDER BY idnumber ASC");
$countpot=mysql_num_rows($resultpot);
?>
		  <input type="button" value="Print" name="submit" class="myButton" onclick="printDiv('printme')">
		 <form action="rex.php" method="POST">
		  <h3 style="margin:0px">Add User Information</h2>
		  Name:<br>
		  <input type="text" name="name" required placeholder="Enter your name" class="email"><br>
		  Gender:<br>
		  <select required name="gender">
			<option></option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		  </select><br>
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
			Birthday:<br>
			<input type="date" name="contact" required placeholder="Enter your birthday" class="email"><br>
		  
	
	<input type="submit" name="submit" value="Add Vaccination Record">
</form>

		  
		  <br><br>
						Search: <input type="search" class="light-table-filter email" data-table="order-table" placeholder="Search"><br>
						<center>
								<br>
								<div class="datagrid">
								
						<table width="100%" border="1" style="border-collapse:collapse;padding:5px" class="tftable order-table table bluetext" id="customers">
							<thead>
							<tr>
								<th><b><center>Name</th>
								
								<th><b><center>Address</th>
								<th><b><center>Birthday</th>
								<th><b><center>Gender</th>
								<th><b><center>Age</th>
								<th><b><center>Details</th>
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$result = mysql_query("SELECT * FROM users order BY TRIM(address) ASC");
while($row = mysql_fetch_array($result))
{
	$gender = $row['gender'];
	if($gender == 'M') {
		$gender = 'Male';
	} else {
		$gender = 'Female';
	}
	$contact = $row['contact'];
	  //$birthDate = "12/17/1983";

  $birthDate = date('m/d/Y',strtotime($contact));
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  //echo "Age is:" . $age;
			echo '<tr>';
			echo '<td valign="top">&nbsp;'.$row['name'].'</td>';
			echo '<td valign="top">&nbsp;'.$row['address'].'</td>';
			echo '<td valign="top">&nbsp;'.$row['contact'].'</td>';
			echo '<td valign="top">&nbsp;'.$age.'</td>';
			echo '<td valign="top">&nbsp;'.$gender.'</td>';
			echo '<td width="35%"><center><a href="v1.php?id='.$row["id"].'">View Vaccination Record</a> | <a href="delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this record? Press OK to continue\')">Delete</a></td>';
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						</div>
		  
		  
		  <div id="printme" style="display:none">
		  	<div class="datagrid">
								
					<table width="100%" border="1" style="border-collapse:collapse;padding:5px" class="tftable order-table table bluetext" id="customers">
							<thead>
							<tr>
								<th><b><center>Name</th>
								
								<th><b><center>Address</th>
								<th><b><center>Contact Number</th>
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$result = mysql_query("SELECT * FROM users order BY name ASC");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td valign="top">&nbsp;'.$row['name'].'</td>';
			echo '<td valign="top">&nbsp;'.$row['address'].'</td>';
			
			echo '<td valign="top">&nbsp;'.$row['contact'].'</td>';
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						</div>
				
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
