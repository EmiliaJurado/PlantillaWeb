@extends('layout.plantilla');
@section('titulo', 'Electrodomesticos5');
@section('contenido')

<header class="container-fluid">
  <div class="row">
    <div class="col-12 align-align-self-center text-center text-uppercase">
      <h1>Electrodomésticos Emily</h1>
      <p class="font-weight-bold">Consumo y eficiencia energetica</p>
      <img src="{{asset('images/img16.jpg')}}" class="mx-auto d-block" width="1100px" height="336" alt="">
    </div>
  </div>
</header>
<seaction class="container-fluid">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2>Ollas y vaporeras eléctricas</h2>
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
            <p class="card-text text-justify">Un electrodoméstico es un dispositivo que puede ser mecánico, eléctrico y electrónico que permiten realizar y agilizar algunas tareas
              domésticas y mejorar el confort del hogar. Ayudan a preparar y cocinar alimentos y a conservarlos, sirven para la limpieza y regular la temperatura y humedad del ambiente
              y del agua. También se consideran como electrodomésticos los dispositivos para comunicación y entretenimiento como televisores y equipos de sonido.</p>
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
            <img src="{{asset('images/1.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body bg-light">
              <h5>
                <p class="text-center font-weight-bold">Secons</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/2.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Secons1 </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/3.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Ultra </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-group">
          <div class="card bg-light">
            <img src="{{asset('images/4.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Potente
              </h5>
              <p class="card-text text-justify font-italic">Descubre las mejores marcas en batidoras para cocina que tenemos en línea.
                Equipa tu cocina con lo mejor y consiente a tu familia.</p>
            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/6.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center  font-weight-bold">Extra3</p>
              </h5>
              <p class="card-text text-justify font-italic">Tonoce nuestros extractores de aire, centrífugos, axiales, eolicos, atmosfericos,
                también nuestras campanas extractoras industriales.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/6.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Cafet23</p>
              </h5>
              <p class="card-text text-justify font-italic ">Prepara tu café de las mañanas con estas prácticas cafeteras,
                entra ahora para conocer todos los tamaños y marcas que te esperan.</p>

            </div>
          </div>
        </div>
        <br>
      </div>
    </div>

    </div>
    </seaction>

    @endsection