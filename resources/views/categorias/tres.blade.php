@extends('layout.plantilla');
@section('titulo', 'Electrodomesticos3');
@section('contenido')
<header class="container-fluid">
  <div class="row">
    <div class="col-12 align-align-self-center text-center text-uppercase">
      <h1>Electrodomésticos Emily</h1>
      <p class="font-weight-bold">Consumo y eficiencia energetica</p>
      <img src="{{asset('images/img13.jpg')}}" class="mx-auto d-block" width="1100px" height="336" alt="">
    </div>
  </div>
</header>
<seaction class="container-fluid">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2>Hornos eléctricos</h2>
      <hr>

    </div>
  </div>
</seaction>
<main class="seccion-contenedor">
  <div class="contenedor-anuncios">
    <div class="container">
      <div class="card-group">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title">INFORMACION IMPORTANTE:</h5>
            <p class="card-text text-justify">Un horno eléctrico es aquel aparato para la cocción que funciona con
              energía eléctrica. Esta es convertida en calor por resistencias. Los hornos eléctricos son totalmente
              automatizados; la cocción es la más perfecta por el control que mantiene sobre la temperatura en todo momento.
              Cierto que el consumo de electricidad es oneroso, aunque en los modernos no es excesivamente alto.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </seaction>
  <br>
  <main class="seccion-contenedor">
    <div class="contenedor-anuncios">
      <div class="container">
        <div class="card-group">
          <div class="card">
            <img src="{{asset('images/img37.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body bg-light">
              <h5>
                <p class="text-center font-weight-bold">Lin</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img38.png')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Ultra </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img39.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Zein23</p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-group">
          <div class="card bg-light">
            <img src="{{asset('images/img40.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Bartiss
              </h5>
              <p class="card-text text-justify font-italic">Descubre las mejores marcas en batidoras para cocina que tenemos en línea.
                Equipa tu cocina con lo mejor y consiente a tu familia.</p>
            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img41.webp')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center  font-weight-bold">Extracto</p>
              </h5>
              <p class="card-text text-justify font-italic">Tonoce nuestros extractores de aire, centrífugos, axiales, eolicos, atmosfericos,
                también nuestras campanas extractoras industriales.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img7.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Catra23</p>
              </h5>
              <p class="card-text text-justify font-italic ">Prepara tu café de las mañanas con estas prácticas cafeteras,
                entra ahora para conocer todos los tamaños y marcas que te esperan.</p>

            </div>
          </div>
        </div>

      </div>
      </seaction>
      @endsection