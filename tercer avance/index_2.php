<html>
<HEAD>
     <TITLE>Anyadir Filas Dinámicamente en HTML by jotaerre.net</TITLE>
</HEAD>
<HEAD>
<SCRIPT LANGUAGE="JavaScript">
function agrega_celda(id){
    var tbody = document.getElementById
(id).getElementsByTagName("TBODY")[0];
    var row = document.createElement("TR")
    var td1 = document.createElement("TD")
    td1.appendChild(document.createTextNode("columna 1"))
    var td2 = document.createElement("TD")
    td2.appendChild (document.createTextNode("columna 2"))
    row.appendChild(td1);
    row.appendChild(td2);
    tbody.appendChild(row);
  }
</script>
</HEAD>
<BODY>
<a href="javascript:agrega_celda('mi_tabla')">Agrega nueva</a>
<table id="mi_tabla" cellspacing="0" border="1">
  <tbody>
    <tr>
      <td>Celda1_columna1</td>
      <td>Celda1_columna2</td>
    </tr>
  </tbody>
</table>
</body>
</html>