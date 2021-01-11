<? php


if (empty($_POST))
{
  $display = "none";
}
    else 
    {

      
      $ email_to = "ernest_almazan@outlook.com" ;
      $ email_subject = "Este mensaje proviene del sitio web" ;
      
      $ email_message = "Formulario: \ n \ n" ;
      $ email_message . = "Nombre:" . $ _POST [ 'Nombre' ]. "\ n" ;
      $ email_message . = "Apellido:" . $ _POST [ 'Apellidos' ]. "\ n" ;
      $ email_message . = "Correo:" . $ _POST [ 'Correo' ]. "\ n" ;      
      $ email_message . = "Mensaje:" . $ _POST [ 'Mensaje' ]. "\ n \ n" ;
      
      
      // Se envía el correo electrónico usando la función mail () de PHP
      $ encabezados = 'De:' . $ _POST [ 'Correo' ]. "\ r \ n" .
          'Responder a:' . $ _POST [ 'Correo' ]. "\ r \ n" .
          'X-Mailer: PHP /' . phpversion ();
      mail ( $ email_to , $ email_subject , $ email_message , $ encabezados );
      
      if (mail)
      {
    
      $mensaje = "El mensaje se ha enviado";
      $color ="success";
      $display = "block";
      }


      }
      



    }


?>




<!DOCTYPE html>
<html lang="es-mx">
  <head>
      <meta name="description" content="Bienvenido a Ernest Site  Desarrollo Web Programacion y más..">
  <meta name="keywords" content="progrmacion desarrollo web diseño web">
  <meta name="author" content="Ernesto Almazan Resendiz">
        <title>Ernesto Almazan Portafolio Web</title>
        <link rel="icon" type="image/x-icon" href="img/perfil.jfif" />
    <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> </title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
     <link rel="stylesheet" href="css/libs/animate.css">
  <link rel="stylesheet" href="css/site.css"> 
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/estilo.css" /> 
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  
  </head>
  <body class="fondos bg-dark">
      <div class="fondo">

    
      
      <section class="inicio" id="inicio">
      
      <div class="incc">
          
         
          <h1 class="titulo wow fadeIn" data-wow-delay="1s">DESARROLLADOR WEB</h1><hr>
           <h2 class=" wow fadeIn text-primary" data-wow-delay="2s">ERNESTO ALMAZAN RESENDIZ</h2><br><a href="#portafolio">
          <button type="button" class="btn btn-primary btn-rounded wow bounceIn"data-wow-delay="3s" >VER PORTAFOLIO WEB</button></a>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
          </div>
      
      
      <div class="inc">
          <img src="" width="400px" class="img wow slideInRight" data-wow-delay="3s">
          
          </div>
      
      
      
      
      
      </section>      

      
<div class="pleca"></div>
      
          <nav class="navbar  navbar-expand-lg  scrolling fixed-header container-fluid  "  id="barra">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse wow slideInDown" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        <a class="nav-link" href="#acerca">SOBRE MI </a>
        <a class="nav-link" href="#habilidades">HABILIDADES</a>
        <a class="nav-link" href="#portafolio">PORTAFOLIO</a>
        <a class="nav-link" href="#contacto" tabindex="-1" aria-disabled="true"
          >CONTACTO</a
        >
      </div>
         <div class="navbar-right"><a href="https://www.linkedin.com/in/ernesto-almazan-resendiz-72b87a172/" target="_blank">
    <button type="button" class="btn btn-primary btn-floating mx-1" >
      <i class="fab fa-linkedin"></i>
    </button></a>

<a href="https://api.whatsapp.com/send/?phone=5215611501699&text&app_absent=0" target="_blank">
    <button type="button" class="btn btn-dark btn-floating mx-1">
      <i class="fab fa-whatsapp"></i>
    </button></a>
<a href="https://github.com/Dev-almazan" target="_blank">
    <button type="button" class="btn btn-primary btn-floating mx-1" >
      <i class="fab fa-github"></i>
    </button>   </a>     
    </div>
      </div>  
  </div>
</nav>  
<section class="acerca" id="acerca">
      
      
    <div class="ac wow slideInLeft" >
        <h1 class="naranja">SOBRE MI</h1>
        <h6>Hola comunidad Web!</h6><hr>
<p>
    Mi nombre es Ernesto Almazán,  <span class="naranja">soy licenciado en Informática, </span> me considero una persona analítica, responsable y autodidacta que le gusta afrontar nuevos retos profesionales, me gusta aprender nuevas tecnologías web que me permitan implementarlas en cada proyecto.<br></p>
        <p>Desarrollador Web full stack. </p>  

  <div class="btn-group shadow-0 wow bounceIn"  role="group" style="margin-top: 2%; ">
  <a href="#contacto"> <button type="button" class="btn btn-dark" data-mdb-color="dark" style="color:  whitesmoke;" >CONTACTAME </button></a>
  <button type="button" class="btn btn-light" data-mdb-color="dark" style="color:  black;">DESCARGAR CV</button>
</div>      
        
    
    </div>
      
       <div class="acc wow slideInRight">
           <center>
           <img  src="img/perfil.jfif" width="230px" class="img">
            </center>   
           <div class="card">

  <div class="card-body">
    <h5 class="card-title text-center resaltes"  >Ernesto Almazan Resendiz</h5><hr>
     <ol class="card-text">
    <li><span class="resaltes">Escolaridad:</span> Licenciatura Concluida</li>
    <li><span class="resaltes">Fecha de nacimiento:</span> 22/07/1997</li>
       <li><span class="resaltes">Ubicación:</span> Ciudad de México</li>    
    <li><span class="resaltes">Teléfono:</span> 56-11-50-16-99</li>
    <li><span class="resaltes">Correo:</span> ernest_almazan@outlook.com</li>
      
      </ol>
 
</div>
    
    </div>
      
      
      </section>      
      
  
   
         
           <div class="mhabilidad" id="habilidades" >
          <h1 class="text-center claro">HABILIDADES</h1><hr>
          <h5 class="text-white text-center">Estos son algunos lenguajes que utilizo para desarrollar sitios y aplicaciones web.
          </h5>
      
    
      <section class="habilidad" >
        
          
                 <div class="hab wow slideInRight">
          
         <h2 class="claro">FRONT END</h2>

             
            <div class="barras">
                
                <div class="col">HTML5</div>
                <div class="col">
                <div class="progress" style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"style="width: 90%"aria-valuenow="90"aria-valuemin="0" aria-valuemax="100">
                90%
                </div>
                </div> 
                </div>         
                </div> 
             
                <div class="barras">
                
                <div class="col">CSS3</div>
                <div class="col">
                <div class="progress" style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"style="width: 90%"aria-valuenow="90"aria-valuemin="0" aria-valuemax="100">
                90%
                </div>
                </div> 
                </div>         
                </div> 
             
                <div class="barras">
                
                <div class="col">JAVA SCRIPT</div>
                <div class="col">
                <div class="progress" style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"style="width: 75%"aria-valuenow="75"aria-valuemin="0" aria-valuemax="100">
                75%
                </div>
                </div> 
                </div>         
                </div> 
                  <div class="barras">
                
                <div class="col">BOOTSTRAP 4</div>
                <div class="col">
                <div class="progress" style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"style="width: 95%"aria-valuenow="95"aria-valuemin="0" aria-valuemax="100">
                95%
                </div>
                </div> 
                </div>         
                </div>      
                     
             
            
          
            
             <center>
        <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5 fa-4x"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3 fa-4x"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square fa-4x"></i></li>
                     <li class="list-inline-item"><i class="fab fa-bootstrap fa-4x"></i></li>
                    </ul>  

          
      </center>
                      </div>
            
   
         <div class="habb wow slideInLeft">
          
         <h2 class="claro">BACK END</h2>

             
            <div class="barras">
                
                <div class="col">PHP</div>
                <div class="col">
                <div class="progress " style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"style="width: 75%"aria-valuenow="75"aria-valuemin="0" aria-valuemax="100">
                75%
                </div>
                </div> 
                </div>         
                </div> 
             
                <div class="barras">
                
                <div class="col">MYSQL</div>
                <div class="col">
                <div class="progress" style="height: 20px">                                   
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"style="width: 85%"aria-valuenow="75"aria-valuemin="0" aria-valuemax="100">
                85%
                </div>
                </div> 
                </div>         
                </div> 
             
                <div class="barras">
                
                <div class="col">GIT </div>
                <div class="col">
                <div class="progress " style="height: 20px">                                   
                <div class="progress-bar progress-bar progress-bar-striped progress-bar-animated" role="progressbar"style="width: 90%"aria-valuenow="90"aria-valuemin="0" aria-valuemax="100">
                90%
                </div>
                </div> 
                </div>         
                </div> 
             
               <div class="barras">
                
                <div class="col">C PANEL </div>
                <div class="col">
                <div class="progress " style="height: 20px">                                   
                <div class="progress-bar progress-bar progress-bar-striped progress-bar-animated" role="progressbar"style="width: 95%"aria-valuenow="95"aria-valuemin="0" aria-valuemax="100">
                95%
                </div>
                </div> 
                </div>         
                </div> 
          
            
                <center>
                <ul class="list-inline dev-icons">
                <li class="list-inline-item"><i class="fab fa-php fa-4x"></i></li>
                <li class="list-inline-item"><i class="fas fa-database fa-4x"></i></li>
                <li class="list-inline-item"><i class="fab fa-github fa-4x"></i></li>
                  <li class="list-inline-item"><i class="fab fa-cpanel fa-4x"></i></li>    
                </ul>
                </center>    

           </div>
      
      
      </section>   
      
    </div>
      

     
      
    
    
    
    
  <div class="mproyectos" id="portafolio">
          <h1 class="text-center naranja">PORTAFOLIO</h1>
          <P class="text-white text-center">Estos son algunos proyectos personales y profesionales que he desarrollado desde cero.
          </P>
      <hr>
     
     
<!-- Carousel wrapper -->
<div
  id="carouselBasicExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <ol class="carousel-indicators naranja" >
    <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" style="border-radius: 60px; width:2px; "></li>
    <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" style="border-radius: 60px; width:2px; " ></li>
    
  </ol>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
  <section class="proyectos ">   
          <div class="tarjetas">
<div class="card" > 
  <img src="img/simulador.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes text-center">Simulador de credito</h5><hr>
    <p class="card-text">
      Simulador de crédito financiero básico desarrollado con HTML, CSS Y JAVA SCRIPT
    </p>
      <ul class="list-inline dev-icons">
       <li class="list-inline-item"><a href="https://pensive-pasteur-2aea0d.netlify.app/" class="btn btn-primary">Visualizar proyecto</a></li>
               
                </ul>
  </div>
</div>
          </div>
   
          
           <div class="tarjetas">
<div class="card">
  <img src="img/gemp.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes  text-center">Sitio Web Empresarial</h5><hr>
    <p class="card-text">
 SItio web empresarial desarrollado con HTML, CSS JAVA SCRIPT Y BOOTSTRAP 4
    </p>
      <ul class="list-inline dev-icons">
                <li class="list-inline-item"><a href="http://gempresarialpm.mx/" class="btn btn-primary">Visualizar proyecto</a></li>
        
               
                </ul>
  </div>
</div>
          </div>
          
           <div class="tarjetas">
<div class="card">
  <img src="img/matcha.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes  text-center">Landing Page</h5><hr>
    <p class="card-text text-left">
      Landing page para promionar servicio desarrollado con HTML, CSS JAVA SCRIPT Y BOOTSTRAP 4.
    </p>
   <ul class="list-inline dev-icons">
       <li class="list-inline-item"><a href="https://laughing-wozniak-6888c5.netlify.app/" class="btn btn-primary">Visualizar proyecto</a></li>
                </ul>
  </div>
</div>
          </div>
      
      
      </section>
    </div>

    <!-- Single item dos  -->
    <div class="carousel-item">
  <section class="proyectos ">   
          <div class="tarjetas">
<div class="card" > 
  <img src="img/sistema.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes  text-center">Ssitema de Gestiòn de clientes</h5><hr>
    <p class="card-text">
      Sistema de gestion de clientes con login de acceso, base de datos, un crud, modulo de analitica
    </p>
      <ul class="list-inline dev-icons">
       <li class="list-inline-item"><a href="https://gempresarialpm.mx/GEMP/" class="btn btn-primary">Visualizar proyecto</a></li>
               
                </ul>
  </div>
</div>
          </div>
   
          
           <div class="tarjetas">
<div class="card">
  <img src="img/servihogar.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes  text-center">Sitio Web Comercial</h5><hr>
    <p class="card-text">
 SItio web comercial desarrollado con HTML, CSS JAVA SCRIPT Y BOOTSTRAP 4
    </p>
      <ul class="list-inline dev-icons">
                <li class="list-inline-item"><a href="https://servihogar.com.mx/" class="btn btn-primary">Visualizar proyecto</a></li>
        
               
                </ul>
  </div>
</div>
          </div>
          
           <div class="tarjetas">
<div class="card">
  <img src="img/Captura.PNG" class="card-img-top" width="600px">
  <div class="card-body">
    <h5 class="card-title resaltes  text-center">Crud basico</h5><hr>
    <p class="card-text text-left">
      Esto es un  crud con PHP MYSQL Y JAVA SCRIPT .
    </p>
   <ul class="list-inline dev-icons">
       <li class="list-inline-item"><a href="http://ernestosite.online/CRUD/" class="btn btn-primary">Visualizar proyecto</a></li>
                </ul>
  </div>
</div>
          </div>
      
      
      </section>
    </div>


  </div>

</div>
<!-- Carousel wrapper -->
         
    </div>
       
      
      <section class="contacto" id="contacto">
      
      
          <form action=""  method="post"  id="formulario" >
              <h1 class="text-primary">CONTACTO</h1><hr>
              <P class="text-white">Envíame un mensaje, te responderé a la brevedad posible.</P>
           
 
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control"  required />
        <label class="form-label" for="form3Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" required  />
        <label class="form-label" for="form3Example2">Apellidos</label>
      </div>
    </div>
  </div>

  
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" required  />
    <label class="form-label" for="form3Example3">Correo electrónico</label>
  </div>

 
 <div class="form-outline mb-4">
  <textarea class="form-control" id="textAreaExample" rows="4" required></textarea>
  <label class="form-label" for="textAreaExample">Mensaje</label>
</div>
  <button type="submit" class="btn btn-primary btn-block mb-4">ENVIAR MENSAJE</button>


  <div class="text-center">
    <p>o sigueme en:</p>
              
<a href="https://www.linkedin.com/in/ernesto-almazan-resendiz-72b87a172/" target="_blank">
    <button type="button" class="btn btn-primary btn-floating mx-1" >
      <i class="fab fa-linkedin"></i>
    </button></a>

<a href="https://api.whatsapp.com/send/?phone=5215611501699&text&app_absent=0" target="_blank">
    <button type="button" class="btn btn-dark btn-floating mx-1">
      <i class="fab fa-whatsapp"></i>
    </button></a>
<a href="https://github.com/Dev-almazan" target="_blank">
    <button type="button" class="btn btn-primary btn-floating mx-1" >
      <i class="fab fa-github"></i>
    </button>   </a>         
   

  </div>
</form>
          
          
          
      
      </section>
      
      <!-- FOOTER -->
  <footer class="mproyectos"  style="padding: 1%;" >
    <p class="text-center text-white">&copy; Desarrollado en 2020 por Dev Almazan  </p>
  </footer>
</div>
  </body>
 

   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> 
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/logica.js"></script>    
        <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
</html>
