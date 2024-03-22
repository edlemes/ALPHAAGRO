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
<!-- Incio - HEADER -->
<?php require_once 'Model/header.php'; ?> <!--Faz a inclusão da Navbar -->
<!-- Fim - HEADER -->

<!-- Inicio seção - 01 -->
  <section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title side-content text-left">
            <h6 >Quem somos</h6>
            <h3 >Na AlphaAgro, honramos a terra e valorizamos os agricultores que nos alimentam, promovendo a produção de alimentos saudáveis e sustentáveis. Oferecemos uma ampla gama de serviços para atender às necessidades dos produtores agrícolas, desde o compartilhamento de espaço de armazenamento em silos até o monitoramento e controle de qualidade dos grãos. Com um compromisso inabalável com a segurança, a qualidade e a sustentabilidade, estamos comprometidos em fornecer soluções de alta qualidade e valor agregado aos nossos clientes.</h3>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="side-content left">
            <p>Em 2024, surgiu a AlphaAgro, nossa empresa fundada durante um hackathon por um grupo de amigos apaixonados por inovação no setor agrícola. Desde o princípio, dedicamo-nos à excelência e à inovação, com foco na segurança dos grãos e no atendimento excepcional ao cliente.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="side-image">
            <img src="images/custom/Junte-se.jpg" alt="Image">
            <div class="big-note-box">
              <h4 style="font-family: Poppins; font-weight:700;">O que está esperando? <br>
                Junte-se hoje mesmo.</h4>
              <p>Junte-se a nós e descubra como a <u> AlphaAgro</u> está transformando o futuro da
                <strong>agricultura,</strong> um grão de cada vez.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Fim seção - 01 -->

<!-- Inicio seção - 02 -->
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
  <!-- Fim seção - 02 -->

  <!-- Inicio seção - 03 -->
  <section class="content-section" data-background="#009a4e">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="experts-box">
            <h6>Detalhes</h6>
            <div class="experts-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure>
                    <img src="images/custom/Prat01.png" alt="Image">
                    <figcaption>
                      <h5 style="font-family: Nova Round, system-ui;">Práticas de Rotação de Culturas</h5>
                      <small >A rotação de culturas é uma técnica agrícola que envolve o cultivo sequencial de diferentes tipos de culturas no mesmo espaço para melhorar a saúde do solo, aumentar a produtividade e reduzir a incidência de pragas e doenças.</small>
                    </figcaption>
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure>
                    <img src="images/custom/Prat02.jpg" alt="Image">
                    <figcaption>
                      <h5 style="font-family: Nova Round, system-ui;">Manejo Integrado de Pragas</h5>
                      <small>O manejo integrado de pragas é uma abordagem sustentável para controlar pragas agrícolas que combina o uso de métodos biológicos, culturais, físicos e químicos para minimizar os danos causados pelas pragas, reduzir o uso de pesticidas e proteger o meio ambiente.</small>
                    </figcaption>
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure>
                    <img src="images/custom/Prat03.jpg" alt="Image">
                    <figcaption>
                      <h5 style="font-family: Nova Round, system-ui;">Técnicas de Conservação do Solo</h5>
                      <small>As técnicas de conservação do solo são práticas agrícolas destinadas a proteger a camada superficial do solo da erosão, melhorar sua estrutura, fertilidade e capacidade de retenção de água, incluindo a utilização de cobertura morta, terraceamento e plantio direto.</small>
                    </figcaption>
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure>
                    <img src="images/custom/Prat04.jpg" alt="Image">
                    <figcaption>
                      <h5 style="font-family: Nova Round, system-ui;">Adoção de Agricultura de Precisão</h5>
                        <small>A agricultura de precisão utiliza tecnologias avançadas, como GPS, drones e sensores, para otimizar o uso de insumos agrícolas, monitorar o crescimento das culturas, mapear variabilidades do solo e tomar decisões mais precisas e eficientes no campo.
                        </small>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="accordion-box">
            <h6>Perguntas Frequentes</h6>
            <div class="accordion" id="accordion" role="tablist">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="font-family: Nova Round, system-ui;">Como funciona o processo de reserva de espaço em um silo?
                  </a> </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                  data-parent="#accordion">
                  <div class="card-body">Para reservar espaço em um silo, você pode acessar nossa plataforma online ou entrar em contato com nossa equipe. Indique o tamanho e a duração do armazenamento desejado, e nós cuidaremos do resto.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo"> <a class="collapsed" data-toggle="collapse"
                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: Nova Round, system-ui;">Quais são os benefícios de utilizar o serviço de compartilhamento de silos?
                  </a> </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                  data-parent="#accordion">
                  <div class="card-body">Nosso serviço oferece conveniência e economia, permitindo que você armazene seus grãos sem a necessidade de investir em infraestrutura própria. Além disso, proporciona flexibilidade de armazenamento e acesso a recursos de alta qualidade. </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree"> <a class="collapsed" data-toggle="collapse"
                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family: Nova Round, system-ui;">Quais tipos de grãos podem ser armazenados nos silos?</a> </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                  data-parent="#accordion">
                  <div class="card-body">Nossos silos foram projetados para acomodar uma variedade de grãos, incluindo trigo, milho, arroz, soja e muito mais. Se você tiver dúvidas sobre um tipo específico de grão, estamos à disposição para ajudar.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour"> <a class="collapsed" data-toggle="collapse"
                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-family: Nova Round, system-ui;"> Como posso acessar meus grãos armazenados?</a> </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                  data-parent="#accordion">
                  <div class="card-body">Você pode acessar seus grãos armazenados mediante agendamento prévio. Nossa equipe está disponível para ajudá-lo no processo de retirada e fornecer suporte sempre que necessário. </div>
                </div>
              </div>
              <div class="card">
              <div class="card-header" role="tab" id="headingSix"> <a class="collapsed" data-toggle="collapse"
                  href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="font-family: Nova Round, system-ui;">Quais medidas de segurança são implementadas nos silos?</a> </div>
              <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix"
                data-parent="#accordion">
                <div class="card-body">Implementamos diversas medidas de segurança para garantir a integridade dos grãos armazenados e das instalações. Isso inclui sistemas de monitoramento de temperatura e umidade, controle de acesso e inspeções regulares de manutenção.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingSeven"> <a class="collapsed" data-toggle="collapse"
                  href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="font-family: Nova Round, system-ui;">Quais são as opções de pagamento disponíveis?</a> </div>
              <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven"
                data-parent="#accordion">
                <div class="card-body">Oferecemos várias opções de pagamento para atender às suas necessidades, incluindo pagamento único, pagamento parcelado e opções de financiamento. Fale conosco para discutir qual opção é mais adequada para você.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingEight"> <a class="collapsed" data-toggle="collapse"
                  href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="font-family: Nova Round, system-ui;">Existe um prazo mínimo ou máximo para armazenamento?</a> </div>
              <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight"
                data-parent="#accordion">
                <div class="card-body">Geralmente, não há prazos mínimos de armazenamento, mas os prazos máximos podem variar dependendo da disponibilidade e da demanda. Recomendamos verificar a disponibilidade com antecedência, especialmente para períodos mais longos.</div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Fim seção - 03 -->

  <!-- Inicio seção - 04 -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
            <h6>O que oferecemos</h6>
            <h2 style="font-family: Nova Round, system-ui;">Confira alguns serviços</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon-box left">
            <figure><img src="images/icon01.png" alt="Image"></figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Compartilhamento de Espaço de Armazenamento em Silos:</h6>
                <p>Oferecemos a oportunidade para produtores agrícolas armazenarem seus grãos em nossos silos, sem a necessidade de investir em infraestrutura própria. Nossos silos são projetados para acomodar uma variedade de grãos e garantir a segurança e qualidade durante o armazenamento.
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon-box left">
            <figure><img src="images/icon02.png" alt="Image"></figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Reserva Online e Atendimento Personalizado:</h6>
              <p>Facilitamos o processo de reserva de espaço de armazenamento através de nossa plataforma online intuitiva. Além disso, nossa equipe está sempre disponível para oferecer suporte personalizado e responder às suas perguntas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon-box left">
            <figure><img src="images/icon03.png" alt="Image"></figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Monitoramento e Controle de Qualidade:</h6>
              <p>Implementamos tecnologias avançadas de monitoramento para garantir a segurança e a qualidade dos grãos armazenados. Isso inclui sistemas de monitoramento de temperatura, umidade e controle de pragas, garantindo que seus grãos permaneçam em condições ideais.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon-box left">
            <figure><img src="images/icon04.png" alt="Image"></figure>
            <div class="content">
              <h6 style="font-family: Nova Round, system-ui;">Segurança e Manutenção:</h6>
              <p>Priorizamos a segurança e a integridade dos grãos armazenados. Nossas instalações são equipadas com medidas de segurança robustas, como sistemas de controle de acesso e inspeções regulares de manutenção para garantir o bom funcionamento de nossos silos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fim seção - 04 -->

  <!-- Inicio seção - 05 -->
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
   <!-- Fim seção - 05 -->

  <!-- Inicio Footer -->
  <?php include 'Model/footer.php'; ?> <!-- //Faz a inclusão do footer -->
  <!--Fim Footer -->

 <!-- JS FILES -->
 <?php include 'Model/scripts.php'; ?> <!-- //Faz a inclusão dos scripts.JS -->
 <!-- JS FILES -->

<?php include 'Model/fim-html.php'; ?> <!-- //Faz a inclusão das tags de fechamento -->
<!-- Fim HTML -->