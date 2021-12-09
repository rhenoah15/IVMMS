<?php
include('../connect.php');
$id = $_GET['id'];

$result = mysql_query("SELECT * FROM member  WHERE id = '$id'");
while($row = mysql_fetch_array($result))
{
$idnumber= $row['idnumber'];
$lname= $row['lname'];
$fname= $row['fname'];
$mname= $row['mname'];
$mental= '';
$cause= '';
$assess= '';
$address= $row['address'];
$type= $row['type'];
$telephone= $row['telephone'];
$mobile= $row['mobile'];
$email= $row['email'];
$bday= $row['bday'];
$age= $row['age'];
$sex= $row['sex'];
$civil= $row['civil'];
$religion= $row['religion'];
$education= $row['education'];
$employment= $row['employment'];
$temployment= $row['temployment'];
$status = 'Pending';
$password = '';
$municipality = '';
$description = '';
$flname = $row['flname'];
$ffname = $row['ffname'];
$fmname = $row['fmname'];
$fage = $row['fage'];
$foccu = $row['foccu'];
$fea = $row['fea'];
$fcivil = $row['fcivil'];
$mlname = $row['mlname'];
$mfname = $row['mfname'];
$mmname = $row['mmname'];
$mage = $row['mage'];
$moccu = $row['moccu'];
$mea = $row['mea'];
$mcivil = $row['gcivil'];
$glname = $row['glname'];
$gfname = $row['gfname'];
$gmname = $row['gmname'];
$gage = $row['gage'];
$goccu = $row['goccu'];
$gea = $row['gea'];
$gcivil = $row['gcivil'];
$lname1 = $row['lname1'];
$fname1 = $row['fname1'];
$mname1 = $row['mname1'];
$age1 = $row['age1'];
$occu1 = $row['occu1'];
$ea1 = $row['ea1'];
$civil1 = $row['civil1'];
$lname2 = $row['lname2'];
$fname2 = $row['fname2'];
$mname2 = $row['mname2'];
$age2 = $row['age2'];
$occu2= $row['occu2'];
$ea2 = $row['ea2'];
$civil2 = $row['civil2'];
$lname3 = $row['lname3'];
$fname3 = $row['fname3'];
$mname3 = $row['mname3'];
$age3 = $row['age3'];
$occu3 = $row['occu3'];
$ea3 = $row['ea3'];
$civil3 = $row['civil3'];
$lname4 = $row['lname4'];
$fname4 = $row['fname4'];
$mname4 = $row['mname4'];
$age4 = $row['age4'];
$occu4 = $row['occu4'];
$ea4 = $row['ea4'];
$civil4 = $row['civil4'];
$lname5 = $row['lname5'];
$fname5 = $row['fname5'];
$mname5 = $row['mname5'];
$age5 = $row['age5'];
$occu5 = $row['occu5'];
$ea5 = $row['ea5'];
$civil5 = $row['civil5'];
$v1 = $row['v1'];
$v2 = $row['v2'];
$v3 = $row['v3'];
$kind1 = $row['kind1'];
$kind2 = $row['kind2'];
$kind3 = $row['kind3'];
$color1 = $row['color1'];
$color2 = $row['color2'];
$color3 = $row['color3'];
$plate1 = $row['plate1'];
$plate2 = $row['plate2'];
$plate3 = $row['plate3'];
$image = $row['image'];

	
}
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
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=button] {
  width: 200px;
  background-color: #00DDFF;
  color: #000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
	  <br>
		  <script>
							
							function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
							</script>
		  <input type="button" value="Print" name="submit" class="myButton" onclick="printDiv('printme')">
		  <div id="printme">
		  
		  
<center>

		<img src="../f1/<?php echo $image ?>" style="width:250px;height:250px">
   </center>
		  	<form action="rexec.php" method="POST" enctype="multipart/form-data" >
				<br>
					
		   <table border="0" style="font-size:14px;width:90%" class="bluetext">
		   
						<tr>
							<td colspan="3"><b>Personal Information:</td>
							
						</tr>
						<tr>
							<td>Username:</td>
							<td><b></td>
						
							<td><?php echo $idnumber ?></td>
							
						</tr>
						<tr>
							<td valign="middle">Last Name:</td>
							<td>&nbsp;</td>
							<td><?php echo $lname ?></td>
						
							<td valign="middle">First Name:</td>
							<td>&nbsp;&nbsp;&nbsp;</td>
							<td><?php echo $fname ?></td>
							<td>&nbsp;&nbsp;&nbsp;</td>
							<td valign="middle">Middle Name:</td>
							<td>&nbsp;&nbsp;&nbsp;</td>
							<td><?php echo $mname ?></td>
						</tr>
						
					
						<tr>
							<td>Address:</b></td>
							<td></td>
							<td><?php echo $address ?></td>
						</tr>
						<tr>
							<td>Type of House:</td>
							<td></td>
							<td>
							<?php echo $type ?>
							</td>
						</tr>
						
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Contact Details:</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Telephone Number:</td>
							<td></td>
							<td><?php echo $telephone ?></td>
							<td>Mobile Number:</td>
							<td></td>
							<td><?php echo $mobile ?></td>
						<tr>
							<td>Email Address:</td>
							<td></td>
							<td><?php echo $email ?></td>
							<td>Date of Birth:</td>
							<td></td>
							<td><?php echo $bday ?></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td></td>
							<td><?php echo $age ?></td>
							<td>Sex:</td>
							<td></td>
							<td>
							<?php echo $sex ?>
							</td>
						</tr>
						<tr>
							<td>Civil Status:</td>
							<td></td>
							<td>
							<?php echo $civil ?>
							</td>
							<td>Religion:</td>
							<td></td>
							<td><?php echo $religion ?></td>
						</tr>
						<tr>
							<td>Educational Attainment:</td>
							<td></td>
							<td>
							<?php echo $education ?>
							</td>
							<td>Employment Status:</td>
							<td></td>
							<td>
							<?php echo $employment ?>
							</td>
						</tr>
						<tr>
							<td>Type of Employment:</td>
							<td></td>
							<td>
							<?php echo $temployment ?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>&nbsp;</td>
							<td></td>
						</tr>
						
						<tr>
							<td><b>Family Member:</td>
							<td></td>
							<td><b>Relationship</td>
						</tr>
						
	<?php
			$result1 = mysql_query("SELECT * FROM familymember  WHERE username = '$idnumber'");
			while($row1 = mysql_fetch_array($result1))
		{
	
						echo'<tr>';
						echo'	<td>'.$row1['name'].' '.$row1['lname'].' '.$row1['mname'].'</td>';
						echo'	<td></td>';
						echo'	<td>'.$row1['relationship'].'</td>';
						echo'</tr>';
	
	}
		?>
						</table>
						
		
					
							</form>
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
