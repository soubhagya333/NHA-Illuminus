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

/* GanttViewerDashlet.ready.js.twig */
class __TwigTemplate_aab2751241819d607bb3f7618211e0489f69119051bc91fcbace47b67d06c100 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'loadPage' => [$this, 'block_loadPage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "./GanttViewer.ready.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("./GanttViewer.ready.js.twig", "GanttViewerDashlet.ready.js.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_loadPage($context, array $blocks = [])
    {
        // line 5
        echo "\tfGtLoadScript";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
";
    }

    public function getTemplateName()
    {
        return "GanttViewerDashlet.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GanttViewerDashlet.ready.js.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewerDashlet.ready.js.twig");
    }
}
