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
    // let data = form.serialize();  // данные формы представлены последовательно в виде строки

    let file_data =$('#twitImage').prop('files')[0];
    let form_data = new FormData($('#formTwit')[0]);
        form_data.append('file', file_data);
    console.dir(form_data);

    $.ajax({
        type: "POST",                           /* Куда отправить запрос */
        url: "/modules/add-twit.php",           /* Метод запроса (post или get) */
        data: form_data,                             /* Данные, которые будут переданы на сервер. */
        processData: false,                     /* По умолчанию (true) передаваемые на сервер данные преобразуются из объекта в строку запроса */
        contentType: false,                     /* При отправке Ajax запроса, данные передаются в том виде, в котором указаны в данном параметре.*/
        success: function(data){                /* Функция, которая будет вызываться в случае успешного выполнения запроса. */
            $('#listTwits').prepend(data);
        },

      });
});
