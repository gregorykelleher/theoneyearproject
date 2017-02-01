<?php

/* translate.html.twig */
class __TwigTemplate_97479095d3cf3429e40e8d30251348e02bb41a698bbcc8bbc587195b3bfb1a60 extends Twig_Template
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
        return "translate.html.twig";
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
        <div id=\"google_translate_element\"></div>
        <script type=\"text/javascript\">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
      </script>
      <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
  </div>
</div>
 #}", "translate.html.twig", "/Users/admin/Documents/sites/theoneyearproject.ie/user/themes/custom_theme/templates/translate.html.twig");
    }
}
