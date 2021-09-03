<!DOCTYPE html>
<html>
    <head>
        <title>Md5 Values Encrypter</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="non_encrypt_value" placeholder="Your value want to encrypt...">
            <br><button>Start Encrypt</button><br>
            <?php
            if (isset($_POST['non_encrypt_value'])) {
                $encrypted = md5($_POST['non_encrypt_value']);
                
                $mes = "Your md5 encrypt is : ".$encrypted;
            }
            if (empty($_POST['non_encrypt_value'])) {
                $mes = "Your md5 encrypt is : Nothing";
            }
            echo $mes;
            ?>
        </form>
    </body>
</html>
