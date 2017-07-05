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
  <link rel="stylesheet" type="text/css" href="stylesheets/promociones.css">
  

</head> 

<?php include("header.php"); ?>
<body>
<!-- big-banner -->
<div id="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-8 " id="orange-bg">
            <div class="price" id="price">Payless Deals</div>
            <div class="orange" id="orange">
              <p class="inside-circle">Pague ahora y ahorre hasta un 20%</p>
            </div>
            <div class="mitsubishi">
                <img src="images/flotilla/nissan-xtrail.png" alt="Mitsubishi" class='img-responsive'/>
            </div>  
        </div>
      <div class="col-sm-2">&nbsp;</div>  
    </div>    
    <p class="gray-text">Pague ahora. Ahorre Mucho</p>
  </div>
</div>

<!-- forma -->
<div class="second-section">
  <div class="circle" id="circle"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <h2 class="info">Obtener las tarifas</h2>
            <h2 class="blue-text">Pague ahora. Ahorre mucho.</h2>
            <div class="gray-text"><span class="bold">Reserve en línea y pague por adelantado</span> para <span class="strong-blue">ahorrar hasta un 20% de descuento</span> en la tarifa del contador de Payless.</div>
            <div> <img src="images/flotilla/toyota-sienna.png" alt="Toyota Sienna" class='img-responsive'/></div>
        </div>
        <div class="col-sm-6 search-eng">
            <form role="form" action="" method="">
              <div id="contact-form" class="form-container" data-form-container>
                 <br>
                <div class="input-group">
                  <input type="text" class=" input-lg form-control" placeholder="Aeropuerto / Ciudad o escoge tu locación" aria-describedby="basic-addon2">
                  <span class="input-group-addon" id="basic-addon2"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                </div>
                  <br>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    </div><!-- input -->
                  </div><!-- column -->
                </div><!-- row -->
                <br>
                <div class="input-group">
                  <input type="checkbox" aria-label="Checkbox for following text input">
                  <span>Regresar a otro lugar</span>
                </div>  
                <br>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-info" value="Obtener tarifa">
              <br>
              <div class="input-group checkbx">
                <input type="checkbox" id="coupon" aria-label="Checkbox for following text input">
                    <span> Tengo un código de cupón / PDN</span>
              </div>
              <div class="cupon">
                <form id="" class="" method="" >
                  <div class="form-group">
                    <span><input id="smol" class="form-control" type="text" name="cupon" placeholder="Código del cupón"><input class="form-control" id="smol" type="text" name="pdn" placeholder="PDN"></span>
                  </div>
                </form>
              </div>
              <div class="input-group checkbx">
                <input id="agent" type="checkbox" aria-label="Checkbox for following text input">
                    <span> ¿Es usted un agente de viajes / Perks Member?</span>
              </div>
              <div class="agent">
                <form id="" class="" method="" >
                  <div class="form-group">
                    <span><input id="smol" class="form-control" type="text" name="perks" placeholder="Perks ID"><input class="form-control" id="smol" type="text" name="arc" placeholder="ARC / IATA"></span>
                  </div><!-- form group -->
                </form>
              </div>
            </div>
          </form>
        </div><!-- search eng -->
    </div>
        <div class="flat">      
          <div class="note">Detalles de la Oferta</div>
          <span class="gray-text-2">Reserve en línea y pague por adelantado para ahorrar hasta un 20% de descuento<br>en la tarifa del contador de Payless. </span><span class="link"><a href="" target="_blank">[+] Términos y condiciones</a></span>
        </div>
    </div>
</div>

<!-- third section -->
<div class="register">
  <div class="circle-1" id="circle-1"></div>
  <div class="container">
        <div class="row">
          <div class="col-sm-7">
           <h2 class="info-1">Ahorrar con anticipación</h2>
           <span class="gray-text">No te pierdas mucho al registrarte en el boletín de Payless y mantener el ahorro rodando con ofertas exclusivas y descuentos instantáneos.</span>
            <form class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="email" class="form-control input-lg" id="email" placeholder="Correo Electrónico">
                </div>
              </div>  
              <div class="row ">
                <div class="col-sm-5 space">
                  <input type="name" class="form-control input-lg" id="name" placeholder="Nombres">
                </div>
                <div class="col-sm-5 space">
                  <input type="last-name" class="form-control input-lg" id="last-name" placeholder="Apellidos">
                </div>
              </div> 
              <br>
                <div class="form-group space">
                  <div class="col-sm-10">
                    <select class="form-control input-lg" id="sel1">
                      <option disabled selected>País</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
              <div class="form-group space"> 
                <div class="col-sm-10 space">
                  <button type="submit" placeholder="Registrarse" class="btn btn-default" id="register">Registrarse</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-5">
            <div class="row side-car">
              <img src="images/flotilla/volkswagen-vento.png" alt="Volkswagen Vento" class='img-responsive right-img' id="right-img"/>
            </div>
            <div class="row side-car">
              <img src="images/flotilla/nissan-march-1.png" alt="Nissan March" class='img-responsive left-img' id="ima"/>
            </div>
            <div class="row side-car">
              <img src="images/flotilla/toyota-sienna.png" alt="Nissan March" class='img-responsive right-img' id="right-img"/>
            </div>  
          </div>
        </div>
  </div>
</div>



<!-- footer -->
<?php include("footer.php"); ?>
</body>
</html>

