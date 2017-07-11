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
		
		if (isset($_POST['Continuar'])) {
			switch ($_POST['Marca']) {
				case "scott_bici":
					echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	        		break;

	            case "scott_running":
	            	echo 'Pagina de ' .$_POST['Marca'];
	                //include ('Vista/');
	                break;

	        	case "kswiss":
	        		echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	        		break;

	        	case "adidas":
	        		echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	        		break;

	        	case "mammut":
	        		echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	        		break;
	            
	            case "nordica":
	                echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	                break;

	            case "xbionic":
	                echo 'Pagina de ' .$_POST['Marca'];
	        		//include ('Vista/');
	                break;
				
				default:					
					break;
			}

		}
		
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