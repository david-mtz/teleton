
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Teleton</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
    </head>

    <body>
        <svg height="0" width="0" style="position:absolute;margin-left: -100%;">
        <path id="heart-icon" d="M16,28.261c0,0-14-7.926-14-17.046c0-9.356,13.159-10.399,14-0.454c1.011-9.938,14-8.903,14,0.454
              C30,20.335,16,28.261,16,28.261z"/>            
        </svg>
        <header>
            <div class="navbar navbar-dark bg-teleton box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <strong><img src="https://www.teleton.org/assets/landing_2018/images/teleton.svg" alt="" class="tele" width="50px"></strong>
                    </a>
                </div>
            </div>
        </header>
        <div class="containter">
            <div class="row no-margin" style="text-align: center;">
                <div class="col-sm-3 text-center justify-content-center align-self-center">
                    <h4>
                        <span class="align-middle">
                            <i class="fas fa-dollar-sign"></i> <span class="total-dinero">236007000</span> / 456,013,740
                        </span>
                    </h4>
                </div>
                <div class="col-sm-6">
                    <svg class="heart" viewBox="0 0 32 32">
                    <use xlink:href="#heart-icon"></use>
                    </svg>
                </div>
                <div class="col-sm-3 text-center justify-content-center align-self-center">
                    <h4>
                        <span class="align-middle">
                            <i class="fas fa-user-alt"></i>
                            <span class="total-ninos">3928</span> / 7, 590
                        </span>
                    </h4>
                </div>
            </div>

            <div class="row no-margin">
                <div class="col-sm-12 text-center no-padding">
                    <h3 class="bg-teleton title-h3">Información adicional</h3>
                </div>
                <div class="col-sm-12 text-center">
                    <div id="mapa" style="width: 100%; height: 600px;"></div>
                </div>
            </div>

            <div class="row no-margin">
                <div class="col-sm-12 text-center no-padding">
                    <h3 class="bg-teleton title-h3">Aportaciones</h3>
                </div>
                <div class="col-sm-12 text-center">
                    <ul class="gallery_box">
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/62341_img-critGuerrerov2_C.png">
                                <div class="box_data">
                                    <span>Telecomm<br><div class="counter">10000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/34484_img-critBCSv2_C.png">
                                <div class="box_data">
                                    <span>Farmacias del Ahorro<br><div class="counter">13000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/15584_img-critQueretarov2_C.png">
                                <div class="box_data">
                                    <span>Infinitum<br><div class="counter">25000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/27752_img-critOaxacav2_C.png">
                                <div class="box_data">
                                    <span>Soriana<br><div class="counter">30000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/14925_img-critGuanajuatov2_C.png">
                                <div class="box_data">
                                    <span>Banamex<br><div class="counter">120000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/31808_img-critPueblav2_C.png">
                                <div class="box_data">
                                    <span>Telmex<br><div class="counter">10000</div></span>
                                </div></a>
                        </li>
                        <li>
                            <a href="#0"><img src="https://www.teleton-transparencia.org.mx/recursos//crits//stock/42957_COHAUILA_A.jpg">
                                <div class="box_data">
                                    <span>Telcel<br><div class="counter">$5000</div></span>
                                </div></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div style="padding: 15px;"></div>

        <!-- Sidebar  -->
    <div class="modal left fade" id="modal-informacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


        <script type="text/javascript">
            window._chatlio = window._chatlio || [];
            !function () {
                var t = document.getElementById("chatlio-widget-embed");
                if (t && window.ChatlioReact && _chatlio.init)
                    return void _chatlio.init(t, ChatlioReact);
                for (var e = function (t) {
                    return function () {
                        _chatlio.push([t].concat(arguments))
                    }
                }, i = ["configure", "identify", "track", "show", "hide", "isShown", "isOnline", "page", "open", "showOrHide"], a = 0; a < i.length; a++)
                    _chatlio[i[a]] || (_chatlio[i[a]] = e(i[a]));
                var n = document.createElement("script"), c = document.getElementsByTagName("script")[0];
                n.id = "chatlio-widget-embed", n.src = "https://w.chatlio.com/w.chatlio-widget.js", n.async = !0, n.setAttribute("data-embed-version", "2.3");
                n.setAttribute('data-widget-id', '080d65f2-52ea-443d-46f3-4cdcdef9bed7');
                c.parentNode.insertBefore(n, c);
            }();
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/knockout.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
        <script src="js/datos.js"></script>
        <script src="js/mapa.js"></script>
    </body>
</html>
