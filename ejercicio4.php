<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 4</title>
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
 </header>
 <body>
    <?php
        if(isset($_POST["total"])){
            $horasLaboradas = $_POST["horaslaboradas"];
            $horaExtra = $horasLaboradas - 40;
            $sueldo = 0;
            
            if ($horasLaboradas <= 40){
                $sueldo = $horasLaboradas * 20000;
            }
            elseif($horasLaboradas > 40){
                $sueldo = $sueldo + ($horaExtra * 25000);
                
            }

         }
    ?>

    <main>
        <div class="container">
                <h2>
                    <p>
                        4.Hacer un programa en PHP para ayudar a un trabajador de
                        Postobón a saber cuál será su sueldo semanal, se sabe que, si
                        trabaja 40 horas o menos, se le pagará $20000 por hora, pero
                        si trabaja más de 40 horas entonces las horas extras se le
                        pagarán a $25000 por hora.
                    </p>
                </h2>
        </div>
        <div class="container">
            <h1>postobon</h1>
            <h3>nómina</h3>
        </div>
            
            <form class="container" action="ejercicio4.php" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">empleado</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="nombre">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">horas</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="horaslaboradas" placeholder="numero de horas laboradas">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">total sueldo: <?php echo($sueldo) ?></label>
                   
                </div>
                <button type="submit" class="btn btn-primary" name="total"> sueldo</button>
            </form>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>