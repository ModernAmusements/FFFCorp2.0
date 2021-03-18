<?php
?>
<!doctype html>
<html lang="de" id="invertme">
<head>
    <!-- Meta Styling -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Meta Information-->
    <?php echo $page->metaTags() ?>
    <!-- Stylesheets Async CSS-->
    <?= css('assets/css/index.css', true) ?>
    <!-- jQeury-->
    <?= js('assets/js/jquery.min.js') ?>
    <?= js('assets/js/jquery-ui.min.js') ?>
    <?= js('assets/js/js.cookie.min.js') ?>
    <?= js('assets/js/current-device-browser.min.js') ?>

    <?= js('assets/js/app.js') ?>
    
</head>
<body class="page-index " style="background-color: #F8F8F8;" ontouchstart>
    <!-- <div id="loader">
      <style media="screen">
          #loader {
              position: fixed;
              top: 0;
              left: 0;
              margin: 0;
              padding: 0;
              width: 100vw;
              height: 100%;
              background-color: inherit;
              z-index: 99999999;
          }
          .device .page-index #loader {
              background-color: black;
          }
      </style>
      <script type="text/javascript">
          setTimeout(function () {
              $("#loader").fadeOut(function () {
                  $(this).remove();
              });
          }, 500);
      </script>
  </div> -->
    <!--Mobile Card-->
    <div id="card">
        <!--Tagline-->
        <p>
            DESIGN STUDIO BRIDGING THE IMAGINED AND THE TANGIBLE THROUGH 3D VISUALS, FILM, AND COLLECTIBLE PIECES — FOUNDED AND DIRECTED BY ARTIST ANDRéS REISINGER. </p>
        <!--Logo-->
        <div>REISINGER STUDIO</div>
        <!--Contact-->
        <ul>
            <!--Mail-->
            <li>
                <a href="mailto:info@reisinger.studio">
                  info@reisinger.studio </a>
            </li>
            <!--Link Address-->
            <li>
                <a href="https://www.google.com/maps/place/Carrer+de+Llull,+70,+08005+Barcelona,+Espa%C3%B1a/data=!4m2!3m1!1s0x12a4a31a0e4bb789:0xeb580f9a9aca91d8?sa=X&ved=2ahUKEwiY8bvT5aLuAhUBDmMBHR0mBT4Q8gEwAHoECAMQAQ" target="_blank" rel="noreferrer">
                  C/ Llull 70. 08005 Barcelona, Spain </a>
            </li>
            <!--Instagram-->
            <li>
                <a href="https://www.instagram.com/reisingerandres/" target="_blank" rel="noreferrer">
                  Instagram
              </a>
            </li>
        </ul>
    </div>
    <!--Tagline-->
    <!-- <div id="tagline">
      <wrap>
          <p>
              DESIGN STUDIO BRIDGING THE IMAGINED AND THE TANGIBLE THROUGH 3D VISUALS, FILM, AND COLLECTIBLE PIECES —
              FOUNDED AND DIRECTED BY ARTIST ANDRéS REISINGER. </p>
      </wrap>
  </div> -->
    <!--Navigation-->
    <div id="wrapper">
        <!--Header-->
        <header id="header">
            <!--Logo-->
            <a href="/home">
              FFF-CORP - FLORIAN NAGEL
          </a>
            <!--Nav-->
            <nav>
                <!--Covers-->
                <div id="covers" class="active">
                    <span>[<span class="cross">X</span>]</span>
                    <span>Covers</span>
                </div>
                <!--Grid-->
                <div id="grid">
                    <span>[<span class="cross">X</span>]</span>
                    <span>Grid</span>
                </div>
                <!--List-->
                <div id="list">
                    <span>[<span class="cross">X</span>]</span>
                    <span>List</span>
                </div>
                <!--Scroll-->
                <div id="scroll">
                    <span>[<span class="cross">X</span>]</span>
                    <span>Scroll</span>
                </div>
            </nav>
            <div class="nav-menu">
            <a href="/works">Work</a>
            <a href="/blog">Archive</a>
            <a href="/home">Home</a>
            </div>
        </header>
        <!--Menu-->
        <menu>
            <wrap>
                <!--Contact-->
                <div class="trigger active">
                    <span>[<span class="dot"></span>]</span>
                    </span>Contact</span>
                </div>
                <div class="wrapper contact">
                    <ul>
                        <!--Mail-->
                        <li>
                            <a href="mailto:info@reisinger.studio">
                              info@reisinger.studio </a>
                        </li>
                        <!--Link Address-->
                        <li>
                            <a href="https://www.google.com/maps/place/Carrer+de+Llull,+70,+08005+Barcelona,+Espa%C3%B1a/data=!4m2!3m1!1s0x12a4a31a0e4bb789:0xeb580f9a9aca91d8?sa=X&ved=2ahUKEwiY8bvT5aLuAhUBDmMBHR0mBT4Q8gEwAHoECAMQAQ" target="_blank" rel="noreferrer">
                              C/ Llull 70. 08005 Barcelona, Spain </a>
                        </li>
                        <!--Instagram-->
                        <li>
                            <a href="https://www.instagram.com/reisingerandres/" target="_blank" rel="noreferrer">
                              Instagram
                          </a>
                        </li>
                    </ul>
                </div>
                <!--About-->
                <div class="trigger">
                    <span>[<span class="dot"></span>]</span>
                    </span>About</span>
                </div>
                <div class="wrapper">
                    <section>
                        <wrap>
                            <!--Title-->
                            <span class="title">
                              <span>BIO</span>
                            <span></span>
                            </span>
                            <!--Content-->
                            <p>
                                Creating at the intersection of art, design, and direction, Andrés Reisinger bridges the imagined and the tangible. Conceptual yet accessible, his immersive 3D visuals, otherworldly compositions, and experimental use of texture draws the realm of dreams
                                close. Hailing from Buenos Aires and based in Barcelona, Reisinger applies over a decade’s worth of experience working with the likes of Apple, Microsoft, and Samsung to challenge the boundaries of diverse media. His progressive
                                spatial experiences and hyped collectible pieces have earned him recognition in the Forbes 30 Under 30 Europe, ADC One Club Young Guns, and the AD100, among others. </p>
                        </wrap>
                        <wrap>
                            <!--Title-->
                            <span class="title">
                              <span>PRESS</span>
                            <span></span>
                            </span>
                            <ul>
                                <li>
                                    <a href="https://www.forbes.com/profile/andres-reisinger/?sh=66f25f504fda" target="_blank" rel="noreferrer">
                                      Forbes </a>
                                </li>
                                <li>
                                    <a href="https://news.artnet.com/market/virtual-furniture-nft-auction-1946103" target="_blank" rel="noreferrer">
                                      Artnet </a>
                                </li>
                     
                            </ul>
                        </wrap>
                        <wrap>
                            <!--Title-->
                            <span class="title">
                              <span>AWARDS & MERITS</span>
                            <span></span>
                            </span>
                            <ul>
                                <li>
                                    <a href="https://www.forbes.com/profile/andres-reisinger/?sh=68798574fda2" target="_blank" rel="noreferrer">
                                      FORBES 30 under 30 | Arts & Style </a>
                                </li>
                                <li>
                                    <a href="https://www.oneclub.org/awards/youngguns/17/-bio/yg17-andres-reisinger" target="_blank" rel="noreferrer">
                                      Young Gun at ADC New York (The One Club for Creativity) </a>
                                </li>
                      
                            </ul>
                        </wrap>
                        <wrap>
                            <!--Title-->
                            <span class="title">
                              <span>EXHIBITIONS & SHOWS</span>
                            <span></span>
                            </span>
                            <ul>
                                <li>
                                    <span>2018 —1000 Vases, Espace Commines, Paris (FR)</span>
                                </li>
                                <li>
                                    <span>2019 —QTS #02 Curated by CHAMBER NYC, Buenos Aires (AR)</span>
                                </li>
                     
                            </ul>
                        </wrap>
                        <wrap>
                            <!--Title-->
                            <span class="title">
                              <span>TALKS</span>
                            <span></span>
                            </span>
                            <ul>
                                <li>
                                    <span>Lad 2016, Lima (PE) as co-founder of Six N. Five</span>
                                </li>
                                <li>
                                    <span>Udem 2016, Monterrey (MEX) as co-founder of Six N. Five</span>
                                </li>
                            </ul>
                        </wrap>
                    </section>
                </div>
                <!--Tags-->
                <div id="search-tags" class="trigger">
                    <span>[<span class="dot"></span>]</span>
                    </span>SEARCH BY TAGS</span>
                </div>
                <div id="tags" class="wrapper">
                    <ul>
                        <li data-letter="a">
                            <span class="tag">
                              <span id="abstract">#abstract</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="architecture">#architecture</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="b">
                            <span class="tag">
                              <span id="ball">#ball</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="bathroom">#bathroom</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="black">#black</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="blue">#blue</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="blur">#blur</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="c">
                            <span class="tag">
                              <span id="chair">#chair</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="circle">#circle</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="clock">#clock</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="close-up">#close up</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="collectible-piece">#collectible piece</span> <span>[<span
                                      class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="composition">#composition</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="contrast">#contrast</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="cover">#cover</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="curtains">#curtains</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="d">
                            <span class="tag">
                              <span id="dark">#dark</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="day">#day</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="desert">#desert</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="digital">#digital</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="dream">#dream</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="e">
                            <span class="tag">
                              <span id="exhibition">#exhibition</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="experience">#experience</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="exterior">#exterior</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="f">
                            <span class="tag">
                              <span id="fabric">#fabric</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="floral">#floral</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="fog">#fog</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="fur">#fur</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="furnitue">#furnitue</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="furniture">#furniture</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="g">
                            <span class="tag">
                              <span id="glass">#glass</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="glossy">#glossy</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="gold">#gold</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="golden">#golden</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="green">#green</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="grey">#grey</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="h">
                            <span class="tag">
                              <span id="hortensia">#hortensia</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="i">
                            <span class="tag">
                              <span id="ice">#ice</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="installation">#installation</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="interior">#interior</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="l">
                            <span class="tag">
                              <span id="lamp">#lamp</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="light">#light</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="lilac">#lilac</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="long-shot">#long shot</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="loop">#loop</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="lounge">#lounge</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="m">
                            <span class="tag">
                              <span id="maditation">#maditation</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="magazine">#magazine</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="meditation">#meditation</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="mirror">#mirror</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="monochrome">#monochrome</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="moving-space">#moving space</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="n">
                            <span class="tag">
                              <span id="nature">#nature</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="night">#night</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="o">
                            <span class="tag">
                              <span id="object">#object</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="objects">#objects</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="open-world">#open world</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="orange">#orange</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="p">
                            <span class="tag">
                              <span id="panoramic">#panoramic</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="physical">#physical</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="pink">#pink</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="product">#product</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="purple">#purple</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="r">
                            <span class="tag">
                              <span id="red">#red</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="reflection">#reflection</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="retail">#retail</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="rope">#rope</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="rug">#rug</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="s">
                            <span class="tag">
                              <span id="sand">#sand</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="sculpture">#sculpture</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="set">#set</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="shapes">#shapes</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="shelf">#shelf</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="shop">#shop</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="silk">#silk</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="silver">#silver</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="sky">#sky</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="sofa">#sofa</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="soft">#soft</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="space">#space</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="sphere">#sphere</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="stairs">#stairs</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="still-frame">#still frame</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="still-shot">#still shot</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="sunset">#sunset</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="t">
                            <span class="tag">
                              <span id="table">#table</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="textile">#textile</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="texture">#texture</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="transparency">#transparency</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="turquoise">#turquoise</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="v">
                            <span class="tag">
                              <span id="vase">#vase</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="video">#video</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="violet">#violet</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="w">
                            <span class="tag">
                              <span id="wall">#wall</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="water">#water</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="white">#white</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="window">#window</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="winter">#winter</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="wood">#wood</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="y">
                            <span class="tag">
                              <span id="yacht">#yacht</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="&nbsp;">
                            <span class="tag">
                              <span id="yellow">#yellow</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                        <li data-letter="z">
                            <span class="tag">
                              <span id="zoom">#zoom</span> <span>[<span class="dot">•</span>]</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <!--Shop-->
                <div class="trigger">
                    <span>[<span class="dot"></span>]</span>
                    </span>Order</span>
                </div>
                <div class="wrapper">
                    <ul>
                        <li>
                            <a href="https://gumroad.com/reisingerstudio" target="_blank" rel="noreferrer">
                              Prints & Digital Assets </a>
                        </li>
                    </ul>
                </div>
            </wrap>
        </menu>


        <!--Filters-->
        <div id="filters"></div>
    </div>
