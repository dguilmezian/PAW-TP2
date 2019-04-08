<table border="1">
  <tr>
      <th>Fecha del turno</th>
      <th>Hora del turno</th>
      <th>Paciente</th>
      <th>Telefono</th>
      <th>Email</th>
      <th></th>
    </tr>
<?php

foreach ($dates as $key => $fila) {
  $html .= "<tr>";
  foreach ($mapData as $campo => $valor) {
    $html .= "<td id=\"row-$valor\">";
    $html .= $fila[$valor];
    $html .= '</td>';
  }
  $html .= "<td id=\"row$key-view\" ><a href=\"turno/?id={$fila['id']}\">Ver</a></td>";
  $html .= '</tr>';
}
$html .= '</table>';

echo $html;
