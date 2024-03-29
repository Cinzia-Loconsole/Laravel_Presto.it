<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- SWIPERJS CDN CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- AOS CDN CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  
    <!-- GOOGLE FONT CDN-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- COLLEGAMENTO CSS -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg fixed-top" id="nav1">
        
        <div class="container-fluid" id="containerNav">

          <!-- primo logo -->
          <a class="navbar-brand" href="#">
            <img class=" ms-3 mt-2 logoPink" src="./media/logo.png" alt="" srcset="">
          </a>

           <!-- secondo logo -->
          <a class="navbar-brand logoSky d-none" href="#">
            <img class=" img-fluid" src="./media/logoSky.png" alt="Logo del Sito">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
                <i class=" toggleri fa-2x fa-solid fa-microphone-lines"></i>
            

          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./index.html">Home</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Annunci</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chi siamo</a>
              </li>
            </ul>

            <!-- CERCA -->
            <form class="d-flex" role="search">
                <input class=" ms-2 form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-Custom text-whiteCus" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
      </nav>
  
  <!-- FINE NAVBAR -->


  <!-- INIZIO ANNUNCI -->

  <section class="container-fluid">
    <div class="row m-filterSection">

        <div class="col-12 col-md-3">
           <p class="h3"> Filtra per:</p>

           <div class="accordion accordion-flush" id="accordionFlushExample">

            <!-- FILTRO PER CATEGORIA -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseValerio1" aria-expanded="false" aria-controls="flush-collapseValerio1">
                    <p>Categoria</p>
                </button>
              </h2>

              <div id="flush-collapseValerio1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionValerio">

                <div id="categoryWrapper" class="accordion-body">
                  <div class="form-check">
                        <input type="radio" class="form-check-input" name="flexRadioDefault" id="All" checked >

                        <label class="form-check-label" for="All">
                          Tutte le categorie
                        </label>

                    </div>
                  </div>

              </div>
            </div>
            <!-- FILTRO PER PREZZO -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseValerio2" aria-expanded="false" aria-controls="flush-collapseTwo">
                 <p>Prezzo</p>
                </button>
              </h2>
              <div id="flush-collapseValerio2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionValerio">
                
                <div class="accordion-body">
                   
                  <input type="range" class="form-range" id="priceInput"> 
                  
                  <div class="d-flex align-items-center justify-content-between">
                  <span class="numeroIncremento" id="numeroIncremento">
                      0
                  </span>

                  <span class="me-5 euro">€</span>
                              

                </div>

              </div>
            </div>
            </div>

            <!-- FILTRO PER PAROLA -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                 <p>Parola</p> 
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionValerio">
                <div class="accordion-body">

                  <input class="form-control me-2" id="ricerca" type="search" placeholder="Inserisci la parola da cercare" aria-label="Search">
                </div>
              </div>
            </div>
          </div>

        

</div>

        <div class="col-12 col-md-6">
            <h2>Annunci </h2>

            <section id="annunci" class="d-flex justify-content-around flex-wrap w-100">

            
        </div>

    </div>
</div>

</section>

  </section>



  <!-- FINE ANNUNCI -->

  
  <!-- INIZIO HEADER -->
  
  <!-- <header class="container-fluid">
    
    <div class="row header vh-100">
      
      <div class="col-12 text-center">
        
        <h1 data-aos="zoom-in" class="fw-bold">Presto <span class="text-whiteCus">.it</span></h1>
        
        
        <h3 class="sottoScritta text-accento">i più veloci del webbe</h3>
        
        
      </div>
      
    </div>
    
  </header> -->
  
  <!-- FINE HEADER -->












  
  <!-- INIZIO FOOTER -->

    <!-- <footer class="container-fluid mt-5 py-5 bg-blackCus">
      <div class="container">
        <div class="row h-footer-cus">
          <div class="col-12 col-md-4 text-center my-5">
           <p class="h2 text-accento">About Presto</p>
           <p class="my-3 text-primario">P.IVA: 1234567</p>
           <p class="my-3 text-primario">Indirizzo: Strada San Giorgio Martire, 2D</p>
           <p class="my-3 text-primario">Tel. 3468889234</p>
           <p class="my-3 text-primario">e-mail: miamail@sempremailmia.it</p>
           <div>
            <i class="fa-brands fa-facebook fa-2x text-whiteCus fa-beat"></i>
            <i class="fa-brands fa-instagram fa-2x text-whiteCus fa-beat mx-5"></i>
            <i class="fa-brands fa-linkedin fa-2x text-whiteCus fa-beat"></i>
             
           </div>
          </div>
          <div class="col-12 col-md-4 text-center my-5">
            <p class="h2 text-accento">Quick Menu</p>
            <div class="d-flex flex-column justify-content-center h-75">
              <a href="#numeriSpaziali"><p> Numeri Spaziali </p> </a>
              <a href="#diconoDiNoi"><p> Dicono di Noi </p> </a>
              <a href="#domandeFrequenti"><p> Domande Frequenti </p> </a>
            </div>
 
 
           </div>
           <div class="col-12 col-md-4 text-center my-5">
            <p class="h2 text-accento"> Collabs </p>
            
            <p class="text-primario">Amazon</p>
            <p class="text-primario">Disney</p>
            <p class="text-primario">Squelli</p>
           </div>
        </div>
        <div class="row">
          <div class="col-12 my-2">
            <h6 class="text-whiteCus text-center">tutti i diritti riservati a reietto® master Pokémon</h6>
          </div>
        </div>
      </div>
    </footer> -->

  <!-- FINE FOOTER -->


    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  
    <!-- JS CUSTOM ESTERNO -->
    
    <script src="/js/annunci.js"></script>
    
  </body>
  </html>