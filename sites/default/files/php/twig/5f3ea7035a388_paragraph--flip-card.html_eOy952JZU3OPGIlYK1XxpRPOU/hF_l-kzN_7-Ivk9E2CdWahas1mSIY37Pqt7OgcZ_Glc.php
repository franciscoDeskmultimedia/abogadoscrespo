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

/* themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--flip-card.html.twig */
class __TwigTemplate_7a828c9c675ff11ed7cc36bf4d91dc2856c998f0e5427b7c9943d7ad2eb71ff5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 43, "block" => 52, "if" => 63];
        $filters = ["clean_class" => 45, "escape" => 59, "trim" => 62, "striptags" => 62, "render" => 62];
        $functions = ["file_url" => 51];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
                ['file_url']
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
        // line 41
        echo "
";
        // line 43
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 47
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 50
        echo "
";
        // line 51
        $context["BackgroundImage"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_imagen_de_fondo", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 53
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        // line 54
        echo "
    <div class=\"col-lg-4 col-sm-6\">
    \t<div class=\"block-2 ftco-animate flipcard\">
\t    \t<div class=\"flipper\">
\t\t\t\t";
        // line 59
        echo "\t        \t<div class=\"front no-flip\" style=\"background-image: url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["BackgroundImage"] ?? null)), "html", null, true);
        echo ");\">
\t            \t<div class=\"box\">
\t\t\t\t\t
\t                <h2>";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_imagen_de_fondo", []), "#items", [], "array"), "alt", []))))), "html", null, true);
        echo "</h2>
\t\t\t\t\t";
        // line 63
        if ($this->getAttribute(($context["content"] ?? null), "field_especialidad", [])) {
            // line 64
            echo "\t                \t<p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_especialidad", []))))), "html", null, true);
            echo "</p> 
\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["content"] ?? null), "field_telefono", [])) {
            // line 67
            echo "\t\t\t\t\t\t";
            // line 68
            echo "\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["content"] ?? null), "field_correo", [])) {
            // line 70
            echo "\t\t\t\t\t  \t";
            // line 71
            echo "\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t<div class=\"flipcard-social\" style=\"display:flex\">
\t\t\t\t\t  \t<span style=\"margin-left:5px\"><a style=\"font-size:18px\" href=\"tel:";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono", []))))), "html", null, true);
        echo "\"><i class=\"fas fa-phone\"></i></a></span>
\t\t\t\t\t\t<span style=\"margin-left:5px\"><a style=\"font-size:18px\" href=\"mailto:";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo", []))))), "html", null, true);
        echo "\"><i class=\"fas fa-at\"></i></a></span>
\t\t\t\t\t\t";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_red_social", [])), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 77
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_bio_expandida", []), 0, []), "#markup", [], "array") != "On")) {
            // line 78
            echo "\t\t\t\t\t\t";
            if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_biografia", []))))) {
                // line 79
                echo "\t\t\t\t\t\t\t";
                if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_enlace_biografia", []))))) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t<div class=\"bio-expandida-link\" style=\"cursor:pointer;\">
\t\t\t\t\t\t\t\t\t";
                    // line 81
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_enlace_biografia", [])), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<div class=\"bio\" style=\"cursor:pointer;\">
\t\t\t\t\t\t\t\t\t<p class=\"bio-toggle\">Ver Biografía</p>
\t\t\t\t\t\t\t\t\t<div class=\"bio-content d-none hidden\">";
                    // line 86
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_biografia", []))), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t  
\t                </div>
\t            </div>
\t\t\t\t";
        // line 96
        echo "
\t            ";
        // line 111
        echo "\t    \t</div>

\t\t</div>
    </div>
\t";
        // line 115
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_bio_expandida", []), 0, []), "#markup", [], "array") == "On")) {
            // line 116
            echo "\t\t<div class=\"col-lg-6 col-sm-12\">
\t\t\t<div class=\"ftco-animate flipcard\">
\t\t\t\t<div class=\"bio-content\">";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_biografia", []))), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 122
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--flip-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 122,  198 => 118,  194 => 116,  192 => 115,  186 => 111,  183 => 96,  178 => 92,  175 => 91,  171 => 89,  165 => 86,  161 => 84,  155 => 81,  152 => 80,  149 => 79,  146 => 78,  144 => 77,  139 => 75,  135 => 74,  131 => 73,  128 => 72,  125 => 71,  123 => 70,  120 => 69,  117 => 68,  115 => 67,  112 => 66,  106 => 64,  104 => 63,  100 => 62,  93 => 59,  87 => 54,  84 => 53,  79 => 123,  76 => 53,  70 => 52,  68 => 51,  65 => 50,  63 => 47,  62 => 46,  61 => 45,  60 => 43,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--flip-card.html.twig", "/app/themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--flip-card.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
