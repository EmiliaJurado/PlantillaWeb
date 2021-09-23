@extends('layout.plantilla');
@section('titulo', 'Electrodomesticos5');
@section('contenido')
<header class="container-fluid">
  <div class="row">
    <div class="col-12 align-align-self-center text-center text-uppercase">
      <h1>Electrodomésticos Emily</h1>
      <p class="font-weight-bold">Consumo y eficiencia energetica</p>
      <img src="{{asset('images/img15.jpg')}}" class="mx-auto d-block" width="1100px" height="336" alt="">
    </div>
  </div>
</header>
<seaction class="container-fluid">
  <div class="row">
    <div class="col-12 text-center mt-5">
      <h2>Parrillas eléctricas</h2>
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
            <p class="card-text text-justify">En este tipo de parrilla, la electricidad es conducida a través
              de los tubos, al no encontrar salida se eleva su temperatura y produce calor.El calor generado se
              transfiere al ambiente y posteriormente a un traste (olla, sartén de cualquier material) dando como
              resultado poder cocinar los alimentos.</p>
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
            <img src="{{asset('images/k.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body bg-light">
              <h5>
                <p class="text-center font-weight-bold">Limcom</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/j.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Fredos </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/e.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">HS23 </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-group">
          <div class="card bg-light">
            <img src="{{asset('images/g.webp')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Bati
              </h5>
              <p class="card-text text-justify font-italic">Descubre las mejores marcas en batidoras para cocina que tenemos en línea.
                Equipa tu cocina con lo mejor y consiente a tu familia.</p>
            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/h.webp')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center  font-weight-bold">Extract</p>
              </h5>
              <p class="card-text text-justify font-italic">Tonoce nuestros extractores de aire, centrífugos, axiales, eolicos, atmosfericos,
                también nuestras campanas extractoras industriales.</p>

            </div>
          </div>
          <div class="card bg-light">
            <img src="{{asset('images/i.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Caf34</p>
              </h5>
              <p class="card-text text-justify font-italic ">Prepara tu café de las mañanas con estas prácticas cafeteras,
                entra ahora para conocer todos los tamaños y marcas que te esperan.</p>

            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </seaction>
    @endsection