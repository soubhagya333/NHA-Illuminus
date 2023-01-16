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

/* ./GanttViewer.html.twig */
class __TwigTemplate_f10265421fa3a75572c57c85c1be944b2ee693ab439ac749830b53f6eb0e8d92 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo " ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => ($context["sId"] ?? null), "aContainerClasses" => [0 => "gant-container"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_637c7e28c761c062645798 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_637c7e28c761c062645798, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_637c7e28c761c062645798, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_637c7e28c761c062645798);
        array_push($context['UIBlockParent'], $oUIContentBlock_637c7e28c761c062645798);
        ob_start();
        // line 4
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "    <div class=\"__template__\" type=\"TASKEMPTYROW\"><!--
\t\t\t  <tr class=\"taskEditRow emptyRow\" >
\t\t\t    <td class=\"gdfCell\" align=\"right\"></td>
\t\t\t    <td class=\"gdfCell noClip\"></td>
\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t  </tr>
\t\t\t  --></div>
    <!--table with 8 columns minimum-->
    <div class=\"__template__\" type=\"TASKSEDITHEAD\"><!--
\t\t\t<table class=\"gdfTable\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr style=\"height:40px\">
\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:100px;width:150px;\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aDescription"] ?? null), "attr_label", [], "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t";
        // line 45
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info1", [], "array") != "")) {
            // line 46
            echo "\t\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:100px;width:150px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aDescription"] ?? null), "attr_add_info1", [], "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info2", [], "array") != "")) {
            // line 49
            echo "\t\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:100px;width:150px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aDescription"] ?? null), "attr_add_info2", [], "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:80px;width:80px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aDescription"] ?? null), "attr_start_date", [], "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:80px;width:80px;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aDescription"] ?? null), "attr_end_date", [], "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:20px;width:20px;\">%</th>
\t\t\t\t\t\t";
        // line 54
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info1", [], "array") == "")) {
            // line 55
            echo "\t\t\t\t\t\t\t<td class=\"gdfColHeader gdfResizable\" style=\"min-width:10px;width:10px;\"></td>
\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info2", [], "array") == "")) {
            // line 58
            echo "\t\t\t\t\t\t\t<td class=\"gdfColHeader gdfResizable\" style=\"min-width:10px;width:10px;\"></td>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:10px;width:10px;\"></th>
\t\t\t\t\t\t<th class=\"gdfColHeader gdfResizable\" style=\"min-width:100px;width:100px; text-align: left; padding-left: 10px;\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t</table>
\t\t--></div>

\t\t<div class=\"__template__\" type=\"TASKROW\"><!--
\t\t\t<tr id=\"tid_(#=obj.id#)\" taskId=\"(#=obj.id#)\" class=\"taskEditRow (#=obj.isParent()?'isParent':''#) (#=obj.collapsed?'collapsed':''#)\" level=\"(#=level#)\">
\t\t\t\t <td class=\"gdfCell indentCell\" style=\"padding-left:(#=obj.level*10+18#)px;\">
\t\t\t\t      <div class=\"exp-controller\" align=\"center\"></div>
\t\t\t\t      (#=obj.name#)
\t\t\t    </td>
\t\t\t\t";
        // line 73
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info1", [], "array") != "")) {
            // line 74
            echo "\t\t\t\t\t<td class=\"gdfCell\">(#=obj.info1#)</td>
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t";
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info2", [], "array") != "")) {
            // line 77
            echo "\t\t\t\t\t<td class=\"gdfCell\">(#=obj.info2#)</td>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t<td class=\"gdfCell\"><input type=\"text\" name=\"start\"  value=\"\" class=\"date\"></td>
\t\t\t\t\t<td class=\"gdfCell\"><input type=\"text\" name=\"end\" value=\"\" class=\"date\"></td>
\t\t\t\t\t<td class=\"gdfCell\"><input type=\"text\" name=\"progress\" class=\"validated\" entrytype=\"PERCENTILE\" autocomplete=\"off\" value=\"(#=obj.progress?obj.progress:''#)\" (#=obj.progressByWorklog?\"readOnly\":\"\"#)></td>
\t\t\t\t";
        // line 82
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info1", [], "array") == "")) {
            // line 83
            echo "\t\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t";
        if (($this->getAttribute(($context["aDescription"] ?? null), "attr_add_info2", [], "array") == "")) {
            // line 86
            echo "\t\t\t\t\t<td class=\"gdfCell\"></td>
\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t<td class=\"gdfCell\"><input type=\"hidden\" name=\"duration\" value=\"\"></td>
\t\t\t</tr>
\t\t--></div>

    <div class=\"__template__ ibo-panel--body\" type=\"TASKBAR\"><!--
\t\t\t<div class=\"taskBox taskBoxDiv\" taskId=\"(#=obj.id#)\" >
\t\t\t\t<div class=\"layout (#=obj.hasExternalDep?'extDep':''#)\">
\t\t\t\t\t<div class=\"taskStatus\" status=\"(#=obj.status#)\"></div>
\t\t\t\t\t<div class=\"taskProgress\" style=\"width:(#=obj.progress>100?100:obj.progress#)%; background-color:(#=obj.progress>100?'red':'rgb(153,255,51);'#);\"></div>
\t\t\t\t\t<div class=\"taskLabel\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t--></div>
</div>
";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <div id=\"workSpace";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\" style=\"padding:0px; overflow-y:auto; overflow-x:hidden;position:relative;margin:0 5px; width:100%;\">
    </div>
<div id=\"gantEditorTemplates";
        // line 7
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\">
    <div class=\"__template__\" type=\"GANTBUTTONS\"><!--
\t\t\t<div class=\"ganttButtonBar noprint main_header ibo-panel--header\">
\t\t\t\t<div class=\"ibo-panel--header-left\"><div class=\"ibo-panel--title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["sTitle"] ?? null), "html", null, true);
        echo "</div></div>
\t\t\t\t<div class=\"ibo-panel--header-right\">
                            <button onclick=\"\$('#workSpace";
        // line 12
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "').trigger('zoomMinus.gantt'); return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:ZoomOut"]), "html", null, true);
        echo "\"><i class=\"fas fa-search-minus\"></i></button>
                            <button onclick=\"\$('#workSpace";
        // line 13
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "').trigger('zoomPlus.gantt');return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:ZoomIn"]), "html", null, true);
        echo "\"><i class=\"fas fa-search-plus\"></i></button>
                            <span class=\"ganttButtonSeparator\"></span>
                            <button onclick=\"ge";
        // line 15
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".gantt.showCriticalPath=!ge";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".gantt.showCriticalPath; ge";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".redraw();return false;\" class=\"ibo-button--icon requireCanSeeCriticalPath\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:CriticalPath"]), "html", null, true);
        echo "\"><i class=\"fas  fa-project-diagram\"></i></button>
                            <span class=\"ganttButtonSeparator requireCanSeeCriticalPath\"></span>
                            <button onclick=\"ge";
        // line 17
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".splitter.resize(.1);return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarLeft"]), "html", null, true);
        echo "\"><i class=\"fas fa-chevron-left\"></i></button>
                            <button onclick=\"ge";
        // line 18
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".splitter.resize(50);return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarCenter"]), "html", null, true);
        echo "\"><i class=\"fas fa-columns\"></i></button>
                            <button onclick=\"ge";
        // line 19
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".splitter.resize(100);return false;\" class=\"ibo-button--icon\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["GanttDashlet/UI:MoveSplitBarRight"]), "html", null, true);
        echo "\"><i class=\"fas fa-chevron-right\"></i></button>
                            ";
        // line 20
        if (($context["bSaveAllowed"] ?? null)) {
            // line 21
            echo "                                <span class=\"ganttButtonSeparator requireCanSeeCriticalPath\"></span>
                                <button onclick=\"saveGanttOnServer();\" class=\"ibo-button--icon first big requireWrite\" title=\"Save\"><i class=\"fas fa-save\"></i></button>
                            ";
        }
        // line 24
        echo "\t\t\t\t</div>
\t\t\t</div>
                     --></div>
    ";
    }

    public function getTemplateName()
    {
        return "./GanttViewer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 24,  259 => 21,  257 => 20,  251 => 19,  245 => 18,  239 => 17,  228 => 15,  221 => 13,  215 => 12,  210 => 10,  204 => 7,  198 => 5,  195 => 4,  170 => 88,  166 => 86,  163 => 85,  159 => 83,  157 => 82,  152 => 79,  148 => 77,  145 => 76,  141 => 74,  139 => 73,  124 => 60,  120 => 58,  117 => 57,  113 => 55,  111 => 54,  106 => 52,  101 => 51,  95 => 49,  92 => 48,  86 => 46,  84 => 45,  80 => 44,  62 => 28,  59 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./GanttViewer.html.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewer.html.twig");
    }
}
