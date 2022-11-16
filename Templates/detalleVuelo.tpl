{include file= "header.tpl"}

<table>
  <thead>
    <tr>
      <th>Numero de vuelo</th>
      <th>Destino</th>
      <th>Fecha</th>
      <th>Hora de Salida</th>
      <th>Hora de Llegada</th>
      <th>Escalas</th>
      <th>Precio</th>
    </tr>
  </thead>
    <tbody>
      {foreach from= $detalleVuelo item= vuelo}
        {foreach from= $ciudades item= ciudad}
          {if $vuelo->id_ciudad == $ciudad->id_destino}
            <tr>
              <td> {$vuelo->numero} </td>
              <td> {$ciudad->ciudad} </td>
              <td> {$vuelo->fecha} </td>
              <td> {$vuelo->horaSalida} </td>
              <td> {$vuelo->horaLlegada} </td>
              <td> {$vuelo->escalas} </td> 
              <td> {$vuelo->precio} </td> 
              {if isset($smarty.session.USER_ID)}
                <td><a href='eliminarvuelo/{$vuelo->id_vuelo}'>Eliminar</a></td>
                <td><a href='editarvuelo/{$vuelo->id_vuelo}'>Editar</a></td>
              {/if}
              <td><a href='home'>Volver</a></td>
            </tr> 
          {/if}          
        {/foreach}            
      {/foreach}
    </tbody>
  </table>

{include file="footer.tpl"} 