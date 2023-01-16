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

/* base/layouts/activity-panel/activity-entry/notification-entry.html.twig */
class __TwigTemplate_7c7142b1fef161929afa273a0fb5d8a4327ba83b0520cdbc470d25f16bf2c394 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
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
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/activity-entry/layout.html.twig", "base/layouts/activity-panel/activity-entry/notification-entry.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
        echo "ibo-notification-entry";
    }

    // line 5
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        // line 6
        echo "    <a href=\"#\" class=\"ibo-notification-entry--short-description\" data-role=\"ibo-notification-entry--long-description-toggler\">
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"), "html", null, true);
        echo "
        <span class=\"ibo-notification-entry--long-description-toggler-icon fa fa-caret-down\"></span>
    </a>
    <div class=\"ibo-notification-entry--long-description\" data-role=\"ibo-notification-entry--long-description\">
        ";
        // line 12
        echo "        <a href=\"#ObjectProperties=tab_UINotificationsTab\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:NotificationEntry:MessageLink:Tooltip"]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetMessage", [], "method"), "html", null, true);
        echo "</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/notification-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  52 => 7,  49 => 6,  46 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/notification-entry.html.twig", "/var/www/html/itop-web/templates/base/layouts/activity-panel/activity-entry/notification-entry.html.twig");
    }
}
