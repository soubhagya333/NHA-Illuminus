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

/* base/layouts/activity-panel/caselog-entry-form/layout.js.twig */
class __TwigTemplate_02bd54b7c0b15a01c62a468f0581907a572a3244d4f0e756ff3d2808d4dc2e89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').caselog_entry_form({
    object_class: '";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectClass", [], "method"), "html", null, true);
        echo "',
    object_id: '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectId", [], "method"), "html", null, true);
        echo "',
    attribute_code: '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttCode", [], "method"), "html", null, true);
        echo "',
\tsubmit_mode: '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetSubmitMode", [], "method"), "html", null, true);
        echo "',
\ttext_input_id: '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetTextInput", [], "method"), "GetId", [], "method"), "html", null, true);
        echo "'
});";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/caselog-entry-form/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/caselog-entry-form/layout.js.twig", "/var/www/html/itop-web/templates/base/layouts/activity-panel/caselog-entry-form/layout.js.twig");
    }
}
