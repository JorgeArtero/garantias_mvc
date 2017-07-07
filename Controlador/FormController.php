<?php 



if (isset($_GET['p'])) {
	$p=$_GET['p'];
}else{
	$p='inicio';
}


switch ($p) {

	case 'inicio':
		include ('Vista/inicio.php');
		break;

	case 'informacion':
		
		include ('Vista/parte1.php');
		break;

	case 'parte2':
		include ('Vista/parte2.php');
		break;

	case 'parte3':		
		include ('Vista/parte3.php');
		break;

	case 'recuperar':
		include 'Vista/recuperarSorteo.php';
		break;

	case 'mostrar':
		include 'Vista/mostrar.php';
		break;	

	case 'reenviar':
		include 'Vista/reenviar.php';
		break;
	
	default:
		break;
}
?>