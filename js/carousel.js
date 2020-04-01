$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 2,
  center:true,
  nav: true,
  slideSpeed : 300,
  paginationSpeed : 800,
  rewindSpeed : 1000,

  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,

    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})
