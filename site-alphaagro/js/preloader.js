// Ativar o overflow do body
$('body').css('overflow', 'auto');

// Exibir o preloader
$('#index-preloader').fadeIn();

// Ocultar o conteúdo do body
$('body').css('overflow', 'hidden');

// Simular um tempo de execução do preloader (exemplo: 3 segundos)
setTimeout(function() {
  // Ocultar o preloader
  $('#index-preloader').fadeOut();

  // Restaurar o overflow do body
  $('body').css('overflow', 'auto');

  // Rolar para o topo da página
  document.documentElement.scrollTop = 0;
}, 3000);