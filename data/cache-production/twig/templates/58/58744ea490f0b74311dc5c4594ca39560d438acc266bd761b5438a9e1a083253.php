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

/* base/layouts/activity-panel/activity-entry/transition-entry.html.twig */
class __TwigTemplate_531d15efc44dac1870a765f2617b7846e48647d091e5f4f267484a0389335ae3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryExtraDataAttributes' => [$this, 'block_iboActivityEntryExtraDataAttributes'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/activity-entry/layout.html.twig", "base/layouts/activity-panel/activity-entry/transition-entry.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
        echo "ibo-transition-entry";
    }

    // line 4
    public function block_iboActivityEntryExtraDataAttributes($context, array $blocks = [])
    {
        echo "data-original-state-code=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOriginalStateCode", [], "method"), "html", null, true);
        echo "\" data-target-state-code=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTargetStateCode", [], "method"), "html", null, true);
        echo "\"";
    }

    // line 6
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        // line 7
        echo "\t";
        $context["sOriginalStateLabelAsHtml"] = (("<span class=\"ibo-transition-entry--original-state-label\">" . $this->getAttribute(($context["oUIBlock"] ?? null), "GetOriginalStateLabel", [], "method")) . "</span>");
        // line 8
        echo "\t";
        $context["sTargetStateLabelAsHtml"] = (("<span class=\"ibo-transition-entry--target-state-label\">" . $this->getAttribute(($context["oUIBlock"] ?? null), "GetTargetStateLabel", [], "method")) . "</span>");
        // line 9
        echo "\t";
        echo call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Change:State_Changed_NewValue_OldValue", ($context["sTargetStateLabelAsHtml"] ?? null), ($context["sOriginalStateLabelAsHtml"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/transition-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  63 => 8,  60 => 7,  57 => 6,  47 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/transition-entry.html.twig", "/var/www/html/itop-web/templates/base/layouts/activity-panel/activity-entry/transition-entry.html.twig");
    }
}
