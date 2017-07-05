<!DOCTYPE html>
<html>
<head>
   <title>Payless | Rental Car</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/flag.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascripts/main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/cars.css">
  

</head> 
<?php include("header.php"); ?>

<body>
  <div class="main-cars">
    <div class="circle" id="circle"></div>
    <div class="container">
      <div class="row">
        <span>
          <h2 class="info">Autos</h2>
          <a href="" class="link">Nacionales</a>
          <a href="" class="link">Internacionales</a>
        </span> 
        <div class="gray-text" id="gray-text">
           A continuación se muestra una muestra de los coches y tipos de coches que se ofrecen en nuestras oficinas de EE.UU. Además, usted encontrará la capacidad de pasajeros y equipaje de los diferentes tipos de alquileres. La marca, modelo, clase y / o disponibilidad específica del vehículo puede variar según la ubicación.
        </div> 
        <div class="row">
          <div class="col-sm-4 col-mob-1" id="orange-sm">
            <div class="lil-price" id="lil-price" >Económico</div>
              <div class="lil-orange" id="lil-big-circle">
                <p>Nissan March</p>
              </div>
              <div class="lil-march-1">
                <img src="images/flotilla/nissan-march-1.png" alt="Nissan March" class='img-responsive'/>
              </div>  
          </div>
          <div class="col-sm-8" id="table">
            <span class="icons-orange"><i class="fa fa-user fa-2x" aria-hidden="true"><span class="font-sm"> 5</span> </i> <i class="fa fa-suitcase fa-2x icon" aria-hidden="true"><span class="font-sm"> 1 </span></i> <i class="fa fa-suitcase small icon" aria-hidden="true"><span class="font-sm"> 1</span> </i></span>
            <div class="table-head-orange">
              Detalles
            </div>
            <div id="tab-row" class="row tab-row-orange">
              <div class="col-sm-4">- 5 Pasajeros</div>
              <div class="col-sm-4">- No fumar</div>
              <div class="col-sm-4">- Aire acondicionado</div>

            </div>
            <div id="tab-row" class="row tab-row-orange">
              <div class="col-sm-4">- 1 Equipaje grande</div>
              <div class="col-sm-4">- Transmisión automática</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>
            <div id="tab-row" class="row tab-row-orange">
              <div class="col-sm-4">- 1 Equipaje chico</div>
              <div class="col-sm-4">- 2o 4 puertas</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>

          </div>
        </div> <!--termina row -->
        <div class="row">
          <div class="col-sm-4 col-mob-1" id="blue-sm">
            <div class="lil-price" id="lil-price">Compacto</div>
              <div class="lil-blue" id="lil-big-circle">
                <p>Nissan Versa</p>
              </div>
              <div class="lil-vento">
                <img src="images/flotilla/volkswagen-vento.png" alt="Vento" class='img-responsive'/>
              </div>  
          </div>
          <div class="col-sm-8" id="table">
            <span class="icons-blue"><i class="fa fa-user fa-2x" aria-hidden="true"><span class="font-sm"> 4/5</span> </i> <i class="fa fa-suitcase fa-2x icon" aria-hidden="true"><span class="font-sm"> 2 </span></i> <i class="fa fa-suitcase small icon" aria-hidden="true"><span class="font-sm"> 1</span> </i></span>
            <div class="table-head-blue">
              Detalles
            </div>
            <div id="tab-row" class="row tab-row-blue">
              <div class="col-sm-4">- 5 Pasejeros</div>
              <div class="col-sm-4">- No fumar</div>
              <div class="col-sm-4">- Aire acondicionado</div>

            </div>
            <div id="tab-row" class="row tab-row-blue">
              <div class="col-sm-4">- 2 Equipaje grande</div>
              <div class="col-sm-4">- Transmisión automática</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>
            <div id="tab-row" class="row tab-row-blue">
              <div class="col-sm-4">- 1 Equipaje chico</div>
              <div class="col-sm-4">- 2o 4 puertas</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>

          </div>
        </div> <!--termina row -->
        <div class="row">
          <div class="col-sm-4 col-mob-1" id="green-sm">
            <div class="lil-price" id="lil-price">Intermediate</div>
              <div class="lil-green" id="lil-big-circle">
                <p>Hyundai Elantra</p>
              </div>
              <div class="lil-mitsubishi">
                <img src="images/flotilla/mitsubishi-l200.png" alt="Mitsubishi" class='img-responsive'/>
              </div>  
          </div>
          <div class="col-sm-8" id="table">
            <span class="icons-green"><i class="fa fa-user fa-2x" aria-hidden="true"><span class="font-sm"> 4/5</span> </i> <i class="fa fa-suitcase fa-2x icon" aria-hidden="true"><span class="font-sm"> 1 </span></i> <i class="fa fa-suitcase small icon" aria-hidden="true"><span class="font-sm"> 1</span> </i></span>
            <div class="table-head-green">
              Detalles
            </div>
            <div id="tab-row" class="row tab-row-green">
              <div class="col-sm-4">- 4/5 Pasejeros</div>
              <div class="col-sm-4">- No fumar</div>
              <div class="col-sm-4">- Aire acondicionado</div>

            </div>
            <div id="tab-row" class="row tab-row-green">
              <div class="col-sm-4">- 1 Equipaje grande</div>
              <div class="col-sm-4">- Transmisión automática</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>
            <div id="tab-row" class="row tab-row-green">
              <div class="col-sm-4">- 1 Equipaje chico</div>
              <div class="col-sm-4">- 2o 4 puertas</div>
              <div class="col-sm-4">&nbsp;</div>
            </div>

          </div>
        </div> <!--termina row -->
      </div>
    </div>
  </div>
</body>

<!-- footer -->
<?php include("footer.php"); ?>
<body>
</html>