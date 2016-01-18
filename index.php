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
                        <a href="index.html" id="logo">CREACIÓN</a><span id="slogan">BASE DE DATOS</span>
                    </h1>
                    <div class="right">
                        <nav>
                            <ul id="top_nav">
                                
                            </ul>
                        </nav>
                        <nav>
                            <ul id="menu">
                                <li id="menu_active"><a href="index.html">Crear</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>

<div class="main">
    <div id="banner">
        
    </div>
</div>

<div class="main">
<!-- content -->
    <section id="content">
        <article class="col1">
            <div class="pad_1">
                <h2>Vamos a crear una base de datos !!</h2>
                <form >
                    <div class="wrapper">
                        Nombre de la Base de Datos:
                        <div class="bg">
                        <input type="text" class="input input1" value=""></div>
                    </div>
                    <div class="wrapper">
                        Nombre de la tabla:
                        <div class="bg">
                        <input type="text" class="input input1" value="" ></div>
                    </div>                    
                </form>
                <h2>Datos de la tabla</h2>
            </div>
            <div id="contenedor">
            <form action="javascript: fn_agregar();" method="post" id="frm_usu">
                <table class="formulario">
                    <tbody>
                        <tr>
                            <td>Campo :</td>
                            <td><input name="valor_uno" type="text" id="valor_campo" size="40" class="required" /></td>
                        </tr>
                        <tr>
                            <td>Tipo de dato :</td>
                            <td><input name="valor_dos" type="text" id="valor_tdato" size="40" class="required" /></td>
                        </tr>
                        <tr>
                            <td>Longuitud</td>
                            <td><input name="valor_tres" type="text" id="valor_long" size="30" class="required" /></td>
                        </tr>
                        <tr>
                            <td>Num. campos</td>
                            <td><input name="valor_cuatro" type="text" id="valor_num" size="30" class="required" /></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><input name="agregar" type="submit" id="agregar" value="Agregar" /></td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <table id="grilla" class="lista mitabla">
              <thead>
                    <tr>
                        <th>Orden</th>
                        <th>Campo</th>
                        <th>tipo de dato</th>
                        <th>Longitud</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" style="color:white;"><strong>Cantidad:</strong> <span id="span_cantidad">4</span> Filas.</td>
                    </tr>
                </tfoot>
            </table>
            <hr />
        </div>
        </article>
    </section>
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



        
    </body>
</html>