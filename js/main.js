$(document).ready(function () {
  var timerStart = Date.now();
  $(window).load(function() {
      $('.loading').hide();
  });

  // setTimeout(function () {
  //   $('.loading').fadeOut();
  // }, 2000)

  AOS.init({
    duration: 1000,
    disable: false,
    easing: 'easeOutExpo'
  });

  $('.lazy').lazy();

  $(window).scroll(function () {
    var scroll_h = $(window).scrollTop();
    if ( scroll_h > 20 ) {
      $('.menu').addClass('menu-small');
    }
    else $('.menu').removeClass('menu-small');
  });

  $('.menu__btn').toogleElement('.menu__nav')
  $('.menu-close').click(function () {
    $('.menu__nav').hide();
  });
  // Modal js
  $('*[data-modal]').click(function () {
    var modalOpen = $($(this).data('modal'));
    modalOpen.addClass('open');
  });

  $('.modal-close, .modal-overlay').click(function () {
    $('.modal').removeClass('open');
  })

  $('.check-box').click(function () {
    $('.check-box').removeClass('checked');
    $('.check-box input').attr('checked', false);
    $(this).addClass('checked');
    $(this).find('input').attr('checked', true);
  })
  // end modal js

  // tab js

  $('.tab-item').click(function () {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    var tabOpen = $($(this).data('open'));
    $('.tab-content-item').removeClass('active');
    tabOpen.addClass('active');
  })

  // end tab js

  $('.box-drop__btn').click(function (e) {
    $('.box-drop__toggle').removeClass('show')
    e.stopPropagation();
    ($(this).parent().find('.box-drop__toggle')).toggleClass('show')
  })

  $(document).click(function () {
    $('.box-drop__toggle').removeClass('show')
  })
})

jQuery.fn.extend({
  scrollTo: function (element) {
    var element = $(element);
    $(this).click(function () {
      $(this).parents().find('.menu__tabs a').removeClass('active');
      $(this).find('a').addClass('active');

      $('html').animate({
        scrollTop: element.offset().top - 100
      }, 1000)
    })
  },

  countdown: function(timestamp) {
    var e = $(this);
    var now = new Date().getTime();
    var x = setInterval(function() {
      now = now + 1000;
      // Find the distance between now and the count down date
      var distance = timestamp - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      if(seconds < 0 && minutes < 0 && hours < 0 && days < 0) {
        days = hours = minutes = seconds = "00"
        clearInterval(x);
      }
      if( days.toString().length == 1) {
        days = "0" + days;
      }
      if( hours.toString().length == 1) {
        hours = "0" + hours;
      }
      if( minutes.toString().length == 1) {
        minutes = "0" + minutes ;
      }
      if( seconds.toString().length == 1) {
        seconds = "0" + seconds;
      }
      e.find('.dd').html(days);
      e.find('.hh').html(hours);
      e.find('.mm').html(minutes);
      e.find('.ss').html(seconds);

    }, 1000);
  },

  addAnimate: function (array) {
    var wh = $(window).height();
    var add_class_name = "animated fadeInUp";
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      for(var element in array) {
        add_class_name = "animated "+array[element];
        if(scroll > $(element).position().top - wh){
          $(element).addClass(add_class_name);
        }
      }
    });
  },

  elementFixScroll: function (class_name) {
    e = $(this);
    var position = e.position().top;
    var offsetTop  = e.offset().top;
    var scroll_h = $(window).scrollTop();
    if (scroll_h >= position && offsetTop != 0) {
      e.addClass(class_name);
    }

    $(window).scroll(function () {
      scroll_h = $(window).scrollTop();
      if (scroll_h > position) {
        e.addClass(class_name);
      }
      else {
        e.removeClass(class_name);
      }
    })
  },

  toogleElement: function(element) {
    var e = $(element)
    $(this).click(function () {
      e.slideToggle()
    })
  },
})
