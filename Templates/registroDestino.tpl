{include file= "header.tpl"}

    <h3>Ingreso nuevo destino </h3>

    <div class="centrado">
            <form class="" action="ingresardestino" method="POST">
                <div class="alineacion">
                    Ciudad<input type="text" name="ciudad">
                </div>
                <div class="alineacion">
                    Pais <input type="text" name="pais">
                </div>
                <div class="alineacion">
                    Region <input type="text" name="region" id>
                </div> 
                <input class="" type="submit" value="Ingresar destino"> 
            </form>
    </div>

{include file="footer.tpl"}