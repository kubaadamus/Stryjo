$(document).ready(function () {
  $("a").on('click', function (event) {
    if($(event.target).attr('id')!="link")
    {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800);
    }
  });
});