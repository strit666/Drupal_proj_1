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

/* themes/corporate_lite/templates/node--loja--teaser.html.twig */
class __TwigTemplate_4d7437e6df68903f56d786293afd1678d8d45d36d72a980ad57d020c00a39e21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 70, "block" => 85, "if" => 91, "trans" => 101];
        $filters = ["clean_class" => 72, "escape" => 80];
        $functions = ["attach_library" => 80];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("corporate_lite/node"), "html", null, true);
        echo "
<article";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"node__container\">
  <h1>Isto +e um teste</h1>
    ";
        // line 85
        $this->displayBlock('node_side', $context, $blocks);
        // line 87
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
      <header class=\"node__header\">
        ";
        // line 89
        $this->displayBlock('meta_area', $context, $blocks);
        // line 112
        echo "      </header>
      ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "    </div>
  </div>
</article>
";
    }

    // line 85
    public function block_node_side($context, array $blocks = [])
    {
        // line 86
        echo "    ";
    }

    // line 89
    public function block_meta_area($context, array $blocks = [])
    {
        // line 90
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 91
        if ( !($context["page"] ?? null)) {
            // line 92
            echo "            <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
              <a href=\"";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
            </h2>
          ";
        }
        // line 96
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 97
        if (($context["display_submitted"] ?? null)) {
            // line 98
            echo "            <div class=\"node__meta\">
              ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
              <span";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method")), "html", null, true);
            echo ">
                ";
            // line 101
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on 
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 102
($context["author_name"] ?? null), "@date" =>             // line 104
($context["date"] ?? null), ));
            // line 107
            echo "              </span>
              ";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 111
        echo "        ";
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        // line 114
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/corporate_lite/templates/node--loja--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 114,  169 => 113,  165 => 111,  159 => 108,  156 => 107,  154 => 104,  153 => 102,  149 => 101,  145 => 100,  141 => 99,  138 => 98,  136 => 97,  131 => 96,  123 => 93,  118 => 92,  116 => 91,  111 => 90,  108 => 89,  104 => 86,  101 => 85,  94 => 116,  92 => 113,  89 => 112,  87 => 89,  81 => 87,  79 => 85,  73 => 82,  69 => 81,  65 => 80,  63 => 76,  62 => 75,  61 => 74,  60 => 73,  59 => 72,  58 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Corporate Lite's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
{{ attach_library('classy/node') }}
{{ attach_library('corporate_lite/node') }}
<article{{ attributes.addClass(classes) }}>
  <div class=\"node__container\">
  <h1>Isto +e um teste</h1>
    {% block node_side %}
    {% endblock %}
    <div{{ content_attributes.addClass('node__main-content', 'clearfix') }}>
      <header class=\"node__header\">
        {% block meta_area %}
          {{ title_prefix }}
          {% if not page %}
            <h2{{ title_attributes.addClass('node__title') }}>
              <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
            </h2>
          {% endif %}
          {{ title_suffix }}
          {% if display_submitted %}
            <div class=\"node__meta\">
              {{ author_picture }}
              <span{{ author_attributes.addClass('node__submitted-info') }}>
                {% trans %}
                  <span class=\"node__submitted-info-text\">By</span> {{ author_name }} on 
                  <span class=\"node__submitted-date\">
                    {{ date }}
                  </span>
                {% endtrans %}
              </span>
              {{ metadata }}
            </div>
          {% endif %}
        {% endblock %}
      </header>
      {% block content %}
        {{ content }}
      {% endblock %}
    </div>
  </div>
</article>
", "themes/corporate_lite/templates/node--loja--teaser.html.twig", "C:\\Users\\Miguel\\Sites\\devdesktop\\drupal-8.9.1\\themes\\corporate_lite\\templates\\node--loja--teaser.html.twig");
    }
}
