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

/* themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-video-tabs.html.twig */
class __TwigTemplate_e35d5ffc529261ee67d69121e480b1c90eac36bf373125d9969e6a2728a95960 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 50, "if" => 58];
        $filters = ["clean_class" => 44, "escape" => 57, "trim" => 58, "striptags" => 58, "render" => 58];
        $functions = ["file_url" => 49];

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
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 46
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 49
        $context["BackgroundImage"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_imagen_de_fondo", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 51
        echo "  
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 110
        echo "  
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        // line 53
        echo "    <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    \t<div class=\"container\">
    \t\t<div class=\"row d-flex\">
    \t\t\t<div class=\"col-md-6 d-flex\">
    \t\t\t\t<div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end\" style=\"background-image:url(";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["BackgroundImage"] ?? null)), "html", null, true);
        echo ");\">
    \t\t\t\t\t";
        // line 58
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_url_video", []))))) {
            // line 59
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_url_video", []))))), "html", null, true);
            echo "\" class=\"icon-video popup-vimeo d-flex justify-content-center align-items-center\">
    \t\t\t\t\t\t<span class=\"icon-play\"></span>
    \t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 63
        echo "    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-6 pl-md-5\">
    \t\t\t\t<div class=\"row justify-content-start pt-3 pb-3\">
\t\t          <div class=\"col-md-12 heading-section ftco-animate\">
\t\t          \t<span class=\"subheading\">";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo", []))))), "html", null, true);
        echo "</span>
\t\t            <h2 class=\"mb-4\">";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_subtitulo", []))))), "html", null, true);
        echo "</h2>
\t\t            <p>";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_descripcion", []))))), "html", null, true);
        echo "</p>
\t\t            <div class=\"tabulation-2 mt-4\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-fill d-md-flex d-block\">
\t\t\t\t\t\t\t\t\t  <li class=\"nav-item mb-md-0 mb-2\">
\t\t\t\t\t\t\t\t\t    <a class=\"nav-link active py-2\" data-toggle=\"tab\" href=\"#home1\">";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_titulo_1", []))))), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t\t  <li class=\"nav-item px-lg-2 mb-md-0 mb-2\">
\t\t\t\t\t\t\t\t\t    <a class=\"nav-link py-2\" data-toggle=\"tab\" href=\"#home2\">";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_titulo_2", []))))), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t    <a class=\"nav-link py-2 mb-md-0 mb-2\" data-toggle=\"tab\" href=\"#home3\">";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_titulo_3", []))))), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content bg-light rounded mt-2\">
\t\t\t\t\t\t\t\t\t  <div class=\"tab-pane container p-0 active\" id=\"home1\">
\t\t\t\t\t\t\t\t\t  \t<p class=\"text-justify\">";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_descripcion_1", []))))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"tab-pane container p-0 fade\" id=\"home2\">
\t\t\t\t\t\t\t\t\t  \t<p class=\"text-justify\">";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_descripcion_2", []))))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"tab-pane container p-0 fade\" id=\"home3\">
\t\t\t\t\t\t\t\t\t  \t<p class=\"text-justify\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tab_descripcion_3", []))))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t            <div class=\"years d-flex mt-4 mt-md-5\">
\t\t            \t<h4>
\t\t\t\t\t\t\t";
        // line 97
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_contador", [])))) != 0)) {
            // line 98
            echo "\t\t\t            \t\t<span class=\"number mr-2\" data-number=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contador", []))))), "html", null, true);
            echo "\">0</span>
\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t            <span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_contador", []))))), "html", null, true);
        echo "</span>
\t\t\t            </h4>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t        </div>
        </div>
    \t</div>
    </section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-video-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 100,  168 => 98,  166 => 97,  157 => 91,  151 => 88,  145 => 85,  137 => 80,  131 => 77,  125 => 74,  118 => 70,  114 => 69,  110 => 68,  103 => 63,  95 => 59,  93 => 58,  89 => 57,  83 => 53,  80 => 52,  75 => 110,  73 => 52,  70 => 51,  64 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-video-tabs.html.twig", "/app/themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-video-tabs.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
