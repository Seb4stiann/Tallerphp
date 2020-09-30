
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonda los Cambulos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="logica.php">
    
</head>

   <header>
   <nav class="navbar navbar-expand-lg navbar-light  bg-warning">
  <a class="navbar-brand" href="#">
  <!-- Image and text -->

  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/logo3.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    
  </a>
</nav>
  
<h5>Fonda los cambulos </h5>

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="logica.php">Logica<span class="sr-only">(current)</span></a>
            </li>
            <li>
            <a class="nav-link" href="tienda.php">Tienda<span class="sr-only">(current)</span></a>
            </li>
              
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
  
   </header>

   <main>
   
   <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <form action="index.php" method="POST">
                <h2 class="text-center mb-4">Factura de Compra</h2>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto1" name="producto1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto2" name="producto2">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto3" name="producto3">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" name="precio3">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto4" name="producto4">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" name="precio4">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto5" name="producto5">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" name="precio5">
                    </div>
                </div>

                <h1 class="mb-3"></h1>
                <button class="btn btn-warning btn-block" type="submit" name="botonCalcular">Calcular</button>
                </form>


                <?php if(isset($_POST["botonCalcular"])): ?>

<h6> 
<?php
    $precio1=$_POST["precio1"];
    $producto1=$_POST["producto1"];

    $precio2=$_POST["precio2"];
    $producto2=$_POST["producto2"];

    $precio3=$_POST["precio3"];
    $producto3=$_POST["producto3"];

    $precio4=$_POST["precio4"];
    $producto4=$_POST["producto4"];

    $precio5=$_POST["precio5"];
    $producto5=$_POST["producto5"];


    $total=$precio1+$precio2+$precio3+$precio4+$precio5;

    echo("el producto1 es: ".$producto1."------($)".$precio1);
    echo("<br>");
    echo("el producto2 es: ".$producto2."------($)".$precio2);
    echo("<br>");
    echo("el producto3 es: ".$producto3."------($)".$precio3);
    echo("<br>");
    echo("el producto4 es: ".$producto3."------($)".$precio4);
    echo("<br>");
    echo("el producto5 es: ".$producto5."------($)".$precio5);
    echo("<br>");
    echo("<br>");
    echo("****************************");
    echo("<br>");

    echo("el total de la compra fue de: ".$total);
?>

</h6>


<?php endif ?>

              


              

   

   </main>
    
   

    
   <hr>
    <footer>
    
    <h4>PUEDES CONTACTARNOS AQUI</h4>
        <nav>
        <ul>
            <li>
                316 455 0054
            </li>
            <li>
                @fondaloscambulos /
                @pesebrerasdeloso
            </li>
            <li>
                Nuestra Dirrecion → : Carrera 57A # 33-21
            </li> 

        </ul>

        </nav>
        MEDELLIN - BELLO - BARRIO CABAÑAS

    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>