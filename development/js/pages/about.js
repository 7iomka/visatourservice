function aboutActions(){
  if(!$('.about-stats__counter').length) return;
    $('.about-stats__counter').counterUp({
        delay: 10,
        time: 500
    });
}
