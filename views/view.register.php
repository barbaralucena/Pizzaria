<?php
    require("layout/view.header.php");
?>
    
        <h1><?php echo $title;?></h1>
<?php
    if(isset($message)){
        echo '<p role="alert" class="message">'.$message.'</p>';
    }
?>
        <p>
            Se já tiver conta <a href="<?php echo ROOT;?> /login">efetue aqui o login</a>
        </p>
        <form method="post" action="<?php echo ROOT;?>/register">
            <div>
                <label>
                    Nome Completo
                    <input type="text" name="name" minlength="3" maxlength="64" required>
                </label>
            </div>
            <div>
                <label>
                    Email
                    <input type="email" name="email" required>
                </label>
            </div>
            <div>
                <label>
                    Password
                    <input type="password" name="password" minlength="8" maxlength="1000" required>
                </label>
            </div>
            <div>
                <label>
                    Repetir Password
                    <input type="password" name="password_repeated" minlength="8" maxlength="1000" required>
                </label>
            </div>
            <div>
                <label>
                    Número de telemóvel
                    <input type="text" name="phone_number" minlength=9 maxlength=30 required>
                </label>
            </div>
            <div>
                <label>
                    Morada
                    <input type="text" name="street" minlength="8" maxlength="120" required>
                </label>
            </div>
            <div>
                <label>
                    Código postal
                    <input type="text" name="postal_code" minlength="4" maxlength="32" required>
                </label>
            </div>
            <div>
                <label>
                    Cidade
                    <input type="text" name="city" minlength="4" maxlength="32" required>
                </label>
            </div>
            <div>
                <button type="submit" name="send">Registar</button>
            </div>
        </form>
<?php
    require("layout/view.footer.php");
?>