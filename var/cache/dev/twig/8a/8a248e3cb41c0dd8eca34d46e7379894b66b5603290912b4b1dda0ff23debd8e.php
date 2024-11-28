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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig */
class __TwigTemplate_07df306183b606691ae3c6456168375bb78bad21ba29ffa8ada9218d5922e7b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brands", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "name", []), 'row');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "short_description", []), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "description", []), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), "logo", []), 'row');
        echo "
      ";
        // line 40
        if ((array_key_exists("logoImage", $context) &&  !(null === ($context["logoImage"] ?? $this->getContext($context, "logoImage"))))) {
            // line 41
            echo "        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 44
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 44)->display($context);
            // line 45
            echo "          </div>
        </div>
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'widget');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? $this->getContext($context, "manufacturerForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 61,  108 => 57,  102 => 54,  98 => 53,  91 => 49,  88 => 48,  83 => 45,  81 => 44,  76 => 41,  74 => 40,  70 => 39,  66 => 38,  62 => 37,  58 => 36,  51 => 32,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% form_theme manufacturerForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{{ form_start(manufacturerForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    {{ 'Brands'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_row(manufacturerForm.name) }}
      {{ form_row(manufacturerForm.short_description) }}
      {{ form_row(manufacturerForm.description) }}
      {{ form_row(manufacturerForm.logo) }}
      {% if logoImage is defined and logoImage is not null %}
        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {% include '@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig' %}
          </div>
        </div>
      {% endif %}

      {{ form_widget(manufacturerForm) }}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_manufacturers_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(manufacturerForm) }}
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", "C:\\xampp\\htdocs\\monsteriada-prestashop-clone\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\form.html.twig");
    }
}
