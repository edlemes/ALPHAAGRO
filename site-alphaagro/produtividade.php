<?php
include 'Model/inicio-html.php';
include 'Model/head.php';
?><body>
  <div class="page-transition"></div>
  <!-- end page-transition -->
  <div class="search-box">
    <div class="inner">
      <form>
        <input type="search" placeholder="Type here to search">
        <input type="submit" value="SEARCH">
      </form>
    </div>
  </div>
  <!-- end search-box -->
  <!-- HEADER -->
  <?php require_once 'Model/header.php'; ?> <!--Faz a inclusão da Navbar -->
  <!-- HEADER -->
  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-left">
            <h2>Produtividade é nosso sobrenome!</h2>
            <div class="row inner">
              <div class="col-md-6">
                <p>Entenda como a AlphaAgro pode aumentar a produtividade da sua empresa em apenas 4 passos.</p>
              </div>
            </div>
            <!-- end row -->
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-12">
          <div class="side-image-box">
            <figure><img src="images/custom/produtividade01.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Simplificação do processo de busca:</h3>
              <p>A AlphaAgro simplifica a busca por espaços de armazenamento ao fornecer uma plataforma 
                digital intuitiva, poupando o produtor agrícola de longas pesquisas e burocracias.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/custom/produtividade02.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Redução de tempo gasto em trâmites burocráticos:</h3>
              <p>Ao oferecer um sistema digital integrado, a AlphaAgro elimina a necessidade de lidar 
                com papeladas e processos manuais demorados, permitindo que o produtor foque mais tempo em sua produção de grãos.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/custom/produtividade03.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Acesso rápido e fácil a espaços de armazenamento:</h3>
              <p>Com apenas alguns cliques, os produtores podem encontrar e reservar espaços de armazenamento 
                próximos, evitando deslocamentos desnecessários e facilitando a logística do armazenamento de grãos.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
          <div class="side-image-box">
            <figure><img src="images/custom/produtividade04.jpg" alt="Image"></figure>
            <div class="content">
              <h3>Eliminação de intermediários:</h3>
              <p>Ao conectar diretamente produtores a espaços de armazenamento disponíveis, 
                a AlphaAgro reduz a necessidade de intermediários e negociações 
                complexas, tornando o processo mais direto e eficiente.
              </p>
            </div>
            <!-- end content -->
          </div>
          <!-- end side-image-box -->
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <?php include 'Model/footer.php'; ?> <!--End Footer -->
  <?php include 'Model/scripts.php'; ?> <!-- JS FILES -->
  <?php include 'Model/fim-html.php'; ?> <!-- Fim HTML -->