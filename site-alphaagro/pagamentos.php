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
  <section class="content-section no-bottom-spacing">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
            <h6>Integração de pagamentos</h6>
            <h2>Soluções abrangentes e seguras para pagamento no campo.</h2>
          </div>
          <!-- Fim section-title -->
        </div>
        <!-- Fim col-12 -->
        <div class="col-lg-6">
          <figure class="side-half-image" data-background="images/custom/colheita.jpg"></figure>
        </div>
        <!-- Fim col-6 -->
        <div class="col-lg-6">
          <div class="icon-box left">
            <figure class="text-success">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bank"
                viewBox="0 0 16 16">
                <path
                  d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
              </svg>
            </figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Facilidade e Agilidade</h6>
              <p>Oferecemos soluções completas para integração de pagamentos no ambiente rural. Simplifique
                suas transações e tenha mais agilidade no seu dia a dia.</p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
          <div class="icon-box left">
            <figure class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z" />
              </svg>
            </figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Segurança Financeira</h6>
              <p>Garanta a segurança das suas transações financeiras com nossas soluções de pagamento.
                Proteja seus dados e tenha tranquilidade nas suas operações.</p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
          <div class="icon-box left">
            <figure class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-person-gear" viewBox="0 0 16 16">
                <path
                  d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
              </svg>
            </figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Suporte Especializado</h6>
              <p>Conte com nosso suporte técnico especializado para auxiliar em todas as etapas do
                processo de integração de pagamentos. Estamos aqui para ajudar você.</p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-6 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
  <!-- Fim content-section -->
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
          <!-- Fim section-title -->
        </div>
        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="8" data-status="yes">0</span>
            <h6>Silos em Lucas do Rio Verde</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>
          <!-- Fim counter-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="32000" data-status="yes">0</span>
            <h6>Toneladas de capacidade em armazenamento de grãos</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>
          <!-- Fim counter-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-md-4">
          <div class="counter-box">
            <span class="odometer" data-count="4" data-status="yes">0</span>
            <h6>Consideráveis grandes vFimedores de grãos do Estado de Mato Grosso estão em Lucas do Rio Verde</h6>
            <figure><img src="images/counter-icon.png" alt="Image" /></figure>
          </div>
          <!-- Fim counter-box -->
        </div>
        <!-- Fim col-4 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
<!-- Fim seção - 01 -->

<!-- Inicio seção - 02 -->
  <section class="content-section" data-background="images/custom/looping.jpg" data-stellar-background-ratio="0.7">
    <div class="container">
      <div class="row">
        <div class="col-12 spacing-100"></div>
        <!-- Fim spacing-100 -->
        <div class="col-lg-6 col-md-9">
          <div class="text-box light">
            <h2>AlphaAgro Looping</h2>
            <p>Apresentamos nosso looping para seu estabelecimento, exibindo informações de mercado sempre atualizadas,
              mantFimo você e seus clientes bem informados.</p>
          </div>
          <!-- Fim text-box -->
        </div>
        <!-- Fim col-6 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
 <!-- Fim seção - 02 -->

 <!-- Inicio seção - 03 -->
  <section class="content-section" data-background="#fbf7f4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
            <h6>Precificação de Preços Físicos</h6>
            <h2>Essencial para produtores e profissionais do agronegócio, oferecFimo atualizações em tempo real,
              análises de mercado e preços competitivos.</h2>
          </div>
          <!-- Fim section-title -->
        </div>
        <!-- Fim col-12 -->
        <div class="col-12">
          <div class="side-content-image-box">
            <div class="content">
              <h4 style="font-family: Nova Round, system-ui;">Painel de Negociação</h4>
              <p>Painel de Negociações AlphaAgro: Ferramenta revolucionária para otimizar e simplificar a
                comercialização do produtor no mercado agrícola.</p>
              <p>Além disso, oferecemos integração com diversas plataformas de pagamento, incluindo:</p>
              <ul>
                <li>PayPal</li>
                <li>Stripe</li>
                <li>PagSeguro</li>
                <li>Mercado Pago</li>
              </ul><a href="https://wa.me/556592097227" target="_blank" class="custom-link">Entre em contato.</a>
            </div>
            <!-- Fim content -->
            <figure>
              <img src="images/custom/painel.jpg" alt="Image">
            </figure>
          </div>
          <!-- Fim side-content-image-box -->
        </div>
        <!-- Fim col-12 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
<!-- Fim seção - 03 -->

 <!-- Inicio seção - 04 -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <h2>Nossos diferencias</h2>
          </div>
          <!-- Fim section-title -->
        </div>
        <!-- Fim col-12 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-exclamation-circle fa-2x text-success"></i></figure>
            <div class="content">
              <p>Atualizações Importantes.</p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-wallet fa-2x text-success"></i></figure>
            <div class="content">
              <p>Cotações em tempo real.</p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-coins fa-2x text-success"></i></figure>
            <div class="content">
              <p>Dólar em tempo real. </p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-chart-line fa-2x text-success"></i></figure>
            <div class="content">
              <p>Análises de mercado. </p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-chart-line fa-2x text-success"></i></figure>
            <div class="content">
              <p>TFimências de mercado. </p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
          <figure><i class="fas fa-sun fa-2x text-success"></i></figure>
            <div class="content">
              <p>
                Informações sobre clima. </p>
            </div>
            <!-- Fim content -->
          </div>
          <!-- Fim icon-box -->
        </div>
        <!-- Fim col-4 -->
      </div>
      <!-- Fim row -->
    </div>
    <!-- Fim container -->
  </section>
 <!-- Fim seção - 04 -->

  <!-- Inicio Footer -->
  <?php include 'Model/footer.php'; ?> <!-- //Faz a inclusão do footer -->
  <!--Fim Footer -->

 <!-- JS FILES -->
 <?php include 'Model/scripts.php'; ?> <!-- //Faz a inclusão dos scripts.JS -->
 <!-- JS FILES -->

<?php include 'Model/fim-html.php'; ?> <!-- //Faz a inclusão das tags de fechamento -->
<!-- Fim HTML -->