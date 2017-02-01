<?php

/* gallery.html.twig */
class __TwigTemplate_1bc7ff0f310ba05b1ce4bcbb464cb35698520f8b62f9891253a6a4a224f5a64b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <div class=\"widget HTML\">
    <h2 class=\"title\">{{ module.title }}</h2>
    <div class=\"widget-content\">
     {% if module.header.gallery %}
        <div class=\"gdlr-instagram-item-head gdlr-nav-container\">
            <i class=\"icon-angle-left gdlr-flex-prev\"></i>
            <a href=\"{{ base_url_absolute }}\" target=\"_blank\">
                <i class=\"icon-instagram\"></i>
            </a>
            <i class=\"icon-angle-right gdlr-flex-next\"></i>
        </div>
        <div class=\"gdlr-instagram-item-wrapper\">
            <div class=\"flexslider\" data-type=\"carousel\" data-nav-container=\"gdlr-instagram-item-wrapper\">
                <div class=\"flex-viewport\" >
                    <ul class=\"slides\">
                        {% for images in module.header.gallery %}
                            <li>
                                <a href=\"{% if module.header.image_as_link %}{{ module.media.images[images.image].url }}{% else %}{{ images.url }}{% endif %}\" target=\"_blank\" data-lightbox=\"gallery\" data-title=\"images.image\">
                                    {{ module.media.images[images.image] }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}
    {{ module.content }}
</div>
</div> #}", "gallery.html.twig", "/Users/admin/Documents/sites/theoneyearproject.ie/user/themes/custom_theme/templates/gallery.html.twig");
    }
}
