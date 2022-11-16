{include file= "header.tpl"}

<h3>Editar destino</h3>

{foreach from= $consultaDestino item= destino}
  <div class="centrado">
      <form action="{BASE_URL}guardarcambiosdestino/{$destino->id_destino}" method="POST">
      <input type="hidden" name="id_destino" value= "{$destino->id_destino}">
      <div class="alineacion">
        Ciudad <input type="text" name="ciudad" value= "{$destino->ciudad}">
      </div>
      <div class="alineacion">
        Pais <input type="text" name="pais" value= "{$destino->pais}">
      </div>
      <div class="alineacion">
        Region <input type="text" name="region" value= "{$destino->region}">
      </div> 
        <input type="submit" value="Guardar cambios"> 
      </form>
  </div>
{/foreach}

{include file="footer.tpl"}