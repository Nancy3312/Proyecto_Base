// JavaScript Document
            $(document).ready(function(){
                fn_dar_eliminar();
                $("#frm_usu").validate();
                $("a.limpia").click(function(){
    				$("#grilla > tbody").empty();
    				cantidad=0
                });
                fn_cantidad();
            });
			
			function fn_cantidad(){
				cantidad = $("#grilla tbody").find("tr").length;
				$("#span_cantidad").html(cantidad);
			};
			function fn_dar_limpiar(){
				alert("Usuario agregado");
				document.getElementById("grilla").deleteRow(0);
			};
            
            function fn_agregar(){
            	if (cantidad == 0) {
            		var contador=1;
                    for (i = 0; i < $("#valor_num").val(); i++) {
                    cadena = "<tr class='border'>";
                    cadena = cadena + "<td>"+contador+"</td>";
                    cadena = cadena + "<td><input type='text' placeholder='nombre del Campo'/></td>";
                    cadena = cadena + "<td><select name='tipo' id='tipo'><option>Seleccione el tipo de dato</option><option>Int</option><option>Varchar</option><option>Char</option><option>Date</option></select></td>";
                    cadena = cadena + "<td><input type='text' placeholder='Longuitud'/></td>";
                    cadena = cadena + "<td><a class='elimina'><img src='delete.png' /></a></td>";
                    cadena = cadena + "</tr>";
                    contador +=1;
                    $("#grilla tbody").append(cadena);
                    }
            	}
            	else if (cantidad==$("#valor_num").val()) {
            		var contador=cantidad+1;
                    for (i = 0; i < $("#valor_num").val(); i++) {
                    cadena = "<tr>";
                    cadena = cadena + "<td>"+contador+"</td>";
                    cadena = cadena + "<td><input type='text' placeholder='nombre del Campo'/></td>";
                    cadena = cadena + "<td><select name='tipo' id='tipo'><option>Seleccione el tipo de dato</option><option>Int</option><option>Varchar</option><option>Char</option><option>Date</option></select></td>";
                    cadena = cadena + "<td><input type='text' placeholder='Longuitud'/></td>";
                    cadena = cadena + "<td><a class='elimina'><img src='delete.png' /></a></td>";
                    contador +=1;
                    $("#grilla tbody").append(cadena);
                    }
				}else {
            		var contador=cantidad;
                    for (i = 0; i < $("#valor_num").val(); i++) {
                    cadena = "<tr>";
                    cadena = cadena + "<td>"+contador+"</td>";
                    cadena = cadena + "<td><input type='text' placeholder='nombre del Campo'/></td>";
                    cadena = cadena + "<td><select name='tipo' id='tipo'><option>Seleccione el tipo de dato</option><option>Int</option><option>Varchar</option><option>Char</option><option>Date</option></select></td>";
                    cadena = cadena + "<td><input type='text' placeholder='Longuitud'/></td>";
                    cadena = cadena + "<td><a class='elimina'><img src='delete.png' /></a></td>";
                    contador +=1;
                    $("#grilla tbody").append(cadena);
                    }
				}
                fn_dar_eliminar();
				fn_cantidad();
                //alert("Usuario agregado");
            };
            
            function fn_dar_eliminar(){
                $("a.elimina").click(function(){
                    id = $(this).parents("tr").find("td").eq(0).html();
                    respuesta = confirm("Desea eliminar el Campo: " + id);
                    if (respuesta){
                        $(this).parents("tr").fadeOut("normal", function(){
                            $(this).remove();
                            alert("Campo " + id + " eliminado")
                            /*
                                aqui puedes enviar un conjunto de datos por ajax
                                $.post("eliminar.php", {ide_usu: id})
                            */
                        })
                    }
                });
            };