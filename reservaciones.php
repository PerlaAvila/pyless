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
  <script type="text/javascript" src="javascripts/reservation.js"></script>
  <script type="text/javascript" src="javascripts/main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/reservaciones.css">
  

</head> 

<?php include("header.php"); ?>
<body>
    <div class="reserve reservation-form linearback" id="reservation-form">
      <div class="container">
          <div class="wizard">
            <div class="wizard-inner">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">Reserva</a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">Escoge tu auto</a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">Seguro y extras</a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="step4">Ingresa tus datos</a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">Confirma</a>
                    </li>
                </ul>
            </div><!-- wizzard inner -->

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                      <div class="col-md-6 search-eng">
                        <h2 class="title-form">
                          Reserve su coche de alquiler.
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
                          <input type="checkbox" aria-label="Checkbox for following text input">
                              <span> Tengo un código de cupón / PDN</span>
                        </div>
                        <div class="input-group checkbx">
                          <input type="checkbox" aria-label="Checkbox for following text input">
                              <span> ¿Es usted un agente de viajes / Perks Member?</span>
                        </div>

                      </div>
                        </form>
                      </div><!-- col-md-6-->
                      <dir class="col-md-6">
                        <h2 class="catch-eye"><strong><span class="brand-txt">Pague</span></strong> ahora y ahorre hasta un 20%</h2>
                        <img src="images/flotilla/mitsubishi-l200.png" alt="Mitsubishi" class='img-responsive'/>
                      </dir><!-- col-md-6 -->
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default next-step" id="change-bg">Siguiente</button></li>
                      </ul> 
                    </div><!-- tab-pane -->

                    <div class="tab-pane whiteback" role="tabpanel" id="step2">
                        <h3>Step two</h3>
                        <p>Second step</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                        </ul>
                    </div><!-- tab-pane -->
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step three</h3>
                        <p>Third step</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-default next-step">Siguiente</button></li>
                        </ul>
                    </div><!-- tab-pane -->
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <h3>Step three</h3>
                        <p>Third step</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-default next-step">Siguiente</button></li>
                        </ul>
                    </div><!-- tab-pane -->
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete steps</h3>
                        <p>You have successfully completed every steps.</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Submit</button></li>
                        </ul>
                    </div><!-- tab-pane -->
                    <div class="clearfix"></div>
                </div><!-- tab content -->
            </form>
          </div><!-- wizard -->
      </div><!-- container -->
    </div><!-- reservation-form -->
<!-- footer -->
<?php include("footer.php"); ?>
</body>
</html>
