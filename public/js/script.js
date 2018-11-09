$(window).scroll(function(){
  var altezza = $(window).height();
  //only for small-medium devices
  if($(window).scrollTop() > $(window).height() && $(window).width() >812){
    $('.bg-light').each(function () {
      this.style.setProperty('background-color', 'transparent', 'important');
      console.log(altezza);
    });
    $('.nav-item').each(function () {
      this.style.setProperty('font-weight', 'bold', 'important');
      console.log(altezza);
    });

  } else {
    $('.bg-light').each(function () {
      this.style.setProperty('background-color', '#f8f9fa', 'important');
      console.log(altezza);
    });
    $('.nav-item').each(function () {
      this.style.setProperty('font-weight', 'normal', 'important');
      console.log(altezza);
    });
  
  }

});

// $("#inputComment").prop('disabled', true);

// $('#modifyComment').on('click',function() {
//     $(this).parent().parent().find('#inputComment').prop("enabled", true);
//     //$('.card-text').append('<textarea value="save"></textarea>');
//     //$('.companyInfo').append('<button type="submit">save</button>');
// });

setTimeout(function(){
  if ($('#success-msg').length > 0) {
    $('#success-msg').remove();
  }
}, 3000)

// var width = $(window).width();
// if (width < 768){
//  $(".btn-primary").css("display", "none");
//  } else {
//    $(".btn-primary").css("display", "inline-block");
//  };
