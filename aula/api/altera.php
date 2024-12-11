
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" ">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
             <?php 
                    if($_POST["nome"]!=""){
                    include 'conec.php';
                    $nome=$_POST['nome'];
                    $cpf=$_POST['cpf'];
                    $email=$_POST['email'];
                    $telefone=$_POST['telefone'];
                    $data_n=$_POST['data'];
                    $senhaUser=$_POST['senha'];

                    $sql ="UPDATE `alunos` SET `nome`='$nome',`email`='$email',`data_nasc`='$data_n',`telefone`='$telefone',`senha`='$senhaUser' WHERE `cpf`='$cpf'";

                    $salva = mysqli_query($conn,$sql);
                    echo "alterado <br> <br>";

                    }else{

                        echo "Digite o seu nome!";
                    }
                ?>
                
            <a href="index.html"   class="btn btn-primary">VOLTAR</a>   
            </div>
        </div>
    </div>
    
    


    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
