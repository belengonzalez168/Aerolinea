{include file= "header.tpl"}


  <h3>Ingresar vuelo</h3>
    <div class="centrado">
        <form action="insertvuelo" method="POST">
          <div class="alineacion">
            Numero <input type="text" name="numero">
          </div>
          <div class="alineacion">
            Ciudad <select name="ciudad">
            {foreach from= $ciudades item= ciudad}
              <option value={$ciudad->id_destino}>{$ciudad->ciudad}</option>
            {/foreach}
            </select>
          </div>
          <div class="alineacion">
            Fecha <input type="text" name="fecha">
          </div>
          <div class="alineacion">
            Hora de Salida <input type="text" name="horaSalida">
          </div>
          <div class="alineacion">
            Hora de Llegada <input type="text" name="horaLlegada">
          </div>
          <div class="alineacion">
            Escalas <input type="text" name="escalas">
          </div>
          <div class="alineacion">
            Precio <input type="number" name="precio">
          </div class="alineacion">
          <input type="submit" value="Registrar vuelo"> 
        </form>
    </div>

  
{include file="footer.tpl"}

