(function($){
    $(function(){
        const title = $('h1').html();
        $('#copyH1').html( title );
        $('input[name="title"]').val(title);

        // ОТПРАВКА ФОРМЫ ЗАКАЗА
        $('#send_order').submit(function(e){
            e.preventDefault();
            let m_method = $(this).attr('method');
            let m_action = $(this).attr('action');
            let m_data  = $(this).serialize();

            $.ajax({
                type: m_method,
                url: m_action,
                data: m_data,
                success: function( result ){
                    console.log(result);
                    $('#send_order').css("display", "none");
                    $('.send-order-result').css("display", "block");
                }
            });
        });
    });
})(jQuery);