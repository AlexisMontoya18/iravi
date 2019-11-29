{{------------------------Carrusel---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
  <h5>CATEGORIAS</h5><br>
  <a class="nav-link letra" href="{{ url('indexArtesanias')}}">Artesanias</a>
   <a class="nav-link letra"  href="{{ url('indexDulces')}}">Dulces</a>
    <a class="nav-link letra"  href="{{ url('indexMuebles')}}">Muebles</a>
   <a class="nav-link letra"  href="{{ url('indexMostrar')}}">Mostrar todos</a>
</div>
<div class="col-10">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
       <div class="container">
      <img class="d-block w-100" src="images/bannerDulces.png" alt="First slide">
       </div>
    </div>
    <div class="carousel-item">
       <div class="container">
      <img class="d-block w-100" src="images/banner1.png" alt="Second slide">
       </div>
    </div>
    <div class="carousel-item">
      <div class="container">
      <img class="d-block w-100" src="images/banner2.png" alt="Third slide">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="color: #003366">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="color: #003366">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="container-fluid">
  <hr>
</div>
{{------------------------Fin del carrusel---------------------------}}
