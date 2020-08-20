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

/* themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--hero-animado-.html.twig */
class __TwigTemplate_0a73f0764c4235d7b37cdf3828a4af3e7e8a1726a482755796ce7abe5eb18b70 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 50, "for" => 63, "if" => 63];
        $filters = ["clean_class" => 44, "escape" => 51, "trim" => 59, "striptags" => 59, "render" => 59, "children" => 63];
        $functions = ["file_url" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render', 'children'],
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
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
  </div>
    

";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        // line 53
        echo "      <div class=\"hero-wrap js-fullheight\" style=\"background-image: url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["BackgroundImage"] ?? null)), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
          <div class=\"text-center offset-md-3 col-md-6 ftco-animate\">
          \t<h2 class=\"subheading\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo", [])), "html", null, true);
        echo "</h2>
          \t<h1>";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_subtitulo", []))))), "html", null, true);
        echo "<br>
\t\t\t\t\t\t  <span
\t\t\t\t\t\t     class=\"txt-rotate\"
\t\t\t\t\t\t     data-period=\"2000\"
\t\t\t\t\t\t     data-rotate='[";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->children($this->getAttribute(($context["content"] ?? null), "field_texto_cambiable", [])));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
                echo "\"";
            } else {
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
                echo "\",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]'></span>
\t\t\t\t\t\t</h1>
            <!-- <h1 class=\"mb-4\">Attorneys Fighting For Your Freedom</h1> -->
            <div class=\"mb-4 text-justify\">";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_parrafo", [])), "html", null, true);
        echo "</div>
            ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_boton", []), 0, [], "array"), "#title", [], "array")) {
            // line 68
            echo "              <p><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_boton", []), "url", []))))), "html", null, true);
            echo "\" class=\"btn btn-primary mr-md-4 py-2 px-4\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_boton", []), 0, [], "array"), "#title", [], "array"))))), "html", null, true);
            echo " <span class=\"ion-ios-arrow-forward\"></span></a></p>
            ";
        }
        // line 70
        echo "          </div>
        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--hero-animado-.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 70,  156 => 68,  154 => 67,  150 => 66,  108 => 63,  101 => 59,  97 => 58,  88 => 53,  85 => 52,  77 => 75,  75 => 52,  70 => 51,  64 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--hero-animado-.html.twig", "/app/themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--hero-animado-.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
