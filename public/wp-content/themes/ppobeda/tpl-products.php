<?php
/*
Template Name: Шаблон страницы Продукция
*/

get_header();
?>


<div class="container">
  <div class="row d-none d-lg-block">
    <div class="col">
      <?php breadcrumb_bootstrap(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6">

      <div class="row">

        <div class="card col-12">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Изделия из металлов
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
            <div class="card-body">
              <table class="table table-sm table-bordered">
                <tr>
                  <td rowspan="5">Дробь</td>
                  <td>ДСЛ</td>
                </tr>
                <tr><td>ДСЛУ</td></tr>
                <tr><td>ДЧЛ</td></tr>
                <tr><td>ДЧЛУ</td></tr>
                <tr><td>ДРС (ГОСТ 11964-81)</td></tr>
                <tr>
                  <td rowspan="3">Листовой прокат</td>
                  <td>Стальной</td>
                </tr>
                <tr><td>Нержавеющий</td></tr>
                <tr><td>Цветной</td></tr>
                <tr>
                  <td rowspan="2">Метизы</td>
                  <td>Промышленные (болт, винт, гайка, шайба)</td>
                </tr>
                <tr><td>Общего назначения (гвоздь, болт, винт, гайка, шайба, крепеж для дерева и ГКЛ)</td></tr>
                <tr>
                 <td rowspan="2">Прокат и изделия из цветных металлов</td>
                 <td>Литье, поковки, штамповки</td>
               </tr>
               <tr><td>Поркат (лента, шина, проволока, пруток)</td></tr>
               <tr>
                <td rowspan="6">Сортовой прокат и поковки </td>
                <td>Круги, шестигранники, квадраты - ГК</td>
              </tr>
              <tr><td>Круги, шестигранники, квадраты - ХК</td></tr>
              <tr><td>Поковки и заготовки</td></tr>
              <tr><td>Уголок</td></tr>
              <tr><td>Фасонный прокат</td></tr>
              <tr><td>Швеллер</td></tr>
              <tr>
                <td rowspan="2">Трубный прокат</td>
                <td>Нержавеющий</td>
              </tr>
              <tr><td>Арматура трубопроводная</td></tr>
              <tr>
                <td rowspan="2">Сварочные материалы </td>
                <td>Электроды</td>
              </tr>
              <tr><td>Проволока</td>
              </tr>
              <tr>
                <td rowspan="3">Подшипники</td>
                <td>Комплектующие</td>
              </tr>
              <tr><td>Подшипники роликовые</td></tr>
              <tr><td>Подшипники шариковые</td></tr>
            </table>
          </div>
        </div>
      </div>


      <div class="card col-12">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Вспомогательные материалы
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
          <div class="card-body">
            <table class="table table-sm table-bordered">
              <tr><td rowspan="2">Смазочно-охлаждающие</td>
              <td>Смазочные составы</td></tr>
              <tr><td>Охлащдающие составы</td></tr>
              <tr><td rowspan="3">Химия</td>
              <td>Полимеры, пластические массы, химические волокна, каучуки и мастики</td></tr>
              <tr><td>Химикаты, химические соединения, реактивы, моющие средства</td></tr>
              <tr><td>Очищающие</td></tr>
            </table>
          </div>
        </div>
      </div>

      <div class="card col-12">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Спецодежда, рабочая обувь и СИЗ
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
          <div class="card-body">
            <table class="table table-sm table-bordered">
              <tr>
                <td>Рабочая одежда</td>
                <td>Куртки, костюмы, комбинезны, халаты (для сварщиков, металлургов, ИТР, мед. персонала)</td>
              </tr>
              <tr>
                <td>Рабочая обувь</td>
                <td>Ботинки, сапоги, туфли, легкая обувь</td>
              </tr>
              <tr>
                <td>Средства инд. защиты</td>
                <td>Респрираторы, наушники, беруши, очки, маски, перчатки, руковицы, каски</td>
              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-12 col-md-6">
    <div class="row">
      <div class="card col-12">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Электрооборудоване
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
          <div class="card-body">
            <table class="table table-sm table-bordered">
              <tr>
                <td rowspan="6">Кабельно-проводниковая продукция</td>
                <td>Кабели и провода монтажные, обмоточные, судовые, оптические, радиочастотные и сверхпроводящие</td>
              </tr>
              <tr><td>Кабели, провода и шнуры силовые</td></tr>
              <tr><td>Кабели, провода и шнуры управления, контроля, связи и сигнализации</td></tr>
              <tr><td>Кабельная арматура</td></tr>
              <tr><td>Кабельные наконечники</td></tr>
              <tr><td>Провода неизолированные</td></tr>
              <tr><td rowspan="3">КиП</td>
              <td>Приборы контроля и регулирования параметров</td></tr>
              <tr><td>Приборы электроизмерительные</td></tr>
              <tr><td>Трансформаторы измерительные</td></tr>
              <tr><td rowspan="4">Электротехнические компоненты</td>
              <td>Автоматические выключатели, автоматы защиты, рубильники</td></tr>
              <tr><td>Датчики тока</td></tr>
              <tr><td>Изделия электроустановочные и светотехническое оборудование</td></tr>
              <tr><td>Трансформаторы силовые и вспомогательные для питания цепей управления, сигнализации и освещения</td></tr>

            </table>
          </div>
        </div>
      </div>
      <div class="card col-12">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Строительно-отделочные материалы
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
          <div class="card-body">
            <table class="table table-sm table-bordered">
              <tr><td rowspan="3">ЛКМ</td>
              <td>Краски, лаки, эмали, шпатлевка</td></tr>
              <tr><td>Клей, герметик, монтажная пена</td></tr>
              <tr><td>Сухие строительные смеси</td></tr>
              <tr><td rowspan="3">Пиломатериал</td>
              <td>Доска</td></tr>
              <tr><td>Брус, брусок</td></tr>
              <tr><td>Бревно оцилиндрованое</td></tr>
              <tr><td rowspan="3">Кирпич</td>
              <td>Силикатный</td></tr>
              <tr><td>Керамческий</td></tr>
              <tr><td>Строительный (рядовой)</td></tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="accordion row" id="accordion">







</div>

<div class="row">
  <div class="col-12">
    <?php
    if (have_posts()):
      while (have_posts()): the_post();

        the_content();

      endwhile;
    endif;
    ?>
  </div>
</div>

</div>

<?php get_footer(); ?>