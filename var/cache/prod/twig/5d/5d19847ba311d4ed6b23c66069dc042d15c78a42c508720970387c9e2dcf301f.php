<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c3d3fc525b160aad88ffa7281a1018d212c6b309a762520d9a19cecbca03756a */
class __TwigTemplate_935ebb9347e62efac20e2d3d9d3636281142b130ffbd1bc79ba396288a3b00f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Notifications des modules • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesNotifications';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '965b10a36c3a2f40fd3e9c09b74f0347';
    var currentIndex = 'index.php?controller=AdminModulesNotifications';
    var employee_token = '219ec5644e34760120b73f66daf21214';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/manage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4';
    var admin_notification_get_link = '/prestashop/admin2163aupmxfmd3sz1o8k/index.php/common/notifications?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin2163aupmxfmd3sz1o8k/index.php/common/notificat";
        // line 40
        echo "ions/ack?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var ";
        // line 69
        echo "baseAdminDir = \"\\/prestashop\\/admin2163aupmxfmd3sz1o8k\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/cldr.bundle.js\"></script>";
        // line 86
        echo "
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin2163aupmxfmd3sz1o8k/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php?controller=AdminGamification&token=6d8876a3e0fd4427ef6a6ce5e97ab5d0\";
            var current_id_tab = 41;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin2163aupmxfmd3sz1o8k/index.php/common/notifications?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUST";
        // line 111
        echo "OMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 124
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesnotifications\"
  data-base-url=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php\"  data-token=\"kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/pseditionbasic/homepage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders?token=4c3bb7206fee3d42b6d413d3dff29642\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8164cb268838030cbd7cfd5c4bbdd69f\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/manage?token=4c3bb7206fee3d42b6d413d3dff29642\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3dd0fcd419570998c05e5";
        // line 158
        echo "01e99491863\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/products-v2/create?token=4c3bb7206fee3d42b6d413d3dff29642\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/categories/new?token=4c3bb7206fee3d42b6d413d3dff29642\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"100\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/alerts?-BDVZNNIdqdB03MB-042Ien4\"
        data-post-link=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminQuickAccesses&token=db3df7a7947403d146880a739120c8fb\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Alertes - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminQuickAccesses&token=db3df7a7947403d146880a739120c8fb\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin2163aupmxfmd3sz1";
        // line 197
        echo "o8k/index.php?controller=AdminSearch&amp;token=232462d4f6920f98888d83f8fff0ce42\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-i";
        // line 214
        echo "tem=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders?token=4c3bb7206fee3d42b6d413d3dff29642\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8164cb268838030cbd7cfd5c4bbdd69f\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/manage?token=4c3bb7206fee3d42b6d413d3dff29642\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3dd0fcd419570998c05e501e99491863\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a cl";
        // line 250
        echo "ass=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/products-v2/create?token=4c3bb7206fee3d42b6d413d3dff29642\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/categories/new?token=4c3bb7206fee3d42b6d413d3dff29642\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"75\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/alerts?-BDVZNNIdqdB03MB-042Ien4\"
      data-post-link=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminQuickAccesses&token=db3df7a7947403d146880a739120c8fb\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Alertes - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminQuickAccesses&token=db3df7a7947403d146880a739120c8fb\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-cont";
        // line 294
        echo "ainer\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/i";
        // line 346
        echo "ndex.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=723b2083f834b38859c7225c78e8d130\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
        
        <div class=\"component\" id=\"header-emp";
        // line 393
        echo "loyee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Adantor\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Adantor</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/employees/1/edit?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminLogin&amp;logout=1&amp;token=a24b6c1fb9c7afbf0d4b17265cb7b0ee\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/employees/toggle-navigation?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i ";
        // line 432
        echo "class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/pseditionbasic/homepage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/pseditionbasic/homepage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminDashboard&amp;token=62c04426df4782aa57f2627d6a6827b7\" class=\"link\">
               ";
        // line 471
        echo "       <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                 ";
        // line 509
        echo "               <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders/invoices/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders/credit-slips/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/orders/delivery-slips/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                 ";
        // line 539
        echo "                           
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCarts&amp;token=723b2083f834b38859c7225c78e8d130\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/products?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/products?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Produits
                                </a>
                              </li>

                 ";
        // line 570
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/categories?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/catalog/monitoring/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminAttributesGroups&amp;token=8fb9cc6bf1c879c98a7fbf977c5b6215\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin21";
        // line 598
        echo "63aupmxfmd3sz1o8k/index.php/sell/catalog/brands/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/attachments/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCartRules&amp;token=3dd0fcd419570998c05e501e99491863\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/stocks/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                    ";
        // line 628
        echo "          
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/customers/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/customers/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/sell/addresses/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Adresses
                                </a>
                              </li>

                               ";
        // line 659
        echo "                                                                                                     </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCustomerThreads&amp;token=9e2a790ebf1a1dd75b03660b1a4799d4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCustomerThreads&amp;token=9e2a790ebf1a1dd75b03660b1a4799d4\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin2";
        // line 688
        echo "163aupmxfmd3sz1o8k/index.php/sell/customer-service/order-messages/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminReturn&amp;token=0ee9f6e5295e24fb6164ac8097d7eb08\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/metrics/legacy/stats?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                              ";
        // line 719
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/metrics/legacy/stats?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/metrics?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/mbo/modules/catalog/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      M";
        // line 753
        echo "odules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/mbo/modules/catalog/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/manage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has";
        // line 782
        echo "_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/improve/design/themes?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/improve/design/themes?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/mbo/themes/catalog/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
";
        // line 811
        echo "                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=5de91e13013f875e6d62b631c7f8667a\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/design/mail_theme/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/design/cms-pages/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/design/modules/positions/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNI";
        // line 837
        echo "dqdB03MB-042Ien4\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminImages&amp;token=a54df0ee31ac81d16fc9cf61bc86e2fe\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/link-widget/list?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCarriers&amp;token=7b41296cd162190f7d20803cbd631382\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"materia";
        // line 869
        echo "l-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminCarriers&amp;token=7b41296cd162190f7d20803cbd631382\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/shipping/preferences/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/payment/payment_methods?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-pay";
        // line 898
        echo "ment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/payment/payment_methods?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/payment/preferences?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestasho";
        // line 930
        echo "p/admin2163aupmxfmd3sz1o8k/index.php/improve/international/localization/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/international/localization/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/international/zones/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                           ";
        // line 959
        echo "   <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/international/taxes/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/international/translations/settings?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=65884deb1a5ade9dc1cc6af6a7452293\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"sub";
        // line 988
        echo "menu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=65884deb1a5ade9dc1cc6af6a7452293\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminPsfacebookModule&amp;token=278154275de71e7a2c50aa1ed77f2fb6\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/pseditionbasic/settings?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                    ";
        // line 1023
        echo "  <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/preferences/preferences?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/preferences/preferences?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Paramètres généraux
                                </a>
   ";
        // line 1053
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/order-preferences/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/product-preferences/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/customer-preferences/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
     ";
        // line 1083
        echo "                           <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/contacts/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/shop/seo-urls/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminSearchConf&amp;token=43ed5848861d37dcaf186421353fbe09\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/system-information/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settin";
        // line 1111
        echo "gs_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/system-information/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/performance/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/administr";
        // line 1140
        echo "ation/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/emails/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/import/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/employees/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 1171
        echo "\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/sql-requests/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/logs/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/webservice-keys/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/feature-flags/?_to";
        // line 1196
        echo "ken=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/configure/advanced/security/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminPsAssistantSettings&amp;token=48bced4e74501b7d4e8aa0f0c44edd97\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" da";
        // line 1229
        echo "ta-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin2163aupmxfmd3sz1o8k/index.php?controller=AdminKlaviyoPsConfig&amp;token=1c8cb18841afc3ee12548e9b80e8a1cf\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/alerts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" aria-current=\"page\">Alertes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Notifications des modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_up";
        // line 1278
        echo "load</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/manage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
           ";
        // line 1305
        echo "             <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/alerts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab active current\" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/improve/modules/updates?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ";
        // line 1325
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage";
        // line 1362
        echo "

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"tg\",\"shop_version\":\"8.1.0\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/\",\"shop_uuid\":\"b82a2306-d0bf-4538-a26f-5e68e7f060ff\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC8iLCJzaG9wX3V1aWQiOiJiODJhMjMwNi1kMGJmLTQ1MzgtYTI2Zi01ZTY4ZTdmMDYwZmYifQ.0JZrj_D-DgCfmhSCtCArFXm5fRquVMHhKvmQnuyTtTQ\",\"mbo_version\":\"4.11.3\",\"mbo_reset_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\",\"user_id\":\"1\",\"admin_token\":\"kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\",\"refresh_url\":\"http:\\/\\/localhost\\/prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php?controller=apiSecurityPsMbo&token=5ff339ed13ac52f2f1cb4c1cc28f998f\",\"installed_modules\":[{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_";
        // line 1364
        echo "url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"mbeshipping\",\"status\":\"uninstalled\",\"version\":\"2.1.8\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mbeshipping?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\/\\/localh";
        echo "ost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorypro";
        echo "ducts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/conf";
        echo "igure\\/ps_customtext?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.15\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.4.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.12\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0";
        echo ",\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_";
        echo "url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_themecu";
        echo "sto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\";
        echo "/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null}],\"upgradable_modules\":[],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/improve\\/modules\\/updates?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\",\"module_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\",\"theme_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/admin2163aupmxfmd3sz1o8k\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-07-09\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesNotifications\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/mbo/modules/catalo";
        // line 1369
        echo "g/cdc_error?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1377
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin2163aupmxfmd3sz1o8k/index.php/modules/pseditionbasic/homepage?_token=kDWzDoK00wX59Mh3zGH-BDVZNNIdqdB03MB-042Ien4\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1411
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 124
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1377
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1411
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c3d3fc525b160aad88ffa7281a1018d212c6b309a762520d9a19cecbca03756a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1605 => 1411,  1584 => 1377,  1573 => 124,  1564 => 1411,  1524 => 1377,  1514 => 1369,  1500 => 1364,  1496 => 1362,  1457 => 1325,  1435 => 1305,  1406 => 1278,  1355 => 1229,  1320 => 1196,  1293 => 1171,  1260 => 1140,  1229 => 1111,  1199 => 1083,  1167 => 1053,  1135 => 1023,  1098 => 988,  1067 => 959,  1036 => 930,  1002 => 898,  971 => 869,  937 => 837,  909 => 811,  878 => 782,  847 => 753,  811 => 719,  778 => 688,  747 => 659,  714 => 628,  682 => 598,  652 => 570,  619 => 539,  587 => 509,  547 => 471,  506 => 432,  465 => 393,  416 => 346,  362 => 294,  316 => 250,  278 => 214,  259 => 197,  218 => 158,  179 => 124,  164 => 111,  137 => 86,  118 => 69,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c3d3fc525b160aad88ffa7281a1018d212c6b309a762520d9a19cecbca03756a", "");
    }
}
