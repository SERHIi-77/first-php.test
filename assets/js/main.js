$(".form-02-main .form-03-main .logo img").mouseover(function(){
    // при вхождении в элемент
    $(this).css({ 'animation' : '0.6s ease 0s 1 normal none running swing'});
    }).mouseout(function(){
    // при покидании элемента
        $(this).removeAttr( "style" );
    });

$('#formTwit').on('submit', function(e) {
    e.preventDefault();
    
    let form = $(this);
    let data = form.serialize();  // данные формы представлены последовательно в виде строки

    $.ajax({
        type: "POST",                                       /* Куда отправить запрос */
        url: "/modules/add-twit.php",                       /* Метод запроса (post или get) */
        data: data,                                         /* Данные, которые будут переданы на сервер. */
        success: function(data){                            /* Функция, которая будет вызываться в случае успешного выполнения запроса. */
            $('#listTwits').prepend(data);
        },

      });
});
