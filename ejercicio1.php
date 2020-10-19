<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prnto 1</title>
    <link rel="stylesheet" href="css/estilosEvaluacion.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
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
<?php

            
                        $valor1 = $_POST["valor1"];
                        $valor2 = $_POST["valor2"]; 
                       
                         
                 if(isset($_POST["sumar"])){
                    $resultado = $valor1 + $valor2;
                    

                 }elseif(isset($_POST["restar"])) {
                    $resultado = $valor1 - $valor2;
                    

                 }elseif(isset($_POST["multiplicar"])){
                        $resultado = $valor1 * $valor2;
                        

                }elseif (isset($_POST["dividir"])){
                    $resultado = $valor1 / $valor2;
                    
                
                    }
                    
                 ?>   
    <header>
        <div class="container">
            <h2><p>1.Hacer un programa en PHP que permita mostrar en pantalla la
                    suma, resta, multiplicación, de dos números enteros almacenados
                    en 2, variables diferentes (utilice formularios HTML).</p></h2>
        </div>
    </header>
    <main>


        <div class="container">
            <h1>Calculador Básica con php</h1>
                
                <form action="ejercicio1.php" method="POST" name="calculadoraBasica">
                    <div class="form-group">
                        <label for="valor1">valor 1</label>
                        <input type="number" class="form-control" name="valor1" placeholder="ingrese valor 1">
                    </div>
                    <div class="form-group">
                        <label for="valor2">valor2</label>
                        <input type="number" class="form-control" name="valor2" placeholder="ingrese valor 2">
                    </div>
                    <div class="form-group">
                        <label for="total">resultado</label>
                        <input type="number" class="form-control" name="resultado" disabled value="<?= htmlspecialchars($resultado); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="sumar"> Sumar</button>
                    <button type="submit" class="btn btn-success" name = "restar">restar</button>
                    <button type="submit" class="btn btn-danger" name = "multiplicar">multiplicar</button>
                    <button type="submit" class="btn btn-warning" name = "dividir">dividir</button>
                    
                </form>
 
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>