require('slick-carousel');
require('jquery-visible');

jQuery(document).ready(() => {
  // Wrap embedded objects and force them into 16:9
  $('#container iframe, #container embed, #container video').not('.ignore-ratio').wrap('<div class="video-container" />');

  // HEADER: Responsive Nav Toggle
  $('#responsive-nav-toggle').click(e => {
    const $this = $(e.currentTarget);
    e.preventDefault();
    $this.toggleClass('is-active');
    $('#header-responsive').toggleClass('is-active');
  });
  $('#responsive-nav-close').click(e => {
    e.preventDefault();
    $('#header-responsive, #responsive-nav-toggle').removeClass('is-active');
  });

  // MODULE: Slideshow
  $('.module-slideshow-container').each((i,e) => {
    const $this = $(e);
    $this.slick({
      adaptiveHeight: true,
      appendDots: $this.prev('.slideshow-nav'),
      appendArrows: $this.prev('.slideshow-nav'),
    });
  });

  // MODULE: Gallery Slideshow
  $('.module-gallery-slideshow').slick({
    adaptiveHeight: true,
    fade: true,
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
