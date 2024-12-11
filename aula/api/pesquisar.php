
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
                    if($_POST["pesquisar"]!=""){
                        include 'conec.php';
                        $pesquisa=$_POST["pesquisar"];
                        $op=$_POST["op"];
                        $sql="SELECT `id`, `nome`, `cpf`, `email`, `data_nasc`, `telefone`, `senha` FROM `alunos` WHERE `$op`='$pesquisa'";
                     
                        $executar=mysqli_query($conn,$sql);
                        ?> 
                        <table class="table table-striped table-hover">
                        
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">nome</th>
                                <th scope="col">cpf</th>
                                <th scope="col">email</th>
                                <th scope="col">Nasc</th>
                                <th scope="col">celular</th>
                                <th scope="col">Senha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id=0;
                               
                      while($resultado=mysqli_fetch_array($executar)){
                        $id=$id+1;
                        
                        echo" <tr>
                        <th scope='row'>$id</th>
                        <td>{$resultado["nome"]}</td>
                        <td>{$resultado["cpf"]}</td>
                        <td>{$resultado["email"]}</td>
                        <td>{$resultado["data_nasc"]}</td>
                        <td>{$resultado["telefone"]}</td>
                        <td>{$resultado["senha"]}</td>
                        </tr>";
                        }
                        
                        ?>
                        </tbody>
                        </table>
                    <?php 

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
