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
				//alert("Usuario agregado");
				document.getElementById("grilla").deleteRow(0);
			};
            
            function fn_agregar(){
                    cadena = "<tr class='border'>";
                    cadena = cadena + "<td id='nomcamp'>"+ $("#txtnomcamp").val(); +"</td>";
                    cadena = cadena + "<td id='tipo'>"+ $("#cmbtipo").val(); +"</td>";
                    cadena = cadena + "<td id='longitud'>"+ $("#cmblongitud").val(); +"</td>";
                    cadena = cadena + "<td id='nombase' style='display:none'>"+ $("#txtnombd").val(); +"</td>";
                    cadena = cadena + "<td id='nomtabla' style='display:none'>"+ $("#txtnomtb").val(); +"</td>";
                    cadena = cadena + "<td id='numregi' style='display:none'>"+ $("#txtnum").val(); +"</td>";
                    cadena = cadena + "<td><a class='elimina'><img src='delete.png' /></a></td>";
                    cadena = cadena + "</tr>";
                    $("#grilla tbody").append(cadena);
                fn_dar_eliminar();
				fn_cantidad();
               // alert("Usuario agregado");
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