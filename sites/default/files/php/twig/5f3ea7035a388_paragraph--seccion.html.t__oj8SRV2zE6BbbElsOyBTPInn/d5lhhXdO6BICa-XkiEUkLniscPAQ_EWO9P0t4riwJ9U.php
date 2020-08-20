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

/* themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--seccion.html.twig */
class __TwigTemplate_9d81f09fb0911e3f42612ecc187f8efb9fb8340998fff49c8e6c94844d09edfd extends \Twig\Template
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
        $tags = ["set" => 43, "block" => 50];
        $filters = ["clean_class" => 45, "escape" => 57, "trim" => 57, "striptags" => 57, "render" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
                []
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        // line 53
        echo "      <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    \t  <div class=\"container-fluid px-md-5\">
    \t  \t<div class=\"row justify-content-center mb-5 pb-3\">
            <div class=\"col-md-7 text-center heading-section ftco-animate\">
          \t  <span class=\"subheading\">";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo", []))))), "html", null, true);
        echo "</span>
              <h2 class=\"mb-4\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_subtitulo", []))))), "html", null, true);
        echo "</h2>
            </div>
          </div>
          <div class=\"row\">
            ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_modulo", [])), "html", null, true);
        echo "
          </div>
          
        </div>
    </section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--seccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 62,  94 => 58,  90 => 57,  84 => 53,  81 => 52,  76 => 68,  74 => 52,  71 => 51,  65 => 50,  63 => 47,  62 => 46,  61 => 45,  60 => 43,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--seccion.html.twig", "/app/themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--seccion.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
