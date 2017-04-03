<?php

/* themes/contrib/breeze/templates/page.html.twig */
class __TwigTemplate_588a65d8c424edd9dc531f083992b25576a541282e35138e90d32305ca220849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 66, "set" => 78);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">
\t<div class=\"container\">
  \t<header role=\"banner\" class=\"section-header\">
  \t\t<div class=\"row\">
\t\t  \t<div class=\"logo col-md-6 col-sm-6 col-xs-12\">
\t\t    \t";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-right col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</div>
  \t</header>
  \t<div class=\"navigation-wrapper\">
\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 67
            echo "\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 71
            echo "  \t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
  \t";
        }
        // line 73
        echo "
\t\t";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 75
            echo "  \t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
  \t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        $context["sidebarClass"] = "col-md-12";
        // line 79
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 80
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 81
            echo "\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 83
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 84
            echo "\t\t\t";
        }
        // line 85
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 86
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 87
                echo "\t\t\t  \t";
                $context["sidebarClass"] = "col-md-4 col-sm-4";
                // line 88
                echo "\t\t\t\t";
            }
            // line 89
            echo "\t\t\t";
        }
        // line 90
        echo "
  \t<main role=\"main\">
\t  \t<div class=\"row\">

\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 95
        echo "
\t    \t<div class=\"layout-content ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebarClass"]) ? $context["sidebarClass"] : null), "html", null, true));
        echo "\">
\t      \t";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t    \t</div>";
        // line 99
        echo "
\t    \t";
        // line 100
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 101
            echo "\t      \t<aside class=\"layout-sidebar-first col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 105
        echo "
\t    \t";
        // line 106
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 107
            echo "\t      \t<aside class=\"layout-sidebar-second col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 111
        echo "\t\t\t</div>
  \t</main>
\t\t<div class=\"content-bottom row\">
\t\t\t<div class=\"content-bottom-1 col-md-4 col-sm-4\">";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom1", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-2 col-md-4 col-sm-4\">";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom2", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-3 col-md-4 col-sm-4\">";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom3", array()), "html", null, true));
        echo "</div>
\t\t</div>

\t\t<footer role=\"contentinfo\" class=\"footer\">
\t\t\t<div class=\"section-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 122
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array())) {
            // line 123
            echo "\t\t    \t\t<div class=\"footer_one col-md-4 col-sm-4\">
\t\t      \t\t";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 127
        echo "\t\t      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) {
            // line 128
            echo "\t\t\t\t\t\t<div class=\"footer_second col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) {
            // line 133
            echo "\t\t\t\t\t\t<div class=\"footer_third col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/breeze/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 137,  236 => 134,  233 => 133,  230 => 132,  224 => 129,  221 => 128,  218 => 127,  212 => 124,  209 => 123,  207 => 122,  198 => 116,  194 => 115,  190 => 114,  185 => 111,  179 => 108,  176 => 107,  174 => 106,  171 => 105,  165 => 102,  162 => 101,  160 => 100,  157 => 99,  153 => 97,  149 => 96,  146 => 95,  140 => 90,  137 => 89,  134 => 88,  131 => 87,  128 => 86,  125 => 85,  122 => 84,  119 => 83,  116 => 82,  113 => 81,  110 => 80,  107 => 79,  105 => 78,  102 => 77,  96 => 75,  94 => 74,  91 => 73,  85 => 71,  83 => 70,  80 => 69,  74 => 67,  72 => 66,  65 => 62,  56 => 56,  50 => 53,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">
\t<div class=\"container\">
  \t<header role=\"banner\" class=\"section-header\">
  \t\t<div class=\"row\">
\t\t  \t<div class=\"logo col-md-6 col-sm-6 col-xs-12\">
\t\t    \t{{ page.header }}
\t\t\t\t</div>
\t\t\t\t<div class=\"header-right col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t{{ page.header_right }}
\t\t\t\t</div>
\t\t\t</div>
  \t</header>
  \t<div class=\"navigation-wrapper\">
\t\t\t<div class=\"navigation\">
\t\t\t\t{{ page.navigation }}
\t\t\t</div>
\t\t</div>

\t\t{% if page.breadcrumb %}
\t\t\t{{ page.breadcrumb }}
\t\t{% endif %}

\t\t{% if page.highlighted %}
  \t\t{{ page.highlighted }}
  \t{% endif %}

\t\t{% if page.help %}
  \t\t{{ page.help }}
  \t{% endif %}

\t\t{% set sidebarClass = 'col-md-12' %}
\t\t\t{% if page.sidebar_first %}
\t\t\t\t{% set sidebarClass = 'col-md-8 col-sm-8' %}
\t\t\t{% endif %}
\t\t\t{% if page.sidebar_second %}
\t\t\t\t{% set sidebarClass = 'col-md-8 col-sm-8' %}
\t\t\t{% endif %}
\t\t\t{% if page.sidebar_second %}
\t\t\t\t{% if page.sidebar_first %}
\t\t\t  \t{% set sidebarClass = 'col-md-4 col-sm-4' %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}

  \t<main role=\"main\">
\t  \t<div class=\"row\">

\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

\t    \t<div class=\"layout-content {{ sidebarClass }}\">
\t      \t{{ page.content }}
\t    \t</div>{# /.layout-content #}

\t    \t{% if page.sidebar_first %}
\t      \t<aside class=\"layout-sidebar-first col-md-4 col-sm-4\" role=\"complementary\">
\t        \t{{ page.sidebar_first }}
\t      \t</aside>
\t    \t{% endif %}

\t    \t{% if page.sidebar_second %}
\t      \t<aside class=\"layout-sidebar-second col-md-4 col-sm-4\" role=\"complementary\">
\t        \t{{ page.sidebar_second }}
\t      \t</aside>
\t    \t{% endif %}
\t\t\t</div>
  \t</main>
\t\t<div class=\"content-bottom row\">
\t\t\t<div class=\"content-bottom-1 col-md-4 col-sm-4\">{{ page.content_bottom1 }}</div>
\t\t\t<div class=\"content-bottom-2 col-md-4 col-sm-4\">{{ page.content_bottom2 }}</div>
\t\t\t<div class=\"content-bottom-3 col-md-4 col-sm-4\">{{ page.content_bottom3 }}</div>
\t\t</div>

\t\t<footer role=\"contentinfo\" class=\"footer\">
\t\t\t<div class=\"section-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if page.footer1 %}
\t\t    \t\t<div class=\"footer_one col-md-4 col-sm-4\">
\t\t      \t\t{{ page.footer1 }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t      {% if page.footer2 %}
\t\t\t\t\t\t<div class=\"footer_second col-md-4 col-sm-4\">
\t\t\t\t\t\t\t{{ page.footer2 }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.footer3 %}
\t\t\t\t\t\t<div class=\"footer_third col-md-4 col-sm-4\">
\t\t\t\t\t\t\t{{ page.footer3 }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
</div>{# /.layout-container #}
", "themes/contrib/breeze/templates/page.html.twig", "/Users/raffaelechiocca/PhpstormProjects/ivs/web/themes/contrib/breeze/templates/page.html.twig");
    }
}
