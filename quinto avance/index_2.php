<!DOCTYPE html>
<html>
<head>
	<title>Test export csv</title>
</head>
<body>
	<table id="mytable">
		<tr>
		<th>Name</th>
		<th>Name2</th>
		<th>Name3</th>
		</tr>
		<tr>
		<td>Nancy</td>
		<td>Nanco</td>
		<td>Barrios</td>
		</tr>
		<tr>
		<td>Nancy</td>
		<td>Nanco</td>
		<td>Barrios</td>
		</tr>
		<tr>
		<td>Nancy</td>
		<td>Nanco</td>
		<td>Barrios</td>
		</tr>
	</table>
	<button onclick="doCsv()">Generar CSV</button>
	<script type="text/javascript">
		function doCsv(){
				var table = document.getElementById("mytable").innerHTML;
				var data = table.replace(/<thead>/g, '')
						.replace(/<\/thead>/g, '')
						.replace(/<tbody>/g, '')
						.replace(/<\/tbody>/g, '')
						.replace(/<tr>/g, '')
						.replace(/<\/tr>/g, '\r\n')
						.replace(/<input>/g, '')
						.replace(/<th>/g, '')
						.replace(/<\/th>/g, '|')
						.replace(/<td>/g, '')
						.replace(/<\/td>/g, '|')
						.replace(/\t/g, '')
						.replace(/\n/g, '');
				//alert(data);
				var mylink = document.createElement('a');
				mylink.download = "csvname.csv";
				mylink.href = "data:application/csv," + escape(data);
				mylink.click();
		}
	</script>
</body>
</html>