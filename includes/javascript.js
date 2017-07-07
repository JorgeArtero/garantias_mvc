$(document).ready(function() {

    $("#marca").change(function() {
        var val = $(this).val();
        switch (val){
        	case "scott_bici":
        		$("#articulo").html("<option value='sct-bici'>BICICLETA</option><option value='sct-casco'>CASCOS</option>");
        		break;

            case "scott_running":
                $("#articulo").html("<option value='run-zapatilla'>ZAPATILLAS</option><option value='run-ropa'>ROPA</option>");
                break;

        	case "kswiss":
        		$("#articulo").html("<option value='ksw-zapatilla'>ZAPATILLAS</option>");
        		break;

        	case "adidas":
        		$("#articulo").html("<option value='ads-zapatilla'>ZAPATILLAS</option><option value='ads-ropa'>ROPA</option>");
        		break;

        	case "mammut":
        		$("#articulo").html("<option value='mmt-hard'>HARDWARE</option><option value='mmt-soft'>SOFTWARE</option><option value='mmt-calzado'>CALZADO</option>");
        		break;

            case "xbionic":
                $("#articulo").html("<option value='xbn-ropa'>ROPA</option>");
                break;
        }
    });
});