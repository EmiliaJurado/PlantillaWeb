@extends('layout.plantilla');
@section('titulo', 'Inicio');
@section('contenido')
<header class="container-fluid">
    <div class="row">
      <div class="col-12 align-align-self-center text-center text-uppercase">
        <h1>Electrodomésticos Emily</h1>
        <p class="font-weight-bold">Consumo y eficiencia energetica</p>
        <img src="{{asset('images/img1.jpg')}}" class="mx-auto d-block" width="1100px" height="336" alt="">
      </div>
    </div>
  </header>
  <seaction class="container-fluid">
    <div class="row">
      <div class="col-12 text-center mt-5 font-weight-bold">
        <h2>Categoría</h2>
        <hr>

      </div>
    </div>
  </seaction>
  <main class="seccion-contenedor">
    <div class="contenedor-anuncios">
      <div class="container">
        <div class="card-group">
          <div class="card">
            <img src="{{asset('images/im2.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body bg-light">
              <h5>
                <p class="text-center font-weight-bold">Licuadoras y procesadores</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img3.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Freidoras y sartenes eléctricos </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img4.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Hornos eléctricos </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-group">
          <div class="card bg-light">
            <img src="{{asset('images/img5.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Batidoras
              </h5>
              <p class="card-text text-justify font-italic">Descubre las mejores marcas en batidoras para cocina que tenemos en línea.
                Equipa tu cocina con lo mejor y consiente a tu familia.</p>
            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img6.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center  font-weight-bold">Extractores</p>
              </h5>
              <p class="card-text text-justify font-italic">Tonoce nuestros extractores de aire, centrífugos, axiales, eolicos, atmosfericos,
                también nuestras campanas extractoras industriales.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img7.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Cafeteras</p>
              </h5>
              <p class="card-text text-justify font-italic ">Prepara tu café de las mañanas con estas prácticas cafeteras,
                entra ahora para conocer todos los tamaños y marcas que te esperan.</p>

            </div>
          </div>
        </div>
        <br>
        <div class="card-group ">
          <div class="card bg-light">
            <img src="{{asset('images/img8.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Creperas y wafleras</p>
              </h5>
              <p class="card-text text-justify font-italic">Compra sandwicheras, creperas y waffleras de las mejores marcas.
                Ofertas diarias. Estrena hoy con tu Crédito. </p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img9.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Parrillas eléctricas</p>
              </h5>
              <p class="card-text text-justify font-italic">La parrilla eléctrica es un electrodoméstico indispensable en tu hogar ya
                que te permite preparar todo tipo de carnes y alimentos de forma rápida y exquisita.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/img10.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Ollas y vaporeras eléctricas </p>
              </h5>
              <p class="card-text text-justify font-italic">Cocina con los mejores electrodomésticos, entra ahora y compra la vaporera eléctrica
                que estás buscando en marcas como: Record, Black +Decker y más.</p>

            </div>
          </div>
        </div>
      </div>

    </div>
    </seaction>
    @endsection