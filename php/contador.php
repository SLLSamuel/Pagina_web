<?
#--------------------------------------#
#  http://www.lawebdelprogramador.com  #
#--------------------------------------#
//determin la direccion de descarga
$url_descarga="http://url/archivo.zip";
 
if (is_writeable("contador.txt"))
{
	$arrayfichero=file("contador.txt");
	$arrayfichero[0]++;
	$fichero=fopen("contador.txt","w");
	$grabar=fwrite($fichero,$arrayfichero[0]);
	$cerrar=fclose($fichero);
}
header("location:$url_descarga");
?>