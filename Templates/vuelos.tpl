{include file= "header.tpl"}

<div class="centrado">
  <table>
    <thead>
      <tr>
        <th>Numero de vuelo</th>
        <th>Destino</th>
        <th>Fecha</th>
        <th>Escalas</th>
        <th>Precio</th>
        <th></th>
        <th></th>
        <th></th>     
      </tr>
    </thead>
      <tbody>
        {foreach from= $vuelos item= vuelo}
          {foreach from= $ciudades item= ciudad}
            {if $vuelo->id_ciudad == $ciudad->id_destino}
              <tr>
                <td> {$vuelo->numero} </td>
                <td> {$ciudad->ciudad} </td>
                <td> {$vuelo->fecha} </td>
                <td> {$vuelo->escalas} </td> 
                <td> {$vuelo->precio} </td> 
                {if isset($smarty.session.USER_ID)}
                  <td><a href='eliminarvuelo/{$vuelo->id_vuelo} '>Eliminar</a></td>    
                  <td><a href='editarvuelo/{$vuelo->id_vuelo} '>Editar</a></td> 
                {/if}
                <td><a href='verdetalle/{$vuelo->id_vuelo} '>Detalles del vuelo</a></td>
            </tr>  
            {/if}          
          {/foreach}
        {/foreach}
      </tbody>
    </table>

</div>

<a href="formulariovuelo">Agregar Vuelos</a>

{include file="footer.tpl"}