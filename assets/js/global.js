$(document).ready(function() {
  // SIDENAV
  instanceSidenav = $('.sidenav').sidenav({
    onCloseStart : function() {
      $('.hamburger').removeClass('is-active');
    },
    onOpenStart : function() {
      $('.hamburger').addClass('is-active');
    }
  });
  $('.sidenav-custom-trigger').click(function(){
    if(instanceSidenav[0].M_Sidenav.isOpen){
      $('.sidenav').sidenav('close');
    }else{
      $('.sidenav').sidenav('open');
    }
  });
  // SWIPE PREVIEW
  $('.preview').each(function(){
    var preview = $(this);
    preview.on('mouseover touchstart', function(){
      showPreview($(this));
    });
  });

  function showPreview(obj){
    $('.preview video').each(function(){
      if($(this).is(':visible')){
        $(this).hide();
        $(this)[0].pause();
      }
    });
    var videoObj = obj.children('video');
    videoObj[0].pause();
    videoObj.show();
    videoObj[0].play();
  }

  // SEARCH
  $('form.search').submit(function() {
    if($(this).find('input[type=search]').val() == ''){
      $(this).find('input[type=search]').focus();
      return false;
    }
  });

  function myAlert(){
    $('nav').toggle('highlight');
  }

});
