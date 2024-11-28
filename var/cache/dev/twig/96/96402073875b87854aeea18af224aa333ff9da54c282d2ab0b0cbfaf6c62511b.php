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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig */
class __TwigTemplate_965cc7de1f8eebf47b7e0b1c93945ad522a7cd9f6434bb6e7f47ebb037e81b98 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableManufacturer"] ?? $this->getContext($context, "viewableManufacturer")), "manufacturerProducts", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableManufacturer"] ?? $this->getContext($context, "viewableManufacturer")), "manufacturerProducts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo "</a>

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                  >
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "delete", "id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                          data-form-confirm-message=\"";
            // line 51
            echo twig_escape_filter($this->env, sprintf("%s%s?", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete item #", [], "Admin.International.Feature"), $this->getAttribute($context["product"], "id", [])), "html", null, true);
            echo "\"
                  >
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          ";
            // line 61
            if ( !twig_test_empty($this->getAttribute($context["product"], "combinations", []))) {
                // line 62
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MPN", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 70
                if (( !($context["isAllShopContext"] ?? $this->getContext($context, "isAllShopContext")) && ($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled")))) {
                    // line 71
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 73
                echo "                </tr>
              </thead>
              <tbody>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "combinations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 77
                    echo "                  <tr>
                    <td>";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "attributes", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "reference", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "ean13", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "upc", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "mpn", []), "html", null, true);
                    echo "</td>
                    ";
                    // line 83
                    if (( !($context["isAllShopContext"] ?? $this->getContext($context, "isAllShopContext")) && ($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled")))) {
                        // line 84
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "quantity", []), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 86
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "              </tbody>
            </table>
          ";
            } else {
                // line 91
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MPN:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 98
                if (($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled"))) {
                    // line 99
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qty:", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 101
                echo "                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ean13", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "upc", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "mpn", []), "html", null, true);
                echo "</td>
                  ";
                // line 109
                if (($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled"))) {
                    // line 110
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 112
                echo "                </tr>
              </tbody>
            </table>
          ";
            }
            // line 116
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 119,  257 => 116,  251 => 112,  245 => 110,  243 => 109,  239 => 108,  235 => 107,  231 => 106,  227 => 105,  221 => 101,  215 => 99,  213 => 98,  209 => 97,  205 => 96,  201 => 95,  197 => 94,  192 => 91,  187 => 88,  180 => 86,  174 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  149 => 77,  145 => 76,  140 => 73,  134 => 71,  132 => 70,  128 => 69,  124 => 68,  120 => 67,  116 => 66,  112 => 65,  107 => 62,  105 => 61,  94 => 53,  89 => 51,  85 => 50,  78 => 46,  73 => 44,  59 => 35,  55 => 33,  51 => 32,  45 => 29,  41 => 28,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Products'|trans({}, 'Admin.Global') }}
    ({{ viewableManufacturer.manufacturerProducts|length }})
  </h3>
  <div class=\"card-body\">
    {% for product in viewableManufacturer.manufacturerProducts %}
      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">{{ product.name }}</a>

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"{{ path('admin_product_form', {'id': product.id}) }}\"
                  >
                    {{ 'Edit'|trans({}, 'Admin.Actions') }}
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"{{ path('admin_product_unit_action', {'action': 'delete', 'id': product.id}) }}\"
                          data-form-confirm-message=\"{{ '%s%s?'|format('Delete item #'|trans({}, 'Admin.International.Feature'), product.id) }}\"
                  >
                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          {% if product.combinations is not empty %}
            <table class=\"table\">
              <thead>
                <tr>
                  <th>{{ 'Attribute name'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'EAN13'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'UPC'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'MPN'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% if not isAllShopContext and isStockManagementEnabled %}
                    <th>{{ 'Available quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% endif %}
                </tr>
              </thead>
              <tbody>
                {% for combination in product.combinations %}
                  <tr>
                    <td>{{ combination.attributes }}</td>
                    <td>{{ combination.reference }}</td>
                    <td>{{ combination.ean13 }}</td>
                    <td>{{ combination.upc }}</td>
                    <td>{{ combination.mpn }}</td>
                    {% if not isAllShopContext and isStockManagementEnabled %}
                      <td>{{ combination.quantity }}</td>
                    {% endif %}
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          {% else %}
            <table class=\"table\">
              <thead>
                <tr>
                  <th>{{ 'Ref:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'EAN13:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'UPC:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'MPN:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% if isStockManagementEnabled %}
                    <th>{{ 'Qty:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% endif %}
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ product.reference }}</td>
                  <td>{{ product.ean13 }}</td>
                  <td>{{  product.upc }}</td>
                  <td>{{  product.mpn }}</td>
                  {% if isStockManagementEnabled %}
                    <td>{{ product.quantity }}</td>
                  {% endif %}
                </tr>
              </tbody>
            </table>
          {% endif %}
        </div>
      </div>
    {% endfor %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig", "C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\View\\products.html.twig");
    }
}
