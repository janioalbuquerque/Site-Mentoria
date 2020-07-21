<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Projeto 08</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><strong>Projeto 08</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contatos</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="box-fix">

<section class="bg-top">
  <div class="overlay"></div>
  <div class="container fix-zindex">
    <div class="texto-bg">
    <div class="row">
      <div class="col-md-6">
        
        <h2>Seja muito bem vindo(a)</h2>
        <p>Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, ut laoreet dolor eros et sem. Vivamus tempor nisi eget sodales tempor. Phasellus vel quam aliquam, dictum sem sed, gravida odio. In finibus eros a mi iaculis vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tellus libero, consequat nec rutrum faucibus, euismod vel mi. Pellentesque a diam vestibulum.</p>
      
      </div>

      <div class="col-md-6 padding30">
        <h2>Inscreva-se para nossa <span style="color:#3FA3C5; ">Mentoria</span></h2>
        <form method="post">
          <div class="col-auto">
            <label>E-mail</label>
            <input type="email" class="form-control"  placeholder="Digite seu E-mail">
          </div>
          <button style="background-color: #3FA3C5; border: 0; width: 200px; margin-top: 10px;" type="submit" class="btn btn-primary mb-3">Confirme o envio    <svg  style="margin-left: 5px;"width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
</svg></button>
        </form>
      </div>
    </div>
  </div>
  </div>
  
</section>

<section class="chamada">
  <div class="container">
    <h2 class="text-center"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
</svg></i></h2>
  </div>
  
</section><!--chamada-->

<section style="background-color: rgb(225,225,225);" class="sobre">
  

  <!-- Trigger the modal with a button -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="custom-title">
          <div class="transition"></div>
          <h2>Sobre</h2>
        </div><!--custom-title-->

        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tellus libero, consequat nec rutrum faucibus, euismod vel mi. Pellentesque a diam vestibul..</p>

         <div class="text-center"> <button style="background-color: #3FA3C5;" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Saiba Mais</button></div>
          
          <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Minha Historia</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, ut laoreet dolor eros et sem. Vivamus tempor nisi eget sodales tempor. Phasellus vel quam aliquam, dictum sem sed, gravida odio. In finibus eros a mi iaculis vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tellus libero, consequat nec rutrum faucibus, euismod vel mi. Pellentesque a diam vestibulum.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
      </div><!--col-md-12-->
  </div><!--row-->
  </div><!--container-->
  </section><!--sobre-->


  <section class="diferenciais" >
    <div class="container">
      <div class="custom-title">
          <div class="transition"></div>
          <h2>Nossos Diferenciais</h2>
        </div><!--custom-title-->
      <div class="row">

        <div class="col-md-4 text-center">
          <h2>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
          </h2>
          <p>Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh.</p>
        </div><!--col-md-4-->

        <div class="col-md-4 text-center">
          <h2>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
          </h2>
          <p>Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh.</p>
        </div><!--col-md-4-->

        <div class="col-md-4 text-center">
          <h2>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-patch-check-fll" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
            </svg>
          </h2>
          <p>Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh.</p>
        </div><!--col-md-4-->

        
      </div><!--row-->     
    </div><!--container-->
  </section><!--diferencial-->

  <section class="convite">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h2><svg style="margin-right: 10px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>Participe da nossa <span style="color: rgb(100,100,100); ">Mentoria</span></h2>
        </div>   
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <input placeholder="Seu E-mail aqui.." type="email" class=""><button type="submit" class="btn btn-light">Enviar</button>
            </div>
          </form>
        </div><!--col-md-6-->
      </div><!--row-->     
    </div><!--container-->
  </section><!--convite-->

  <section class="contato">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        
          <div>
          <h2>Fale conosco</h2>
          </div>

          <form action="/action_page.php">
            <div class="form-group">
            <label >Nome:</label>
            <input type="text" class="form-control" >
            </div>
             <div class="form-group">
            <label >E-mail:</label>
            <input type="email" class="form-control" >
            </div>
            <div class="form-group">
            <label >Sua Mensagem:</label>
            <textarea class="form-control"></textarea>
            </div>
            <button style="background-color: #3FA3C5; margin-top: 10px; color: white;" type="submit" class="btn btn-default">Enviar</button>
         </form>
        </div>
      </div>
   </div>
  </section>

  <section  id="footer">
    <div  class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Mais Links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Nossa Hitoria</h5>
          <p style="color: white;">Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh, Sed ligula sem, dapibus nec est ut, volutpat tempus eros. Donec sed pulvinar odio. Vestibulum viverra, libero non vulputate congue, dolor ex gravida nibh. </p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
         
          <div style="text-align: right;"class="container janio">
            <h2 style="margin-right: 50px; margin-top: 40px; color: white;"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-emoji-laughing janio" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5z"/>
  <path d="M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
</svg></h2>
            <h6 class="janio" style="color: white; position: relative; margin-top: 20px;">© 2020 janio Albuquerque</h6>
            
          </div>
        </div>
      </div>
    
      
    </div>
  </section>
  <!-- ./Footer -->


    
</div><!--bpx-fixed-->



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>