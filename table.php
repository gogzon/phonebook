<?php

$conn= mysqli_connect('localhost' , 'root' , '', 'phonebook');

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM contacts';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Phonebook</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>PHONEBOOK</h>
	<table class="data-table">
		<caption class="title">Conctacts</caption>
		<thead>
			<tr>			
				<th>Name</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>				
			</tr>
		</thead>
		<tbody>
		<?php		
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['Name'].'</td>
					<td>'.$row['Lastname'].'</td>
					<td>'.$row['Phone'].'</td>
					<td>'.$row['Email'].'</td>					
				</tr>';	
		}?>
		</tbody>
		<tfoot>
			<tr>
				
				
			</tr>
		</tfoot>
	</table>
</body>
</html>