function initMap() {

 var markers = [
      {
        "title": 'Payless Car Rental Aeropuerto, Chihuahua',
        "lat": '28.645846',
        "lng": '-106.0825677',
        "description": '614 446 8406 aeropuerto.chih@paylesscarmexico.com',
        "imglink": 'http://i.imgur.com/1fmULrE.png'
      },
      {
        "title": 'Payless Car Rental Chihuahua',
        "lat": '28.7044083',
        "lng": '-105.9712019',
        "description": '614 413 1873 / 614 413 3866 centro.chihuahua@paylesscarmexico.com',
        "imglink": 'http://imgur.com/a/75ZQE' 
      },
      {
        "title": 'Payless Car Rental CDMX',
        "lat": '19.4317995',
        "lng": '-99.1568846',
        "description": '55 5566 5929 / 55 5566 5921 centro.cdmx@paylesscarmexico.com',
        "imglink": 'http://i.imgur.com/usRsC9p.png'
      },
      {
        "title": 'Payless Car Rental Ciudad Juarez, Chihuahua',
        "lat": '31.6356875',
        "lng": '-106.4369269',
        "description": '656 170 8123 / 656 170 8299 aeropuerto.juarez@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Consulado Ciudad Juárez, Chihuahua',
        "lat": '31.6859156',
        "lng": '-106.4059705',
        "description": 'Celular: 656 419 5476 rp.juarez@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Culiacán, Sinaloa',
        "lat": '24.7747994',
        "lng": '-107.467849',
        "description": '667 760 9384 / 667 760 1127',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Culiacán, Sinaloa',
        "lat": '24.7974792',
        "lng": '-107.3948536',
        "description": '667 715 4445 / 667 712 0139 ventas.culiacan@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Guadalajara, Jalisco',
        "lat": '20.6557592',
        "lng": '-103.3929942',
        "description": '333 121 0799 / 333 121 1023 centro.guadalajara@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Aeropuerto, Guadalajara Jalisco',
        "lat": '20.5286974',
        "lng": '-103.2954628',
        "description": '33 3688 6256 / 33 3688 6243 administracion.guadalajara@paylesscarmexico.c om',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental León, Guanajuato',
        "lat": '21.1079637',
        "lng": '-101.6446006',
        "description": '477 711 2115 / 477 711 4331 centro.leon@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Mexicali, Baja California',
        "lat": '32.6266565',
        "lng": '-115.251668',
        "description": '686 552 3557 counter.mexicali@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Mexicali, Baja California',
        "lat": '32.63641',
        "lng": '-115.4543732',
        "description": '686 566 2991 / 686 564 6869 centro.mexicali@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Apodaca, Nuevo León',
        "lat": '25.78066',
        "lng": '-100.1264184',
        "description": '81 1088 8231 / 81 8348 9165 aeropuerto.monterrey@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Monterrey, Nuevo León',
        "lat": '25.6803072',
        "lng": '-100.3445558',
        "description": '818 348 8866 centro.monterrey@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Puerto Vallarta, Jalisco',
        "lat": '20.6759943',
        "lng": '-105.2514949',
        "description": '322 221 0263 / 322 221 0136 aeropuerto.vallarta@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Aeropuerto San José del Cabo, Baja California Sur',
        "lat": '23.1419194',
        "lng": '-109.7245317',
        "description": '624 183 3466 / 624 146 5290 aeropuerto.sanjose@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental San José del Cabo, Baja California Sur',
        "lat": '22.8887894',
        "lng": '-109.9120105',
        "description": '624 143 5222 / 624 143 1499 ventascsl@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Paseo Malecon, San José del Cabo, Baja California Sur',
        "lat": '23.041426',
        "lng": '-109.7054521',
        "description": 'Celular: 624 183 3468 / 624 142 5500 centro.sjd@paylesscarmexico.com',
        "imglink": ''
      },
      {
        "title": 'Payless Car Rental Tijuana, Baja California',
        "lat": '32.5345061',
        "lng": '-117.0199685',
        "description": '664 973 0050 / 664 973 0052 centro.tijuana@paylesscarmexico.com',
        "imglink": ''
      },

      {
        "title": 'Payless Car Rental SLP',
        "lat": '22.1408314',
        "lng": '-100.9443909',
        "description": '444 567 5293 / 444 567 6397 centro.sanluispotosi@paylesscarmexico.com',
        "imglink": 'http://i.imgur.com/Zx6sdNG.png'
      },
      {
        "title": 'Payless Car Rental Sinaloa',
        "lat": '24.7747994',
        "lng": '-107.4678437',
        "description": '667 715 4445 / 667 712 0139 ventas.culiacan@paylesscarmexico.com',
        "imglink": 'http://davidmixner.typepad.com/.a/6a00d8341c90b153ef0192abe15965970d-500wi'
      }

  ];
    window.onload = function () {
        LoadMap();
    }
    function LoadMap() {
        var image = {
        url: 'http://i.imgur.com/8QkgAcr.png',
        size: new google.maps.Size(30, 30),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 32)
      };


        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };


        var mapOptions = {
            center: new google.maps.LatLng('22.6197273', '-100.9219445'),
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById("maps"), mapOptions);
 
        //Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();
 
        for (var i = 0; i < markers.length; i++) {
            var data = markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: image,
                shape: shape,
                title: data.title
            });

            //infoWindow color
            google.maps.event.addListenerOnce(map, 'idle', function(){
             jQuery('.gm-style-iw').prev('div').remove();
            }); 

            //Resize Function
            google.maps.event.addDomListener(window, "resize", function() {
              var center = map.getCenter();
              google.maps.event.trigger(map, "resize");
              map.setCenter(center);
            });
 
            //Attach click event to the marker.
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent("<div class='cities' style = 'width:300px;min-height: 330px'>" + "<center><img src='" + data.imglink + "'></center></br>" + data.description + "</div>");
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
    }
 };   

    