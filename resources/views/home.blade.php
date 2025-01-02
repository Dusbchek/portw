@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<style></style>
    <!-- Contenedor flex que cubre toda la altura de la pantalla -->
    <script>var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };



    <script>
  const scrollButton = document.querySelector('.scrollButton');

  // Añadir el evento click al botón
  scrollButton.addEventListener('click', function() {
    // Obtener la posición actual del scroll vertical
    let currentScrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Mover el scroll 200 píxeles hacia abajo de forma precisa
    window.scrollTo({
      top: currentScrollPosition + 200,  // Nueva posición + 200 píxeles
      behavior: 'smooth'  // Desplazamiento suave
    });
  });
</script>
    
    </script>
    <div class="flex justify-items-center justify-center min-h-screen">
    <div class="flex items-center justify-center">
        <div class=" items-center">

            <image src="{{ asset('images/yo.png') }}"" alt="profile-pic" class="mask mask-circle rounded-full border-[2px] border-gray-600 shadow-xl h-56 w-56 mb-6 mx-auto transform transition-transform duration-300 hover:scale-110 ">
            <h2 class="font-bold text-3xl tracking-[1px] mt-4 text-green-200">Alexis Dubschek Saavedra</h2>

        


<h3>
    <a href="" class="typewrite" data-period="2000" data-type='[ "Soy Ingenioso.", "Soy Creativo.", "Back-end Lover.", "Desarrollador Web Full-Stack" ]'>
      <span class="wrap"></span>
    </a>
  </h3>       



  <h2 class="tech font-medium text-3xl text-green-200 shadow-green-200  tracking-[1px] mt-4">Tecnologías</h2>

  <div class="flex    items-center mt-1 gap-0  w-[400px] mx-auto">
    <img class="mx-auto w-16  transform transition-transform duration-300 hover:scale-110" src="https://i.blogs.es/e7b69c/java_logo/450_1000.webp" alt="Java">   
    <img class="w-[2.8rem] mx-auto  transform transition-transform duration-300 hover:scale-110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png" alt="html">   
    <img class="mx-auto w-16  transform transition-transform duration-300 hover:scale-110" src="https://www.brandlogopng.com/files/logo/php/php-language-logo-hd-png-image-download-baby-elephant-clipart-qs6r.png" alt="php">   
    <img class="mx-auto w-20  transform transition-transform duration-300 hover:scale-110" src="https://download.logo.wine/logo/Laravel/Laravel-Logo.wine.png" alt="laravel">   
    <img  class="w-8 mx-auto  transform transition-transform duration-300 hover:scale-110" src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="js">   
    <img class="w-[3.2rem]  mx-auto ml-1  transform transition-transform duration-300 hover:scale-110" src="https://programandoointentandolo.com/wordpress/wp-content/uploads/2017/10/css3-logo.svg" alt="js">   
    <img class="w-8 ml-1  mx-auto  transform transition-transform duration-300 hover:scale-110" src="https://static-00.iconduck.com/assets.00/database-mysql-icon-1954x2048-08uox8qu.png" alt="laravel">   

  

</div>
  <div class="dropdown mb-8">
    <div tabindex="2" role="button" class="btn-ghost rounded-full mt-3 p-2 font-medium tracking-[1px] underline underline-offset-2 decoration-green-200 ">Sobre Dubschek</div>
    <div
      tabindex="0"
      class="dropdown-content card card-compact bg-gray-700 text-primary-content z-[1] w-[300px] p-2 shadow">
      <div class="card-body ">
        <h3 class="card-title">Acerca de mi!</h3>
        <p>¡Hola! Soy Alexis Dubschek, estudiante de Ingeniería en Desarrollo de Software en el Tecnológico de Monterrey, actualmente cursando el séptimo semestre. Me considero una persona entusiasta, proactiva, creativa y tenaz, con una gran capacidad para resolver problemas de manera ingeniosa. Si tuviera que destacar una de mis cualidades más fuertes, sin duda sería mi ingenio, que me permite enfrentar desafíos con soluciones innovadoras y efectivas.
        </p>
      </div>
    </div>
  </div>

  <h2 class="font-medium text-3xl text-green-300 shadow-green-200  tracking-[1px] mt-2 mb-2">Formación</h2>

<style>
#omg {
  position: relative; /* Asegura que el div mantenga su posición y no afecte el layout */
  
  max-width: 60rem; /* Limita el tamaño máximo */
  margin: 0 auto; /* Centra el div en la página */
  transition: all 0.5s ease-in-out; /* Suaviza cualquier transición si es necesario */
}



</style>
  <div id="omg" class="w-[50em]"> 
  <div class="w-full shadow-2xl rounded-md p-2 text-left ml-2 mb-8  ">

    <h1 class="text-lg font-medium text-green-200">Formación academica</h1>
<div class="w-[95%] bg-green-200 h-[1px] rounded-full"></div>
<div class="flex mt-2 items-center">
<img src="https://play-lh.googleusercontent.com/8s5VLauUMnH6TEcGopeRmUwFcI-7E2c6_DlKJFj3RSDY05y6uqOyjKF5mZWE8XzdFQ" alt="tecmi" class="w-14 rounded-lg transform transition-transform duration-300 hover:scale-110">

<h1 class="ml-2 text-md font-medium text-green-100 mr-2 "> Ingeniería en Desarrollo de Software - TecMilenio Campus Las Torres </h1>
<div class="badge badge-accent badge-outline text-sm transform transition-transform duration-300 hover:scale-110">7mo Semestre</div>

</div>

<h1 class="text-lg font-medium text-green-200 mt-2">Cursos</h1>
<div class="w-[95%] bg-green-200 h-[1px] rounded-full"></div>

<div>
<div class="flex mt-2 items-center">
<img src="{{ asset('images/cashier.png') }}" alt="tecmi" class="w-14 rounded-lg transform transition-transform duration-300 hover:scale-110">

<a  target="_blank" href="https://codersfree.com/cursos/aprende-a-implementar-pasarelas-de-pago-con-laravel" class="ml-2 text-md font-medium text-green-100 mr-2 hover:underline " >Implementación de pasarelas de pago con Laravel Cashier<a>
<div class="badge badge-accent badge-outline text-sm transform transition-transform duration-300 hover:scale-110">Duración: 2 meses</div>



  </div>
  <div class="flex items-center mt-3">
    <img src="https://laravel-livewire.com/img/twitter.png" alt="tecmi" class="w-14 rounded-lg transform transition-transform duration-300 hover:scale-110">
    
    <a  target="_blank" href="https://codersfree.com/cursos/aprende-laravel-livewire-desde-cero" class="ml-2 text-md font-medium text-green-100 mr-2 hover:underline " >Livewire para aplicaciones web dinamicas<a>
    <div class="badge badge-accent badge-outline text-sm transform transition-transform duration-300 hover:scale-110">Duración: 3 meses</div>
    
    
    
      </div>

      <div class="flex items-center mt-3">
        <img src="https://okitup.com/wp-content/uploads/2019/10/laravel.webp" alt="tecmi" class="w-14 rounded-lg transform transition-transform duration-300 hover:scale-110">
        
        <a  target="_blank" href="https://codersfree.com/cursos/aprende-laravel-avanzado" class="ml-2 text-md font-medium text-green-100 mr-2 hover:underline " >Curso avanzado de Laravel Back-End / Front-end<a>
        <div class="badge badge-accent badge-outline text-sm transform transition-transform duration-300 hover:scale-110">Duración: 2 meses</div>
        
        
        
          </div>
    </div>
</div>
</div>
  <h2 class="p1 font-bold text-3xl tracking-[1px] mt-8 mb-10"> Proyectos destacados</h2>

  <div class="mt-10 mb-10">
  <article class="accordion">

    <section id="acc1">
      <h2><a href="#acc1">Java</a></h2>
      <p class=" text-md">Poseo amplios conocimientos en el lenguaje Java en el que aprendi sobre todo
        acerca de la programación orientada a objetos, clases, constructores, polimorfismo, abstracción, herencia, etc.

        En este lenguaje he creado proyectos como:
      </p>
      <div class="flex flex-col">
      <button   id="showInfoBtn" class="text-green-100 font-medium underline text-md ">Wumpus</button>
      <button  id="showInfoBtn1" class="text-green-100 font-medium underline text-md ">La vaca sabia</button>


      <button id="hideInfoBtn"></button>
      <button id="hideInfoBtn1"></button>
      <button id="hideInfoBtn3"></button>
      <button id="hideInfoBtn4"></button>
      <button id="hideInfoBtn5"></button>

      <button id="hideinfo2"></button>


    </div>
    </section>
    
    <section id="acc2">
      <h2><a href="#acc2">Back-End</a></h2>
      <p class="text-sm">
        Poseo amplios conocimientos en el framework Laravel de PHP con herramientas        
         como Livewire, Volt, Filament, entre otras. A lo largo de mi experiencia, he desarrollado varios          
         proyectos, pero el más destacado es Leshas,        
         un eCommerce completo que abarca tanto el Front-end como el Back-end.       
        Leshas incluye características avanzadas como la integración de pasarelas de pago mediante Laravel
         Cashier, control de sesiones con JetStream y la implementación de un panel administrativo robusto,                
          que permite gestionar productos y administrar el funcionamiento general del eCommerce.      
      </p>
      <div class="flex flex-col">
      <button  id="showinfo2" class="text-green-100 font-medium underline text-md ">Filament</button>
      <button   id="showInfoBtn4" class="text-green-100 font-medium underline text-md ">Laravel Cashier/Stripe</button>

    </div>


    </section>
    
    <section id="acc3">
      <h2><a href="#acc3">JavaScript/CSS</a></h2>
      <p class="">He desarrollado interfaces Front-End utilizando las vistas Blade de Laravel, empleando HTML, CSS y JavaScript. He integrado herramientas complementarias como Tailwind CSS y Bootstrap para mejorar la experiencia visual y la estructura del diseño. Además, he aplicado principios sólidos de programación para organizar eficientemente las funciones en JavaScript, asegurando un código limpio, modular y de fácil mantenimiento.</p>
      <button   id="showInfoBtn3" class=" text-green-100 font-medium underline text-md ">Front-End</button>

    </section>
    
    <section id="acc4">
      <h2><a href="#acc4">MySQL</a></h2>
      <p class="">He diseñado e implementado bases de datos no relacionales complejas en mySQL como puede ser la de Leshas o la del CRUD PetsCare, siguiendo las normas de normalización de bases de datos y decidiendo cual era el mejor y mas eficaz enfoque para los propositos del proyecto.</p>
      <button   id="showInfoBtn5" class="scrollButton text-green-100 font-medium underline text-md ">Bases de datos</button>

    </section>

  
  </article>

  
        </div>

        <div class="absolute w-[200px]  opacity-100
        ">
          <h1 class="text-xs text-gray-800">-</h1>
        </div>

        <div id="infoDiv" class="hidden opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out mb-5 mx-auto shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg w-[90%] p-2 mt-10">
<div class="text-left ml-2 flex">
  <h1 class="mb-2 text-3xl text-green-200 font-medium ">Wumpus</h1>
  <div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
      <svg
        tabindex="0"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="h-4 w-4 stroke-current">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
    </div>
    <div
      tabindex="0"
      class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow">
      <div tabindex="0" class="card-body">
        <p>Presione cualquier cosa para cerrar este apartado</p>
      </div>
    </div>
  </div>
</div>
  <div class="w-[80%] mx-auto">
<h1 class="text-md">El proyecto Wumpus consiste en la recreación del clásico juego Hunt the Wumpus, donde un héroe debe explorar un sistema de cavernas interconectadas con el objetivo de encontrar y derrotar al monstruo conocido como Wumpus. La particularidad de este juego es que las cavernas son generadas aleatoriamente en cada partida, lo que asegura una experiencia única en cada intento.
  <br>  <br>
  Uno de los elementos clave del juego es la barra de oxígeno, que el jugador debe gestionar con cuidado para poder continuar su exploración. El oxígeno se va agotando a medida que el héroe avanza en las cavernas, por lo que es necesario tomar decisiones estratégicas sobre cómo moverse y cuándo buscar una fuente de oxígeno.
  <br>  <br>
  Para la implementación del juego, utilicé Java como lenguaje de programación, basándome en principios de la programación orientada a objetos. Esto permitió que el desarrollo fuera modular y fácilmente extensible. A lo largo del proyecto, se emplearon conceptos fundamentales como:
  <br>  <br>
  Polimorfismo: para definir comportamientos comunes entre diferentes tipos de objetos, como héroes, monstruos y cavernas.
  Herencia: para crear una jerarquía de clases que facilita la reutilización de código y la extensión del juego.
  Interfaces: para definir contratos que aseguran que ciertas clases implementen funcionalidades específicas, como el movimiento o la interacción con objetos del entorno.
  Abstracción: para ocultar los detalles complejos de la implementación y permitir que los jugadores interactúen con el juego de manera simple.
  Encapsulación: para proteger los datos sensibles del juego, como las variables de oxígeno y la posición del Wumpus, asegurando que solo se puedan modificar a través de métodos controlados.
  Gracias a la aplicación de estos conceptos, el juego tiene una arquitectura robusta y flexible, lo que permite modificaciones y expansiones en el futuro. A continuación, se puede ver un ejemplo funcional del juego, donde se ilustran algunas de sus mecánicas y cómo interactúan los diferentes componentes dentro del sistema.
</h1>

<video controls class="mx-auto mt-8 mb-4">
  <source src="{{ asset('videos/Wumpus.mp4') }}" type="video/mp4">
</video>

<a target="_blank" href="https://github.com/Dusbchek/WumpusGame" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub Wumpus</a>


</div>
</div>

<div id="infoDiv1" class="hidden opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out mb-5 mx-auto shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg w-[90%] p-2 mt-10">

  <div class="text-left ml-2 flex">
    <h1 class="mb-2 text-3xl text-green-200 font-medium ">La vaca</h1>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
        <svg
          tabindex="0"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          class="h-4 w-4 stroke-current">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div
        tabindex="0"
        class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow ml-10">
        <div tabindex="0" class="card-body ml-10">
          <p>Presione cualquier cosa para cerrar este apartado</p>
        </div>
      </div>
    </div>
  </div>

  <div class="w-[80%] mx-auto">
<h1 class="text-md">
  El proyecto "La Vaca Sabia" consiste en un juego interactivo en el que una vaca adivina el animal en el que estás pensando utilizando estructuras de datos complejas. Cada vez que la vaca falla en adivinar, agrega el nuevo animal a su base de datos, permitiéndole aprender y mejorar sus predicciones para la próxima vez.
<br><br>
La estructura central de este juego es un árbol binario recursivo, el cual crece dinámicamente a medida que se agregan nuevos animales y se descartan opciones, todo basado en las respuestas a las preguntas que te realiza. Con cada partida, el árbol se ajusta, optimizando las preguntas para hacer una mejor predicción en futuras ocasiones.
</h1>

<video controls class="mx-auto mt-8 mb-4">
  <source src="{{ asset('videos/vaca.mp4') }}" type="video/mp4">
</video>
</div>
<a target="_blank" href="https://github.com/Dusbchek/La-vaca" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub La Vaca</a>

</div>

<div  id="infodiv2" class="hidden  opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out mb-5 mx-auto shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg w-[90%] p-2 mt-10">

  <div class="text-left ml-2 flex">
    <h1 class="mb-2 text-3xl text-green-200 font-medium ">Filament</h1>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
        <svg
          tabindex="0"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          class="h-4 w-4 stroke-current">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div
        tabindex="0"
        class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow ml-10">
        <div tabindex="0" class="card-body ml-10">
          <p>Presione cualquier cosa para cerrar este apartado</p>
        </div>
      </div>
    </div>
  </div>

  <div class="w-[80%] mx-auto">
<h1 class="text-md">
  En Leshas, desarrollé un panel administrativo para el ecommerce que permite gestionar todos los aspectos esenciales del funcionamiento de la tienda. A través de este panel, es posible añadir, editar o eliminar productos en la base de datos, así como decidir si se desean mostrar o no en el catálogo. Además, incluye diversas herramientas para visualizar información relevante, como los colores y categorías de los productos, así como métricas clave relacionadas con ventas, clientes, órdenes, crecimiento y otros indicadores importantes.
</h1>

<video controls class="mx-auto mt-8 mb-4">
  <source src="{{ asset('videos/filament.mp4') }}" type="video/mp4">
</video>
<a target="_blank" href="https://github.com/Dusbchek/Leshas" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub Leshas</a>

</div>


</div>

<div 
  id="infoDiv3" class=" hidden mb-5 mx-auto shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg w-[90%] p-2 mt-10 opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out">
  <div class="text-left ml-2 flex">
    <h1 class="mb-2 text-3xl text-green-200 font-medium ">Front-End</h1>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
        <svg
          tabindex="0"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          class="h-4 w-4 stroke-current">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div
        tabindex="0"
        class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow ml-10">
        <div tabindex="0" class="card-body ml-10">
          <p>Presione cualquier cosa para cerrar este apartado</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-[80%] mx-auto">
    <h1 class="text-md">
      En Leshas, desarrolle un Front-End para un Eccomerce de ropa el cual necesitaba un diseño minimalista y simple en el cual tambien use aspectos del back-end y caché para desarrollar un carrito de compra que guarde los productos que el cliente desea adquirir, como una vista pincipal ded la tienda con filtros, ademas de una vista unica para el producto y su visualización.
    </h1>
    
    <video controls class="mx-auto mt-8 mb-4">
      <source src="{{ asset('videos/f.mp4') }}" type="video/mp4">
    </video>
    <h1 class="mt-1 mb-2 font-medium ">Aqui se puede ver la implementación del carrito, hecho con caché ademas de la implementacion de Cashier para crear un pasarela de pago y sus respectivos métodos.</h1>
    <img class="mx-auto w-[42rem]" src="{{ asset('images/cart.jpg') }}" alt="cart">
    <a target="_blank" href="https://github.com/Dusbchek/Leshas" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub Leshas</a>

    </div>
</div>


<div 
  id="infoDiv4" class="hidden opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out  mb-5 mx-auto shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg w-[90%] p-2 mt-10">
  <div class="text-left ml-2 flex">
    <h1 class="mb-2 text-3xl text-green-200 font-medium ">Laravel Cashier</h1>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
        <svg
          tabindex="0"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          class="h-4 w-4 stroke-current">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div
        tabindex="0"
        class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow ml-10">
        <div tabindex="0" class="card-body ml-10">
          <p>Presione cualquier cosa para cerrar este apartado</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-[80%] mx-auto">
    <h1 class="text-md">
      En Leshas, implemente Laravel cashier con Stripe como una manera de poder realizar cobros mediante una pasarela de pago y poder añadir metodos de pagos, eliminarlos y establecer uno predeterminado.
    </h1>
    
    <video controls class="mx-auto mt-8 mb-4">
      <source src="{{ asset('videos/STRIPE.mp4') }}" type="video/mp4">
    </video>
    <a target="_blank" href="https://github.com/Dusbchek/Leshas" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub Leshas</a>

    </div>
</div>


<div  id="infoDiv5" class="hidden opacity-0 transform translate-y-10 transition-all duration-700 ease-in-out  mb-5  shadow-gray-900 shadow-xl border-2 border-gray-700 rounded-lg  p-2 mt-10">

  <div class="text-left ml-2 flex">
    <h1 class="mb-2 text-3xl text-green-200 font-medium ">MySQL</h1>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-circle btn-ghost btn-xs text-info">
        <svg
          tabindex="0"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          class="h-4 w-4 stroke-current">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div
        tabindex="0"
        class="card compact dropdown-content bg-base-100 rounded-box z-[1] w-64 shadow ml-10">
        <div tabindex="0" class="card-body ml-10">
          <p>Presione cualquier cosa para cerrar este apartado</p>
        </div>
      </div>
    </div>
  </div>

  <div class="w-[80%] mx-auto">
<h1 class="text-md mb-2">
 Para leshas desarrolle una base de datos completa, en la cual se manejan, control de usuarios, manejo de productos, Inventario, Precios, Categorias, Colores, Provedores,Roles de usuarios, etc..
</h1>

<img src="{{ asset('images/leshas.jpeg') }}" alt="leshass">
<a target="_blank" href="https://github.com/Dusbchek/Leshas" class="text-gray-500 text-xl ml-2 mt-1 hover:underline font-bold">GitHub Leshas</a>

</div>


</div>
    </div></div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const infoDiv5 = document.getElementById('infoDiv5');
        const showInfoBtn5 = document.getElementById('showInfoBtn5');
        const hideInfoBtn5 = document.getElementById('hideInfoBtn5');
    
        // Mostrar el contenido con animación
        showInfoBtn5.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv5.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
          setTimeout(function() {
            infoDiv5.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
          }, 10); // Necesario para que la transición se ejecute correctamente
        });
    
        // Ocultar el contenido con animación
        hideInfoBtn5.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv5.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
          setTimeout(function() {
            infoDiv5.classList.add('hidden'); // Después de la animación, oculta el div
          }, 700); // Duración de la animación
        });
    
        // Evento global para cerrar el div cuando se hace clic fuera
        document.addEventListener('click', function(event) {
          // Verificar si el clic es fuera del div de información
          if (!infoDiv5.contains(event.target) && !showInfoBtn5.contains(event.target)) {
            // Aplica las clases para la animación de ocultar
            infoDiv5.classList.add('opacity-0', 'translate-y-10');
            setTimeout(function() {
              infoDiv5.classList.add('hidden'); // Después de la animación, oculta el div
            }, 700); // Duración de la animación
          }
        });
    
        // Evitar que el clic dentro del div de información cierre el div
        infoDiv5.addEventListener('click', function(event) {
          event.stopPropagation(); // Impide que el clic en el div cierre el div
        });
      });
    </script>
    
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const infoDiv4 = document.getElementById('infoDiv4');
        const showInfoBtn4 = document.getElementById('showInfoBtn4');
        const hideInfoBtn4 = document.getElementById('hideInfoBtn4');
    
        // Mostrar el contenido con animación
        showInfoBtn4.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv4.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
          setTimeout(function() {
            infoDiv4.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
          }, 10); // Necesario para que la transición se ejecute correctamente
        });
    
        // Ocultar el contenido con animación
        hideInfoBtn4.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv4.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
          setTimeout(function() {
            infoDiv4.classList.add('hidden'); // Después de la animación, oculta el div
          }, 700); // Duración de la animación
        });
    
        // Evento global para cerrar el div cuando se hace clic fuera
        document.addEventListener('click', function(event) {
          // Verificar si el clic es fuera del div de información
          if (!infoDiv4.contains(event.target) && !showInfoBtn4.contains(event.target)) {
            // Aplica las clases para la animación de ocultar
            infoDiv4.classList.add('opacity-0', 'translate-y-10');
            setTimeout(function() {
              infoDiv4.classList.add('hidden'); // Después de la animación, oculta el div
            }, 700); // Duración de la animación
          }
        });
    
        // Evitar que el clic dentro del div de información cierre el div
        infoDiv4.addEventListener('click', function(event) {
          event.stopPropagation(); // Impide que el clic en el div cierre el div
        });
      });
    </script>
    
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const infoDiv3 = document.getElementById('infoDiv3');
        const showInfoBtn3 = document.getElementById('showInfoBtn3');
        const hideInfoBtn3 = document.getElementById('hideInfoBtn3');
    
        // Mostrar el contenido con animación
        showInfoBtn3.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv3.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
          setTimeout(function() {
            infoDiv3.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
          }, 10); // Necesario para que la transición se ejecute correctamente
        });
    
        // Ocultar el contenido con animación
        hideInfoBtn3.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv3.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
          setTimeout(function() {
            infoDiv3.classList.add('hidden'); // Después de la animación, oculta el div
          }, 700); // Duración de la animación
        });
    
        // Evento global para cerrar el div cuando se hace clic fuera
        document.addEventListener('click', function(event) {
          // Verificar si el clic es fuera del div de información
          if (!infoDiv3.contains(event.target) && !showInfoBtn3.contains(event.target)) {
            // Aplica las clases para la animación de ocultar
            infoDiv3.classList.add('opacity-0', 'translate-y-10');
            setTimeout(function() {
              infoDiv3.classList.add('hidden'); // Después de la animación, oculta el div
            }, 700); // Duración de la animación
          }
        });
    
        // Evitar que el clic dentro del div de información cierre el div
        infoDiv3.addEventListener('click', function(event) {
          event.stopPropagation(); // Impide que el clic en el div cierre el div
        });
      });
    </script>
    
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const infoDiv = document.getElementById('infoDiv');
        const showInfoBtn = document.getElementById('showInfoBtn');
        const hideInfoBtn = document.getElementById('hideInfoBtn');
    
        // Mostrar el contenido con animación
        showInfoBtn.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
          setTimeout(function() {
            infoDiv.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
          }, 10); // Necesario para que la transición se ejecute correctamente
        });
    
        // Ocultar el contenido con animación
        hideInfoBtn.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
          setTimeout(function() {
            infoDiv.classList.add('hidden'); // Después de la animación, oculta el div
          }, 700); // Duración de la animación
        });
    
        // Evento global para cerrar el div cuando se hace clic fuera
        document.addEventListener('click', function(event) {
          // Verificar si el clic es fuera del div de información
          if (!infoDiv.contains(event.target) && !showInfoBtn.contains(event.target)) {
            // Aplica las clases para la animación de ocultar
            infoDiv.classList.add('opacity-0', 'translate-y-10');
            setTimeout(function() {
              infoDiv.classList.add('hidden'); // Después de la animación, oculta el div
            }, 700); // Duración de la animación
          }
        });
    
        // Evitar que el clic dentro del div de información cierre el div
        infoDiv.addEventListener('click', function(event) {
          event.stopPropagation(); // Impide que el clic en el div cierre el div
        });
      });
    </script>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const infoDiv2 = document.getElementById('infodiv2');
    const showInfoBtn2 = document.getElementById('showinfo2');
    const hideInfoBtn2 = document.getElementById('hideinfo2');

    // Mostrar el contenido con animación
    showInfoBtn2.addEventListener('click', function(event) {
      event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
      infoDiv2.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
      setTimeout(function() {
        infoDiv2.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
      }, 10); // Necesario para que la transición se ejecute correctamente
    });

    // Ocultar el contenido con animación
    hideInfoBtn2.addEventListener('click', function(event) {
      event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
      infoDiv2.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
      setTimeout(function() {
        infoDiv2.classList.add('hidden'); // Después de la animación, oculta el div
      }, 700); // Duración de la animación
    });

    // Evento global para cerrar el div cuando se hace clic fuera
    document.addEventListener('click', function(event) {
      // Verificar si el clic es fuera del div de información
      if (!infoDiv2.contains(event.target) && !showInfoBtn2.contains(event.target)) {
        // Aplica las clases para la animación de ocultar
        infoDiv2.classList.add('opacity-0', 'translate-y-10');
        setTimeout(function() {
          infoDiv2.classList.add('hidden'); // Después de la animación, oculta el div
        }, 700); // Duración de la animación
      }
    });

    // Evitar que el clic dentro del div de información cierre el div
    infoDiv2.addEventListener('click', function(event) {
      event.stopPropagation(); // Impide que el clic en el div cierre el div
    });
  });
</script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const infoDiv1 = document.getElementById('infoDiv1');
        const showInfoBtn1 = document.getElementById('showInfoBtn1');
        const hideInfoBtn1 = document.getElementById('hideInfoBtn1');
    
        // Mostrar el contenido con animación
        showInfoBtn1.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv1.classList.remove('hidden'); // Elimina la clase 'hidden' para mostrar el div
          setTimeout(function() {
            infoDiv1.classList.remove('opacity-0', 'translate-y-10'); // Elimina las clases de ocultación
          }, 10); // Necesario para que la transición se ejecute correctamente
        });
    
        // Ocultar el contenido con animación
        hideInfoBtn1.addEventListener('click', function(event) {
          event.stopPropagation(); // Evitar que el clic en el botón cierre el div accidentalmente
          infoDiv1.classList.add('opacity-0', 'translate-y-10'); // Aplica las clases para ocultar
          setTimeout(function() {
            infoDiv1.classList.add('hidden'); // Después de la animación, oculta el div
          }, 700); // Duración de la animación
        });
    
        // Evento global para cerrar el div cuando se hace clic fuera
        document.addEventListener('click', function(event) {
          // Verificar si el clic es fuera del div de información
          if (!infoDiv1.contains(event.target) && !showInfoBtn1.contains(event.target)) {
            // Aplica las clases para la animación de ocultar
            infoDiv1.classList.add('opacity-0', 'translate-y-10');
            setTimeout(function() {
              infoDiv1.classList.add('hidden'); // Después de la animación, oculta el div
            }, 700); // Duración de la animación
          }
        });
    
        // Evitar que el clic dentro del div de información cierre el div
        infoDiv1.addEventListener('click', function(event) {
          event.stopPropagation(); // Impide que el clic en el div cierre el div
        });
      });
    </script>
    
@endsection
