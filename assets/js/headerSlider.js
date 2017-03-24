$(function(){
  $('.eventSlider').slick({
    dots: false,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    draggable: false,
    focusOnSelect: true
  });

  $('.eventSlider').on('afterChange init', function(event, slick, currentSlide, nextSlide){
    // var getEvent = $('.eventSlider').find('.slick-active').data('event');

    // $.getJSON( "assets/includes/jsonEvents.php?eventId="+getEvent+"", function(data) {
    //   var eventName = data[0].name,
    //       eventId   = data[0].id,
    //       eventImage= data[0].image,
    //       eventAbout= data[0].about,
    //       eventDate = data[0].date,
    //       eventCity = data[0].city,
    //
    //       $header   = $("header");
    //
    //   $header.find(".headerContent").addClass("opacityHide");
    //   $header.find(".overlayLoader").addClass("loader");
    //
    //   setTimeout(function(){
    //
    //     $header.find(".headerContent").removeClass("opacityHide");
    //
    //     $header.find(".headerImage").find('img').attr('src', eventImage);
    //     $header.find(".headerImage").find('img').on('load',function(){
    //       $header.find(".overlayLoader").removeClass("loader");
    //     });
    //
    //     $header.find("h1").html(eventName);
    //
    //     var parts = eventDate.split('-');
    //     var dmyDate = parts[2] + '/' + parts[1] + '/' + parts[0];
    //     $header.find(".date").html(dmyDate);
    //
    //     $header.find(".city").html(eventCity);
    //     $header.find("h3").html(eventAbout);
    //   }, 300);
    // }).done(function(data) {
    // }).fail(function() {
    //   console.log( "error" );
    // });

  });
});
