<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ab9b5ed19338bb2680cd183e1a3bfcf857683e6a56b5b38a874664621929e196 */
class __TwigTemplate_50040364d1234d23e7b91b912f144870f6ce2018bfbdd4f72b7b2e12d058534c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ab9b5ed19338bb2680cd183e1a3bfcf857683e6a56b5b38a874664621929e196"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ab9b5ed19338bb2680cd183e1a3bfcf857683e6a56b5b38a874664621929e196"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/monsteriada-prestashop-clone/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/monsteriada-prestashop-clone/img/app_icon.png\" />

<title>Moduły • Monsteriada</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '58ffed6af7c200795c4f617e57c516df';
    var token_admin_orders = tokenAdminOrders = '5f06592714ea5ec7c0598207c1ffd899';
    var token_admin_customers = 'fc4a6ebdec6a4c949cf20ed3aba3458f';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '91ebadfe31f9a37c60a32583137f8e54';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '39a31911caa55d9a1dd868ca1eb320a3';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/catalog/recommended?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo';
    var admin_notification_get_link = '/";
        // line 42
        echo "monsteriada-prestashop-clone/admin-dev/index.php/common/notifications?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo';
    var admin_notification_push_link = adminNotificationPushLink = '/monsteriada-prestashop-clone/admin-dev/index.php/common/notifications/ack?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"styleshe";
        // line 60
        echo "et\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/monsteriada-prestashop-clone\\/admin-dev\\/\";
var baseDir = \"\\/monsteriada-prestashop-clone\\/\";
var changeFormLanguageUrl = \"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/cldr.bundle.js\"></script>
<script ty";
        // line 80
        echo "pe=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/welcome/public/module.js\"></script>


  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/monsteriada-prestashop-clone/admin-dev/index.php/common/notifications?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmodulesmanage\"
  data-base-url=\"/monsteriada-prestashop-clone/admin-dev/index.php\"  data-token=\"plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/categories/new?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1c9ac115cd94a0fad0889ba44b8d0bcf\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products/new?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=cf13641b527a820596a";
        // line 141
        echo "6eca45eea3095\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminOrders&amp;token=5f06592714ea5ec7c0598207c1ffd899\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"110\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-7Dq904InVqyHg8lhR7ULgPKTJRo\"
        data-post-link=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminQuickAccesses&token=9f5e9cfc41db7d95b08c5bf55009075c\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Moduły - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminQuickAccesses&token=9f5e9cfc41db7d95b08c5bf55009075c\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminSearch&amp;token=949cc95c86773baee54d6ca1b7645823\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_";
        // line 180
        echo "search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a";
        // line 196
        echo " class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\"
             href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/performance/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/monsteriada-prestashop-clone/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">";
        // line 238
        echo "notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=80c3b38090762e307a49a33fdcb91d38\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div";
        // line 289
        echo " class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <d";
        // line 340
        echo "iv class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/monsteriada-prestashop-clone/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie A</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/1/edit?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5f0f38dc56789793240f0f46ce8a21c\">
      <i class=\"material-icons";
        // line 358
        echo " d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
        ";
        // line 406
        echo "                                                    </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/invoices/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/credit-slips/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 436
        echo "\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/delivery-slips/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarts&amp;token=80c3b38090762e307a49a33fdcb91d38\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                           ";
        // line 466
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/categories?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/monitoring/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminAttributesGroup";
        // line 494
        echo "s&amp;token=075b2897ca24d904a815ae7e47d3cfdd\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/brands/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/attachments/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCartRules&amp;token=1c9ac115cd94a0fad0889ba44b8d0bcf\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ";
        // line 525
        echo "         <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/stocks/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customers/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customers/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                  ";
        // line 555
        echo "                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/addresses/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=91ebadfe31f9a37c60a32583137f8e54\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/monsteriada-prestashop-cl";
        // line 584
        echo "one/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=91ebadfe31f9a37c60a32583137f8e54\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customer-service/order-messages/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminReturn&amp;token=04f5d195dc1c395e79c6da75169aa7dd\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics/legacy/stats?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                    ";
        // line 614
        echo "  Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics/legacy/stats?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
         ";
        // line 650
        echo "         
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Menedż";
        // line 676
        echo "er modułów
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/themes/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/themes/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                          ";
        // line 707
        echo "  
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/themes/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/mail_theme/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/cms-pages/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/modules/positions/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Po";
        // line 733
        echo "zycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminImages&amp;token=51add0bd16b086f4563d22b0d7261bc8\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/link-widget/list?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarriers&amp;token=bc7ef24f31216f030d3e5350ee86215f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
  ";
        // line 766
        echo "                                                                  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarriers&amp;token=bc7ef24f31216f030d3e5350ee86215f\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/shipping/preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
   ";
        // line 795
        echo "                   <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/monsteriada-prestashop-clone/a";
        // line 826
        echo "dmin-dev/index.php/improve/international/localization/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/localization/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/zones/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l";
        // line 855
        echo "eveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/taxes/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/translations/settings?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"147\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=ed48d7bd20c4ee6c508933fc4a2cf9ca\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-147\" class=\"submenu panel-coll";
        // line 884
        echo "apse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=ed48d7bd20c4ee6c508933fc4a2cf9ca\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b4bc85c1527c5f58440ac2e382dbc4ad\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/preferences/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=";
        // line 919
        echo "\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/preferences/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/order-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.p";
        // line 948
        echo "hp/configure/shop/product-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/customer-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/contacts/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/seo-urls/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                              ";
        // line 978
        echo "              
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminSearchConf&amp;token=bff304bed4cfd937f3107626a578bcaf\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/system-information/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/system-information/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">";
        // line 1005
        echo " Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/performance/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/administration/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/emails/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108";
        // line 1036
        echo "\" id=\"subtab-AdminImport\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/import/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/sql-requests/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/logs/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Logi
                                </a>
                              </li>

                                                         ";
        // line 1065
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/webservice-keys/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/feature-flags/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Funkcje eksperymentalne
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">9%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:9.0909090909091%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wznów</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zakończ wprowadzanie</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
 ";
        // line 1113
        echo "     <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Menedżer modułów</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" aria-current=\"page\">Moduły</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduły          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Połącz z Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Połącz z Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.presta";
        // line 1152
        echo "shop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/uninstalled?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminPsMboUninstalledModules\" class=\"nav-link tab \" data-submenu=\"163\">
                      Odinstalowane moduły
           ";
        // line 1178
        echo "           <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/alerts?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Powiadomienia
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/updates?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Aktualizacje
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ";
        // line 1199
        echo "                                                                                                                                                                                                                                                                                                                                                                                             </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Załaduj moduł
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Połącz z Addons marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Połącz z Addons marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token";
        // line 1226
        echo "=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\xampp\\htdocs\\monsteriada-prestashop-clone/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły',
        'description': \"Oto polecane, <\\strong>kompatybilne z Twoim sklepem moduły<\\/strong>, które pomogą Ci osiągnąć Twoje cele.\",
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<script>
\$(document).ready( function () {
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const targetDiv = \$('#main-div .content-div').first()

    const divModuleManagerMessage = document.createElement(\"div\");
    divModuleManagerMessage.setAttribute(\"id\", \"module-manager-message-cdc-container\");

    divModuleManagerMessage.classList.add('module-manager-message-wrapper');
    divModuleManagerMessage.classList.add('cdc-container');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"pl\",\"iso_code\":\"pl\",\"shop_version\":\"1.7.8.11\",\"shop_url\":\"http:\\/\\/localhost\\/monsteriada-prestashop-clone\\/\",\"shop_uuid\":\"8e9e1904-55bd-4ae3-b0af-c95b56c3b1ce\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvbW9uc3RlcmlhZGEtcHJlc3Rhc2hvcC1jbG9uZS8iLCJzaG9wX3V1aWQiOiI4ZTllMTkwNC01NWJkLTRhZTMtYjBhZi1jOTViNTZjM2IxY2UifQ.3KD5jbUGguML09Zu0ypTM8fm1QzcMQUZZevg";
        // line 1264
        echo "rIsHKvk\",\"mbo_version\":\"3.2.0\",\"mbo_reset_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"user_id\":\"1\",\"admin_token\":\"plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"refresh_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/modules\\/mbo\\/me?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"installed_modules\":[{\"id\":22312,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":9131,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23835,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15250,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15251,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15252,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":15253,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15254,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15255,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":7501,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.3.0\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-de";
        echo "v\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15258,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":9144,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":39324,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":85751,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.74.8\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":49648,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.8\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22313,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":42674,\"name\":\"ps_buybuttonlite\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_buybuttonlite?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22314,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/imp";
        echo "rove\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":46347,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.3.6.3\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23864,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22315,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":24696,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23865,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":23866,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":22316,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":22317,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":24697,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure";
        echo "\\/ps_dataprivacy?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22318,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":50756,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.1\",\"config_url\":null},{\"id\":50291,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.38.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23867,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.14.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":41965,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22319,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22320,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_disabled\",\"version\":\"3.2.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23868,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":24360,\"name\":\"ps_linklist\",\"status\":\"enable";
        echo "d__mobile_enabled\",\"version\":\"5.0.5\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22321,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":39574,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":49583,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.8\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23869,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":22322,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23870,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22323,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.0\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":32577,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.3\",\"config_url\":null},{\"id\":23871,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/monsteriada-prestashop-cl";
        echo "one\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15264,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15265,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15267,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15268,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15269,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15270,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15271,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15272,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15273,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15275,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15277,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15279,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15280,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15281,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15282,\"nam";
        echo "e\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15283,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15284,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":22385,\"name\":\"welcome\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.9\",\"config_url\":null}],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_catalog_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/modules\\/addons\\/modules\\/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"theme_catalog_url\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/modules\\/addons\\/themes\\/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-10-28\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
})
</script>
<!-- end C:\\xampp\\htdocs\\monsteriada-prestashop-clone/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group grou";
        // line 1292
        echo "p-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomiń ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zaczynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php?controller=AdminDashboard&token=1b69c60f64c76f076b97f2443e01f296\"}]},{\"name\":\"product\",\"title\":\"Utw\\u00f3rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co T";
        // line 1315
        echo "woi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/sell\\/catalog\\/products\\/new?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwszy produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/monsteriada-pres";
        echo "tashop-clone\\/admin-dev\\/index.php\\/improve\\/design\\/themes\\/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u0119pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php\\/improve\\/payment\\/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php?controller=AdminCarriers&token=bc7ef24f31216f030d3e5350ee86215f\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylk";
        echo "o podstawy, ale jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n ";
        echo "       <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/monsteriada-prestashop-clone\\/admin-dev\\/index.php?controller=AdminDashboard&token=1b69c60f64c76f076b97f2443e01f296\"}]}]}, 1, \"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminWelcome&token=12dea74ca0bd4024a555372b31699c13\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-curren";
        // line 1338
        echo "t\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1355
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=aanatfc.kp%40gmail.com&amp;firstname=A&amp;lastname=P&amp;website=http%3A%2F%2Flocalhost%2Fmonsteriada-prestashop-clone%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, ż";
        // line 1401
        echo "eby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=aanatfc.kp%40gmail.com&amp;firstname=A&amp;lastname=P&amp;website=http%3A%2F%2Flocalhost%2Fmonsteriada-prestashop-clone%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col";
        // line 1441
        echo "-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1463
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1355
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1463
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ab9b5ed19338bb2680cd183e1a3bfcf857683e6a56b5b38a874664621929e196";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1730 => 1463,  1665 => 1355,  1632 => 107,  1617 => 1463,  1593 => 1441,  1551 => 1401,  1499 => 1355,  1480 => 1338,  1452 => 1315,  1427 => 1292,  1391 => 1264,  1351 => 1226,  1322 => 1199,  1299 => 1178,  1271 => 1152,  1230 => 1113,  1180 => 1065,  1149 => 1036,  1116 => 1005,  1087 => 978,  1055 => 948,  1024 => 919,  987 => 884,  956 => 855,  925 => 826,  892 => 795,  861 => 766,  826 => 733,  798 => 707,  765 => 676,  737 => 650,  699 => 614,  667 => 584,  636 => 555,  604 => 525,  571 => 494,  541 => 466,  509 => 436,  477 => 406,  427 => 358,  407 => 340,  354 => 289,  301 => 238,  257 => 196,  239 => 180,  198 => 141,  159 => 107,  130 => 80,  108 => 60,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/monsteriada-prestashop-clone/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/monsteriada-prestashop-clone/img/app_icon.png\" />

<title>Moduły • Monsteriada</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesManage\\';
    var iso_user = \\'pl\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pl\\';
    var full_cldr_language_code = \\'pl-PL\\';
    var country_iso_code = \\'PL\\';
    var _PS_VERSION_ = \\'1.7.8.11\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Złożono nowe zamówienie w Twoim sklepie.\\';
    var order_number_msg = \\'Numer zamówienia: \\';
    var total_msg = \\'Razem: \\';
    var from_msg = \\'Od: \\';
    var see_order_msg = \\'Zobacz to zamówienie\\';
    var new_customer_msg = \\'Nowy klient zarejestrował się w Twoim sklepie.\\';
    var customer_name_msg = \\'Nazwa klienta: \\';
    var new_msg = \\'Nowa wiadomość pojawiła się w Twoim sklepie.\\';
    var see_msg = \\'Przeczytaj tą wiadomość\\';
    var token = \\'58ffed6af7c200795c4f617e57c516df\\';
    var token_admin_orders = tokenAdminOrders = \\'5f06592714ea5ec7c0598207c1ffd899\\';
    var token_admin_customers = \\'fc4a6ebdec6a4c949cf20ed3aba3458f\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'91ebadfe31f9a37c60a32583137f8e54\\';
    var currentIndex = \\'index.php?controller=AdminModulesManage\\';
    var employee_token = \\'39a31911caa55d9a1dd868ca1eb320a3\\';
    var choose_language_translate = \\'Wybierz język:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/catalog/recommended?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\\';
    var admin_notification_get_link = \\'/' | raw }}{{ 'monsteriada-prestashop-clone/admin-dev/index.php/common/notifications?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/monsteriada-prestashop-clone/admin-dev/index.php/common/notifications/ack?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Aktualizacja powiodła się\\';
    var errorLogin = \\'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.\\';
    var search_product_msg = \\'Szukaj produktu\\';
  </script>

      <link href=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/monsteriada-prestashop-clone/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"styleshe' | raw }}{{ 'et\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/\";
var baseDir = \"\\\\/monsteriada-prestashop-clone\\\\/\";
var changeFormLanguageUrl = \"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\\\u0142\",\"name\":\"Z\\\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\\\u0142\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/new-theme/public/cldr.bundle.js\"></script>
<script ty' | raw }}{{ 'pe=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/monsteriada-prestashop-clone/modules/welcome/public/module.js\"></script>


  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/monsteriada-prestashop-clone/admin-dev/index.php/common/notifications?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pl adminmodulesmanage\"
  data-base-url=\"/monsteriada-prestashop-clone/admin-dev/index.php\"  data-token=\"plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/categories/new?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1c9ac115cd94a0fad0889ba44b8d0bcf\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products/new?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=cf13641b527a820596a' | raw }}{{ '6eca45eea3095\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?token=462bc9086a8e6422d770b887ec2dc7f0\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminOrders&amp;token=5f06592714ea5ec7c0598207c1ffd899\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"110\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-7Dq904InVqyHg8lhR7ULgPKTJRo\"
        data-post-link=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminQuickAccesses&token=9f5e9cfc41db7d95b08c5bf55009075c\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Moduły - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminQuickAccesses&token=9f5e9cfc41db7d95b08c5bf55009075c\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminSearch&amp;token=949cc95c86773baee54d6ca1b7645823\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_' | raw }}{{ 'search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a' | raw }}{{ ' class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class=\\'text-left\\'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\"
             href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/performance/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/monsteriada-prestashop-clone/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">' | raw }}{{ 'notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=80c3b38090762e307a49a33fdcb91d38\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div' | raw }}{{ ' class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <d' | raw }}{{ 'iv class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/monsteriada-prestashop-clone/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie A</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/1/edit?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5f0f38dc56789793240f0f46ce8a21c\">
      <i class=\"material-icons' | raw }}{{ ' d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
        ' | raw }}{{ '                                                    </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/invoices/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/credit-slips/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=' | raw }}{{ '\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/orders/delivery-slips/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarts&amp;token=80c3b38090762e307a49a33fdcb91d38\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                           ' | raw }}{{ '                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/products?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/categories?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/monitoring/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminAttributesGroup' | raw }}{{ 's&amp;token=075b2897ca24d904a815ae7e47d3cfdd\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/catalog/brands/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/attachments/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCartRules&amp;token=1c9ac115cd94a0fad0889ba44b8d0bcf\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ' | raw }}{{ '         <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/stocks/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customers/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customers/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                  ' | raw }}{{ '                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/addresses/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=91ebadfe31f9a37c60a32583137f8e54\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/monsteriada-prestashop-cl' | raw }}{{ 'one/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=91ebadfe31f9a37c60a32583137f8e54\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/sell/customer-service/order-messages/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminReturn&amp;token=04f5d195dc1c395e79c6da75169aa7dd\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics/legacy/stats?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                    ' | raw }}{{ '  Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics/legacy/stats?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/metrics?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
         ' | raw }}{{ '         
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Menedż' | raw }}{{ 'er modułów
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/themes/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/themes/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                          ' | raw }}{{ '  
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/themes/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/mail_theme/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/cms-pages/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/design/modules/positions/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Po' | raw }}{{ 'zycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminImages&amp;token=51add0bd16b086f4563d22b0d7261bc8\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/link-widget/list?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarriers&amp;token=bc7ef24f31216f030d3e5350ee86215f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
  ' | raw }}{{ '                                                                  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminCarriers&amp;token=bc7ef24f31216f030d3e5350ee86215f\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/shipping/preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
   ' | raw }}{{ '                   <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/payment/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/monsteriada-prestashop-clone/a' | raw }}{{ 'dmin-dev/index.php/improve/international/localization/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/localization/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/zones/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l' | raw }}{{ 'eveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/taxes/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/international/translations/settings?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"147\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=ed48d7bd20c4ee6c508933fc4a2cf9ca\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-147\" class=\"submenu panel-coll' | raw }}{{ 'apse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=ed48d7bd20c4ee6c508933fc4a2cf9ca\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b4bc85c1527c5f58440ac2e382dbc4ad\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/preferences/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=' | raw }}{{ '\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/preferences/preferences?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/order-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.p' | raw }}{{ 'hp/configure/shop/product-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/customer-preferences/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/contacts/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/shop/seo-urls/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                              ' | raw }}{{ '              
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminSearchConf&amp;token=bff304bed4cfd937f3107626a578bcaf\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/system-information/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/system-information/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\">' | raw }}{{ ' Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/performance/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/administration/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/emails/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108' | raw }}{{ '\" id=\"subtab-AdminImport\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/import/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/employees/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/sql-requests/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/logs/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Logi
                                </a>
                              </li>

                                                         ' | raw }}{{ '                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/webservice-keys/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/configure/advanced/feature-flags/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" class=\"link\"> Funkcje eksperymentalne
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">9%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:9.0909090909091%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wznów</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zakończ wprowadzanie</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
 ' | raw }}{{ '     <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Menedżer modułów</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" aria-current=\"page\">Moduły</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduły          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Połącz z Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Połącz z Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.presta' | raw }}{{ 'shop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/manage?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/uninstalled?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminPsMboUninstalledModules\" class=\"nav-link tab \" data-submenu=\"163\">
                      Odinstalowane moduły
           ' | raw }}{{ '           <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/alerts?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Powiadomienia
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/monsteriada-prestashop-clone/admin-dev/index.php/improve/modules/updates?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Aktualizacje
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                             </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Załaduj moduł
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Połącz z Addons marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Połącz z Addons marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/monsteriada-prestashop-clone/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token' | raw }}{{ '=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\\\xampp\\\\htdocs\\\\monsteriada-prestashop-clone/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Zalecane moduły\\',
        \\'description\\': \"Oto polecane, <\\\\strong>kompatybilne z Twoim sklepem moduły<\\\\/strong>, które pomogą Ci osiągnąć Twoje cele.\",
        \\'Close\\': \\'Zamknij\\',
      },
      recommendedModulesUrl: \\'/monsteriada-prestashop-clone/admin-dev/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<script>
\$(document).ready( function () {
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const targetDiv = \$(\\'#main-div .content-div\\').first()

    const divModuleManagerMessage = document.createElement(\"div\");
    divModuleManagerMessage.setAttribute(\"id\", \"module-manager-message-cdc-container\");

    divModuleManagerMessage.classList.add(\\'module-manager-message-wrapper\\');
    divModuleManagerMessage.classList.add(\\'cdc-container\\');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"pl\",\"iso_code\":\"pl\",\"shop_version\":\"1.7.8.11\",\"shop_url\":\"http:\\\\/\\\\/localhost\\\\/monsteriada-prestashop-clone\\\\/\",\"shop_uuid\":\"8e9e1904-55bd-4ae3-b0af-c95b56c3b1ce\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvbW9uc3RlcmlhZGEtcHJlc3Rhc2hvcC1jbG9uZS8iLCJzaG9wX3V1aWQiOiI4ZTllMTkwNC01NWJkLTRhZTMtYjBhZi1jOTViNTZjM2IxY2UifQ.3KD5jbUGguML09Zu0ypTM8fm1QzcMQUZZevg' | raw }}{{ 'rIsHKvk\",\"mbo_version\":\"3.2.0\",\"mbo_reset_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/reset\\\\/ps_mbo?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"user_id\":\"1\",\"admin_token\":\"plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"refresh_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/modules\\\\/mbo\\\\/me?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"installed_modules\":[{\"id\":22312,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/blockreassurance?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":9131,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/blockwishlist?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23835,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/contactform?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15250,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15251,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15252,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":15253,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15254,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15255,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":7501,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.3.0\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-de' | raw }}{{ 'v\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/gsitemap?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15258,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":9144,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/productcomments?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":39324,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/psgdpr?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":85751,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.74.8\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/psxmarketingwithgoogle?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":49648,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.8\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_accounts?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22313,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_banner?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":42674,\"name\":\"ps_buybuttonlite\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_buybuttonlite?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22314,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/imp' | raw }}{{ 'rove\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_categorytree?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":46347,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.3.6.3\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_checkout?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23864,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_checkpayment?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22315,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_contactinfo?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":24696,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_crossselling?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23865,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":23866,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":22316,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":22317,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_customtext?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":24697,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure' | raw }}{{ '\\\\/ps_dataprivacy?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22318,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_emailsubscription?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":50756,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.1\",\"config_url\":null},{\"id\":50291,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.38.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_facebook?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23867,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.14.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_facetedsearch?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":41965,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_faviconnotificationbo?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22319,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_featuredproducts?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22320,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_disabled\",\"version\":\"3.2.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_imageslider?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23868,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":24360,\"name\":\"ps_linklist\",\"status\":\"enable' | raw }}{{ 'd__mobile_enabled\",\"version\":\"5.0.5\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_linklist?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22321,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_mainmenu?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":39574,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":49583,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.8\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_metrics?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23869,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":22322,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_sharebuttons?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":23870,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_shoppingcart?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":22323,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.0\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_socialfollow?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":32577,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.3\",\"config_url\":null},{\"id\":23871,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\\\/monsteriada-prestashop-cl' | raw }}{{ 'one\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_wirepayment?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15264,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15265,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15267,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15268,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15269,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15270,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15271,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15272,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15273,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/statsdata?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15275,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/statsforecast?_token=88-c9KTHCqasQ_RHwHBwMQLgalmKfr9i3HWqfN_0OpE\"},{\"id\":15277,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15279,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15280,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15281,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15282,\"nam' | raw }}{{ 'e\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15283,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15284,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":22385,\"name\":\"welcome\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.9\",\"config_url\":null}],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_catalog_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/modules\\\\/addons\\\\/modules\\\\/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"theme_catalog_url\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/modules\\\\/addons\\\\/themes\\\\/catalog?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-10-28\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, \\'#module-manager-message-cdc-container\\')
  }
})
</script>
<!-- end C:\\\\xampp\\\\htdocs\\\\monsteriada-prestashop-clone/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group grou' | raw }}{{ 'p-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomiń ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\\\"onboarding-welcome\\\\\">\\\\n  <i class=\\\\\"material-icons onboarding-button-shut-down\\\\\">close<\\\\/i>\\\\n  <p class=\\\\\"welcome\\\\\">Zapraszamy do sklepu!<\\\\/p>\\\\n  <div class=\\\\\"content\\\\\">\\\\n    <p>Cze\\\\u015b\\\\u0107! Nazywam si\\\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\\\/p>\\\\n    <p>Poznasz kilka podstawowych krok\\\\u00f3w, zanim b\\\\u0119dzie mo\\\\u017cna uruchomi\\\\u0107 sklep:\\\\n    Utworzysz sw\\\\u00f3j pierwszy produkt, dostosujesz sw\\\\u00f3j sklep, skonfigurujesz wysy\\\\u0142k\\\\u0119 i p\\\\u0142atno\\\\u015bci...<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"started\\\\\">\\\\n    <p>Zaczynajmy!<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"buttons\\\\\">\\\\n    <button class=\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\">Po\\\\u017aniej<\\\\/button>\\\\n    <button class=\\\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\\\">Ropocznij<\\\\/button>\\\\n  <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php?controller=AdminDashboard&token=1b69c60f64c76f076b97f2443e01f296\"}]},{\"name\":\"product\",\"title\":\"Utw\\\\u00f3rz sw\\\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\\\u0107? Pomy\\\\u015bl co T' | raw }}{{ 'woi klienci chcieliby o nim wiedzie\\\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\\\u0119, mo\\\\u017cesz je p\\\\u00f3\\\\u017aniej edytowa\\\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\\\u0105 nazw\\\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\\\u0142nij niezb\\\\u0119dne informacje w tej karcie. Pozosta\\\\u0142e karty s\\\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\\\u0119cej zdj\\\\u0119\\\\u0107, dzi\\\\u0119ki temu produkt wygl\\\\u0105da kusz\\\\u0105co!\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\\\u0107?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\\\u0142a\\\\u015bnie zosta\\\\u0142 utworzony pierwszy produkt. Wygl\\\\u0105da dobrze, prawda?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\\\u0142asn\\\\u0105 to\\\\u017csamo\\\\u015b\\\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\\\u0105da\\\\u0107 tw\\\\u00f3j sklep? Co zrobi\\\\u0107 aby by\\\\u0142 wyj\\\\u0105tkowym?\",\"2\":\"Dostosuj sw\\\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\\\u0119cie jest aby doda\\\\u0107 tutaj w\\\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\\\/monsteriada-pres' | raw }}{{ 'tashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\\\u015bli chcesz co\\\\u015b naprawd\\\\u0119 specjalnego, obejrzyj ten katalog szablon\\\\u00f3w!\",\"page\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\\\u00f3j sklep do dokonywania p\\\\u0142atno\\\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\\\u00f3b klienci maj\\\\u0105 dokona\\\\u0107 p\\\\u0142atno\\\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\\\u0142atno\\\\u015bci s\\\\u0105 ju\\\\u017c dost\\\\u0119pne dla Twoich klient\\\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=plnHtHsjtsuAZwW-7Dq904InVqyHg8lhR7ULgPKTJRo\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\\\u0105 metody wysy\\\\u0142ki dost\\\\u0119pne dzi\\\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php?controller=AdminCarriers&token=bc7ef24f31216f030d3e5350ee86215f\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\\\"onboarding-welcome\\\\\" class=\\\\\"modal-body\\\\\">\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <button class=\\\\\"onboarding-button-next pull-right close\\\\\" type=\\\\\"button\\\\\">&times;<\\\\/button>\\\\n        <h2 class=\\\\\"text-center text-md-center\\\\\">Dodatkowo dla Ciebie!<\\\\/h2>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <p class=\\\\\"text-center text-md-center\\\\\">\\\\n          Widzieli\\\\u015bcie tylk' | raw }}{{ 'o podstawy, ale jest o wiele wi\\\\u0119cej do poznania.<br \\\\/>\\\\n          Oto zasoby kt\\\\u00f3re mog\\\\u0105 pom\\\\u00f3c wi\\\\u0119cej:\\\\n        <\\\\/p>\\\\n        <div class=\\\\\"container-fluid\\\\\">\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"starter-guide\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Poradnik dla pocz\\\\u0105tkuj\\\\u0105cych<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"forum\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Forum angielskie<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"training\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Trening<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"video-tutorial\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Poradnik wideo<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"modal-footer\\\\\">\\\\n        <div class=\\\\\"col-12\\\\\">\\\\n            <div class=\\\\\"text-center text-md-center\\\\\">\\\\n                <button class=\\\\\"btn btn-primary onboarding-button-next\\\\\">Jestem gotowy<\\\\/button>\\\\n            <\\\\/div>\\\\n ' | raw }}{{ '       <\\\\/div>\\\\n    <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/monsteriada-prestashop-clone\\\\/admin-dev\\\\/index.php?controller=AdminDashboard&token=1b69c60f64c76f076b97f2443e01f296\"}]}]}, 1, \"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminWelcome&token=12dea74ca0bd4024a555372b31699c13\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-curren' | raw }}{{ 't\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/monsteriada-prestashop-clone/admin-dev/index.php?controller=AdminDashboard&amp;token=1b69c60f64c76f076b97f2443e01f296\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=aanatfc.kp%40gmail.com&amp;firstname=A&amp;lastname=P&amp;website=http%3A%2F%2Flocalhost%2Fmonsteriada-prestashop-clone%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/monsteriada-prestashop-clone/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, ż' | raw }}{{ 'eby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=aanatfc.kp%40gmail.com&amp;firstname=A&amp;lastname=P&amp;website=http%3A%2F%2Flocalhost%2Fmonsteriada-prestashop-clone%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col' | raw }}{{ '-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__ab9b5ed19338bb2680cd183e1a3bfcf857683e6a56b5b38a874664621929e196", "");
    }
}
