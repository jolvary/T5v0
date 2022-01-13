<HTML>

<h1> Bienvenido a la página de inicio. </h1>

<form method="post" action="valid.php" name="validar">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="contraseña" required />
    </div>
    <button type="submit" name="login" value="login">Entrar</button>
</form>

</HTML>