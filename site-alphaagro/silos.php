<?php
include 'Model/inicio-html.php'; //Faz a inclusão das tags de abertura
include 'Model/head.php'; //Faz a inclusão do Head
?><body>
  <div class="page-transition"></div>
  <div class="search-box">
    <div class="inner">
      <form>
        <input type="search" placeholder="Digite o que deseja buscar.">
        <input type="submit" value="Buscar">
      </form>
    </div>
  </div>

<!-- HEADER -->
<?php require_once 'Model/header.php'; ?> <!--Faz a inclusão da Navbar -->
<!-- HEADER -->

<!-- Inicio seção - 01 -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <figure class="side-image"> <img src="images/custom/silo01.jpg" alt="Image"> </figure>
        </div>
        <!-- Fim col-8 -->
        <div class="col-lg-4">
          <div class="side-content right">
            <h5>Compartilhamento de Espaço de Armazenamento em Silos:</h5>
            <p>Oferecemos a oportunidade para produtores agrícolas armazenarem seus grãos em nossos silos, sem a necessidade de investir em infraestrutura própria.</p>
            <p>Nossos silos são projetados para acomodar uma variedade de grãos e garantir a segurança e qualidade durante o armazenamento.</p>
          </div>
          <!-- Fim side-content -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-12 spacing-100"></div>
        <!-- Fim spacing-100 -->
        <div class="col-lg-4">
          <div class="side-content left">
            <h5>Monitoramento e Controle de Qualidade:</h5>
              <p>Implementamos tecnologias avançadas de monitoramento para garantir a segurança e a qualidade dos grãos armazenados.</p>
              <p>Incluímos sistemas de monitoramento de temperatura, umidade e controle de pragas.</p>
          </div>
          <!-- Fim side-content -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="images/custom/silo02.jpg" alt="Image"> </figure>
        </div>
        <!-- Fim col-8 -->
        <div class="col-12 spacing-100"></div>
        <!-- Fim spacing-100 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="images/custom/silo03.jpg" alt="Image"> </figure>
        </div>
        <!-- Fim col-8 -->
        <div class="col-lg-4">
          <div class="side-content right">
            <h5>Segurança e Manutenção:</h5>
              <p>Priorizamos a segurança e a integridade dos grãos armazenados.</p>
              <p>Nossas instalações são equipadas com medidas de segurança robustas e realizamos inspeções regulares de manutenção.</p>
          </div>
          <!-- Fim side-content -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-12 spacing-100"></div>
        <!-- Fim spacing-100 -->
        <div class="col-lg-4">
          <div class="side-content left">
            <h5>Sistemas de Ventilação e Aeração</h5>
            <p>Através de sistemas de ventilação e aeração nos silos fazemos o monitoramento da temperatura e a umidade. Isso ajuda a preservar a qualidade dos grãos durante o armazenamento prolongado.</p>
          </div>
          <!-- Fim side-content -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="images/custom/silo04.jpg" alt="Image"> </figure>
        </div>
        <!-- Fim col-8 -->
        <div class="col-12 spacing-100"></div>
        <!-- Fim spacing-100 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="images/custom/silo05.jpg" alt="Image"> </figure>
        </div>
        <!-- Fim col-8 -->
        <div class="col-lg-4">
          <div class="side-content right">
            <h5>Análise de Qualidade:</h5>
            <p>Realizamos análises regulares da qualidade dos grãos, incluindo testes de umidade, pureza e teor de proteína. Isso ajuda a monitorar a integridade dos grãos ao longo do tempo.</p>
          </div>
          <!-- Fim side-content -->
        </div>
        <!-- Fim col-4 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
  <!-- Fim seção - 01 -->

  <!-- Inicio Footer -->
  <?php include 'Model/footer.php'; ?> <!-- //Faz a inclusão do footer -->
  <!--Fim Footer -->

 <!-- JS FILES -->
 <?php include 'Model/scripts.php'; ?> <!-- //Faz a inclusão dos scripts.JS -->
 <!-- JS FILES -->

<?php include 'Model/fim-html.php'; ?> <!-- //Faz a inclusão das tags de fechamento -->
<!-- Fim HTML -->