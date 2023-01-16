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

/* GanttViewerDashlet.js.twig */
class __TwigTemplate_6f237119eada29099448df972169f1eea9db624aff98497baa4a305bb0ddc9ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'loadJS' => [$this, 'block_loadJS'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "./GanttViewer.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("./GanttViewer.js.twig", "GanttViewerDashlet.js.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_loadJS($context, array $blocks = [])
    {
        // line 7
        echo "
var aGtFilesToLoad";
        // line 8
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = [

    // CSS
    {url: \"";
        // line 11
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/platform.css?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"text\"},
    {url: \"";
        // line 12
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/dateField/jquery.dateField.css?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"text\"},
    {url: \"";
        // line 13
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/gantt.css?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"text\"},
    {url: \"";
        // line 14
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/css/style.css?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"text\"},
    ";
        // line 15
        if ((($context["bPrintable"] ?? null) == 1)) {
            // line 16
            echo "    {url: \"";
            echo ($context["sAbsUrlModulesRoot"] ?? null);
            echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttPrint.css?v=";
            echo ($context["sModuleVersion"] ?? null);
            echo "\", type: \"text\"},
    {url: \"";
            // line 17
            echo ($context["sAbsUrlModulesRoot"] ?? null);
            echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/valueSlider/mb.slider.css?v=";
            echo ($context["sModuleVersion"] ?? null);
            echo "\", type: \"text\"},
    ";
        }
        // line 19
        echo "    // JS
    {url: \"";
        // line 20
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/jquery.livequery.1.1.1.min.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 21
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/jquery.timers.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 22
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/utilities.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 23
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/forms.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 24
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/date.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 25
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/dialogs.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 26
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/layout.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 27
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/i18nJs.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 28
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/dateField/jquery.dateField.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 29
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/JST/jquery.JST.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 30
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/valueSlider/jquery.mb.slider.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 31
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/svg/jquery.svg.min.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 32
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/libs/jquery/svg/jquery.svgdom.1.8.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 33
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttUtilities.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 34
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttTask.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 35
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttDrawerSVG.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 36
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttZoom.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 37
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttGridEditor.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
    {url: \"";
        // line 38
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/ganttMaster.js?v=";
        echo ($context["sModuleVersion"] ?? null);
        echo "\", type: \"script\"},
];
var iGtCurrentIdx";
        // line 40
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = 0;
var iGtFilesToLoadCount";
        // line 41
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = aGtFilesToLoad";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".length;
var fGtLoadScript";
        // line 42
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = function () {
    \$.when(
            \$.ajax({
                        url: aGtFilesToLoad";
        // line 45
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].url,
                        dataType: aGtFilesToLoad";
        // line 46
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].type,
                        cache: true
                    })
\t            .done(function(){
\t                if ( (aGtFilesToLoad";
        // line 50
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].type === 'text') && (\$('head link[type=\"text/css\"][href=\"' + aGtFilesToLoad";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].url + '\"]').length === 0) )
\t                {
\t                \tif(aGtFilesToLoad";
        // line 52
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].media) {
\t\t\t                \$('<link rel=\"stylesheet\" type=\"text/css\" href=\"' + aGtFilesToLoad";
        // line 53
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].url + '\" media=\"'+aGtFilesToLoad";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].media+'\"/>').appendTo('head');
\t\t                }
\t                \telse
\t\t                {
\t\t\t                \$('<link rel=\"stylesheet\" type=\"text/css\" href=\"' + aGtFilesToLoad";
        // line 57
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iGtCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "].url + '\" />').appendTo('head');
\t\t                }
\t                }
\t            })
\t    )
\t        .then(function(){
\t            iGtCurrentIdx";
        // line 63
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "++;
\t            if (iGtCurrentIdx";
        // line 64
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " !== iGtFilesToLoadCount";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ")
\t            {
\t                fGtLoadScript";
        // line 66
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
\t            }
\t            else
\t            {
\t                fGtInitCallback";
        // line 70
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
\t            }
\t        });
\t};

";
    }

    public function getTemplateName()
    {
        return "GanttViewerDashlet.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 70,  292 => 66,  285 => 64,  281 => 63,  270 => 57,  257 => 53,  251 => 52,  240 => 50,  231 => 46,  225 => 45,  219 => 42,  213 => 41,  209 => 40,  202 => 38,  196 => 37,  190 => 36,  184 => 35,  178 => 34,  172 => 33,  166 => 32,  160 => 31,  154 => 30,  148 => 29,  142 => 28,  136 => 27,  130 => 26,  124 => 25,  118 => 24,  112 => 23,  106 => 22,  100 => 21,  94 => 20,  91 => 19,  84 => 17,  77 => 16,  75 => 15,  69 => 14,  63 => 13,  57 => 12,  51 => 11,  45 => 8,  42 => 7,  39 => 6,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GanttViewerDashlet.js.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewerDashlet.js.twig");
    }
}
