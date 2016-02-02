function Validacion(){
	if(document.getElementById("txtnombd").value==""){
        document.getElementById("msn1").setAttribute("style", "dysplay:auto; color:red;");
        document.getElementById("txtnomtb").focus();
        document.getElementById("msn2").setAttribute("style", "display: none;");
        document.getElementById("txtnumreg").focus();
        document.getElementById("msn3").setAttribute("style", "display: none;");
        
    }else if(document.getElementById("txtnomtb").value==""){
            document.getElementById("msn2").setAttribute("style", "dysplay:auto; color:red;");
            document.getElementById("txtnombd").focus();
            document.getElementById("msn1").setAttribute("style", "display: none;");
            document.getElementById("txtnum").focus();
            document.getElementById("msn3").setAttribute("style", "display: none;");
            
    }else if(document.getElementById("txtnum").value==""){
        document.getElementById("msn3").setAttribute("style", "dysplay:auto; color:red;");
        document.getElementById("txtnombd").focus();
        document.getElementById("msn1").setAttribute("style", "display: none;");
        document.getElementById("txtnomtb").focus();
        document.getElementById("msn2").setAttribute("style", "display: none;");

    }else{
        
        document.getElementById("msn1").setAttribute("style", "dysplay: none;");
        document.getElementById("msn2").setAttribute("style", "dysplay: none;");
        document.getElementById("msn3").setAttribute("style", "dysplay: none;");
        document.frmpl.submit();
    }
}    

/*
	icremento =0;
	function crear(obj) {
	  icremento++;
	 
	  field = document.getElementById('field');
	 contenedor = document.createElement('div');
	  contenedor.id = 'div'+icremento;
	  field.appendChild(contenedor);
	 
	  boton = document.createElement('input');
	  boton.type = 'text';
	  boton.name = 'txtnom'+'[ ]';
	  contenedor.appendChild(boton);
	 
	}*/