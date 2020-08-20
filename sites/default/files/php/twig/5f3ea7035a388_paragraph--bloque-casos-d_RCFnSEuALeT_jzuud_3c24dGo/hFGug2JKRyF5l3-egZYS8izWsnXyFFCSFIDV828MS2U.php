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

/* themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-casos-de-exito.html.twig */
class __TwigTemplate_39430628775ebdfe8510b5170263a7ba122008eb6a1ea7e5e1f4302c7ace7ba3 extends \Twig\Template
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
        $tags = ["set" => 85, "block" => 92, "if" => 96, "for" => 115];
        $filters = ["clean_class" => 87, "trim" => 96, "striptags" => 96, "render" => 96, "escape" => 103];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'trim', 'striptags', 'render', 'escape'],
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
        // line 85
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 87
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 88
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 89
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 92
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 206
        echo "
";
    }

    // line 94
    public function block_content($context, array $blocks = [])
    {
        // line 95
        echo "      ";
        // line 96
        echo "      ";
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_formato", []), 0, [])))) == "Resumen")) {
            // line 97
            echo "      
      <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-lg-3 py-5\">
\t          <div class=\"heading-section ftco-animate\">
\t          \t<span class=\"subheading\">";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo", [])), "html", null, true);
            echo "</span>
\t            <h2 class=\"mb-4\">";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_subtitulo", [])), "html", null, true);
            echo "</h2>
\t            <div>";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_descripcion", [])), "html", null, true);
            echo "</div>
              ";
            // line 110
            echo "\t            ";
            // line 111
            echo "\t          </div>
    \t\t\t</div>
          <div class=\"col-lg-9 services-wrap px-4 pt-5\">
    \t\t\t\t<div class=\"row pt-md-3\">
              ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["graphql"] ?? null), "paragraphById", []), "fieldCasosDeExito", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 116
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "type", []), "targetId", []) == "from_library")) {
                    // line 117
                    echo "                <div class=\"col-md-4 d-flex align-items-stretch casos-card\">
                  <div class=\"services text-center\">
                    <div class=\"text\">
                      <h3>Desvincular de la libreria</h3>
                    </div>
                  </div>
                </div>
                ";
                } else {
                    // line 125
                    echo "                <div class=\"col-md-4 d-flex align-items-stretch casos-card\">
                  <div class=\"services text-center\">
                    ";
                    // line 127
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldIcono", []), "iconName", [])) {
                        // line 128
                        echo "                    <div class=\"icon d-flex justify-content-center align-items-center\">
                      ";
                        // line 130
                        echo "                      <i class=\"fas ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldIcono", []), "iconName", [])), "html", null, true);
                        echo "\"></i>
                      ";
                        // line 132
                        echo "                    </div>
                    ";
                    }
                    // line 134
                    echo "                    <div class=\"text\">
                      <h3>";
                    // line 135
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTitulo", [])), "html", null, true);
                    echo "</h3>
                      <p>";
                    // line 136
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldDescripcion", [])), "html", null, true);
                    echo "</p>

                      ";
                    // line 138
                    if ($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTags", [])) {
                        // line 139
                        echo "                      <div class=\"tagcloud tagslider\">
                        ";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTags", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                            // line 141
                            echo "                            <a  class=\"tag-cloud-link\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tags"], "entity", []), "name", [])), "html", null, true);
                            echo "</a>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 142
                        echo " 
                      </div>
                      ";
                    }
                    // line 145
                    echo "                    </div>
                    ";
                    // line 146
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldVinculo", []), "url", []), "path", [])) {
                        // line 147
                        echo "                    <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldVinculo", []), "url", []), "path", [])), "html", null, true);
                        echo "\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"ion-ios-arrow-round-forward\"></span></a>
                    ";
                    }
                    // line 149
                    echo "                  ";
                    // line 150
                    echo "                  </div>
                </div>
                ";
                }
                // line 153
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "              ";
            // line 155
            echo "            </div>
          </div>
    \t\t</div>

    \t</div>
    </section>
    
    ";
        } else {
            // line 163
            echo "
      <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center\">
            ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["graphql"] ?? null), "paragraphById", []), "fieldCasosDeExito", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 168
                echo "              ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "type", []), "targetId", []) == "from_library")) {
                    // line 169
                    echo "              <div class=\"col-md-3 text-center\">
                <div class=\"practice-area ftco-animate\">
                  <h3>Item en libreria</h3>
                  <p>Desvincular de Libreria</p>
                  <a href=\"#\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"ion-ios-arrow-round-forward\"></span></a>
                </div>
              </div>
              ";
                } else {
                    // line 177
                    echo "              <div class=\"col-md-3 text-center\">
                <div class=\"practice-area ftco-animate\">
                  ";
                    // line 179
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldIcono", []), "iconName", [])) {
                        // line 180
                        echo "                  <div class=\"icon d-flex justify-content-center align-items-center\">
                    <i class=\"fas ";
                        // line 181
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldIcono", []), "iconName", [])), "html", null, true);
                        echo "\"></i>
                  </div>
                  ";
                    }
                    // line 184
                    echo "                  <h3>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTitulo", [])), "html", null, true);
                    echo "</h3>
                  <p>";
                    // line 185
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldDescripcion", [])), "html", null, true);
                    echo "</p>
                  ";
                    // line 186
                    if ($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTags", [])) {
                        // line 187
                        echo "                    <div class=\"tagcloud tagslider\">
                      ";
                        // line 188
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldTags", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                            // line 189
                            echo "                        <a  class=\"tag-cloud-link\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tags"], "entity", []), "name", [])), "html", null, true);
                            echo "</a>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 190
                        echo " 
                    </div>
                  ";
                    }
                    // line 193
                    echo "                  ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldVinculo", []), "url", []), "path", [])) {
                        // line 194
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "entity", []), "fieldVinculo", []), "url", []), "path", [])), "html", null, true);
                        echo "\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"ion-ios-arrow-round-forward\"></span></a>
                  ";
                    }
                    // line 196
                    echo "                </div>
              </div>
              ";
                }
                // line 199
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "          </div>
        </div>
      </section>

    ";
        }
        // line 205
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-casos-de-exito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 205,  310 => 200,  304 => 199,  299 => 196,  293 => 194,  290 => 193,  285 => 190,  276 => 189,  272 => 188,  269 => 187,  267 => 186,  263 => 185,  258 => 184,  252 => 181,  249 => 180,  247 => 179,  243 => 177,  233 => 169,  230 => 168,  226 => 167,  220 => 163,  210 => 155,  208 => 154,  202 => 153,  197 => 150,  195 => 149,  189 => 147,  187 => 146,  184 => 145,  179 => 142,  170 => 141,  166 => 140,  163 => 139,  161 => 138,  156 => 136,  152 => 135,  149 => 134,  145 => 132,  140 => 130,  137 => 128,  135 => 127,  131 => 125,  121 => 117,  118 => 116,  114 => 115,  108 => 111,  106 => 110,  102 => 105,  98 => 104,  94 => 103,  86 => 97,  83 => 96,  81 => 95,  78 => 94,  73 => 206,  71 => 94,  68 => 93,  62 => 92,  60 => 89,  59 => 88,  58 => 87,  57 => 85,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-casos-de-exito.html.twig", "/app/themes/custom/legalcare/templates/paragraph/pagebuilder/paragraph--bloque-casos-de-exito.html.twig");
    }
    
use \Drupal\graphql_twig\GraphQLTemplateTrait;
    
public static function hasGraphQLOperations() { return true    ; }
    
public static function rawGraphQLQuery() { return "query(\$test: String!){
\tparagraphById(id: \$test){
    ... on ParagraphBloqueCasosDeExito{
      fieldTitulo
      fieldSubtitulo
      fieldFormato
      fieldDescripcion
      fieldCasosDeExito{
        entity{
          ... on ParagraphFromLibrary{
            entityId
            type {
              targetId
            }
          }
          ... on ParagraphCasosDeExito{
            fieldTitulo
            fieldDescripcion
            fieldTags {
              entity{
                name
              }
            }
            fieldIcono {
              iconName
            }
            fieldVinculo{
              url {
                path
                routed
              }
            }
            fieldContenido {
              value
              format
              processed
            }
          }
        }
      }
    }
  }
}"    ; }
    
public static function rawGraphQLParent() { return ""    ; }
    
public static function rawGraphQLIncludes() { return [    ]; }
    
public static function rawGraphQLArguments() { return ["test"    ,    ]; }
}
