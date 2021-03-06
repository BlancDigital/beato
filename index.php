<?php 

      // Monitoramento de leads (pedido da gestora de trafégo)
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>

<!DOCTYPE html>
<html>
  <head>
        <!-- Google Tag Manager -->
    <script>
      ;(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : ""
        j.async = true
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, "script", "dataLayer", "GTM-NNJSG4Z")
    </script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8" />
    <title>Beato Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png" />

    <!-- LIBS AND CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="frameworks/bootstrap5/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />

    <link
      rel="preload"
      href="./frameworks/slick/slick.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link
      rel="preload"
      href="./frameworks/splide-3.6.4/splide.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link rel="stylesheet" href="./frameworks/splide-3.6.4/splide.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="frameworks/fontawesome/css/all.min.css"
    />
    <link
      rel="preload"
      href="./frameworks/lightbox/css/lightbox.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />


  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NNJSG4Z"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="banner">
      <img src="./img/marcelo.png" alt="" class="img-marcelo" />
      <div class="row">
        <div class="col-xxl-8 col-xl-6 col-md-12 col-12">
          <div class="infor">
            <div class="logo">
              <img src="img/logo-branca.png" alt="Beato Cafeteria" />
            </div>
            <div class="titulo">
              <h1>SEJA DONO DA SUA PRÓPRIA CAFETERIA</h1>
              <h2>
                Faturando <span class="pulsate-bck"><b>até R$887.530 </b></span> por
                ano com a sua <b>franquia de café</b>
              </h2>
              <div class="spacer"></div>
              <h3>
                A Beato Cafeteria segue os mais altos <br />padrões de cafeterias
                europeias.
              </h3>
              <div class="spacer"></div>
              <h4>
                <a href="#formulario"> Saiba mais <img src="img/traco.jpg" /> </a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-12 col-12">
          <div class="formulario" id="formulario">
            <div class="titulo">
              <h1>Invista na Beato Cafeteria</h1>
              <h2>e tenha um <b>negócio de Sucesso!</b></h2>
              <div class="spacer"></div>
              <span><img src="icons/seta-down.svg" /></span>
              <div class="spacer"></div>
            </div>

            <form id="form-beato" class="form" action="enviar.php" method="post">
              <div class="campos">
                <input type="hidden" class="utmmedium" name="utmmedium" value="" />
                <input
                  type="hidden"
                  class="utmcampaign"
                  name="utmcampaign"
                  value=""
                />
                <input type="hidden" class="utmcontent" name="utmcontent" value="" />
                <input type="hidden" class="utmcrm" name="utmcrm" value="" />
                <input
                  type="hidden"
                  name="url-form"
                  value="<?php echo $escaped_url?>"
                />

                <div class="">
                  <label for="name" class="form-label">Nome</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nome"
                    name="name"
                    required
                  />
                </div>

                <div class="mt-5">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                  />
                </div>

                <div class="mt-5">
                  <label for="whatsapp" class="form-label">Telefone</label>
                  <input
                    type="text"
                    class="form-control"
                    id="telefone"
                    name="whatsapp"
                    pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"
                    required
                    maxlength="15"
                  />
                </div>
              </div>

              <div class="bt-section">
                <button type="submit" class="btn-form">
                  RECEBER APRESENTAÇÃO POR WHATSAPP
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="banner-2">
      <div class="row">
        <div class="col-xxl-7 col-xl-6 col-md-12 col-12">
          <div class="titulo">
            <h1>O Cheiro do Sucesso</h1>
            <p>
              O <b>mercado de café</b> no Brasil
              <b>é extremamente seguro e rentável</b>. <br />
              Conheça os <b>principais motivos para investir</b> nesse segmento:
            </p>
          </div>
          <div class="item">
            <div class="spacer"></div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-12">
                <div class="itens">
                  <div class="imagem">
                    <img src="icons/relogio.svg" />
                  </div>
                  <div class="descricao">
                    <h1>Break Even</h1>
                    <p>até o <span>terceiro mês</span></p>
                  </div>
                </div>
              </div>
              <!-- <div class="spacer-mobile"></div> -->
              <div class="col-xl-12 col-md-12 col-12">
                <div class="itens">
                  <div class="imagem">
                    <img src="icons/calendario.svg" />
                  </div>
                  <div class="descricao">
                    <h1>Tempo de Payback</h1>
                    <p>prazo de até <span>18 meses</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="spacer"></div>
            <div class="row">
              <div class="col-xl-12 col-md-12 col-12">
                <div class="itens">
                  <div class="imagem">
                    <img src="icons/save-money.svg" />
                  </div>
                  <div class="descricao">
                    <h1>Investimento a partir de</h1>
                    <p><span>R$ 159 Mil</span></p>
                  </div>
                </div>
              </div>
              <!-- <div class="spacer-mobile"></div> -->
              <div class="col-xl-12 col-md-12 col-12">
                <div class="itens">
                  <div class="imagem">
                    <img src="icons/money.svg" />
                  </div>
                  <div class="descricao">
                    <h1>Alta Rentabilidade</h1>
                    <p>entre <span>19%</span> e <span>21%</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="galeria-imagens">
      <div class="item">
        <a href="img/img-1v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-1.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-2v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-2.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-3v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-3.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-4v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-4.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-5v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-5.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-6v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-6.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-7v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-7.jpg" />
        </a>
      </div>
      <div class="item">
        <a href="img/img-8v2.jpg" data-lightbox="Imagem" data-title="">
          <img src="img/img-8.jpg" />
        </a>
      </div>
    </section>

    <section class="banner-3">
      <div class="row">
        <div class="col-xxl-7 col-xl-6 col-md-12 col-12">
          <div class="texto">
            <h2>Seja sócio do ex-goleiro da</h2>
            <h1>Seleção Brasileira</h1>
            <p>
              <b>Jefferson de Oliveira Galvão</b>, mais conhecido como Jefferson,
              <b> é um empresário e ex-futebolista que atuava como goleiro</b>. Foi
              considerado um dos melhores goleiro do Brasil de sua época.
            </p>
            <p>
              Jefferson
              <b>
                também foi goleiro da Seleção Brasileira, a qual defendeu em 22
                oportunidades </b
              >. Dentre algumas de suas atuações podemos relembrar a grande defesa de
              um pênalti cobrado por ninguem menos que Lionel Messi.
              <b>Hoje o multi empresário vem repetindo o sucesso dos campos</b>,
              Jefferson expande seus negócios<b>
                através da franquia Beato Cafeteria</b
              >
              com objetivo de levar sua marca para todos os estados e cidades do
              Brasil.
            </p>
          </div>

          <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
              <div class="imagem">
                <div class="img1">
                  <img
                    src="img/selecao-1.jpg"
                    alt="Messi sentado no chão e atrás dele, goleiro Jefferson da seleção brasileira comemorando a defesa do penâlti."
                  />
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12 col-12">
              <div class="imagem">
                <div class="img2">
                  <img
                    src="img/selecao-2.jpg"
                    alt="Goleiro Jefferson pulando para impedir que uma bola entre no gol"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="divisor">
        <img src="img/divisor.png" />
      </div>
    </section>

    <section class="section-perfil-investidor">
      <div class="row">
        <div class="col-xxl-6 col-xl-7 col-md-12 col-12">
          <h2 class="title">Perfil de investidor</h2>
          <p>Buscamos um <b>perfil seleto de investidor</b>.</p>
          <p>
            Buscamos um investidor que tem <b>visão empresarial</b>,
            <b>que almeja o melhor</b> e que tenha compromisso com os valores da
            Beato. Um investidor com <b> espírito de líder </b> e com
            <b>sede de crescimento</b>.
          </p>
        </div>
      </div>
    </section>

    <section class="sucesso">
      <div class="row">
        <div class="col-xl-7 col-md-12 col-12">
          <div class="titulo">
            <h1>Como surgiu essa ideia de Sucesso?</h1>
            <p>
              A cafeteria surgiu<b>
                a partir de referências internacionais do atleta Jefferson</b
              >, goleiro do Botafogo e com passagens pela seleção brasileira.
            </p>
            <p>
              <b>Ao visitar as grandes capitais da culinária mundial</b> durante suas
              viagens do mundo da bola, buscou <b>inspirações de alto padrão</b> para
              seu espaço.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="banner-4">
      <div class="spacer"></div>

      <div class="divisor">
        <img src="img/divisor.png" />
      </div>
    </section>

    <section class="modelo">
      <div class="row">
        <div class="col-xl-7 col-md-12 col-12">
          <div class="titulo">
            <h2>Conheça nossos</h2>
            <h1>Modelos de Loja</h1>
          </div>
        </div>
        <div class="spacer"></div>
        <div class="col-xl-7 col-md-12 col-12">
          <div class="galeria-modelo">
            <div class="item">
              <div class="imagem">
                <img src="img/beato-small.jpg" />
              </div>
              <div class="texto">
                <h1>Loja Small</h1>
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Investimento: <span>R$ 159.700</span></p>
                    <p>Faturamento Anual: <span>R$ 887.530</span></p>
                    <p>Área de operação: <span>a partir de 80 m²</span></p>
                  </div>
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Retorno de Investimento: <span>18 meses</span></p>
                    <p>% Margem Líquida: <span>19%</span></p>
                  </div>
                  <div class="spacer"></div>
                  <h2>DIFERENCIAL: SEM TAXA DE RENOVAÇÃO</h2>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="imagem">
                <img src="img/beato-quiosque.jpeg" />
              </div>
              <div class="texto">
                <h1>Loja Quiosque</h1>
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Investimento: <span>R$ 158.900</span></p>
                    <p>Faturamento Anual: <span>R$ 686.947</span></p>
                    <p>Área de operação: <span>a partir de 12 m²</span></p>
                  </div>
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Retorno de Investimento: <span>18 meses</span></p>
                    <p>% Margem Líquida: <span>21%</span></p>
                  </div>
                  <div class="spacer"></div>
                  <h2>DIFERENCIAL: SEM TAXA DE RENOVAÇÃO</h2>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="imagem">
                <img src="img/beato-to-go.jpg" />
              </div>
              <div class="texto">
                <h1>Loja To Go</h1>
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Investimento: <span>R$ 122.847</span></p>
                    <p>Faturamento Anual: <span>R$ 511.832</span></p>
                    <p>Área de operação: <span>a partir de 20 m²</span></p>
                  </div>
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Retorno de Investimento: <span>18 meses</span></p>
                    <p>% Margem Líquida: <span>20%</span></p>
                  </div>
                  <div class="spacer"></div>
                  <h2>DIFERENCIAL: SEM TAXA DE RENOVAÇÃO</h2>
                </div>
              </div>
            </div>
            <!-- <div class="item">
              <div class="imagem">
                <img src="img/beato-express.jpg" />
              </div>
              <div class="texto">
                <h1>Loja Express</h1>
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Investimento: <span>R$ 141 mil</span></p>
                    <p>Área de operação: <span>a partir de 100 m²</span></p>
                  </div>
                  <div class="col-xl-6 col-md-6 col-12">
                    <p>Opção com cozinha, para produção local</p>
                    <p>Retorno de Investimento: <span>14 meses</span></p>
                  </div>
                  <div class="spacer"></div>
                  <h2>
                    <a href="#formulario">MAIS INFORMAÇÕES COM OS CONSULTORES</a>
                  </h2>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="video">
      <div class="row">
        <div class="col-xl-8 col-md-12 col-12">
          <h2 class="title">Conheça uma de nossas unidades</h2>
        </div>
      </div>
      <div class="youtube" data-embed="-0FV6LKtJek">
        <div class="play-button"><i class="fas fa-play"></i></div>
      </div>
    </section>

    <section class="banner-5">
      <div class="cafe">
        <img src="img/cafe.png" />
      </div>

      <div class="titulo col-xl-8">
        <h2>Depoimentos de quem</h2>
        <h1>Confia na Beato</h1>
      </div>
      <div class="galeria-video col-xl-6 col-md-12 col-12">
        <div class="item">
          <div class="youtube-dep" data-embed="VSynm5pbqcU">
            <div class="play-button"><i class="fas fa-play"></i></div>
          </div>
        </div>
        <div class="item">
          <div class="youtube-dep" data-embed="6XNrIF8EYLE">
            <div class="play-button"><i class="fas fa-play"></i></div>
          </div>
        </div>
        <div class="item">
          <div class="youtube-dep" data-embed="ZJxK0xQN1sE">
            <div class="play-button"><i class="fas fa-play"></i></div>
          </div>
        </div>
      </div>
    </section>

    <section class="variedade">
      <div class="titulo col-xl-7 col-md-12 col-12">
        <h2>Temos uma grande</h2>
        <h1>Variedade de Delícias</h1>
      </div>

      <div class="row">
        <div class="galeria-produto col-xl-7 col-md-12 col-12">
          <div class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-2.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-1.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-4.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-3.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-6.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-8.jpg" alt="" />
                </li>
                <li class="splide__slide">
                  <img data-splide-lazy="img/produto-7.jpg" alt="" />
                </li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-xl-6 col-md-12 col-12">
            <div class="item">
              <img src="img/produto-2.jpg" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12 col-12">
            <div class="item">
              <img src="img/produto-1.jpg" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12 col-12">
            <div class="item">
              <img src="img/produto-4.jpg" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12 col-12">
            <div class="item">
              <img src="img/produto-3.jpg" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12 col-12">
            <div class="item">
              <img src="img/produto-5.jpg" />
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <a
      href="https://api.whatsapp.com/send?phone=5517991312922&text=Ol%C3%A1%2C%20quero%20saber%20mais%20sobre%20a%20Franquia%20Beato%20Coffee"
      class="whatsapp-container"
      target="_blank"
      title="Fale com um consultor"
    >
      <img src="./icons/whatsapp.svg" alt="" width="48" height="48" />
      <!-- <span class="tooltip-text">
          Falar com um consultor
        </span> -->
      <span>Fale com um consultor</span>
    </a>

    <div class="barra-fixa">
      <div class="row">
        <div class="col-xl-6 col-md-6 col-6">
          <span>Ficou interessado? Saiba mais agora mesmo!</span>
        </div>

        <div class="col-xl-6 col-md-6 col-6">
          <a href="#formulario" class="btn-barra">Quero receber a apresentação</a>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7">
            <div class="row">
              <div class="col-xl-6 d-flex justify-content-center align-items-center">
                <a
                  href="https://www.facebook.com/beatocafeteriaoficial/"
                  target="_blank"
                >
                  <div class="fab fa-facebook"></div>
                </a>
                <a
                  href="https://www.instagram.com/beatocafeteriaoficial/"
                  target="_blank"
                >
                  <div class="ml-3 fab fa-instagram"></div>
                </a>
                <a
                  href="https://www.youtube.com/channel/UCjDoyCJAjp9wEkBC7M9y4gw/videos?view=0&sort=p"
                  target="_blank"
                >
                  <div class="ml-3 fab fa-youtube"></div>
                </a>
              </div>

              <div class="col-xl-6 d-flex flex-column justify-content-center">
                <p>
                  © 2021 - BEATO COFFEE | Feito por
                  <a href="https://www.blancmarketingdigital.com.br" target="_blank"
                    >Blanc Digital</a
                  >
                </p>
                <p class="mt-3">
                  R. Américo Gomes Novoa, 730 - Jardim Redentor, São José do Rio
                  Preto - SP, 15085-330 - UNIDADE PILOTO
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- LIBS VUE AND JS -->
    <script src="frameworks/jquery/jquery-3.5.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
      integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
      crossorigin="anonymous"
    ></script>
    <script src="frameworks/bootstrap5/js/bootstrap.min.js"></script>
    <script src="frameworks/slick/slick.min.js"></script>
    <script src="./frameworks/splide-3.6.4/splide.min.js"></script>
    <script src="frameworks/fontawesome/js/all.min.js"></script>
    <script src="frameworks/lightbox/js/lightbox.min.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        setTimeout(function () {
          var tela = window.innerWidth

          if (tela >= 1280 && tela <= 1920) {
            $(window).scroll(function () {
              var sticky = $("#formulario"),
                scroll = $(window).scrollTop()

              if (scroll >= 500) {
                sticky.addClass("fixed")
                sticky.addClass("w-33")
              } else {
                sticky.removeClass("fixed")
                sticky.removeClass("w-33")
              }
            })
          } else if (tela >= 768 && tela <= 1024) {
          } else if (tela <= 767) {
          } else {
          }
        }, 1000)

        $("#form-beato").submit(function () {
          $(".btn-form").prop("disabled", true)
        })

        $("#telefone").mask("(00) 0000-00009")

        var searchParams = new URLSearchParams(window.location.search)
        var getUTMmedium = searchParams.get("utm_medium")
        var getUTMcampaign = searchParams.get("utm_campaign")
        var getUTMcontent = searchParams.get("utm_content")

        if (getUTMmedium === null) {
          var getUTMmedium = "Nenhum"
        }

        if (getUTMcampaign === null) {
          var getUTMcampaign = "Nenhum"
        }

        if (getUTMcontent === null) {
          var getUTMcontent = "Nenhum"
        }

        $(".utmmedium").val(getUTMmedium)
        $(".utmcampaign").val(getUTMcampaign)
        $(".utmcontent").val(getUTMcontent)

        var utmcrm =
          "utm_medium: " +
          getUTMmedium +
          " # " +
          "utm_campaign: " +
          getUTMcampaign +
          " # " +
          "utm_content: " +
          getUTMcontent

        $(".utmcrm").val(utmcrm)

        $(".galeria-modelo").slick({
          dots: true,
          arrows: false,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          // prevArrow: '<a class="slide-arrow prev-arrow"><img src="icons/left-arrow.svg" />Anterior </a>',
          // nextArrow: '<a class="slide-arrow next-arrow">Próximo<img src="icons/right-arrow.svg" /></a>',
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        })

        $(".galeria-imagens").slick({
          dots: false,
          arrows: false,
          infinite: true,
          speed: 300,
          slidesToShow: 5,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              },
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        })

        // Removed to improve responsiviness as videos
        $(".galeria-video").slick({
          arrows: false,
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 767,
              settings: "unslick",
              // {
              //   slidesToShow: 1,
              //   slidesToScroll: 1,
              // },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        })

        new Splide(".splide", {
          perPage: 2,
          flickPower: 200,
          lazyLoad: "nearby",
          height: "450px",
          width: "100%",
          breakpoints: {
            640: {
              perPage: 1,
            },
          },
        }).mount()
      })
    </script>
  </body>
</html>
