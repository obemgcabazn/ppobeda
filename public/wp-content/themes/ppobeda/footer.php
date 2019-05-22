  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <hr size="5" color="#000">
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-12 col-lg-3">
          <img src="<?=get_template_directory_uri()?>/img/pobeda_stamp.svg" alt="Предприятие Победа">
        </div>
        <div class="mb-3 mb-sm-0 col-12 col-lg-3">
          <b class="logo-pre">Предприятие</b>
          <img src="<?=get_template_directory_uri()?>/img/logo.svg" alt="" width="200">
        </div>
        <div class="d-none d-sm-block col-12 col-lg-2">
          <?php
          $footer_menu = wp_nav_menu( array(
            'theme_location'  => 'main_menu',
            'menu_class'      => 'nav footer_menu flex-column', 
            'container'       => 'ul', 
            'echo'            => 0,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
          ) );
          $footer_menu = str_replace('class="page_item', 'class="page_item nav-item', $footer_menu);
          $footer_menu = str_replace('<a', '<a class="nav-link"', $footer_menu);
          echo $footer_menu;
          ?>
        </div>
        <div class="col-12 col-lg-4 text-center text-sm-right">
          <p><a href="tel:+74950124499" class="phone" target="_blank">+7 (495) 012-44-99</a></p>
          <p><a class="email" href="mailto:zakaz@ppobeda.ru" target="_blank" rel="nofollow">zakaz@ppobeda.ru</a></p>
          <p><address><a href="/kontakty/" target="_blank">Московская обл., г. Мытищи,<br>ул. Летная, стр. 19</a></address></p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-uppercase copyright">&copy; 2018 ООО "Предприятие Победа"</p>
        </div>
      </div>
    </div>
  </footer>

</main>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(51120056, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/51120056" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>