<!DOCTYPE html>
<html lang="pt">

<head>
  <link rel="stylesheet" href="dhtmlwindow/dhtmlwindow/windowfiles/dhtmlwindow.css" type="text/css" />

  <!-- <script type="text/javascript" src="dhtmlwindow/dhtmlwindow/windowfiles/dhtmlwindow.js">
  
  /***********************************************
  * DHTML Window Widget- © Dynamic Drive (www.dynamicdrive.com)
  * This notice must stay intact for legal use.
  * Visit http://www.dynamicdrive.com/ for full source code
  ***********************************************/
  </script>
   <script type="text/javascript">
          var googlewin=dhtmlwindow.open("googlebox", "iframe", "https://agifpii.000webhostapp.com/planos.php", "AGIFPI planos", "width=700px,height=450px,resize=1,scrolling=1,center=1", "recal")
      </script>
  
      <a href="#" onClick="googlewin.load('iframe', 'http://cssdrive.com', 'CSS Drive'); return false">Load new site into window</a>
      <a href="#" onClick="googlewin.moveTo('middle', 'middle'); return false">Center Window</a>
      <a href="#" onClick="googlewin.hide(); return false">Hide Window</a>
      <a href="#" onClick="googlewin.close(); return false">Close Window</a> -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/freelancer.css">
  <link rel="shortcut icon" type="logo2.png" href="logo2.png">
  <title>Gestão Empresarial</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">
<script src="//code.jivosite.com/widget.js" jv-id="cyQnu00MZT" async></script>

</head>

<body id="page-top">
 

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="saiba_mais.php">Saiba Mais</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Importante</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Pesquisas</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Desenvolvedores</a>
          </li>

          
            <?php 
              if (!isset($_COOKIE['usuario'])) {
              echo "";
             # code...
            }
            else{?>
              <div>
                <input class="btn-log" style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="Sair" onclick="window.location.href='logout.php'"/></div>
            
            <?php } ?>    
              <h3 class="nome"><?php
              if (isset($_COOKIE['usuario'])) {
                echo $_COOKIE['usuario'];
            }
            else { ?></h3>
              <div>
                <input style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="Logar" onclick="window.location.href='home.html'"/></div>
            <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
          
          <div>
            
          </div>
          <div>
          <hr class="sidebar - divider my -0">
          <div class="">
              
            
                
                </div>
              </div>
            </p>
          </div>
       


  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="logo2.png" height="354" width="352" >
      <h1 class="text-uppercase mb-0">Sistema de Gestão Empresarial do IFPI</h1>
      <hr class="star-light">

      <h2 class="font-weight-light mb-0">Fazer uma análise do meu empreendimento</h2>
    </div>
  
      <form>
      <input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #007FFF; color: #ffffff; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Comece Aqui" onclick="window.location.href='tabela.php'" />
      </form> 
      <hr class="star-light">
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Importante</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image1.png" width="900" height="800" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image2.png" width="900" height="650" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/images3.png" width="900" height="650" alt="">
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Pesquisas</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Nesse site você pode ver seu rendimento, se precisa melhorar em algo.	Se por acaso você se considerar bom, ou seja, que gostou do resultado (de sua nota), você pode tentar fazer cursos públicos ou até mesmo entrevista de emprego.

é raro receber uma oferta de emprego logo na primeira entrevista, em multinacionais esse processo pode ser mais longo. Em empresas pequenas, nas quais o poder decisório está nas mãos do patrão, pode ser mais rápido. No livro Como Conquistar um Ótimo Emprego, o consultor Thomas Case faz uma série de recomendações para a hora da entrevista.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">
Tente ser o mais sincero possível quando for responder os questionários, caso não seja, além de você não saber a real situação de sua empresa, você irá se basear em um resultado falso.

BOA SORTE!</p>
<b><p>Veja o Vídeo Abaixo e descubra mais</p></b>
        </div>
      
    </div>
  <!-- <center><iframe width="560" height="315" src="https://www.youtube.com/embed/OG6T6Rl7mD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> -->
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Desenvolvedores e Supervisores</h2>
      <hr class="star-dark mb-5">
      <!--
      <center><img src="/home/aluno/Área de Trabalho/Vai dar certo/startbootstrap-freelancer-gh-pages/img/mygod.png"><img src="/home/aluno/Área de Trabalho/Vai dar certo/startbootstrap-freelancer-gh-pages/img/loucura.png"></center>
      <center><h3>Contatos/E-mails</h3></center>
      <center><h4 style="color: #999999">Henrique dos Santos</h4></center>
      <center><p>(89) 9 99657498</p></center>
      <center><p>henrique123@gmail.com</p></center>
      <center><h4 style="color: #999999">Leomar Sousa</h4></center>
      <center><p>(89) 9 94256484</p></center>
      <center><p>leoleo321@gmail.com</p></center>
      <center><h4 style="color: #999999">Cassia Nascimento</h4></center>
      <center><p>(89) 9 88456558</p></center>
      <center><p>nascimentocassia456@gamil.com</p></center>
      <center><h4 style="color: #999999">Lidiane Gonsalves</h4></center>
      <center><p>(89) 9 99123245</p></center>
      <center><p>lili1560@gmail.com</p></center>
      <center><h4 style="color: #999999">Edimael Damascena</h4></center>
      <center><p>(89) 9 94586723</p></center>
      <center><p>bel321@gmail.com</p></center>
    </div>  
    </div>
  </section>
   -->
   <section id="team" class="pb-5">
  <div class="container">
      <center><b><h5 class="section-title h1"></h5></b></center>
      <div class="row">
          <!-- Team member -->
              
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/leo.jpg" alt="card image" width="400" height="400"></p>
                                  <h4 class="card-title">Leomar Sousa</h4>
                                  <p class="card-text">leobalanamente@gmail.com</p>
                                  <p class="card-text">(89) 9 94256453</p>
                                   <div class="card">
                                  <div class="card-body">
                                  <h4 class="card-title">Estudante</h4>
                                  <p class="card-text">Cursando Técnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                         
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/cassia12.jpg" alt="card image"  width="400" height="400"></p>
                                  <h4 class="card-title">Cássia Nascimento</h4>
                                  <p class="card-text">cassia321@gmail.com.</p>
                                  <p class="card-text">(89) 9 88254983</p>
                                   <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Estudante</h4>
                                  <p class="card-text">cursando Técnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                             
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="lili.jpg" alt="card image" width="400" height="400"></p>
                                  <h4 class="card-title">Lidiane Gonçalves</h4>
                                  <p class="card-text">lili345@gmail.com</p>
                                  <p class="card-text">(89) 9 94587621</p>
                                  <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Estudante</h4>
                                  <p class="card-text">Cursando Técnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="bel.jpg" alt="card image" width="400" height="400"></p>
                                  <h4 class="card-title">Edimael Damascena</h4>
                                  <p class="card-text">bel2019@gamil.com</p>
                                  <p class="card-text">(89) 9 88008922</p>
                                  <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Estudante</h4>
                                  <p class="card-text">Cursando Técnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="lili.jpg" alt="card image" width="400" height="400"></p>
                                  <h4 class="card-title">Eduardo Walter</h4>
                                  <p class="card-text">lili345@gmail.com</p>
                                  <p class="card-text">(89) 9 94587621</p>
                                  <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Professor</h4>
                                  <p class="card-text">Professor do curso Técnico em IAdministração na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="lili.jpg" alt="card image" width="400" height="400"></p>
                                  <h4 class="card-title">Robson Freitas</h4>
                                  <p class="card-text">lili345@gmail.com</p>
                                  <p class="card-text">(89) 9 94587621</p>
                                  <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Professor e Coordenador</h4>
                                  <p class="card-text">Professor e coordenador do curso Técnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                              <i class="fa fa-skype"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                              <i class="fa fa-google"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          

      </div>
  </div>
</section>
<!-- Team -->
  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0">IFPI Campus Oeiras
            <br>O Campus Oeiras é localizado na Rua Projetada, s/n, Bairro Uberaba II, Oeiras (PI) - CEP: 64.500-000</p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ao redor da web</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com/+googleplus">
                <i class="fab fa-fw fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/login?lang=pt">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>
            
          </ul>
        </div>
        
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <center><footer>&copy Página da AGIFPI, todos os direitos reservados.</footer></center>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Avalie e monitore sua empresa</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/image1.png" alt="">
            <p class="mb-5">Medir o desempenho da empresa é fundamental para o sucesso e a boa gestão. Não se trata apenas de uma boa prática gerencial, mas de uma ação necessária para saber se a empresa está trilhando o caminho desejado, quanto ainda falta para alcançar os objetivos e para realizar os ajustes necessários. </p>
            <p class="mb-5">E na maioria das situações, sem muito esforço, é possível começar a medir o desempenho a partir das informações e ferramentas que já estão disponíveis na empresa. É importante, porém, criar uma cultura que priorize a avaliação do desempenho organizacional.</p>
            <p class="mb-5">Tente usar exemplos profissionais (ou acadêmicos), mas de preferência a empresa atual.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0"> Por que e para que medir o desempenho da empresa </h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/image2.png" alt="">
            <p class="mb-5">Toda empresa tem (ou deveria ter) uma estratégia de crescimento formulada e documentada. Essa estratégia define não somente aonde a empresa quer chegar, mas também os meios que serão utilizados e o caminho que será percorrido para alcançar os objetivos. Sabendo, portanto, onde a empresa está (o hoje) e onde ela deseja está (o futuro), é preciso que continuamente ela verifique o quanto já está mais próxima do objetivo. Do contrário, não haverá clareza e segurança quanto aos rumos da empresa, e tampouco os ajustes necessários poderão ser realizados.

            É necessário medir o desempenho da empresa pois é dessa forma que os sócios, diretores e todos os gestores saberão se o trabalho que está sendo executado está, de fato, conduzindo a empresa para o objetivo definido.</p>

            <p class="mb-5">O desempenho medido não serve apenas como mera informação (muitas empresas até medem o seu desempenho e sabem dizer como estão se saindo mês a mês, mas nenhuma ou pouca ação de melhoria é tomada). A partir das informações obtidas deve ter início um processo contínuo de melhoria: quais resultados não foram satisfatórios e devem ser melhorados? Como fazer isso? Quais resultados estão satisfatórios mas que podem ser impulsionados ainda mais? Houve oscilação do decorrer do tempo? As análises que podem ser feitas, seguidas da ação de correção ou melhoria, são inúmeras.</p>

            <p class="mb-5">Portanto, tão importante quanto ter o desempenho medido é fazer uso dessas medições. São informações que, quando exploradas, revelam muito sobre a situação da empresa.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
             Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0"> Como medir o desempenho organizacional </h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/images3.png" alt="">
            <p class="mb-5">O primeiro passo para uma empresa medir o seu desempenho é saber, ao certo, o que quer medir. Geralmente, as empresas fazem a sua avaliação de desempenho a partir dos números financeiros e contábeis. Isso é bom e necessário. Porém, há muito mais que pode ser avaliado.</p>

            <p class="mb-5">Além de todos os indicadores financeiro-contábeis, é possível medir, por exemplo, o desempenho das ações de marketing (como a geração de leads), a eficácia do departamento comercial (visitas, propostas comerciais e vendas), os ganhos do departamento de compras (como as reduções de preço alcançadas), entre outros. De maneira objetiva, tudo aquilo que pode ser mensurado poderá então ser medido e acompanhado. É fundamental, portanto, que a empresa registre as informações e tenha facilidade em acessá-las.</p>

            <p class="mb-5">Para analisar o desempenho organizacional, uma vez que se têm as informações necessárias, uma planilha eletrônica já é o suficiente. Organizando os dados coletados por mês, por exemplo, é possível visualizar o desempenho da empresa no decorrer do tempo e, a partir desses dados, realizar análises mais profundas.
            Contudo, isso se torna ainda mais fácil se a empresa faz o uso de sistemas de gestão, como os ERP, CRM e outros. Normalmente esses softwares – inclusive aqueles que operam na nuvem – geram relatórios interessantes que permitem avaliar o desempenho da empresa.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
