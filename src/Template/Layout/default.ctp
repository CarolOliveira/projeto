<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet" type="text/css">
       <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://forum.tribalwars.com.br/image.php?u=98832&type=sigpic&dateline=1401099868" class="img-responsive">
                    </div>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="navbar navbar-default navbar-static-top test">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <?php echo $this->Html->link(
                            'Home',
                                array(
                                    'controller' => 'Welcome',
                                    'action' => 'index'
                                )
                            ); ?> 
                        </li>
                        <li>
                            <a href="#">Notícias</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Institucional</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Missão/Visão/Valores</a>
                                </li>
                                <li>
                                    <a href="#">Diretoria Vigente</a>
                                </li>
                                <li>
                                    <a href="#">Base Territorial</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Acordos e Convenções</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Contribuições</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Emissão de Guias</a>
                                </li>
                                <li>
                                    <a href="#">Tabela Sindical</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">SISAP</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Serviços</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Cadastro</a>
                                </li>
                                <li>
                                    <a href="#">Consulta Jurídica</a>
                                </li>
                                <li>
                                    <a href="#">Parcerias e Convênios</a>
                                </li>
                                <li>
                                    <a href="#">Auditório Secobesp</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Comunicados</a>
                        </li>
                        <li>
                            <a href="#">Cursos e Eventos</a>
                        </li>
                        <li>
                            <a href="#">Fale Conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header End -->
        <!-- Contents Start -->
        <?php echo $this->fetch('content') ?>
        <!-- Contents End -->
        <!-- Footer Start -->

        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>SECOBESP <br> 
                        Sindicato das Empresas de Cobrança e Recuperação de Crédito do Estado de São Paulo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>