<?PHP
if (isset($_POST['submit'])) {
    // print_r('Nome Completo: ' . $_POST['compname']);
    // print_r('<br>');
    // print_r('Nome de Usuário: ' . $_POST['username']);
    // print_r('<br>');
    // print_r('Senha: ' . $_POST['password']);
    // print_r('<br>');

    include_once ('conexao.php');


    $name = $_POST['compname'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // $result = mysqli_query($connection, "INSERT INTO users (id,comp_name,user_name,pass_word) VALUES (null,$name,$user,$pass));");

    $result = mysqli_query($connection, "INSERT INTO users (id,comp_name,user_name,pass_word) VALUES (NULL, '$name', '$user', '$pass')");
    header('location:login.php');

    // EM CASO DE NECESSIDADE DE TESTE DO ENVIO DE DADOS, TILIZAR O CÓDIGO A BAIXO
    //$result = "INSERT INTO users (id,comp_name,user_name,pass_word) VALUES (null, '$name', '$user', '$pass')";
    // // Executar um teste
    // $result = mysqli_query($connection, $result);

    // Verificar se funcionou e se não funcionou, por quê?
    // if ($result) {
    //   echo "Data inserted successfully!";
    // } else {
    //   echo "Error inserting data: " . mysqli_error($connection);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
            margin: 2vw;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <a style="text-transform: uppercase;" href="home.php">inicio</a>
    <div class="box">
        <form action="signIn.php" method="post">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <div class="inputBox">
                    <input style="text-transform: uppercase;" type="text" name="compname" id="compname"
                        class="inputUser" required>
                    <label for="compname" class="labelInput">Nome Completo</label>
                </div>
                <div class="inputBox">
                    <input style="text-transform: uppercase;" type="text" name="username" id="username"
                        class="inputUser" required>
                    <label for="username" class="labelInput">Nome De Usuário</label>
                </div>

                <div class="inputBox">
                    <input style="text-transform: uppercase;" type="password" name="password" id="password"
                        class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                </div>
                <button type="submit" name="submit" id="submit">Cadastre-se</button>
            </fieldset>
        </form>
    </div>
</body>

</html>