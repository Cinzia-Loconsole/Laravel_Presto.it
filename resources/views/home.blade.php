<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto</title>

    <link rel="shortcut icon" href="/media/logo.png" type="imagine/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- SWIPERJS CDN CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- AOS CDN CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  
    <!-- GOOGLE FONT CDN-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- COLLEGAMENTO CSS -->
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg fixed-top" id="nav1">
        
        <div class="container-fluid" id="containerNav">

          <!-- primo logo -->
          <a class="navbar-brand" href="#">
            <img class=" ms-3 mt-2 logoPink " src="/img/presto.png" alt="" srcset="">
          </a>

           <!-- secondo logo -->
          <a class="navbar-brand  d-none" href="#">
            <img class=" img-fluid logoSky" src="/img/presto.png" alt="Logo del Sito">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
            <img src="/img/gamei.png" class=" toggleri fa-microphone-lines"alt="" srcset="">
            

          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/annunci">Annunci</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">I nostri prodotti</a>
              </li>
            </ul>

            <!-- CERCA -->
            <form>
              <div class="search-wrapper">
                <input class="search-input" type="text" placeholder="Search"/><i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </form>


         
        </div>
      </nav>

      
    <!-- INIZIO HEADER -->

    <header class="container-fluid">

        <div class="row header vh-100">
    
            <div class="col-12 text-center head-txt">
    
               <img class="prestopresto" src="/img/presto.png" alt="" srcset="">
        
                {{-- <h3 class="mt-4 sottotitolo">Lo shopping online 🛒</h3> --}}
                    
                </div>
    
            </div>
    
        </header>

        
      <!-- UN PO' DI NUMERI -->

     <section class="section2 container-fluid" id="numeriSpaziali">

        <div class="row mt-5">

          <h2 class="text-center"> Le nostre consegne </h2>

          <div class="col-12 col-md-6 d-flex justify-content-center">

            <img data-aos="fade-right" src="/img/shipper.png" class="shipper mb-2 img-fluid" alt="corriere">

          </div>
          
          <div class="col-md-6 col-12 text-center d-flex flex-column align-content-center justify-content-center">
  
            {{-- <h2>Un pò di numeri</h2> --}}
  
            <p> <span class="numero h3 h3" id="primoSpan">0</span> Clienti soddisfatti</p>
  
            <p> <span class="numero h3" id="secondoSpan">0</span> Prodotti venduti</p>
  
            <p> <span class="numero h3" id="terzoSpan">0</span> Recensioni</p>
  
          </div>
  
        </div>
      </section>

    <!-- SEZIONE SWIPER -->

    <section class="container my-5 py-5" id="diconoDiNoi">
      <div class="row justify-content-center">
        <h2 class="text-center mb-5">Dicono di Noi</h2>
        <div class="col-12 col-md-8">

          <!-- Slider main container -->
          <div class="swiper">
  <!-- Additional required wrapper -->
            <div class="swiper-wrapper text-center px-3">
    <!-- Slides -->
             
              <!-- ... -->
            </div>
  <!-- If we need pagination -->
            <div class="swiper-pagination"></div> 

  <!-- If we need navigation buttons -->
          <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->

  <!-- If we need scrollbar -->
         <!-- <div class="swiper-scrollbar"></div>
        </div> -->

        </div>
        </div>
          
      </div>
      </section>


      <!-- FINE SWIPER -->

      <div class="container-fluid d-flex justify-content-center">
        {{-- <div class="row justify-content-center">
          <div class="col-12 col-md-6"> --}}
            <img src="/img/banner.jpg" alt="" srcset="">
          </div>
        {{-- </div>
      </div> --}}
        

      <!-- MOUSE ENTER -->

      <section class="container my-5 d-flex justify-content-center" id="domandeFrequenti">
        <div class="row justify-content-evenly">
        <h2 class="text-center my-5">In evidenza</h2>

          <div class="col-8 col-md-3 ">
          
          <img class="col-custom" src="/img/promo.jpg" alt="">
          </div>
          <div class="col-8 col-md-3 ">
            <img class="col-custom" src="/img/promo2.jpg" alt="">
          </div>
          <div class="col-8 col-md-3 mb-5 ">
            <img class="col-custom" src="/img/promo3.jpg" alt="">
          </div>

        </div>
      </section>


      <!-- INIZIO FOOTER -->

    <footer class="container-fluid mt-3 bg-blackCus ">
      
      <div class="container">

        <div class="row h-footer-cus">

          <div class="col-12 col-md-4 text-center my-5">

           <p class="h2 text-accento">About Presto</p>
           <p class="my-3 text-white">P.IVA: 1234567</p>
           <p class="my-3 text-white">
            <i class="fa-solid fa-location-dot"></i>
            Strada San Giorgio Martire, 2D</p>
           <p class="my-3 text-white">
            <i class="fa-solid fa-phone"></i>
            3468889234</p>
           <p class="mb-3 text-white">
            <i class="fa-solid fa-envelope"></i>
             assistenza@presto.it</p>

           <div>

            <i class="fa-brands fa-facebook fa-2x text-whiteCus fa-beat"></i>

            <i class="fa-brands fa-instagram fa-2x text-whiteCus fa-beat mx-5"></i>

            <i class="fa-brands fa-linkedin fa-2x text-whiteCus fa-beat"></i>
             
           </div>


          </div>

          <div class="col-12 col-md-4 text-center my-5">

            <p class="h2 text-accento">Quick Menu</p>

            <div class="d-flex flex-column justify-content-center h-75">
              <a href="#numeriSpaziali" class="text-white"><p> Le nostre consegne </p> </a>
              <a href="#diconoDiNoi" class="text-white"><p> Dicono di Noi </p> </a>
              <a href="#domandeFrequenti" class="text-white"><p>In evidenza </p> </a>
            </div>

 
 
           </div>

           <div class="col-12 col-md-4 text-center my-5">

            <p class="h2 text-accento mb-5"> Servizi </p>
            

            <div class="d-flex flex-column justify-content-center">

            <a href="" class="text-white mb-3">Traccia il tuo ordine </a>
            <a href="" class="text-white mb-3">Verifica validità</a>
              <a href="" class="text-white">Ritiro Usato</a>

            </div>

           </div>

        </div>

 </div>
        <div class="row bg-dark">
          <div class="col-12 my-2">

            <h6 class="text-whiteCus text-center">Tutti i diritti riservati a Presto® </h6>

          </div>
        </div>

     

    </footer>

  <!-- FINE FOOTER -->

    <!-- CDN AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- SWIPERJS SCRIPT INTERNO -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- AOS SCRIPT INIZIALIZZAZIONE -->
    <script>
      AOS.init();
    </script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

    <!-- SCRIPT INTERNO SWIPER -->
    <script> 
    
    let feedback = [
      {name: 'Paolo' , quote: 'Competenti in materia, hanno sempre i migliori prezzi sul mercato. Affidabili anche nelle consegne sempre puntuali e precisi, non manca mai nulla.'},
      {name: 'Marco' , quote: 'Sono molto soddisfatto del mio acquisto, ho comprato la PS4 al miglior prezzo, ricevuta dopo soli 2 giorni. Bravissimi, ben forniti e ottime informazioni su qualsiasi prodotto.'},
      {name: 'Francesca' , quote: 'Unico punto di riferimento per gli appassionati di videogiochi, non esiste giocatore che non lo conosca, ci sarà un motivo!'},
      {name: 'Alessandro' , quote: 'Personale gentilissimo, cortese. Ci troviamo molto bene. Sempre disponibili e in gamba!'},
    ]

    let swiperWrapper = document.querySelector('.swiper-wrapper');

    feedback.forEach((recensione)=>{

      let div = document.createElement('div');

      div.classList.add('swiper-slide', 'd-flex', 'justify-content-center', 'text-body','align-content-center');
      div.innerHTML=`
                    <div class="card-feedback">
                    <p class="h3">${recensione.name}</p>
                    <p>${recensione.quote}</p>
                    </div>
          `;

swiperWrapper.appendChild(div);

})

    const swiper = new Swiper('.swiper', {
      // Optional parameters
      // direction: 'horizontal',
      loop: true,

      // autoplay

      autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },

      // effect
      
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 1,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },


      // breakpoints

      breakpoints: {
         
        640: {
      
          slidesPerView: 3,
      
        }},

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
      
      // Navigation arrows
      // navigation: {
      //   nextEl: '.swiper-button-next',
      //   prevEl: '.swiper-button-prev',
      // },
      
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
    
  </script>
    
    <!-- JS ESTERNO-->
    <script src="/js/script.js"></script>

  </body>
</html>