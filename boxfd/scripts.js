$(document).ready(function(){

  $('#mbut').click(function(){
    $('.container').css({'background' : 'url("kot-diememe.jpg") no-repeat', 'background-size' : 'contain'});
    $('#mbut').css('display', 'none');
    $('#save-1').removeClass('hide')

  })

  $('#save-1').click(function(){
    $('.container').css('background-image', 'url("end.jpg")');
    $('#save-1').addClass('hide');
    $('#save-2').removeClass('hide');
    $('#sleep').removeClass('hide');
  })

  $('#save-2').click(function(){

    if (confirm('НАЖМИ ДА! ИНАЧЕ Я САМ ЗАКРОЮ ОКНО!')) {
      thisWindow.close();
    } else {
      close();
    }
  })
})
