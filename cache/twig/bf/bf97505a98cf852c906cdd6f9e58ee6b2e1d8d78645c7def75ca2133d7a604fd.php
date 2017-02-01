<?php

/* default.html.twig */
class __TwigTemplate_70b5ebf4067cbf24c424cc100b90fe73f62d3db764df15059c8bf6e0fe9e909c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'masterslider' => array($this, 'block_masterslider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 5
        echo "     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     ";
        // line 8
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "default.html.twig", 8)->display($context);
        // line 9
        echo "     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
               
                ";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

";
        // line 23
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "default.html.twig", 23)->display($context);
    }

    // line 4
    public function block_masterslider($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  64 => 23,  53 => 15,  48 => 13,  42 => 9,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {% block masterslider %}{% endblock %}
     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     {% include 'partials/blog_sidebar_header.html.twig' %}
     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">{{ page.header.title }}</h3>
               
                {{ page.content }}
                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "default.html.twig", "/Users/admin/Documents/sites/theoneyearproject.ie/user/themes/custom_theme/templates/default.html.twig");
    }
}
