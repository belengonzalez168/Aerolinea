{include file= "header.tpl"}

<h3>Login</h3>
  <div class="centrado">
    <form action="validacion" method="POST">
      Email<input type="email" name="email" id="nombre">
      Contraseña <input type="password" name="password">
      {if $error}
        <div> 
          {$error}
        </div>
      {/if}
      <input class="" type="submit" value="Ingresar"> 
    </form>
  </div>

{include file="footer.tpl"} 
