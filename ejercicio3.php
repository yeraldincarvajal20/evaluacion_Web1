<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>punto 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <?php
                    $numeroPares = $_POST["pares"];
                    $valorcompra = $numeroPares * 80000;
                   
                    
                    $valorPar = 80000;
                    

                    if(isset($_POST["total"])){

                        if($numeroPares <= 3){
                        $valorDescuento = (($numeroPares * 80000)*10)/100;
                            $descuento = "descuento del 10%: ";
                        }
                        elseif($numeroPares == ($numeroPares > 3)&&($numeroPares <= 8)){
                            $valorDescuento = (($numeroPares * 80000)*20)/100;
                            $descuento = "descuento del 20%: ";
                        }
                        elseif($numeroPares > 8){
                            $valorDescuento = (($numeroPares * 80000)*50)/100;
                            $descuento = "descuento del 50%: ";


                    }
                    $total = $valorcompra - $valorDescuento;
                    $valorcompra = $numeroPares * 80000;
                }


            ?>
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
                <p>
                        3.Codificar un programa en PHP para la tienda Spring Step que
                        tiene una promoción de descuento, esta dependerá del número de
                        zapatos que se <br>
                         Si son 3 pares se les dará un 10% de descuento al cliente
                        sobre el total de la compra;<br>
                         Si el número de zapatos es mayor 3 pares, pero menor o
                        igual de 8 pares, se le otorga un 20% de descuento<br>
                         si son más 8 pares de zapatos se otorgará un 50% de
                        descuento. Defina la cantidad de variables que necesite,
                        el costo de cada par de zapatos y establezca el valor
                        total de la compra de zapatos.
                </p>
            </h2>
        </div>
    
    </header>

    <body>
        <main>
            <div class="container">
            <h1 >Spring Step </h1>
            <h3> promoción de descuento: todos los pares a $80.000</h3>
            </div>
            
                <form class="container" method="POST" action="ejercicio3.php">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">cliente</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre"  placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">numero de pares a comprar</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="pares" placeholder="numero de pares">
                    </div>
                    <button type="submit" class="btn btn-primary" name="total" value="calcular">Calcular</button>
                </form>
                <div class="container">
                <div class="form-group">
                        <label for="exampleFormControlInput1">valor de la compra: <?php echo($valorcompra); ?></label>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">descuento: <?php echo($descuento.$valorDescuento); ?></label>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">total a pagar: <?php echo($total); ?></label>
                        
                    </div>
                </div>
                
                   
           
        </main>
    <footer>

    </footer>
    </body>
</html>