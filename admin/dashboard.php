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

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
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
#datatable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
}

#datatable td, #datatable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#datatable tr:nth-child(even){background-color: #f2f2f2;}

#datatable tr:hover {background-color: #ddd;}

#datatable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #CCCC00;
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
  background-color: #CCCC00;
  color: #000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<!--<input type="button" value="Age Record" onclick="window.location='age.php'">-->
	<?php						
include('../connect.php');
$resultpot = mysql_query("SELECT * FROM member WHERE status = 'Pending' ORDER BY idnumber ASC");
$countpot=mysql_num_rows($resultpot);
?>
		
		  
		  <br><br>
						<center>
						<table style="width:100%">
							<tr>
								<td width="50%" valign="top"><div id="container" ></div></td>
								<td width="50%" valign="top"><div id="container1" ></div></td>
							</tr>
						</table>
						<div id="container2" ></div>
						<div id="container3" ></div>
						
								<br>
								<div class="datagrid">
								
						<table width="100%" border="1" style="border-collapse:collapse;padding:5px;display:none" class="tftable order-table table bluetext" id="datatable" style="">
							<thead>
							<tr>
								<th><b><center>Barangay</th>
								<th><b><center>Total Number of Vaccinated Resident</th>
								
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$result = mysql_query("SELECT TRIM(address) as address,count(*) as total FROM users GROUP BY TRIM(address)");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td valign="top">'.$row['address'].'</td>';
			
			echo '<td valign="top">'.$row['total'].'</td>';
			
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						
						
						<table width="100%" border="1" style="border-collapse:collapse;padding:5px;display:none" class="tftable order-table table bluetext" id="datatable1" style="display:none">
							<thead>
							<tr>
								<th><b><center>Age</th>
								<th><b><center>Total Number of User</th>
								
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$resulta = mysql_query("SELECT year(contact) AS con, COUNT(*) as total FROM users GROUP BY year(contact)");
while($rowa = mysql_fetch_array($resulta))
{
			echo '<tr>';
			echo '<td valign="top">Year|'.$rowa['con'].'</td>';
			
			echo '<td valign="top">'.$rowa['total'].'</td>';
			
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						<table width="100%" border="1" style="border-collapse:collapse;padding:5px;display:none" class="tftable order-table table bluetext" id="datatable2" style="display:none">
							<thead>
							<tr>
								<th><b><center>Gender</th>
								<th><b><center>Total Number of User</th>
								
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$resulta = mysql_query("SELECT gender, COUNT(*) as total FROM users WHERE gender = 'M' GROUP BY gender");
while($rowa = mysql_fetch_array($resulta))
{
			echo '<tr>';
			echo '<td valign="top">Male</td>';
			
			echo '<td valign="top">'.$rowa['total'].'</td>';
			
			echo '</tr>';
}
?>

			<?php
include('../connect.php');

$resulta = mysql_query("SELECT gender, COUNT(*) as total FROM users WHERE gender = 'F' GROUP BY gender");
while($rowa = mysql_fetch_array($resulta))
{
			echo '<tr>';
			echo '<td valign="top">Female</td>';
			
			echo '<td valign="top">'.$rowa['total'].'</td>';
			
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						<table width="100%" border="1" style="border-collapse:collapse;padding:5px;display:none" class="tftable order-table table bluetext" id="datatable3" style="display:block">
							<thead>
							<tr>
								<th><b><center>Vaccine</th>
								<th><b><center>Total Number of User</th>
								
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');

$resulta = mysql_query("SELECT vaccine, COUNT(*) as total FROM record GROUP BY vaccine");
while($rowa = mysql_fetch_array($resulta))
{
			echo '<tr>';
			echo '<td valign="top">'.$rowa['vaccine'].'</td>';
			
			echo '<td valign="top">'.$rowa['total'].'</td>';
			
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
						</div>
		  
		  <script type="text/javascript">//<![CDATA[


Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Total number of resident per barangay'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});



Highcharts.chart('container1', {
    data: {
        table: 'datatable1'
    },
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total number of resident per age'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container2', {
    data: {
        table: 'datatable2'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total number of resident per gender'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container3', {
    data: {
        table: 'datatable3'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Vaccine Record'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
						</script>
				
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
