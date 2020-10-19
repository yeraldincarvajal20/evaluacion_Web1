<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">evaluacion web 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a href=""></a>
                    <a class="nav-link" href="http://localhost/evaluacionweb1/ejercicio1.php">ejercicio1 <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/evaluacionweb1/ejercicio2.php">ejercicio2</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/evaluacionweb1/ejercicio3.php">ejercicio3 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/evaluacionweb1/ejercicio4.php">ejercicio4 <span class="sr-only">(current)</span></a>
                </li>
             </ul>
        </div>
    </nav>
        <div class="container">
            <h2>
                <p>2.El gimnasio Bodytech, lo contrata para desarrollar una
                    aplicación web que permita a sus usuarios calcular el índice
                    de masa corporal basado en el formula:
                    𝐼𝑀𝐶 =
                    𝑃𝐸𝑆𝑂
                    𝐴𝐿𝑇𝑈𝑅𝐴 ∗ 𝐴𝐿𝑇𝑈𝑅𝐴
                    Tenga en cuenta que la clasificación del IMC es la siguiente:</p>
            </h2>
            <div aling= center>
                <img src="css/tablaPeso.png" alt="css/tablaPeso" width="500" height="310">
            </div>
            
        </div>
    </header>
    <body>
        <div>
             <h1 class="container">Bodytech </h1>
        </div>
        <?php
           
        
               
           if (isset($_POST["masa_corporal"])){
               $peso = $_POST["peso"];
               $altura = $_POST["estatura"];
               
               $masa_corporal = ($peso / ($altura * $altura))*10000;
               

                if($masa_corporal <= 18.5 ){

                    $mensaje = "su peso es insuficiente: "; 
                }
                elseif ($masa_corporal == ($masa_corporal> 18.5)&&($masa_corporal <= 29.9) ){
                        $mensaje = "su peso es normal: ";
                }
                elseif ($masa_corporal== ($masa_corporal >25 )&&($masa_corporal<= 26.9) ){
                        $mensaje = "su peso es sobre peso grado 1: ";
                } 
                elseif ($masa_corporal== (($masa_corporal >27 )&&($masa_corporal <= 29.9) )){
                   $mensaje = "su peso es sobre peso grado 2 (preobesidad): ";
                } 
                elseif ($masa_corporal== (($masa_corporal >30 )&&($masa_corporal <= 34.9) )){
                    $mensaje = "su peso es obesidad tipo 1: ";
                }  
                elseif ($masa_corporal== (($masa_corporal >35 )&&($masa_corporal <= 39.9) )){
                    $mensaje = "su peso es de obesidad de tipo 2: ";
                }  
                elseif ($masa_corporal== (($masa_corporal >40 )&&($masa_corporal <= 49.9) )){
                    $mensaje = "su peso es obesidad de tipo 3 (mórbida): ";
                }  
                elseif ($masa_corporal > 50) {
                    $mensaje = "su peso es sobre peso grado 1: ";
                }
            }
        ?>
        <form class="container"action="ejercicio2.php" method="POST">
            <div class="form-group">
                <label for="peso1">peso</label>
                <input type="number" class="form-control" name="peso">
            
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">estatura</label>
                <input type="number" class="form-control" name="estatura">
            </div>
            <div>
                <label for="exampleInputPassword1">indice de masa corporal</label>
                <input type="number" name="imc" class="form-control" value="<?= htmlspecialchars($masa_corporal); ?>">
            </div>
            <div>
                <label for="exampleInputPassword1"> <?php echo($mensaje); ?></label>
            </div>
            <button type="submit" class="btn btn-primary" name="masa_corporal" value= "0">masa corporal</button>
        </form>
     </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

</html>