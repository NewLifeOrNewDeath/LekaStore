<!DOCTYPE html>
<html lang="en">
<head>
    <? require("view/header.php");?>
    <title>Tienda | Leka Store</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<!--Navbar -->

<? require("view/barra.php") ?>
  <!--/.Navbar -->

<div class="container py-5 text-center">
    <h2>Tienda</h2>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-12 col-sm-3">
      Filtrar por
      <hr>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Categoría
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <a class="dropdown-item" href="#">Pulseras</a>
                <a class="dropdown-item" href="#">Collares</a>
                <a class="dropdown-item" href="#">Aretes</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Color
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <a class="dropdown-item" href="#">Rojo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-9">
    
      <div class="input-field mb-4">
        <i class="fas fa-search"></i>
         <input type="text" placeholder="Buscar..." />
    </div>
      <div class="row">
        <div class="col-6 col-sm-3 ">
         <img src="<?php echo constant('URL');?>public/img/producto.png" class=" w-100 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Reloj Vintage <br>
          $25.000
        </div>
        <div class="col-6 col-sm-3 ">
          <img src="<?php echo constant('URL');?>public/img/producto.png" class=" w-100 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
          Reloj Vintage <br>
          $25.000
        </div>
        <div class="col-6 col-sm-3">
          <img src="<?php echo constant('URL');?>public/img/producto.png" class=" w-100 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
          Reloj Vintage <br>
          $25.000
        </div>
        <div class="col-6 col-sm-3">
          <img src="<?php echo constant('URL');?>public/img/producto.png" class=" w-100 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Reloj Vintage <br>
          $25.000
        </div>
        
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="row ">
              <div class="col-12 col-sm-6 mb-4">
                <img src="../img/producto.png" class="w-100" alt="">
              </div>
              <div class="col-12 col-sm-6">
                <h2>RELOJ VINTAGE</h2>
                <p class="sku">SKU: 007</p>
              
                <div class="t1 mb-3">
                    <b><p>Precio</p></b>
                    <br>
                    <p>$25.000</p>
                </div>
        
                <b>Cantidad</b>
                <div class="input-fieldd mb-4 col-sm-3 col-3">
                    <input type="number" placeholder="0" />
                  </div>
                  <input type="submit" value="Agregar al Carrito" class="btn solidd col-sm-9 mb-3"/>
                  <br>
                  <a href="../html/detalle.html">Ver más detalles</a>  
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Footer -->
<? require("view/footer.php") ?>
<!--/.Footer -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>