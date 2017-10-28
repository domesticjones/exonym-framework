require('slick-carousel');
require('jquery-visible');

jQuery(document).ready(() => {
  // Wrap embedded objects and force them into 16:9
  $('#container iframe, #container embed, #container video').not('.ignore-ratio').wrap('<div class="video-container" />');

  // HEADER: Responsive Nav Toggle
  $('#responsive-nav-open').click(e => {
    e.preventDefault();
    $('#navigation-responsive, #responsive-nav-close').addClass('is-active');
    $('#logo-responsive-header').addClass('is-hidden');
  });
  $('#responsive-nav-close, #responsive-nav-close-secondary').click(e => {
    e.preventDefault();
    $('#navigation-responsive, #responsive-nav-close').removeClass('is-active');
    $('#logo-responsive-header').removeClass('is-hidden');
  });

  // MODAL: Functions
  $('.module-expand').click(e => {
    e.preventDefault();
    window.location.hash = '';
    $('#modal').fadeIn();
    const $content = $('#modal-content');
    const type = $(e.currentTarget).data('expand');
    if(type === 'image') {
      const image = $(e.currentTarget).data('content');
      $content.addClass('modal-image');
      $content.html(`<img src="${image}" />`);
    } else if(type === 'video') {
      $content.addClass('modal-video');
      const videoUrl = $(e.currentTarget).parent().find('.video-container iframe').attr('src');
      const video = $(e.currentTarget).parent().find('.video-container').clone();
      $content.html(video);
      $content.find('.video-container iframe').attr('src', `${videoUrl}&autoplay=1`);
    } else if(type === 'text') {
      $content.addClass('modal-text');
      const text = $(e.currentTarget).parent().find('.modal-text-hidden').html();
      $content.html(text);
    }
  });

  // MODAL: Close
  $('#modal-close').click(() => {
    $('#modal-content').removeClass('modal-image modal-video modal-text').empty();
    $('#modal').fadeOut();
  });

  // VIDEO: Play on thumbnail click
  $('.module-video-thumb').click((e) => {
    $(e.currentTarget).fadeOut();
    const videoUrl = $(e.currentTarget).parent().find('.video-container iframe').attr('src');
    $(e.currentTarget).parent().find('.video-container iframe').attr('src', `${videoUrl}&autoplay=1`);
  });

  // MODULES: Animate onScreen
  $(window).on('load resize scroll', () => {
    $('.animate-on-enter').each((i, el) => {
      const $this = $(el);
      if($this.visible(true)) {
        $this.addClass('is-visible');
      }
    });
    $('.animate-on-leave').each((i, el) => {
      const $this = $(el);
      if(!$this.visible(true)) {
        $this.removeClass('is-visible');
      }
    });
  });
});
