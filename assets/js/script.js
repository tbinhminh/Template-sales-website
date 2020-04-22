(function($){
    $(function(){
        $('.js-searchSelect').click(function(){
            var mParent = $(this).parent();
            mParent.toggleClass('menu-branch__search-select--active');
        });
        $('.js-searchOption').click(function(){
            $('.js-searchSelect').text($(this).text());
            $('.js-searchSelect').parent().removeClass('menu-branch__search-select--active');//gasn dc text xong xoa pop up
        });
        $('.js-clicktoggler').click(function(){
            $('.js-nav').toggleClass('nav--active');

        });
        $('.js-clickClosemenu').click(function(){
            $('.js-nav').removeClass('nav--active');
        });
        //coursel flickity
        $('.carousel-slider').flickity({
            autoPlay:'1000',
            pauseAutoPlayOnHover: false
        });
        $('.js--tabClick').click(function(){
            var tab_id = $(this).attr('data-tab');// lay tabid
            $('.js--tabClick').removeClass('tab-link--active');//delete class border-bottom default 
            $('.js--tabContent').removeClass('current');
            $(this).addClass('tab-link--active');// add class border-bottom 
            $('#'+tab_id).addClass('current');

        });
        // $('.tabs__content').children('div').each(function(){
        //     $val = '#'+$(this).attr('id');
        //     console.log($val+' .carousel-course');
        //     $($val+' .carousel-course').flickity({
        //         groupCells: true,
        //         cellAlign: 'left',
        //         lazyLoad: true
        //     });
        //   });
        $('.carousel-course').slick({
            infinite: true,
            lazyLoad: 'ondemand',
            slidesToShow: 5,
            slidesToScroll: 5
          });
        
       
    });
})(jQuery);
// start rating
const starEls = document.querySelectorAll('.star.rating');
starEls.forEach(star => {
  star.addEventListener('click', function(e) {
    let starEl = e.currentTarget;
    console.log(starEl.parentNode.dataset.stars + ", " + starEl.dataset.rating);
    starEl.parentNode.setAttribute('data-stars', starEl.dataset.rating);
  });
})
