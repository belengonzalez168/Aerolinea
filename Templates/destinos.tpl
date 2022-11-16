{include file= "header.tpl"}

<table>
    <thead>
        <tr>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Region</th>
            <th></th>
            <th></th>
            <th></th>        
        </tr>
    </thead>
    <tbody>
        {foreach from= $destinos item= destino}
            <tr>    
                <td> {$destino->ciudad}</td>
                <td> {$destino->pais} </td>
                <td> {$destino->region} </td>
                <td><a href='vervuelospordestino/{$destino->id_destino}'>Ver vuelos</a></td>
                {if isset($smarty.session.USER_ID)}
                    <td><a href='eliminardestino/{$destino->id_destino}'>Eliminar</a></td>
                    <td><a href='editardestino/{$destino->id_destino}'>Editar</a></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table> 

<a href="formulariodestino">Agregar Destinos</a>
     
{include file="footer.tpl"} 