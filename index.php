<!--realizado por CRISTHIAN CAMILO ALVAREZ GOMEZ-->

<html> 

<head> 
<title>AUTOL1</title> 
<meta name="robots" content="noindex, nofollow, text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">


<script LENGUAGE="JavaScript">
	function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
 
 
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}

</script>

</head> 

<body>

<form method="POST" name="formulario" action="ProcesarAutol1.php" class="form-inline" role="form" onsubmit="return comprobar(this)"> 

	<div class="container-fluid show-top-margin separate-rows tall-rows">	
		<div class="row show-grid">
				<div class="col-md-8" style="border: 2px solid #666666;  background-color: #666666; height: 120px; width: 150%; margin: 0 auto;">
					<img src="logo.JPEG" WIDTH=180, HEIGTH=100 style="margin: 0.25cm 2cm 2cm 2.75cm">
				</div>
			</div>
	</div>

	<div class="container show-top-margin separate-rows tall-rows">	
		
		
		<br/>
		<div class="row show-grid">

				<div class="col-md-2"><input type="text" class="form-control" placeholder="Nit" name="nit" maxlength="11" onkeypress="return permite(event, 'num')" required="" /></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="DV" name="DV" maxlength="1" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Sucursal" name="sucursal" maxlength="3" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Razón social" name="Razonsocial" maxlength="35" onkeypress="return permite(event, 'car')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Ciclo" name="AÑOMES" maxlength="6" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Tipo de Documento" name="tipoDoc" maxlength="1" onkeypress="return permite(event, 'car')"/></div>
		</div><br/>
		<div class="row show-grid">		
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Dirección de la empresa" name="direccion" maxlength="45" onkeypress="return permite(event, 'num_car')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Codigo de la ciudad" name="cc" maxlength="3" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Codigo del Departamento" name="dep" maxlength="2" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Telefono de la empresa" name="tel" maxlength="7" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Sticker correccion" name="Sticker" maxlength="15" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Tipo vinculado" name="tipovincu" maxlength="1" onkeypress="return permite(event, 'num')"/></div>
		</div><br/>
		<div class="row show-grid">			
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="#Patronal" name="numPatronal" maxlength="10" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" required placeholder="Tipo de cobertura" name="tipoCobertura" maxlength="6" onkeypress="return permite(event, 'num')"/></div>
				<div class="col-md-2"><input type="text" class="form-control" placeholder="S.P.R" name="spr" maxlength="6" onkeypress="return permite(event, 'num')"/></div>
		</div><br/>
				<div class="row show-grid">	
				<div class="col-md-1"><textarea rows="20" class="form-control" required placeholder="Tipo de Documento(C-E-T)" name="tipoDocCET" cols="1"/></textarea></div>
				<div class="col-md-2"><textarea rows="20" class="form-control" required placeholder="Cedula" name="cedula" cols="11" /></textarea></div>
				<div class="col-md-4"><textarea rows="20" class="form-control" required placeholder="Nombre completo" name="nombre" cols="40" /></textarea></div>
				<div class="col-md-1"><textarea rows="20" class="form-control" required placeholder="Novedad pension" name="NovedadPension" cols="1" ></textarea></div>
				<div class="col-md-1"><textarea rows="20" class="form-control" placeholder="Dia Ant. Inic. Nov." name="DiaAIN" cols="2" /></textarea></div>
				<div class="col-md-1"><textarea rows="20" class="form-control" placeholder="Duracion noved." name="DuracionNoved" cols="2" /></textarea></div>
				<div class="col-md-1"><textarea rows="20" class="form-control" required placeholder="Dias trabajados" name="diastrabajados" cols="4" /></textarea></div>
				<div class="col-md-1"><textarea rows="20" class="form-control" required placeholder="IBC" name="IBC" cols="12" /></textarea></div>			
		</div><br/>
		<div class="row show-grid">	
			<div class="col-md-4"><input type="text" class="form-control" required placeholder="Ruta donde se guardara" name="ruta" maxlength="500" onclick="valida()"/></div>
			<div class="col-md-1"><button type="submit" class="btn btn-primary">Guardar</button></div>
		</div>
	</div>
</form> 
</body> 

</html>