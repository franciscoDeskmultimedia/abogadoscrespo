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

/* themes/custom/legalcare/templates/block--footerdelapagina.html.twig */
class __TwigTemplate_3f5a8251424df99ed8224c023cc2f4d46e8c30bf57d89fb7987b6e485d249c77 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 33, "if" => 87];
        $filters = ["clean_class" => 35, "escape" => 57, "trim" => 58, "striptags" => 58, "render" => 58];
        $functions = ["file_url" => 51];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null))))];
        // line 51
        $context["logoFooter"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_logo_", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 52
        echo "<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2><img src=\"";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logoFooter"] ?? null)), "html", null, true);
        echo "\" /></h2>
              <p>";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_footer", []))))), "html", null, true);
        echo "</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-2\">
                <li class=\"ftco-animate\"><span><a href=\"";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_url_red_social_1", []))))), "html", null, true);
        echo "\"><i class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_social_1", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#style", [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_social_1", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#name", [], "array")), "html", null, true);
        echo "\"></i></a></span></li>
                <li class=\"ftco-animate\"><span><a href=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_url_red_social_2", []))))), "html", null, true);
        echo "\"><i class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_social_2", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#style", [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_social_2", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#name", [], "array")), "html", null, true);
        echo "\"></i></a></span></li>
                <li class=\"ftco-animate\"><span><a href=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_url_red_social_3", []))))), "html", null, true);
        echo "\"><i class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_soc", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#style", [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icono_red_soc", []), 0, [], "array"), "#icons", [], "array"), 0, [], "array"), "#name", [], "array")), "html", null, true);
        echo "\"></i></a></span></li>
              </ul>
            </div>
          </div>
          ";
        // line 80
        echo "          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\">Contáctenos</h2>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion", []))))), "html", null, true);
        echo "</span></li>
\t                <li><a href=\"tel:";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono", []))))), "html", null, true);
        echo "\"><span class=\"icon icon-phone\"></span><span class=\"text\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono", []))))), "html", null, true);
        echo "</span></a></li>
                  ";
        // line 87
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_correo", []))))) {
            // line 88
            echo "\t                  <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo", []))))), "html", null, true);
            echo "\"><span class=\"icon icon-envelope\"></span><span class=\"text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo", []))))), "html", null, true);
            echo "</span></a></li>
                  ";
        }
        // line 90
        echo "\t              </ul>
\t            </div>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\"></h2><br>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion_2", []))))), "html", null, true);
        echo "</span></li>
\t                <li><a href=\"tel:";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono_2", []))))), "html", null, true);
        echo "\"><span class=\"icon icon-phone\"></span><span class=\"text\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono_2", []))))), "html", null, true);
        echo "</span></a></li>
                  ";
        // line 101
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_correo_2", []))))) {
            // line 102
            echo "\t                  <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo_2", []))))), "html", null, true);
            echo "\"><span class=\"icon icon-envelope\"></span><span class=\"text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo_2", []))))), "html", null, true);
            echo "</span></a></li>
                  ";
        }
        // line 104
        echo "\t              </ul>
\t            </div>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Horarios de atencion</h2>
              <div class=\"opening-hours\">
              \t<h4>Atendemos</h4>
              \t<p class=\"pl-3\">
              \t\t<span>";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horarios_disponible", []), 0, [], "array")), "html", null, true);
        echo "</span><br>
              \t\t<span>";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horarios_disponible", []), 1, [], "array")), "html", null, true);
        echo "</span><br>
              \t</p>
                <h4>En situación de flagrancia:</h4>
                <p class=\"pl-3\">
                  <span>";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horario_especial", []), 0, [], "array")), "html", null, true);
        echo "</span><br>
                  <span>";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_horario_especial", []), 1, [], "array")), "html", null, true);
        echo "</span>
              \t</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/block--footerdelapagina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 120,  185 => 119,  178 => 115,  174 => 114,  162 => 104,  154 => 102,  152 => 101,  146 => 100,  142 => 99,  131 => 90,  123 => 88,  121 => 87,  115 => 86,  111 => 85,  104 => 80,  93 => 62,  85 => 61,  77 => 60,  72 => 58,  68 => 57,  61 => 52,  59 => 51,  57 => 36,  56 => 35,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/block--footerdelapagina.html.twig", "/app/themes/custom/legalcare/templates/block--footerdelapagina.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return false    ; }
    
public static function rawGraphQLQuery() { return ""    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return [    ]; }
}
