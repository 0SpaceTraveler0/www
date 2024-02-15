<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
    <!-- side menu -->
    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "Y",
            "COMPONENT_TEMPLATE" => "left"
        ),
        false
    ); ?>
    <!-- /side menu -->
    <!-- side anonse -->
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "include_exam1",
        array(
            "AREA_FILE_RECURSIVE" => "Y",    // Рекурсивное подключение включаемых областей разделов
            "AREA_FILE_SHOW" => "sect",    // Показывать включаемую область
            "AREA_FILE_SUFFIX" => "inc",    // Суффикс имени файла включаемой области
            "EDIT_TEMPLATE" => "",    // Шаблон области по умолчанию
            "PATH" => ""
        ),
        false
    ); ?>

    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <div class="item-wrap">
            <div class="rew-footer-carousel">
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магзине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магазине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / footer rew slider box -->

    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block">О магазине</div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu_exam1",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "bottom_exam1",    // Тип меню для первого уровня
                        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                ); ?>

            </div>
            <div class="item">
                <div class="title-block">Каталог товаров</div>
                <ul>
                    <li><a href="">Кухни</a>
                    </li>
                    <li><a href="">Гарнитуры</a>
                    </li>
                    <li><a href="">Спальни и матрасы</a>
                    </li>
                    <li><a href="">Столы и стулья</a>
                    </li>
                    <li><a href="">Раскладные диваны</a>
                    </li>
                    <li><a href="">Кресла</a>
                    </li>
                    <li><a href="">Кровати и кушетки</a>
                    </li>
                    <li><a href="">Тумобчки и прихожие</a>
                    </li>
                    <li><a href="">Аксессуары</a>
                    </li>
                    <li><a href="">Каталоги мебели</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contacts-block">
            <div class="title-block"><?= GetMessage('CONTACT_INFO') ?></div>
            <div class="loc-block">
                <div class="address">ул. Летняя, стр.12, офис 512</div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_phone.php"
                    )
                ); ?>

            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>