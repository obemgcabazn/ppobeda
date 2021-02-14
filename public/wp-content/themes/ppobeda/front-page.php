 <?php get_header(); ?>

<div class="container">

  <h1 class="text-center">Комплексное производство изделий<br>для нужд промышленных предприятий РФ</h1>
  <div class="row">
    <div class="col-12">
      <!-- <p><b>ООО «ПРЕДПРИЯТИЕ ПОБЕДА»</b> - вертикально-интегрированная производственная компания, изготавливающая широкий спектр продукции для нужд промышленных предприятий. </p>
      <p>Команда компетентных специалистов всегда готова взять на себя все заботы, связанные со всеми видами работ по конструкторскому и инженерному сопровождению заказов, а так же поиску оптимальных решений его исполнения. Нас ценят за оперативность и прозрачность работы и умение находить легкие решения любых задач.</p> -->
      <p><b>ООО «ПРЕДПРИЯТИЕ ПОБЕДА»</b> - коллектив специалистов, успешно реализовавших на собственной производственной площади, выпуск высоколегированных проволок и крепежных изделий. </p>
      <p>Мы всегда готовы взять на себя все заботы, связанные со всеми видами работ по конструкторскому, технологическому и инженерному сопровождению заказов, а так же поиску оптимальных решений его исполнения. Нас ценят за оперативность и прозрачность работы и умение находить легкие решения любых задач.</p>

    </div>
  </div>
  <div class="row">
    <div class="col-12">

      <h2>Миссия</h2>
      <p>Миссия компании – участие в развитии промышленности и становлении малого и среднего бизнеса в РФ. </p>
      <p class="mb-0">Наши ценности:</p>
      <ul>
        <li>Клиентоориентированность</li>
        <li>Надежность и результат</li>
        <li>Новаторство и эффективность</li>
        <li>Энтузиазм и открытость</li>
      </ul>
      <h2>Основные принципы работы</h2>
      <ul>
        <li>Добросовестная работа: честность, уважение, ответственность</li>
        <li>Профессионализм и специализация</li>
        <li>Постоянное совершенствование методов работы</li>
        <li>Обеспечение развития устойчивого бизнеса промышленных компаний</li>
        <li>Соблюдать стандарты и законодательство РФ</li>
      </ul>
    </div>
<!--     <div class="col-12 col-md-6">
      
    </div> -->
  </div>

  <?=do_shortcode('[order_desc]'); ?>

  <div class="container">
    <h2>Наши клиенты</h2>
    <div class="owl-carousel">
      <div class="wrapper"><img src="/img/clients/osk.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/sibur.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/izhorsk.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/minudobreinja.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/dsk.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/kbp.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/okb-gamma.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/rosatom.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/salut.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/sevmash.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/transmashholding.jpg" alt=""></div>
      <div class="wrapper"><img src="/img/clients/tvel.jpg" alt=""></div>
    </div>
  </div>

  <?php
  if (have_posts()):
      while (have_posts()): the_post();

          the_content();

      endwhile;
  endif;
  ?>

</div>

<?php get_footer(); ?>