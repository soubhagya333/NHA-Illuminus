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

/* GanttViewerDashlet.html.twig */
class __TwigTemplate_d37ad71eb7390c22e275b924299f9341fb7f9b973f643a556b962fc05e5b3601 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "./GanttViewer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("./GanttViewer.html.twig", "GanttViewerDashlet.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "\t";
        if (($context["bEditMode"] ?? null)) {
            // line 7
            echo "        <div class=\"main_header\">
            <h1>";
            // line 8
            echo twig_escape_filter($this->env, ($context["sTitle"] ?? null), "html", null, true);
            echo "</h1>
        </div>
        <div id=\"workSpace";
            // line 10
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "\" style=\"padding:0px; overflow-y:auto; overflow-x:hidden;position:relative;margin:0 5px; max-height: 200px;\">
        </div>
        <div id=\"gantEditorTemplates";
            // line 12
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "\">
        <div class=\"__template__\" type=\"GANTBUTTONS\"><!-- --></div>
    ";
        } else {
            // line 15
            echo "        <div id=\"workSpace";
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "\" style=\"padding:0px; overflow-y:auto; overflow-x:hidden;position:relative;margin:0 5px\">
        </div>
        <div id=\"gantEditorTemplates";
            // line 17
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "\">
        <div class=\"__template__\" type=\"GANTBUTTONS\"><!--
\t\t\t<div class=\"ganttButtonBar noprint main_header ibo-panel--header\">
\t\t\t\t<div class=\"ibo-panel--header-left\"><div class=\"ibo-panel--title\">";
            // line 20
            echo twig_escape_filter($this->env, ($context["sTitle"] ?? null), "html", null, true);
            echo "</div></div>
\t\t\t\t<div class=\"ibo-panel--header-right\">
                    <button onclick=\"\$('#workSpace";
            // line 22
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').trigger('zoomMinus.gantt'); return false;\" class=\" ibo-button--icon\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:ZoomOut"]), "html", null, true);
            echo "\"><i class=\"fas fa-search-minus\"></i></button>
                    <button onclick=\"\$('#workSpace";
            // line 23
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').trigger('zoomPlus.gantt');return false;\" class=\" ibo-button--icon\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:ZoomIn"]), "html", null, true);
            echo "\"><i class=\"fas fa-search-plus\"></i></button>
                    <span class=\"ganttButtonSeparator\"></span>
                    <button onclick=\"ge";
            // line 25
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".gantt.showCriticalPath=!ge";
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".gantt.showCriticalPath; ge";
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".redraw();return false;\" class=\" ibo-button--icon requireCanSeeCriticalPath\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:CriticalPath"]), "html", null, true);
            echo "\"><i class=\"fas  fa-project-diagram\"></i></button>
                    <span class=\"ganttButtonSeparator requireCanSeeCriticalPath\"></span>
                    <button onclick=\"ge";
            // line 27
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".splitter.resize(.1);return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarLeft"]), "html", null, true);
            echo "\"><i class=\"fas fa-chevron-left\"></i></button>
                    <button onclick=\"ge";
            // line 28
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".splitter.resize(50);return false;\" class=\" ibo-button--icon\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarCenter"]), "html", null, true);
            echo "\"><i class=\"fas fa-columns\"></i></button>
                    <button onclick=\"ge";
            // line 29
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".splitter.resize(100);return false;\" class=\" ibo-button--icon\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarRight"]), "html", null, true);
            echo "\"><i class=\"fas fa-chevron-right\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "GanttViewerDashlet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  111 => 28,  105 => 27,  94 => 25,  87 => 23,  81 => 22,  76 => 20,  70 => 17,  64 => 15,  58 => 12,  53 => 10,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GanttViewerDashlet.html.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewerDashlet.html.twig");
    }
}
