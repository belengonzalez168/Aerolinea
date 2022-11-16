{include file= "header.tpl"}

{foreach from= $destino item= categoria}
  <h3>Vuelos disponibles para {$categoria->ciudad}, {$categoria->pais}</h3>
{/foreach}

<table>
  <thead>
    <tr>
      <th>Numero de vuelo</th>
      <th>Fecha</th>
      <th>Hora de salida</th>
      <th>Hora de llegada</th>
      <th>Escalas</th>
      <th>Precio</th>
      <th></th>
      <th></th>
      <th></th>     
    </tr>
  </thead>
    <tbody>
    {foreach from= $vuelos item= listado}
        <tr>
          <td> {$listado->numero} </td>
          <td> {$listado->fecha} </td>
          <td> {$listado->horaSalida} </td>
          <td> {$listado->horaLlegada} </td>
          <td> {$listado->escalas} </td> 
          <td> {$listado->precio} </td> 
          {if isset($smarty.session.USER_ID)}
            <td><a href='eliminarvuelo/{$listado->id_vuelo} '>Eliminar</a></td>
            <td><a href='editarvuelo/{$listado->id_vuelo} '>Editar</a></td>
          {/if}
          <td><a href='verdetalle/{$listado->id_vuelo} '>Detalles del vuelo</a></td>
        </tr>             
      {/foreach}
      
    </tbody>
  </table>

{include file="footer.tpl"}