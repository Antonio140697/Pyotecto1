<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#">
          <img src="assets/img/logo10.png" alt="" width="180" height="130" class="d-inline-block align-text-top">
    
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.html">GALERIA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservacion.html">RESERVACION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acercade.html">ACERCA DE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.html">CONTACTANOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">ADMIN</a>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">BUSCAR</button>
          </form>
        </div>
      </div>
    </nav>

  </header>

  <section> 
    <div class="container-sm mt-5">
      <div class="gallery  border-2 p-3">
        <div class="image"><span><img src="assets/img/nuevas/fachada.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/recep.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/pas1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/pas_gra1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv1_2.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv2.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv2_1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv3.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv3_1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv4.jpeg" alt=""></span></div>
        <div class="image"><span><img src="assets/img/nuevas/nv5_2.jpeg" alt=""></span></div>
        
        
      </div>
    </div>
    <div class="preview-box">
      <div class="details" data-bs-toggle="image-box" data-bs-target="#image-box">
        <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
        <span class="icon fas fa-times"></span>
      </div>


      <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left"></i></div>
        <div class="slide next"><i class="fas fa-angle-right"></i></div>
        <img src="" alt="">
      </div>
    </div>
    <div class="shadow"></div>

  </section>

  <section class="galeria container mt-5">
    <div class="contenedor top">
        <div class="cont_nosotros">
            <h1>FOTOS</h1>
           <p>Estas son algunas fotografías de nuestras habitaciones de los diferentes modalidades como lo es la doble y la individual.
        </div>
    </div>

    <div class="contain">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/img3.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/nuevas/nv1.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/img4.jpeg" alt="">
                </div>
            </div>
            <div class="i">
                <div class="imagen">
                    <img src="assets/img/nuevas/nv5.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3
            }
        }
    })
</script>



  <footer>
    <div class="footer">
      <div class="container">
        <div class="main row">
          <div class="col-md-6 col-lg-5">
            <div class="footer-link">
              <img src="assets/img/logo10.png" alt="">
          
              <p class="text-align-justify">Entre sus catividades primordiales es la reservación vía
                llamada y de forma presencial que se
                hacen para obtener la reservación de un cuarto, dependiendo de la disponibilidad al
                momento en el Hotel</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-contact text-center">
              <h2>VISITANOS</h2>
              <p><i class="fa fa-map-marker-alt"></i>BARRIO CRUZ GRANDE, AVENIDA CENTRAL NORTE #209,
                COMITAN DE
                DOMINGUEZ CHIAPAS, C.P. 30019</p>
              <p><i class="fa fa-phone-alt"></i> [+52] 963 100 01 66</p>
              <p><i class="fa fa-envelope"></i>hoteldiegocomitan@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-link">
              <h2>Link</h2>
              <a href="">Nosotros</a>
              <a href="">Contactanos</a>
              <a href="">Servicios</a>
              <a href="">Galeria </a>
              <a href="">Contact Us</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-contact">
              <h2>REDES SOCIALES</h2>
              <div class="footer-social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </footer>


  <script src="/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>

</body>

</html>