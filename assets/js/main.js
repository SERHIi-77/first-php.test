$(".form-02-main .form-03-main .logo img").mouseover(function(){
    // при вхождении в элемент
    $(this).css({ 'animation' : '0.6s ease 0s 1 normal none running swing'});
    }).mouseout(function(){
    // при покидании элемента
    $(this).removeAttr( "style" );
    });

// $(this).css({ '-webkit-animation' : 'swing 0.6s ease',
//         'animation' : 'swing 0.6s ease', 
//         '-webkit-animation-iteration-count' : '1',
//         'animation-iteration-count' : '1'});
    
//     setTimeout(function(){
//         $(this).css('animation', '');
//         },1000)
