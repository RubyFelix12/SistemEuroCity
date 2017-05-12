<!DOCTYPE html>
<html lang="en">

<head>

	<title>Listado de Clientes Conectados.</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="http://m.vw.com.mx/apps/vwd4_mobile/docroot276550791/frontend/resources/img/favicon.ico">
	
    <link rel="icon" type="image/ico" href="favicon.ico"/>

	<meta charset="UTF-8">

	<style>

		table {
    		width: 100%;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
		th, td {
			border-bottom: 1px solid #ddd;
		}
		th{
			text: bold;
			background-color: #4CAF50;
    		color: white;
		}

		div img {
  position: absolute;
  left: 25px
  width: 80px;
  height: 80px;
}

	</style>
</head>
<body>
</div>
<div>

			<img src='../public/img/logo.png' align="left">
			 <DIV ALIGN="left"><BR>&nbsp;&nbsp;&nbsp;Volkswagen EuroCity por el Zapata</BR>
             <BR>&nbsp;&nbsp;&nbsp;Blv. Emiliano Zapata No.455Pte.</BR>  
             <BR>&nbsp;&nbsp;&nbsp;Col. Guadalupe, Culiacan sinaloa
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B>"REPORTE DE CLIENTES"</B></BR>  
  </div>


   
     <hr>
           
       

	<DIV ALIGN=center><h4>"HISTORIAL DE CORREOS EXISTENTES EN EL SISTEMA"</h4></div>
	<table>
		<tr class="fondo">
			<!--td>ID</td-->

			<th><b>CORREO ELECTRÓNICO</th></b>
			<th><b>CONTRASEÑA</th></b>
			<th><b>AÑO/MES/DIA</th></b>

		</tr>
		@foreach($clientes as $c) 
			<tr>
				<!--td>{{$c->ID}}</td-->
				<td>{{$c->Correo}}</td>
				<td>{{$c->Password}}</td>
				<td>{{$c->created_at}}</td>

			</tr>
		@endforeach
	</table>
</body>
</html>

