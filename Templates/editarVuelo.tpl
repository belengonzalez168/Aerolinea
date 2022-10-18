{include file= "header.tpl"}

<h3>Editar vuelo</h3>

{foreach from= $consultaVuelo item= vuelo}
  <div class="centrado">
      <form action="{BASE_URL}guardarcambiosvuelo/{$vuelo->id_vuelo}" method="POST">
      <input type="hidden" name="id" value= "{$vuelo->id_vuelo}">
      <div class="alineacion">
         Numero <input type="text" name="numero" value= "{$vuelo->numero}">
      </div>
      <div class="alineacion">
          Ciudad <select name="ciudad">
          {foreach from= $ciudades item= ciudad}
            <option value={$ciudad->id_destino}>{$ciudad->ciudad}</option>
          {/foreach}
      </div>
      <div class="alineacion">
        Fecha de vuelo <input type="text" name="fecha" value= "{$vuelo->fecha}">
      </div>
      <div>
        Hora de Salida <input type="text" name="horaSalida" value= "{$vuelo->horaSalida}">
      </div>
      <div class="alineacion">
        Hora de Llegada <input type="text" name="horaLlegada" value= "{$vuelo->horaLlegada}">
      </div>
      <div class="alineacion">
        Escalas <input type="text" name="escalas" value= "{$vuelo->escalas}">
      </div>
      <div class="alineacion">
       Precio <input type="number" name="precio" value= "{$vuelo->precio}">
      </div> 
        <input type="submit" value="Guardar cambios"> 
      </form>
  </div>
{/foreach}

  {include file="footer.tpl"}
