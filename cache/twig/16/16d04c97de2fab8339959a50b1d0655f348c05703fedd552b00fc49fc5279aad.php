<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_af11d78b4272e168d917b94b77e09eeb048fea6b0ac52064fb4225a19de7689a extends Twig_Template
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
        // line 1
        echo " <div id=\"related-posts\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", array(), "array"), "get", array(0 => $context["related_path"]), "method");
            // line 4
            echo "            ";
            if (($context["related"] ?? null)) {
                // line 5
                echo "             <div class=\"related-post-widget six columns\">
                <div class=\"related-post-widget-thumbnail\">
                    ";
                // line 7
                if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", array()), "images", array()))) {
                    // line 8
                    echo "                        ";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", array()), "images", array())), "cropResize", array(0 => 150, 1 => 150), "method"), "html", array());
                    echo "
                        ";
                } else {
                    // line 10
                    echo "                        <img src='";
                    echo ($context["theme_url"] ?? null);
                    echo "/images/no-image.png' style='display: block' >
                    ";
                }
                // line 12
                echo "                </div>

                ";
                // line 14
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "show_score", array())) {
                    // line 15
                    echo "                    <span class=\"score\">";
                    echo $context["score"];
                    echo "</span>
                ";
                }
                // line 17
                echo "                <div class=\"related-post-widget-content\">
                    <div class=\"related-post-widget-title\">
                        <a href=\"";
                // line 19
                echo $this->getAttribute(($context["related"] ?? null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", array());
                echo "\">";
                echo $this->getAttribute(($context["related"] ?? null), "title", array());
                echo "</a>
                    </div>
                </div>
            </div>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  78 => 24,  66 => 19,  62 => 17,  56 => 15,  54 => 14,  50 => 12,  44 => 10,  38 => 8,  36 => 7,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <div id=\"related-posts\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
            {% if related %}
             <div class=\"related-post-widget six columns\">
                <div class=\"related-post-widget-thumbnail\">
                    {% if related.media.images|first %}
                        {{ related.media.images|first.cropResize(150,150).html }}
                        {% else %}
                        <img src='{{ theme_url }}/images/no-image.png' style='display: block' >
                    {% endif %}
                </div>

                {% if config.plugins.relatedpages.show_score %}
                    <span class=\"score\">{{ score }}</span>
                {% endif %}
                <div class=\"related-post-widget-content\">
                    <div class=\"related-post-widget-title\">
                        <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endfor %}
</div>", "partials/relatedpages.html.twig", "/Users/admin/Documents/sites/theoneyearproject.ie/user/themes/custom_theme/templates/partials/relatedpages.html.twig");
    }
}
