
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
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
  

</head> 
<?php include("header.php"); ?>
<body>  
<div class="half-color" id="half-color">
    <div class="container top-content">
        <div class="row">
	        <div class="col-xs-10 col-md-6 search-eng">
	           	<h2 class="title-form">
	           	 	Encuentra las mejores ofertas en coches de alquiler.
	           	</h2>
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
										</div>
								    </div>
								</div>
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
									</div>
								</form>
							</div>
	                    </div>
					</form>
	           
	        </div>
           <div class=" col-xs-10 col-sm-6" id="side-car">
           	  <h2 class="catch-eye"><strong>Ingrese</strong> a su cuenta de <span class="brand-txt">Payless</span> para obtener tarifas exclusivas</h2>
           	  <img src="images/flotilla/renault-duster.png" alt="Nissan March" class='img-responsive'/>
           </div>

    	</div>
    </div>
</div>

<!-- INICIA PROMOCIONONES -->

<div class="gray">
  <div id="circle-1"></div>
	<div class="container promociones">
		<h2 class="blue-title">Promociones</h2>
	<div class="content-area">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  	
		  <!-- Wrapper for slides -->
		    <div class="carousel-inner">

			    <div class="item active">
					<div class="row promo">
						<div class="col-xs-10 col-sm-6 promos">
						  <br>
						  <br>
						  <h2>Lorem ipsum dolor sit amet</h2>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Ut ornare orci ac commodo ultricies. Aliquam erat volutpat.</p>
						  <br>
						  <br>
						  <button class="info">Más información</button>
						</div>
						<div class="col-xs-10 col-sm-6 " id="orange-bg">
							<div class="price" id="price">$19</div>
							<div class="orange" id="big-circle">
							  <p>Lorem ipsum dolor sit amet</p>
						    </div>
						    <div class="march-1">
						    	 <img src="images/flotilla/nissan-march-1.png" alt="Nissan March" class='img-responsive'/>
						    </div>	
						</div>
					</div>
				</div>
				<div class="item">
		           <div class="row promo">
						<div class="col-xs-10 col-sm-6 promos">
						  <br>
						  <br>
						  <h2>Lorem ipsum dolor sit amet</h2>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Ut ornare orci ac commodo ultricies. Aliquam erat volutpat.</p>
						  <br>
						  <br>
						  <button class="info-1">Más información</button>
						</div>
						<div class="col-xs-10 col-sm-6" id="blue-bg">
							<div class="price" id="price">$19</div>
							<div class="blue" id="big-circle">
							  <p>Lorem ipsum dolor sit amet</p>
						    </div>
						    <div class=jeep>
						    	 <img src="images/flotilla/volkswagen-vento.png" alt="Jeep wrangler" class='img-responsive'/>
						    </div>	
						</div>
					</div>
		        </div>
			    <div class="item">
			       <div class="row promo">
						<div class="col-xs-10 col-sm-6 promos">
						  
						  <br>
						  <br>
						  <h2>Lorem ipsum dolor sit amet</h2>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Ut ornare orci ac commodo ultricies. Aliquam erat volutpat.</p>
						  <br>
						  <br>
						  <button class="info-2">Más información</button>
						</div>
						<div class="col-xs-10 col-sm-6" id="green-bg">
							<div class="price" id="price">$19</div>
							<div class="green" id="big-circle">
							  <p>Lorem ipsum dolor sit amet</p>
						    </div>
						    <div class="yaris">
						    	 <img src="images/flotilla/toyota-sienna.png" alt="yaris" class='img-responsive'/>
						    </div>	
						</div>
					</div>
			    </div>
		    </div>
		</div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev" id="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="icon-next" id="icon-next"></span>
	</a>
	</div>
	</div>
</div>
<!-- Autos -->
<div class="container autos">
  <div>
  	<center><h2 class="blue-title title-mobil">Autos</h2></center>
  </div>
	  <div class="row">
	  	<div class="col-sm-4 col-mob-1" id="blue-sm">
			
		    <div class="lil-price" id="lil-price">consectetur adipiscing</div>
			<div class="lil-blue" id="lil-big-circle">
			  <p>Lorem ipsum dolor sit amet</p>
		    </div>
		    <div class="lil-jeep">
		    	 <img src="images/flotilla/volkswagen-passat.png" alt="Jeep wrangler" class='img-responsive'/>
		    </div>	
	  	</div>
	  	<div class="col-sm-4 col-mob-1 autos-1" id="orange-sm">
	  		<div class="lil-price" id="lil-price">consectetur adipiscing</div>
			<div class="lil-orange" id="lil-big-circle">
			  <p>Lorem ipsum dolor sit amet</p>
		    </div>
		    <div class="lil-march-1">
		    	 <img src="images/flotilla/mercedes-benz-a200.png" alt="Nissan March" class='img-responsive'/>
		    </div>
	  	</div>
	  	<div class="col-sm-4 col-mob-1 autos-1" id="green-sm">
	  		<div class="lil-price"  id="lil-price">consectetur adipiscing</div>
			<div class="lil-green" id="lil-big-circle">
			  <p>Lorem ipsum dolor sit amet</p>
		    </div>
		    <div class="lil-yaris">
		    	 <img src="images/flotilla/chevrolet-suburban.png" alt="yaris" class='img-responsive'/>
		    </div>	
	  	</div>
	  </div>	
</div>


<!-- Locaciones -->

<div class="mapa">
  <div class="circle" id="circle"></div>	
  <div class="container">
  	<h2 class="locations" id="locations">Locaciones</h2>
  </div> 
</div>  
    <div id ="maps" class="embed-container maps">
	<script type="text/javascript" src="javascripts/maps.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUt_UmWQlRNc8oYEavw_pX9TW5gJKib5o&callback=initMap">
    </script>
    </div>

<!-- footer -->
<?php include("footer.php"); ?>
<body>
</html>

