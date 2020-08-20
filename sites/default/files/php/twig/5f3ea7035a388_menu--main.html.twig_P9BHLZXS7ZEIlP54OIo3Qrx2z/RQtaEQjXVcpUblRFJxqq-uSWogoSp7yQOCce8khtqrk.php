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

/* themes/custom/legalcare/templates/navigation/menu--main.html.twig */
class __TwigTemplate_c8977fab50f52f5cc8f40bed82426f4bfeec1aaed6e29c495ea72f1c84ddced4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 39, "for" => 45, "set" => 47];
        $filters = ["escape" => 34, "join" => 61];
        $functions = ["drupal_block" => 34, "link" => 65];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join'],
                ['drupal_block', 'link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        // line 79
        echo "
\t  ";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  
  <nav class=\"navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">
\t      ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("system_branding_block", ["label" => "Branding", "use_site_name" => false]), "html", null, true);
            echo "
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"oi oi-menu\"></span>
\t      </button>
        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
  ";
            // line 39
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "      <ul class=\"navbar-nav ml-auto\">
    ";
                } else {
                    // line 43
                    echo "      <ul class=\"navbar-nav ml-auto dropdown-menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["classes"] = [0 => ((                    // line 48
($context["menu_level"] ?? null)) ? ("dropdown-item") : ("nav-item")), 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 50
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 4 => (($this->getAttribute(                    // line 52
$context["item"], "below", [])) ? ("dropdown") : (""))];
                    // line 55
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 57
                    $context["link_classes"] = [0 => (( !                    // line 58
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), 1 => (($this->getAttribute(                    // line 59
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 2 => (($this->getAttribute(                    // line 60
$context["item"], "below", [])) ? ("dropdown-toggle") : ("")), 3 => (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 61
$context["item"], "url", []), "getOption", [0 => "attributes"], "method"), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "attributes"], "method"), "class", [])), " ")) : (""))];
                    // line 64
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 65
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null), "data-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true);
                        echo "
          ";
                        // line 66
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    } else {
                        // line 68
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
        ";
                    }
                    // line 70
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "    ";
                // line 73
                echo "    </ul>
  </div>
</div>
</nav>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  164 => 72,  157 => 70,  151 => 68,  146 => 66,  141 => 65,  138 => 64,  136 => 61,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  127 => 55,  125 => 52,  124 => 51,  123 => 50,  122 => 49,  121 => 48,  120 => 47,  118 => 46,  113 => 45,  109 => 43,  105 => 41,  102 => 40,  100 => 39,  92 => 34,  87 => 31,  84 => 30,  70 => 29,  65 => 79,  60 => 27,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/navigation/menu--main.html.twig", "/app/themes/custom/legalcare/templates/navigation/menu--main.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
