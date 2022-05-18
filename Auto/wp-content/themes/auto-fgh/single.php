<?php
/**
* Автор: Бобер Алексей
* Дата реализации: 13.05.2022 13:00
*
* Дата изменения: 18.05.2022 13:35
*
* Утилита вывода страницы "Политика конфеденциальности"
*/
  //Вывод своего header
  get_header('private');
  the_post();

  echo "<div class='container'>";
    echo "<h2>";
      // заглавие записи
      the_title();
    echo "</h2>";
    //текст записи
    the_content();
  echo "</div>";

 //Вывод своего footer
  get_footer('private');
