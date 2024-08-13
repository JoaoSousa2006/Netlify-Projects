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
  header('location:logcad.php');

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
<!doctype html>
<html lang="en">

<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="registre-se.css">
</head>

<body>
  <!-- <div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div> -->
  <div class="col-12 text-center align-self-center py-5">
    <div class="section pb-5 pt-5 pt-sm-2 text-center">
      <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
      <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
      <label for="reg-log"></label>
      <div class="card-3d-wrap mx-auto">
        <div class="card-3d-wrapper">
          <div class="card-front">
            <div class="center-wrap">
              <form action="test_login.php" method="post" class="section text-center">
                <h4 class="mb-4 pb-3">Log In</h4>
                <div class="form-group">
                  <input type="text" name="username" id="username" class="form-style" placeholder="User Name" required>
                  <i class="input-icon uil uil-at"></i>
                </div>
                <div class="form-group mt-2">
                  <input type="password" name="password" id="password" class="form-style" placeholder="Password"
                    required>
                  <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <button type="submit" name="submit" id="submit" class="btn mt-4">Entrar</button>
                <p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your
                    password?</a></p>
              </form>
            </div>
          </div>
          <!-- Cadastro -->
          <div class="card-back">
            <div class="center-wrap">
              <div class="section text-center">
                <h4 class="mb-3 pb-3">Sign Up</h4>
                <div class="form-group">
                  <form accept-charset="utf-8" action="logcad.php" method="post">
                    <fieldset>
                      <input type="text" name="compname" id="compname" class="form-style" placeholder="Full Name"
                        required>
                      <i class=" input-icon uil uil-user"></i>
                </div>
                <div class="form-group mt-2">
                  <input type="text" name="username" id="username" class="form-style" placeholder="User Name" required>
                  <i class="input-icon uil uil-at"></i>
                </div>
                <div class="form-group mt-2">
                  <input rows="6" name="password" id="password" type="password" class="form-style"
                    placeholder="Password" required>
                  <i class="input-icon uil uil-lock-alt"></i>
                </div>
                </fieldset>
                <button type="submit" name="submit" id="submit" s class="btn mt-4">Sign Up</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>