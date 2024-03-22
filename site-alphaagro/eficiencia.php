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
      <div class="row">
        <div class="col-12">
          <div class="section-title text-left">
            <h2>Facilidades que a AlphaAgro proporciona <br> Eficiencia em foco!</h2>
          </div>
          <!-- Fim section-title -->
        </div>
        <!-- Fim col-12 -->
        <div class="col-md-6">
          <div class="image-content-box">
            <h5>Reserva Online e Atendimento Personalizado:</h5>
            <figure><img src="images/custom/eficiencia01.jpg" alt="Image"></figure>
            <p>Facilitamos o processo de reserva de espaço de armazenamento através de nossa plataforma online intuitiva. Além disso, nossa equipe está sempre disponível para oferecer suporte personalizado e responder às suas perguntas.</p>
          </div>
          <!-- Fim image-content-box -->
          <div class="image-content-box">
            <h5>Segurança e Manutenção:</h5>
            <figure><img src="images/custom/eficiencia03.jpg" alt="Image"></figure>
            <p>Priorizamos a segurança e a integridade dos grãos armazenados. Nossas instalações são equipadas com medidas de segurança robustas, como sistemas de controle de acesso e inspeções regulares de manutenção para garantir o bom funcionamento de nossos silos.</p>
          </div>
          <!-- Fim image-content-box -->
          <div class="image-content-box">
            <h5>Flexibilidade e Conveniência:</h5>
            <figure><img src="images/custom/eficiencia02.jpg" alt="Image"></figure>
            <p>Oferecemos flexibilidade em termos de duração do armazenamento e opções de pagamento. Não há prazos mínimos de armazenamento, permitindo que você armazene seus grãos pelo tempo que precisar, de acordo com suas necessidades.</p>
          </div>
          <!-- Fim image-content-box -->
        </div>
        <!-- Fim col-6 -->
        <div class="col-md-6">
          <div class="image-content-box">
            <h5>Assistência e Suporte Técnico:</h5>
            <figure><img src="images/custom/eficiencia04.jpg" alt="Image"></figure>
            <p>Nossa equipe experiente está sempre disponível para fornecer assistência técnica e suporte, desde o processo de reserva até a retirada dos grãos armazenados. Estamos aqui para ajudá-lo a garantir uma experiência tranquila e satisfatória.</p>
          </div>
          <!-- Fim image-content-box -->
          <div class="image-content-box">
            <h5>Tecnologia Avançada:</h5>
            <figure><img src="images/custom/eficiencia05.jpg" alt="Image"></figure>
            <p>Investimos em tecnologia de ponta para monitorar e manter a qualidade dos grãos armazenados. Nossos sistemas avançados garantem o controle preciso da umidade, temperatura e condições de armazenamento, proporcionando tranquilidade aos nossos clientes.</p>
          </div>
          <!-- Fim image-content-box -->
          <div class="image-content-box">
            <h5>Serviços Personalizados:</h5>
            <figure><img src="images/custom/eficiencia06.jpg" alt="Image"></figure>
            <p>Nosso foco no cliente se estende a serviços personalizados para atender às necessidades específicas de cada agricultor. Estamos comprometidos em fornecer soluções sob medida para garantir a satisfação e o sucesso de nossos clientes.</p>
          </div>
        </div>
        <!-- Fim col-6 -->
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