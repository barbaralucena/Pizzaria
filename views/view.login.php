<?php
    require("layout/view.header.php");
?>
        <h1><?php echo $title;?></h1>
<?php
    if(isset($message)){
        echo '<p role= "alert" class="message">'.$message.'</p>';
    }
?>
        <p>
            Se ainda não tiver conta <a href="/register">crie uma aqui</a>
        </p>
        <form method="post" action="/login">
            <div>
                <label>
                    Email
                    <input type="email" name="email" class="box" required>
                </label>
            </div>
            <div>
                <label>
                    Password
                    <input type="password" name="password" minlength="8" maxlength="1000" 
                    class="box"
                    required>
                </label>
            </div>
            <div>
                <button type="submit" name="send">Login</button>
            </div>
        </form>
        
<?php
    require("layout/view.footer.php");
?>