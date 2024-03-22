<?php
include 'Model/inicio-html.php';
include 'Model/head.php';
?><body>
  <!-- <div class="preloader"><img src="images/preloader.gif" alt="Image" /></div> -->
  <div class="page-transition"></div>
  <!-- fim da animação de transição da página -->
  <div class="search-box">
    <div class="inner">
      <form>
      <input type="search" placeholder="Digite o que deseja buscar.">
        <input type="submit" value="Buscar">
      </form>
    </div>
  </div>
  <!-- fim caixa de pesquisa -->
  <!-- HEADER -->
  <?php require_once 'Model/header.php'; ?>
  <!--Faz a inclusão da Navbar -->
  <!-- Preloader -->
  <div id="index-preloader">
    <div class="preloader-logo">
      <div>
        <img id="Layer_4_Image-2" src="images/logo/AlphaAgro.png" width="268" height="118" viewBox="0 0 268 118" alt="Preloader Alpha Agro">
      </div>
    </div>
  </div>
  <!-- Fim do Preloader -->
  <!-- HEADER -->
  <section
    class="content-section"
    data-background="images/section-bg01.png"
    data-stellar-background-ratio="1.2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="side-content left">
            <h2>Aumente sua Produtividade Agrícola</h2>
            <h6>Se você é um agricultor familiar, uma empresa agrícola de médio porte, ou faz parte de uma cooperativa ou associação de produtores, sabe da importância de otimizar cada recurso disponível em sua propriedade. É por isso que estamos animados em apresentar nossa nova plataforma de armazenamento compartilhado.</h6>
            <p>
            Desenvolvida com suas necessidades em mente, nossa plataforma digital e aplicativo móvel oferecem uma solução conveniente e eficiente para reserva de espaços de armazenamento para seus grãos. Com funcionalidades simples e intuitivas, você pode buscar, reservar e gerenciar seu estoque de maneira rápida e fácil.
            </p>
            <a href="#" class="custom-button">Mais informações</a>
          </div>
          <!-- fim do side-content -->
        </div>
        <!-- fim col-6 -->
        <div class="col-lg-6">
          <div class="side-slider">
            <div class="slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/custom/placeholder1.png" alt="Image" /> 
                </div>
                <!-- fim do swiper-slide -->
                <div class="swiper-slide">
                  <img src="images/custom/placeholder2.jpg" alt="Image" />
                </div>
                <!-- fim do swiper-slide -->
                <div class="swiper-slide">
                  <img src="images/custom/placeholder3.jpg" alt="Image" />
                </div>
                <!-- fim do swiper slide -->
              </div>
              <!-- fim do swiper-wrapper -->
              <div class="swiper-pagination"></div>
              <!-- fim do swiper-pagination -->
            </div>
            <!-- fim do slider -->
            <div class="note-box">Otimização agrícola em ação.</div>
            <!-- fim da caixa -->
          </div>
          <!-- fim do side-slider -->
        </div>
        <!-- fim da col-6 -->
      </div>
      <!-- fim da coluna -->
    </div>
    <!-- fim container-->
  </section>
  <!-- Fim da seção content -->
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Inovação em Armazenamento</h5>
            <figure><img src="images/custom/arm-1.jpg" alt="Image" /></figure>
            <p>
              Conectando agricultores de todos os tamanhos às melhores soluções de armazenamento.
            </p>
          </div>
          <!-- fim da imagem da caixa de conteúdo -->
        </div>
        <!-- fim da col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Parcerias Estratégicas</h5>
            <figure><img src="images/custom/arm-2.jpg" alt="Image" /></figure>
            <p>
              Impulsionando o Futuro da Agricultura
            </p>
          </div>
          <!-- fim da imagem da caixa de conteúdo -->
        </div>
        <!-- fim da col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Eficiência e Segurança</h5>
            <figure><img src="images/custom/arm-3.jpg" alt="Image" /></figure>
            <p>
              Revolucionando o Gerenciamento de Estoques Agrícolas
            </p>
          </div>
          <!-- fim da imagem da caixa de conteúdo -->
        </div>
        <!-- fim da col-4 -->
      </div>
      <!-- fim da coluna -->
    </div>
    <!-- fim do container -->
  </section>
  <!-- Fim da seção content -->
  <section class="content-section" data-background="#fbf7f4">
    <div class="container">
      <div class="section-title">
        <figure>
          <img src="images/section-title-shape.png" alt="Image" />
        </figure>
        <h6>Funcionalidades, Custo e Cronograma</h6>
        <h2>Plataforma Digital para Armazenamento Compartilhado</h2>
      </div>
      <!-- fim da seção title -->
    </div>
    <!-- fim do container -->
    <div class="carousel-image-box">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital1.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Registro e Perfil de Usuário</small>
            <h5>Funcionalidades Essenciais</h5>
            <p>
              Nossa plataforma oferece um sistema completo para registro, criação de perfil de usuário, busca e reserva de espaços de armazenamento, integração com serviços de pagamento online, além de um sistema de avaliação e feedback dos usuários.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital2.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Custo e Cronograma</small>
            <h5>Desenvolvimento e Lançamento</h5>
            <p>
              Estamos comprometidos em entregar nossa plataforma em aproximadamente 4 meses, com um orçamento inicial planejado para desenvolvimento de software, marketing e operações. Nossa prioridade é oferecer uma solução eficaz e acessível para agricultores familiares, empresas agrícolas de médio porte, cooperativas e associações de produtores.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital3.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Busca e Visualização de Espaços</small>
            <h5>Facilidade na Localização de Espaços Disponíveis</h5>
            <p>
              Nossa plataforma oferece uma interface intuitiva para os usuários encontrarem e visualizarem espaços de armazenamento disponíveis de forma rápida e eficiente.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital4.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Reserva e Cancelamento de Espaços</small>
            <h5>Praticidade na Reserva e Gerenciamento de Estoque</h5>
            <p>
              Com nossa plataforma, os usuários podem reservar e cancelar espaços de armazenamento com facilidade, garantindo flexibilidade e controle total sobre seus estoques.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital5.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Integração com Pagamentos Online</small>
            <h5>Facilidade e Segurança nos Pagamentos</h5>
            <p>
              Nosso sistema integrado com serviços de pagamento online garante transações seguras e convenientes, simplificando o processo de pagamento para nossos usuários.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/custom/plat-digital6.jpg" alt="Image" />
          </figure>
          <div class="content">
            <small>Avaliação e Feedback dos Usuários</small>
            <h5>Ouvindo e Melhorando Constantemente</h5>
            <p>
              Valorizamos o feedback dos nossos usuários e estamos comprometidos em aprimorar continuamente nossa plataforma com base em suas experiências e sugestões.
            </p>
          </div>
          <!-- fim do conteúdo -->
        </div>
        <!-- fim do swiper slide -->
      </div>
      <!-- fim do swapper-wrapper -->
      <div class="swiper-pagination"></div>
      <!-- fim do swapper-pagination -->
    </div>
    <!-- fim do conteúdo de carro -->
  </section>
  <section class="content-section">
    <div class="container">
      <div class="row">
      <div class="col-12">
          <div class="section-title">
            <figure>
              <img src="images/section-title-shape.png" alt="Image" />
            </figure>
            <h6>Contra fatos não há argumentos!</h6>
            <h2>Aqui vão alguns dados sobre os silos de Lucas do Rio Verde</h2>
          </div>

        </div>
        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="8" data-status="yes">0</span>
            <h6>Silos em Lucas do Rio Verde</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>

        </div>

        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="32000" data-status="yes">0</span>
            <h6>Toneladas de capacidade em armazenamento de grãos</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>

        </div>

        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="4" data-status="yes">0</span>
            <h6>Consideráveis grandes vendedores de grãos do Estado de Mato Grosso estão em Lucas do Rio Verde</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>

        </div>

      </div>

    </div>

  </section>

  <section
    class="content-section no-bottom-spacing"
    data-background="images/servicos-background.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-9">
          <div class="services-list-box">
            <h5>O que fazemos</h5>
            <h2>Nossos serviços</h2>
            <ul>
              <li>
                <figure><img src="images/icon08.png" alt="Image" /></figure>
                <div class="content">
                  <h6>Reserva de espaços de armazenamento compartilhado.</h6>
                  <p>
                    Reserve espaços de armazenamento com facilidade na AlphaAgro. Use nossa plataforma simples e intuitiva para encontrar e reservar o espaço perfeito em apenas alguns cliques.
                  </p>
                </div>

              </li>
              <li>
                <figure><img src="images/icon09.png" alt="Image" /></figure>
                <div class="content">
                  <h6>Estabelecimento de parcerias com produtores e empresas agrícolas</h6>
                  <p>
                    Trabalhamos com produtores e empresas agrícolas para garantir amplo acesso aos espaços de armazenamento. Facilitamos o acesso a espaços seguros e de qualidade para armazenar seus grãos.
                  </p>
                </div>

              </li>
              <li>
                <figure><img src="images/icon10.png" alt="Image" /></figure>
                <div class="content">
                  <h6>Implementação de estratégias de marketing e divulgação</h6>
                  <p>
                    Promovemos ativamente nossa plataforma para atrair agricultores familiares, empresas agrícolas e cooperativas. Nossa estratégia inclui campanhas online, eventos do setor e colaborações com especialistas.
                  </p>
                </div>

              </li>
            </ul>
          </div>

        </div>

      </div>

    </div>

  </section>

  <section
    class="content-section"
    data-background="images/section-bg01.png"
    data-stellar-background-ratio="1.2"
  >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <figure>
              <img src="images/section-title-shape.png" alt="Image" />
            </figure>
            <h6>Nossa Rede de Compartilhamento</h6>
            <h2>Rede de Compartilhamento: Conectando Recursos para um Futuro Sustentável.</h2>
          </div>

        </div>

        <div class="col-lg-8">
          <figure class="side-image">
            <img src="https://93da246784f3fd3ee35c.cdn6.editmysite.com/uploads/b/93da246784f3fd3ee35c9928d131225b1f5998ff9da329768421ff788f9ba598/Agroindustry_1711026614.jpg?width=2400&optimize=medium" alt="Image" />
          </figure>
        </div>

        <div class="col-lg-4">
          <div class="side-content right">
            <h5>AlphaAgro: Inovação em Armazenamento Agropecuário</h5>
            <p>
              A AlphaAgro é uma empresa inovadora que está revolucionando o setor agropecuário com sua Rede de Armazenamento. Esta rede permite que os produtores agrícolas armazenem seus produtos de forma eficiente e segura. Através de uma plataforma digital fácil de usar, os produtores podem encontrar espaços de armazenamento disponíveis perto deles e reservá-los com apenas alguns cliques. Isso não só economiza tempo e esforço, mas também ajuda a reduzir os custos de armazenamento.
            </p>
            <a href="#" class="custom-link">Saiba mais</a>
          </div>

        </div>

        <div class="col-12 spacing-100"></div>

        <div class="col-lg-4">
          <div class="side-content left">
            <h5>Revolucionando o Armazenamento Agrícola com a AlphaAgro</h5>
            <p>
              A Rede de Armazenamento da AlphaAgro é uma solução de armazenamento compartilhado que conecta produtores agrícolas a proprietários de espaços de armazenamento. Esta rede é alimentada por uma plataforma digital que facilita a descoberta e reserva de espaços de armazenamento. Além disso, a AlphaAgro oferece suporte ao cliente para garantir que todas as transações sejam suaves e sem complicações. Com a Rede de Armazenamento da AlphaAgro, os produtores agrícolas podem agora armazenar seus produtos de forma mais eficiente e econômica.
            </p>
            <a href="#" class="custom-link">Saiba mais</a>
          </div>

        </div>

        <div class="col-lg-8">
          <figure class="side-image">
            <img src="images/custom/graos-em-sacos.jpg" alt="Image" />
          </figure>
        </div>

      </div>

    </div>

  </section>

  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <h2>O que nos torna diferentes!</h2>
          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon01.png" alt="Image" /></figure>
            <div class="content">
              <p>A AlphaAgro oferece um aplicativo para facilitar o contato e a contratação dos serviços, tornando o processo ainda mais conveniente para os usuários.</p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon02.png" alt="Image" /></figure>
            <div class="content">
              <p>A AlphaAgro está na vanguarda da inovação no setor agropecuário, oferecendo soluções de armazenamento eficientes e seguras.</p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon03.png" alt="Image" /></figure>
            <div class="content">
              <p>
                A empresa conecta pessoas que precisam de espaço de armazenamento com aquelas que têm espaço disponível, facilitando o processo de armazenamento.
              </p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon04.png" alt="Image" /></figure>
            <div class="content">
              <p>A AlphaAgro auxilia os produtores agrícolas a encontrar maneiras eficientes de expandir seu espaço de armazenamento.</p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon05.png" alt="Image" /></figure>
            <div class="content">
              <p>A AlphaAgro possui uma plataforma digital fácil de usar que permite aos produtores encontrar e reservar espaços de armazenamento com apenas alguns cliques.</p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="images/icon06.png" alt="Image" /></figure>
            <div class="content">
              <p>Ao conectar produtores a espaços de armazenamento disponíveis, a AlphaAgro ajuda a economizar recursos, reduzindo a necessidade de construir novos espaços de armazenamento.</p>
            </div>

          </div>

        </div>
        
      </div>
      
    </div>
    
  </section>
  
  <section class="section intro">
    <div class="container">
      <h1>ESTATÍSTICAS AGROPECUÁRIAS &rarr;</h1>
    </div>
  </section>

  <section class="timeline">
    <div class="info">
      <img width="50" height="50" src="https://assets.codepen.io/210284/face.svg" alt="" />
      <h2>Veja os dados do Agronegócio em Lucas do Rio Verde</h2>
      <p>Acompanhe a linha do tempo e seus respectivos dados</p>
      <p>
          <a href="">Saiba mais &gt;</a>
      </p>
    </div>

    <ol>
      <li>
        <div>
          <time>2012</time> Área plantada:  250.500 ha <br>
                        Área colhida:  250.500 ha <br>
                        Produção: 716.550 ton <br>
                        Valor da produção: R$466 199 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2013</time> Área plantada:  238.474 ha <br>
                        Área colhida:  238.474 ha <br>
                        Produção: 699.434 ton <br>
                        Valor da produção: R$548 336 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2014</time> Área plantada:  256.474 ha <br>
                        Área colhida:  253.974 ha <br>
                        Produção: 718.903 ton <br>
                        Valor da produção: R$623 499 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2015</time> Área plantada:  238.000 ha <br>
                        Área colhida:  238.000 ha <br>
                        Produção: 712.500 ton <br>
                        Valor da produção: R$610 473 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2016</time> Área plantada:  237.000 ha <br>
                        Área colhida:  237.000 ha <br>
                        Produção: 711.000 ton <br>
                        Valor da produção: R$686 279 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2017</time> Área plantada:  217.587 ha <br>
                        Área colhida:  217.587 ha <br>
                        Produção: 744.148 ton <br>
                        Valor da produção: R$663 482 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2018</time> Área plantada:  230.000 ha <br>
                        Área colhida:  230.00 ha <br>
                        Produção: 772.800 ton <br>
                        Valor da produção: R$735 087 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2019</time> Área plantada:  235.000 ha <br>
                        Área colhida:  235.000 ha <br>
                        Produção: 789.600 ton <br>
                        Valor da produção: R$785 652 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2020</time> Área plantada:  235.000 ha <br>
                        Área colhida:  235.000 ha <br>
                        Produção: 874.200 ton <br>
                        Valor da produção: R$1 091 439 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>2021</time> Área plantada:  235.000 ha <br>
                        Área colhida:  235.000 ha <br>
                        Produção: 775.500 ton <br>
                        Valor da produção: R$1 937 975 Mil Reais
        </div>
      </li>
      <li>
        <div>
          <time>Em breve...</time> A ser contabilizado...
        </div>
      </li>
      <li>
        <div>
          <time>Em breve...</time> A ser contabilizado...
        </div>
      </li>
      <li></li>
    </ol>

  </section>

  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
          <h6>Parceiros Consultivos</h6>
              <h2 style="font-family: Nova Round, system-ui;">Parceiros que compartilham seu conhecimento<br>
              e experiência na agricultura
              </h2>
          </div>

        </div>
     
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image18.png" alt="Image" />
          </figure>
        </div>
       
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image22.png" alt="Image" />
          </figure>
        </div>
    
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image13.png" alt="Image" />
          </figure>
        </div>
     
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image28.png" alt="Image" />
          </figure>
        </div>
       
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image24.png" alt="Image" />
          </figure>
        </div>
 
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item">
            <img src="images/parceiros/image20-1.png" alt="Image" />
          </figure>
        </div>
  
      </div>

    </div>
   
  </section>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <div class="floating_btn">
    <a target="_blank" href="https://wa.me/556592097227">
      <div class="contact_icon">
        <i class="fa fa-whatsapp my-float"></i>
      </div>
    </a>
  </div>

  <!-- Fim content-section -->
  <?php include 'Model/footer.php'; ?>
  <!--Fim Footer -->
  <?php include 'Model/scripts.php'; ?>
  <!-- JS FILES -->
  <?php include 'Model/fim-html.php'; ?>
  <!-- Fim HTML -->
