$(document).ready(function() {
  // SIDENAV
  instanceSidenav = $('.sidenav').sidenav({
    onCloseStart: function() {
      $('.hamburger').removeClass('is-active');
    },
    onOpenStart: function() {
      $('.hamburger').addClass('is-active');
    }
  });
  $('.sidenav-custom-trigger').click(function() {
    if (instanceSidenav[0].M_Sidenav.isOpen) {
      $('.sidenav').sidenav('close');
    } else {
      $('.sidenav').sidenav('open');
    }
  });

  // SEARCH
  $('form.search').submit(function() {
    if ($(this).find('input[type=search]').val() == '') {
      $(this).find('input[type=search]').focus();
      return false;
    }
  });

  function myAlert() {
    $('nav').toggle('highlight');
  }

});
