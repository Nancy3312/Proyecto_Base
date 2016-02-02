<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title>Base de datos</title>
        <script language="javascript" type="text/javascript" src="jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="jquery.validate.1.5.2.js"></script>
        <script language="javascript" type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="js/Validaciones.js"></script>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>

    <div class="body1" id="page1">
       <div class="body4">
        <div class="main">
    <!-- header -->
            <header>
                <div class="wrapper">
                    <h1>
                        <a href="index.html" id="logo">CREACION </a><span id="slogan">BASE DE DATOS</span>
                    </h1>
                    <div class="right">
                        <nav>
                            <ul id="top_nav">
                                &oacute;
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
<div class="main">
<!-- content -->
  <!--<form name="frmpl" id="frmpl" method="POST"  action="CrearDatos.php" >-->
    <section id="content">
        <article class="col1">
            <div class="pad_1">
                <h2>Vamos a crear una base de datos !!</h2>
                <form action="javascript: fn_agregar();" method="post" id="frm_usu" >
                    <div class="wrapper">
                        Nombre de la Base de Datos:
                        <div class="bg">
                        <input type="text" id="txtnombd" name="txtnombd" class="input input1" required/>
                        <div id="msn1" style="display: none;">Campo Vacio </div>
                        <div><br/></div>
                        </div>
                    </div>
                    <h3>Datos de la tabla</h3>
                    <div class="wrapper">
                        <label style="padding-right:10px;">Nombre de la tabla:</label>
                        <input type="text" id="txtnomtb" name="txtnomtb" class="input input1" required/>
                        <div id="msn2" style="display: none;">Campo Vacio </div>
                        <div><br/></div>
                    </div>
                    <div class="wrapper">
                        <label>Num. de Registros :</label>
                        <input type="text"  name="txtnum" id='txtnum' placeholder="Cantidad" required/>
                        <div id="msn3" style="display: none;">Campo Vacio</div>
                        <!--<input type="button" value="Generar" onclick="Validacion();"/> -->
                    </div>
                    
                    <div id="bloque">
                        <div class="A">
                        <label >Nombre del campo:</label><br/>
                        <input type="text" id="txtnomcamp" name="txtnomcamp" class="input input1" required/>
                        </div>
                        <div class="B">
                            <label >Tipo:</label><br/>
                            <select name='cmbtipo' id='cmbtipo'>
                                <option value='Int'>Int</option>
                                <option value='Varchar'>Vachar</option>
                                <option value='Char'>Char</option>
                            </select>
                        </div>
                        <div class="A">
                            <label >Longitud:</label><br/>
                            <select name='cmblongitud' id='cmblongitud'>
                                <option value='10'>10</option>
                                <option value='20'>20</option>
                                <option value='30'>30</option>
                            </select>
                        </div>
                        <div class="B">
                        <label></label><br/>
                            <input class="Botton" name="agregar" type="submit" id="agregar" value="Agregar" onclick="Validacion();"/>
                    </form>
                        </div>
                    </div>
                    <div><br/></div>
                    <div id="div4">
                    <table id="grilla" class="lista mitabla">
                        <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Longitud</th>
                        <th></th>
                        </tr>
                        </thead>
                        <tbody>
                                            
                        </tbody>
                    </table>
                    </div>
                    <div class="btn_save">
                        <button class="btns" onclick="grabaTodoTabla('grilla');" title="Grabar">
                            GRABAR DATOS
                        </button>
                    </div>
                    <div style="display:none" id="cargando" class="WindowLoad"><img src='images/cargado.gif'></div>
                    <div><br/></div>
                    <div id="respuesta"></div>
            </div>
            </article>

    </section>
  <!-- </form>              

      <!--<form action="javascript: fn_agregar();" method="post" id="frm_usu" >
      <section id="content">
        <article class="col1">
            <table>
                <td>Agregar campo</td>
                <td align="right"><input class="Botton" name="agregar" type="submit" id="agregar" value="Nueva tabla"/></td>
            </table>
        </article>
        </section>
      </form>-->
<!-- / content -->
</div>
<div class="body2">
    <div class="main">
<!-- footer -->
        <footer>
            
        </footer>
<!-- / footer -->
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script> 
<script type="text/javascript">
function ASD(){
    alert("asdasdasd");
}
// Actualiza de manera masiva todos los archivos cargados en la tercera pestaña.
function grabaTodoTabla(TABLAID){
    $('#cargando').show();
    //tenemos 2 variables, la primera será el Array principal donde estarán nuestros datos y la segunda es el objeto tabla
    var DATA    = [],
        TABLA   = $("#"+TABLAID+" tbody > tr");

    //una vez que tenemos la tabla recorremos esta misma recorriendo cada TR y por cada uno de estos se ejecuta el siguiente codigo
    TABLA.each(function(){
        //por cada fila o TR que encuentra rescatamos 3 datos, el ID de cada fila, la Descripción que tiene asociada en el input text, y el valor seleccionado en un select
        var ID      = $(this).find("td[id='nomcamp']").text(),
            DESC    = $(this).find("td[id='tipo']").text(),
            CLAS    = $(this).find("td[id='longitud']").text(),
            NOMBASE = $(this).find("td[id='nombase']").text(),
            TABLANOM= $(this).find("td[id='nomtabla']").text(),
            REGISTRO= $(this).find("td[id='numregi']").text();
        //entonces declaramos un array para guardar estos datos, lo declaramos dentro del each para así reemplazarlo y cada vez
        item = {};
        //si miramos el HTML vamos a ver un par de TR vacios y otros con el titulo de la tabla, por lo que le decimos a la función que solo se ejecute y guarde estos datos cuando exista la variable ID, si no la tiene entonces que no anexe esos datos.
        if(ID !== ''){
            item ["id"]     = ID;
            item ["desc"]   = DESC;
            item ['tipo']   = CLAS;
            item ['base']   = NOMBASE;
            item ['tabla']  = TABLANOM;
            item ['registros']   = REGISTRO;

            //una vez agregados los datos al array "item" declarado anteriormente hacemos un .push() para agregarlos a nuestro array principal "DATA".
            DATA.push(item);
        }
    });
    console.log(DATA);
    //eventualmente se lo vamos a enviar por PHP por ajax de una forma bastante simple y además convertiremos el array en json para evitar cualquier incidente con compativilidades.
    INFO    = new FormData();
    aInfo   = JSON.stringify(DATA);

    INFO.append('data', aInfo);
    //alert(INFO.append('data', aInfo));
    
    $.ajax({
        data: INFO,
        type: 'POST',
        url : './funciones_upload.php',
        processData: false, 
        contentType: false,
        success: function(r){
            //Una vez que se haya ejecutado de forma exitosa hacer el código para que muestre esto mismo.
            //$("#respuesta").html("");
            //$("#respuesta").html(r);
            $('#cargando').hide();
            alert("archivo creado");
        }
    });
}
</script>
    </body>
</html>