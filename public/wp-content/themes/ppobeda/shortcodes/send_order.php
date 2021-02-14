<?php
function send_order(){

  wp_enqueue_script( 'order-form', get_template_directory_uri() . "/js/order-form.js", '', '', '' );

  return '
    <div class="row mt-5">
      <div class="col-xl-6">
        <h2 class="mt-0">Отправить заказ</h2>
        
        <p>Оставьте заявку на <b id="copyH1"></b> и менеджер свяжется с вами в ближайшее время.</p>
      </div>
      <div class="col-xl-6">
        <form action="/wp-content/themes/ppobeda/mail/send.php" method="post" id="send_order">
          <div class="form-group">
            <label for="nameOrder">Имя<sup>*</sup></label>
            <input type="text" class="form-control" id="nameOrder" name="name" placeholder="Введите имя">
          </div>
          <div class="form-group">
            <label for="phoneOrder">Телефон<sup>*</sup></label>
            <input type="text" class="form-control" id="phoneOrder" name="phone" placeholder="+7 (">
          </div>
          <input type="hidden" value="" name="title">
          <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
          <button class="btn btn-dark">Отправить</button>
        </form>
        <div class="send-order-result">Запрос успешно отправлен!</div>
      </div>
    </div>
  ';
}
add_shortcode('send_order', 'send_order');