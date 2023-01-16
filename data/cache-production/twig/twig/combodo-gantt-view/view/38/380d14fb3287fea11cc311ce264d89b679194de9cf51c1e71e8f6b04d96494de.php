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

/* ./GanttViewer.ready.js.twig */
class __TwigTemplate_db5239cd606d0aaa61c8f01801a87edf12be5997e747778a2a82bcc1f4c90fd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'loadPage' => [$this, 'block_loadPage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('loadPage', $context, $blocks);
    }

    public function block_loadPage($context, array $blocks = [])
    {
        // line 5
        echo "\tfGtInitCallback";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
";
    }

    public function getTemplateName()
    {
        return "./GanttViewer.ready.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./GanttViewer.ready.js.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewer.ready.js.twig");
    }
}
