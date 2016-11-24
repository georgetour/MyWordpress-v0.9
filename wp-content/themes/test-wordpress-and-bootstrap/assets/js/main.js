$(document).ready(function () {


    //Cache the window object
    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function () {
        var $backgroundObject = $(this);//assigning the object

        $(window).scroll(function () {

        //scroll the background at var speed
        //the yPos is a negative value because we are scrolling it up
        var yPos = -($window.scrollTop()/$backgroundObject.data('speed'));

        //Put together out background position
        var coords = '50%' + yPos + 'px';

       //Move the background
        $backgroundObject.css({backgroundPosition:coords});

        });//End Window scroll

    });

    //Back to top event with animation using jQuery scrollTop method
    $('#backToTop').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });


    //According to full path we will add active class to where we are
    var location = window.location.pathname;
    console.log(location);

    function activeClassOnly(addClassTo,removeClassFrom){
        $(addClassTo).addClass('active');
        $(removeClassFrom).removeClass('active');
    };

    switch(location){
        case '/TestWordpress/index.php':
        case '/TestWordpress/':
            activeClassOnly('ul li:nth-child(1)','ul > li:nth-child(2),ul > li:nth-child(3),ul li:nth-child(5)');
            break;

        case '/TestWordpress/blog/':
            activeClassOnly('ul li:nth-child(3)','ul > li:nth-child(2),ul > li:nth-child(1),ul li:nth-child(5)');
            break;

        case '/TestWordpress/resources/':
            activeClassOnly('ul li:nth-child(2)',('ul > li:nth-child(1),ul > li:nth-child(3),ul li:nth-child(5)'));
            break;

        case '/TestWordpress/contact/':
            activeClassOnly('ul li:nth-child(5)','ul > li:nth-child(1),ul > li:nth-child(3),ul > li:nth-child(2)');
            break;
    }
    //End active class according to location



    //Portfolio redirection button
    $('#menu-item-297').on('click',function () {
        event.preventDefault();
        $('#menu-item-297').find('a').attr('data-toggle', 'modal');
        $('#menu-item-297').find('a').attr('data-target', '#checkMyWorkModal');
    });

    $('#redirect').on('click',function () {
        event.preventDefault();
        window.open('http://www.besmartbesimple.com');
    });
    
});
