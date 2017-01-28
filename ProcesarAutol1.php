<?php 

$nit = $_POST["nit"];
$DV = $_POST["DV"];
$sucursal = $_POST["sucursal"];
$Razonsocial = $_POST["Razonsocial"];
$AÑOMES = $_REQUEST["AÑOMES"];
$tipoDoc = $_POST["tipoDoc"];
$direccion = $_POST["direccion"];
$cc = $_POST["cc"];
$dep = $_POST["dep"];
$tel = $_POST["tel"];
$Sticker = $_POST["Sticker"];
$tipovincu = $_POST["tipovincu"];
$numPatronal = $_POST["numPatronal"];
$tipoCobertura = $_POST["tipoCobertura"];
$spr = $_POST["spr"];
$tipoDocCET = $_POST["tipoDocCET"];
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$NovedadPension = $_POST["NovedadPension"];
$DiaAIN = $_POST["DiaAIN"];
$DuracionNoved = $_POST["DuracionNoved"];
$diastrabajados = $_POST["diastrabajados"];
$IBC = $_POST["IBC"];
$ruta = $_POST["ruta"];

$tipoDocCET1 = chop($tipoDocCET);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$tipoDocCET2 = nl2br($tipoDocCET1);         // Agregamos los saltos de linea <br /> 
$array_tipoDocCET = explode("<br />", $tipoDocCET2); // Creamos array con los datos recibidos  
$cuenta_tipoDocCET = count($array_tipoDocCET);     // Asi contamos los valores del array 

$cedulas = chop($cedula);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$cedulass = nl2br($cedulas);         // Agregamos los saltos de linea <br /> 
$array_Cedula = explode("<br />", $cedulass); // Creamos array con los datos recibidos  
$cuenta_Cedula = count($array_Cedula);     // Asi contamos los valores del array 

$nombre1 = trim($nombre);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$nombre2 = nl2br($nombre1);         // Agregamos los saltos de linea <br /> 
$array_nombre = explode("<br />", $nombre2);  
$cuenta_nombre = count($array_nombre); 

$NovedadPension1 = chop($NovedadPension);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$NovedadPension2 = nl2br($NovedadPension1);         // Agregamos los saltos de linea <br /> 
$array_NovedadPension = explode("<br />", $NovedadPension2);  // Creamos array con los datos recibidos  
$cuenta_NovedadPension = count($array_NovedadPension); // Asi contamos los valores del array 

$DiaAIN1 = chop($DiaAIN);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$DiaAIN2 = nl2br($DiaAIN1);         // Agregamos los saltos de linea <br /> 
$array_DiaAIN = explode("<br />", $DiaAIN);  // Creamos array con los datos recibidos  
$cuenta_DiaAIN = count($array_DiaAIN);// Asi contamos los valores del array

$DuracionNoved1 = chop($DuracionNoved);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$DuracionNoved2 = nl2br($DuracionNoved1);         // Agregamos los saltos de linea <br /> 
$array_DuracionNoved = explode("<br />", $DuracionNoved);  // Creamos array con los datos recibidos  
$cuenta_DuracionNoved = count($array_DuracionNoved);// Asi contamos los valores del array

$diastrabajados1 = chop($diastrabajados);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$diastrabajados2 = nl2br($diastrabajados1);         // Agregamos los saltos de linea <br /> 
$array_diastrabajados = explode("<br />", $diastrabajados2);  // Creamos array con los datos recibidos  
$cuenta_diastrabajados = count($array_diastrabajados);// Asi contamos los valores del array

$IBC1 = chop($IBC);    // Elimina saltos de linea y espacio, pero solo al final de la cadena 
$IBC2 = nl2br($IBC1);         // Agregamos los saltos de linea <br /> 
$array_IBC = explode("<br />", $IBC2);  // Creamos array con los datos recibidos  
$cuenta_IBC = count($array_IBC);// Asi contamos los valores del array
$sumaIBC = array_sum(preg_replace('/[^0-9]+/', '',$array_IBC));

$semanaSiguiente = time() + (7 * 24 * 60 * 60);
                   // 7 días; 24 horas; 60 minutos; 60 segundos

// salario minimo legal vijete
if ($AÑOMES >= 199501) {
    $smd =3964.45;
}
if ($AÑOMES >= 199601) {
    $smd =4737.50;
}
if ($AÑOMES >= 199701) {
    $smd =5733.50;
}
if ($AÑOMES >= 199801) {
    $smd =6794.20;
}
if ($AÑOMES >= 199901) {
    $smd =7882.00;
}
if ($AÑOMES >= 200001) {
    $smd =8670.00;
}
if ($AÑOMES >= 200101) {
    $smd =9533.33;
}
if ($AÑOMES >= 200201) {
    $smd =10300.00;
}
if ($AÑOMES >= 200301) {
    $smd =11066.67;
}
if ($AÑOMES >= 200401) {
    $smd =11933.33;
}
if ($AÑOMES >= 200501) {
    $smd =12716.67;
}
if ($AÑOMES >= 200601) {
    $smd =13600.00;  
}
if ($AÑOMES >= 200701) {
    $smd =14456.67;
}
if ($AÑOMES >= 200801) {
    $smd =15383.33;
}
if ($AÑOMES >= 200901) {
    $smd =16563.33;
}
if ($AÑOMES >= 201001) {
    $smd =17166.67;
}
if ($AÑOMES >= 201101) {
    $smd =17853.33;
}
if ($AÑOMES >= 201201) {
    $smd =18890.00;
}
if ($AÑOMES >= 201301) {
    $smd =19650.00;
}
if ($AÑOMES >= 201401) {
    $smd =20533.33;
}
if ($AÑOMES >= 201501) {
    $smd =21478.33;
}
if ($AÑOMES >= 201601) {
    $smd =22981.83;
}
if ($AÑOMES >= 201701) {
    $smd =24590.56;
}


//aporte de seguridad pensional
if ($AÑOMES <= 201712)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $DT=$array_diastrabajados[$i];
        $array_AportePension[$i] = (($salario/$DT)*0.16)*$DT;
    }
}
if ($AÑOMES <= 200712)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $DT=$array_diastrabajados[$i];
        $array_AportePension[$i] = (($salario/$DT)*0.155)*$DT;
    }
}
if ($AÑOMES <= 200512)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $array_AportePension[$i] = ($salario*0.15);
    }
}
if ($AÑOMES <= 200412)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $array_AportePension[$i] = ($salario*0.145);
    }
}
if ($AÑOMES <= 200312)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $array_AportePension[$i] = ($salario*0.135);
    }
}
if ($AÑOMES <= 199512)
{
    for ($i=0; $i < $cuenta_IBC; $i++) 
    { 
        $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$i]);
        $array_AportePension[$i] = ($salario*0.125);
        echo $array_AportePension[16];
    }
}

echo floor($array_AportePension[0]);

//aporte de FSP

 for ($x=0; $x < $cuenta_Cedula; $x++)
{
    $salario = preg_replace('/[^0-9]+/', '',$array_IBC[$x]);
    if (($salario/$array_diastrabajados[$x]) > ($smd*20))
    {
            $array_AporteFSP[$x] = (str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0),10, "0", STR_PAD_LEFT)*00.02);        
    }
    if (($salario/$array_diastrabajados[$x]) <= ($smd*20))
    {
            $array_AporteFSP[$x] = (str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0),10, "0", STR_PAD_LEFT)*00.018);        
    }
    if (($salario/$array_diastrabajados[$x]) < (($smd*19)+1))
    {
            $array_AporteFSP[$x] = (str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0),10, "0", STR_PAD_LEFT)*00.016);        
    }
    if (($salario/$array_diastrabajados[$x]) < (($smd*18)+1))
    {
            $array_AporteFSP[$x] = (str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0),10, "0", STR_PAD_LEFT)*00.014);        
    }
     if (($salario/$array_diastrabajados[$x]) < (($smd*17)+1))
    {
            $array_AporteFSP[$x] = (str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0),10, "0", STR_PAD_LEFT)*00.012);        
    }
    if (($salario/$array_diastrabajados[$x]) < (($smd*16)+1))
    {
            $array_AporteFSP[$x] = (intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0)*00.01);       
    }
    if (($salario/$array_diastrabajados[$x]) < ($smd*4))
    {
            $array_AporteFSP[$x] = (intval(preg_replace('/[^0-9]+/', '', trim($array_IBC[$x])), 0)*0);;        
    }
}  

$Razonsocial2 = trim($Razonsocial);
$espacios = 35 - strlen($Razonsocial);
for ($i=0; $i < $espacios; $i++)
 { 
    $Razonsocial2 = $Razonsocial2."&nbsp";
}

$direccion2 = trim($direccion);
$espacios6 = 45 - strlen($direccion);
for ($i=0; $i < $espacios6; $i++) { 
    $direccion2 = $direccion2."&nbsp";
}

for ($y=0; $y < $cuenta_Cedula; $y++) { 
    $array_nombre2[$y] = trim($array_nombre[$y]);
    $espacios1 = 25 - strlen(trim($array_nombre2[$y]));
    if (strlen(trim($array_nombre2[$y]))>=25) {
        $array_nombre2[$y] = substr($array_nombre2[$y], 0, 25);
    }
    if (substr_count($array_nombre[$y], 'Ñ')>=1) {
        if (strlen(trim($array_nombre[$y]))>=26) {
        $array_nombre2[$y] = substr(trim($array_nombre[$y]), 0, 26);
    }
    elseif (strlen(trim($array_nombre2[$y]))<26){
    for ($x=0; $x <= $espacios1; $x++) 
        {
        $array_nombre2[$y] = $array_nombre2[$y]."&nbsp";
        
        }
    }
}
    elseif (strlen(trim($array_nombre2[$y]))<25)
    {        
        for ($x=0; $x < $espacios1; $x++) 
        {
        $array_nombre2[$y] = $array_nombre2[$y]."&nbsp";
        
        }
    }
}



for ($i=0; $i < $cuenta_NovedadPension; $i++) { 
    $array_NovedadPension2[$i] = $array_NovedadPension[$i];
    
    if (strlen($array_NovedadPension2[$i])>2) 
    {
        $array_NovedadPension2[$i];
    } 
    elseif ($cuenta_NovedadPension < 2)
        {
            for ($i=0; $i < $cuenta_Cedula; $i++) 
                { 
                    $array_NovedadPension2[$i] = "&nbsp";
                }
        }
}

for ($i=0; $i < $cuenta_DiaAIN; $i++) { 
    $array_DiaAIN[$i] = $array_DiaAIN[$i];
    
    if (strlen($array_DiaAIN[$i])>2) 
    {
        $array_DiaAIN[$i];
    }
    elseif($cuenta_NovedadPension <= 1)
        {
            for ($i=0; $i < $cuenta_Cedula; $i++) 
                { 
                    $array_DiaAIN[$i] = "00";
                }
        }
}

for ($i=0; $i < $cuenta_DuracionNoved; $i++) { 
    $array_DuracionNoved[$i] = $array_DuracionNoved[$i];
    
    if ($cuenta_DuracionNoved > 1) 
    {
        $array_DuracionNoved[$i];
    }
    elseif($cuenta_NovedadPension <= 1)
        {
            for ($i=0; $i < $cuenta_Cedula; $i++) 
                { 
                    $array_DuracionNoved[$i] = "00";
                }
        }
}

$espacios7 = 1 - strlen($spr);
for ($i=0; $i < $espacios7; $i++)
 { 
    $spr2 = $spr."&nbsp";
}



$sumaAporteFSP = array_sum($array_AporteFSP);
$sumaAportePension = array_sum($array_AportePension);


?> 
<html> 

<head> 
<title>AUTOL1</title> 
<meta name="robots" content="noindex, nofollow, text/html; charset=utf-8" /> 
</head> 

<body> 

<?php 
$X = 0;
for($i = 0; $i < $cuenta_Cedula; $i++)
    {
        $totalrenglones = $i+1;
    }

// Imprimimos nuestros valores desde el array para mostrarlos en pantalla 
echo "AUTOL<br/>";
print" 
000500010000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>

000500020000000001000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000100100000000000000N000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>

000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."01000000000000000000000000000000<b>$tipoDoc</b>".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."<b>$Razonsocial2</b>".str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."01<b>$direccion2</b>".str_pad($cc, 3, "0", STR_PAD_LEFT).str_pad($dep, 2, "0", STR_PAD_LEFT)."<b>$tel</b>".str_pad($Sticker, 15, "0", STR_PAD_LEFT).str_pad($tipovincu, 1, "0", STR_PAD_LEFT)."0".str_pad($numPatronal, 10, "0", STR_PAD_LEFT)."000000".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT)."000000".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT)."<b>$tipoCobertura</b>2N&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$spr2."<br/>";

for($i = 0; $i < $cuenta_Cedula; $i++)
    {
        $totalrenglones = $i+1;
        print
        "000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."013".str_pad($i+1, 6, "0", STR_PAD_LEFT)."000000000000000".trim($array_tipoDocCET[$i]).str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_Cedula[$i])), 0),11, "0", STR_PAD_LEFT)."0".$array_nombre2[$i].$array_NovedadPension2[$i]."&nbsp&nbsp".str_pad($array_DiaAIN[$i], 2, "0", STR_PAD_LEFT).str_pad($array_DuracionNoved[$i], 2, "0", STR_PAD_LEFT).str_pad(trim($array_diastrabajados[$i]), 2, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_IBC[$i]))), 0),12, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_AportePension[$i]))), 0),10, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_AporteFSP[$i]))), 0),10, "0", STR_PAD_LEFT)."0000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>";
    }
echo "
000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."015000000000000000000000".str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaIBC)), 0),12, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAportePension)), 0),10, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAporteFSP)), 0),10, "0", STR_PAD_LEFT)."0000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>

000500070000000001000000".str_pad($nit, 11, "0", STR_PAD_LEFT)."<b>$DV</b>".str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000001".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaIBC)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAportePension)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAporteFSP)), 0),14, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>

000500080000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT)."<b>$DV</b>".str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000001".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaIBC)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAportePension)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAporteFSP)), 0),14, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br/>

CINTI<br/>
000000000000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT)."<b>$DV</b>".str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000000".date('Ymd')."000010000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspC<br/>

CINTF<br/>
009999990000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT)."<b>$DV</b>".str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000".str_pad($cuenta_Cedula, 5, "0", STR_PAD_LEFT)."000000000000000000000000000000000000000000000000000000000000000000000000000&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$Razonsocial1 = $Razonsocial;
$espacios = 35 - strlen($Razonsocial);
for ($i=0; $i < $espacios; $i++) { 
    $Razonsocial1 = $Razonsocial1." ";
}

$direccion1 = $direccion;
$espacios6 = 45 - strlen($direccion);
for ($i=0; $i < $espacios6; $i++) { 
    $direccion1 = $direccion1." ";
}


for ($y=0; $y < $cuenta_nombre; $y++) { 
    $array_nombre1[$y] = trim($array_nombre[$y]);
    $espacios1 = 25 - strlen(trim($array_nombre1[$y]));
    if (strlen(trim($array_nombre1[$y]))>=25) {
        $array_nombre1[$y] = substr($array_nombre1[$y], 0, 25);
    }
    if (substr_count($array_nombre[$y], 'Ñ')>=1) {
        if (strlen(trim($array_nombre[$y]))>=26) {
        $array_nombre1[$y] = substr(trim($array_nombre[$y]), 0, 26);
    }
    elseif (strlen(trim($array_nombre1[$y]))<26){
    for ($x=0; $x <= $espacios1; $x++) 
        {
        $array_nombre1[$y] = $array_nombre1[$y]." ";
        
        }
    }
}
    elseif (strlen(trim($array_nombre1[$y]))<25)
    {        
        for ($x=0; $x < $espacios1; $x++) 
        {
        $array_nombre1[$y] = $array_nombre1[$y]." ";
        
        }
    }
}

for ($i=0; $i < $cuenta_NovedadPension; $i++) { 
    $array_NovedadPension1[$i] = $array_NovedadPension[$i];
    
    if (strlen($array_NovedadPension1[$i])>1) 
    {
        $array_NovedadPension1[$i];
    }
    elseif($cuenta_NovedadPension <= 1)
        {
            for ($i=0; $i < $cuenta_Cedula; $i++) 
                { 
                    $array_NovedadPension1[$i] = " ";
                }
        }
}

$espacios17 = 1 - strlen($spr);
for ($i=0; $i < $espacios7; $i++)
 { 
    $spr1 = $spr." ";
}


$file = fopen("$ruta/AUTOL1.txt", "w+");
// Imprimimos nuestros valores desde el array para mostrarlos en pantalla 
fwrite($file, "000500010000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000                                                                                                   " . PHP_EOL);
fwrite($file, "000500020000000001000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000100100000000000000N000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000                                                                 " . PHP_EOL);
fwrite($file, "000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."01000000000000000000000000000000".$tipoDoc.str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."$Razonsocial1".str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."01$direccion1".str_pad($cc, 3, "0", STR_PAD_LEFT).str_pad($dep, 2, "0", STR_PAD_LEFT).$tel.str_pad($Sticker, 15, "0", STR_PAD_LEFT).str_pad($tipovincu, 1, "0", STR_PAD_LEFT)."0".str_pad($numPatronal, 10, "0", STR_PAD_LEFT)."000000".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT)."000000".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT)."$tipoCobertura"."2N                                                                              $spr1" . PHP_EOL);
for($i = 0; $i < $cuenta_Cedula; $i++)
    {        
        fwrite($file, "000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."013".str_pad($i+1, 6, "0", STR_PAD_LEFT)."000000000000000".trim($array_tipoDocCET[$i]).str_pad(intval(preg_replace('/[^0-9]+/', '', trim($array_Cedula[$i])), 0),11, "0", STR_PAD_LEFT)."0".$array_nombre1[$i].$array_NovedadPension1[$i]."  ".str_pad(trim($array_DiaAIN[$i]), 2, "0", STR_PAD_LEFT).str_pad(trim($array_DuracionNoved[$i]), 2, "0", STR_PAD_LEFT).str_pad(trim($array_diastrabajados[$i]), 2, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_IBC[$i]))), 0),12, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_AportePension[$i]))), 0),10, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', trim(floor($array_AporteFSP[$i]))), 0),10, "0", STR_PAD_LEFT)."0000000000                                                                                                                                                                        " . PHP_EOL);

        }
fwrite($file, "000500030000000001000001".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT).str_pad($AÑOMES, 6, "0", STR_PAD_RIGHT)."015000000000000000000000".str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaIBC)), 0),12, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAportePension)), 0),10, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAporteFSP)), 0),10, "0", STR_PAD_LEFT)."0000000000                                          000000000000000000000000000000000000000000                                                                                                                                   " . PHP_EOL);
fwrite($file, "000500070000000001000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000001".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaIBC)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAportePension)), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', floor($sumaAporteFSP)), 0),14, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000                                                                              " . PHP_EOL);
fwrite($file, "000500080000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000001".str_pad($totalrenglones, 6, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', $sumaIBC), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', $sumaAportePension), 0),14, "0", STR_PAD_LEFT).str_pad(intval(preg_replace('/[^0-9]+/', '', $sumaAporteFSP), 0),14, "0", STR_PAD_LEFT)."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000                                                                              " . PHP_EOL);
fclose($file);

$file = fopen("$ruta/CINTI.txt", "w+");
fwrite($file, "000000000000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000000000".date('Ymd')."000010000000000000000000000000                                                                                                                                                                                                                                   C" . PHP_EOL);
fclose($file);

$file = fopen("$ruta/CINTF.txt", "w+");
fwrite($file, "009999990000000000000000".str_pad($nit, 11, "0", STR_PAD_LEFT).str_pad($DV, 1, "0", STR_PAD_LEFT).str_pad($sucursal, 3, "0", STR_PAD_LEFT)."000000000000000".str_pad($totalrenglones, 5, "0", STR_PAD_LEFT)."000000000000000000000000000000000000000000000000000000000000000000000000000                                                                                                                                                                                                " . PHP_EOL);
fclose($file);



?> 


</body> 

</html>