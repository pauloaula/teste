
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
                    if($_POST["apagar"]!=""){
                    include 'conec.php';
                    $apagar=$_POST['apagar'];
                    $op=$_POST['op'];
                    

                    $sql ="DELETE FROM `alunos` WHERE `$op`='$apagar' ";

                    $salva = mysqli_query($conn,$sql);
                    echo "DADOS CADASTRADO <br> <br>";

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
