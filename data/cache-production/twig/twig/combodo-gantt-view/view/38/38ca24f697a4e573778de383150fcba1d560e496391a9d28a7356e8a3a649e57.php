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

/* ./GanttViewer.js.twig */
class __TwigTemplate_268feaaeacb6e65fa6c86764000bed5122ec8693e66f0ffc21d71e82b78dd009 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'loadJS' => [$this, 'block_loadJS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if (($context["listeStatus"] ?? null)) {
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeStatus"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 5
                echo "\t\t";
                if (($context["key"] == "")) {
                    // line 6
                    echo "\t\t\t\$(\"<style type='text/css'> .taskStatus{ background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "backgroundcolor", []), "html", null, true);
                    echo ";color:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t\t\$(\"<style type='text/css'> .colorByStatus .taskStatusSVG{ fill: ";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "backgroundcolor", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t\t\$(\"<style type='text/css'> .colorByStatus .taskStatusSVG .textPerc{ fill:";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\$(\"<style type='text/css'> .taskStatus[status=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]{ background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "backgroundcolor", []), "html", null, true);
                    echo ";color:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t\t\$(\"<style type='text/css'> .colorByStatus .taskStatusSVG[status=";
                    // line 11
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]{ fill: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "backgroundcolor", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t\t\$(\"<style type='text/css'> .colorByStatus .taskStatusSVG[status=";
                    // line 12
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "] .textPerc{ fill:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "color", []), "html", null, true);
                    echo "; } </style>\").appendTo(\"head\");
\t\t";
                }
                // line 14
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('loadJS', $context, $blocks);
        // line 18
        echo "
var ge";
        // line 19
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ";
function fGtInitCallback";
        // line 20
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "() {
    var canWrite=true; //this is the default for test purposes

    // here starts gantt initialization
    ge";
        // line 24
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = new GanttMaster();
    ge";
        // line 25
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".set100OnClose=false;
    ge";
        // line 26
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".fillWithEmptyLines=false;
    ge";
        // line 27
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".shrinkParent=false;
\tge";
        // line 28
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".idGantt=\"";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\";
    ge";
        // line 29
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".permissions = {
        canWriteOnParent: false,
        canWrite: false,
        canAdd: false,
        canDelete: false,
        canInOutdent: false,
        canMoveUpDown: false,
        canSeePopEdit: false,
        canSeeFullEdit: false,
        canSeeDep: true,
        canSeeCriticalPath: true,
        canAddIssue: false,
        cannotCloseTaskIfIssueOpen: false
    };
    ge";
        // line 43
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".resourceUrl = \"";
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/asset/lib/jQueryGantt/res/\";
\tge";
        // line 44
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".init(\$(\"#workSpace";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\"));
    ge";
        // line 45
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".setHoursOn(\"2880000\",\"6480000\",\"";
        echo ($context["dateFormat"] ?? null);
        echo "\",\"6000\");
    loadI18n(); //overwrite with localized ones

    //in order to force compute the best-fitting zoom level
    delete ge";
        // line 49
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".gantt.zoom;

\tif (\$(\"#workSpace";
        // line 51
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\").closest('.ui-tabs-panel').length > 0)
\t{
\t\tvar tabPanel=\$(\"#workSpace";
        // line 53
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "\").closest('.ui-tabs-panel').attr(\"aria-labelledby\");
\t\t\$(\"li[aria-labelledby=\"+tabPanel+\"]\").click( function(){waitAndReload";
        // line 54
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();});
\t}
\tloadGanttFromServer";
        // line 56
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(0, alert);
}

function waitAndReload";
        // line 59
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(){
\tsetTimeout(
\t\t\tfunction(){
\t\t\t\tge";
        // line 62
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".splitter.resize(50);
\t\t\t\tge";
        // line 63
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".redraw();
\t\t\t} , 500);
}

function loadGanttFromServer";
        // line 67
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(taskId, callback) {
//    console.debug('sScope:'+";
        // line 68
        echo ($context["sScope"] ?? null);
        echo ");
    \$.post('";
        // line 69
        echo ($context["sAbsUrlModulesRoot"] ?? null);
        echo "combodo-gantt-view/ajax.php?operation=GetProject',
\t\t    ";
        // line 70
        echo ($context["sScope"] ?? null);
        echo ",null,'json')
        .done(function(data){
            ge";
        // line 72
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".loadProject(data);
            ge";
        // line 73
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".checkpoint(); //empty the undo stack

\t        ";
        // line 75
        if ((($context["bPrintable"] ?? null) != 1)) {
            // line 76
            echo "\t\t        var maxHeight=ge";
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".rowHeight*data.tasks.length+60;
\t            var myHeight=Math.min( \$(window).height() - \$('#TWGanttArea";
            // line 77
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').position().top, maxHeight);
\t            \$('#TWGanttArea";
            // line 78
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').css('height', myHeight+'px');
\t\t        \$('#TWGanttArea";
            // line 79
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').css('max-height', maxHeight+'px');
\t            \$('#TWGanttArea";
            // line 80
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo "').find(\".splitBox2\").scrollLeft(700);

\t\t        //scrollTop: \$(this).offset().top + \$(this).height() / 2;
\t        ";
        } else {
            // line 84
            echo "\t            ge";
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".isPrintable=true;
\t            ge";
            // line 85
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".resize();
\t        ";
        }
        // line 87
        echo "        });



}

function saveGanttOnServer() {

    //this is a simulation: save data to the local storage or to the textarea

    /*
\tvar prj = ge.saveProject();

\tdelete prj.resources;
\tdelete prj.roles;

\tvar prof = new Profiler(\"saveServerSide\");
\tprof.reset();

\tif (ge.deletedTaskIds.length>0) {
\t  if (!confirm(\"TASK_THAT_WILL_BE_REMOVED\\n\"+ge.deletedTaskIds.length)) {
\t\treturn;
\t  }
\t}

\t\$.ajax(\"ganttAjaxController.jsp\", {
\t  dataType:\"json\",
\t  data: {CM:\"SVPROJECT\",prj:JSON.stringify(prj)},
\t  type:\"POST\",

\t  success: function(response) {
\t\tif (response.ok) {
\t\t  prof.stop();
\t\t  if (response.project) {
\t\t\tge.loadProject(response.project); //must reload as \"tmp_\" ids are now the good ones
\t\t  } else {
\t\t\tge.reset();
\t\t  }
\t\t} else {
\t\t  var errMsg=\"Errors saving project\\n\";
\t\t  if (response.message) {
\t\t\terrMsg=errMsg+response.message+\"\\n\";
\t\t  }

\t\t  if (response.errorMessages.length) {
\t\t\terrMsg += response.errorMessages.join(\"\\n\");
\t\t  }

\t\t  alert(errMsg);
\t\t}
\t  }

\t});
\t*/
}

//-------------------------------------------  Get project file as JSON (used for migrate project from gantt to Teamwork) ------------------------------------------------------
function getFile() {
    \$(\"#gimBaPrj\").val(JSON.stringify(ge";
        // line 145
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo ".saveProject()));
    \$(\"#gimmeBack\").submit();
    \$(\"#gimBaPrj\").val(\"\");

    /*  var uriContent = \"data:text/html;charset=utf-8,\" + encodeURIComponent(JSON.stringify(prj));
\t neww=window.open(uriContent,\"dl\");*/
}

function showBaselineInfo (event,element){
    //alert(element.attr(\"data-label\"));
    \$(element).showBalloon(event, \$(element).attr(\"data-label\"));
    ge";
        // line 156
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo ".splitter.secondBox.one(\"scroll\",function(){
        \$(element).hideBalloon();
    })
}

function loadI18n(){
    GanttMaster.messages = {
        \"CANNOT_WRITE\":\"No permission to change the following task:\",
        \"CHANGE_OUT_OF_SCOPE\":\"Project update not possible as you lack rights for updating a parent project.\",
        \"TASK_HAS_CONSTRAINTS\":\"Task has constraints.\",
        \"GANTT_ERROR_DEPENDS_ON_OPEN_TASK\":\"Error: there is a dependency on an open task.\",
        \"GANTT_ERROR_DESCENDANT_OF_CLOSED_TASK\":\"Error: due to a descendant of a closed task.\",
        \"TASK_HAS_EXTERNAL_DEPS\":\"This task has external dependencies.\",
        \"GANNT_ERROR_LOADING_DATA_TASK_REMOVED\":\"GANNT_ERROR_LOADING_DATA_TASK_REMOVED\",
        \"CIRCULAR_REFERENCE\":\"Circular reference.\",
        \"CANNOT_DEPENDS_ON_ANCESTORS\":\"Cannot depend on ancestors.\",
        \"INVALID_DATE_FORMAT\":\"The data inserted are invalid for the field format.\",
        \"GANTT_ERROR_LOADING_DATA_TASK_REMOVED\":\"An error has occurred while loading the data. A task has been trashed.\",
        \"CANNOT_CLOSE_TASK_IF_OPEN_ISSUE\":\"Cannot close a task with open issues\",
        \"TASK_MOVE_INCONSISTENT_LEVEL\":\"You cannot exchange tasks of different depth.\",
        \"CANNOT_MOVE_TASK\":\"CANNOT_MOVE_TASK\",
        \"PLEASE_SAVE_PROJECT\":\"PLEASE_SAVE_PROJECT\",
        \"GANTT_SEMESTER\":\"Semester\",
        \"GANTT_SEMESTER_SHORT\":\"s.\",
        \"GANTT_QUARTER\":\"Quarter\",
        \"GANTT_QUARTER_SHORT\":\"q.\",
        \"GANTT_WEEK\":\"Week\",
        \"GANTT_WEEK_SHORT\":\"w.\"
    };
}";
    }

    // line 17
    public function block_loadJS($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "./GanttViewer.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 17,  343 => 156,  329 => 145,  269 => 87,  264 => 85,  259 => 84,  252 => 80,  248 => 79,  244 => 78,  240 => 77,  235 => 76,  233 => 75,  228 => 73,  224 => 72,  219 => 70,  215 => 69,  211 => 68,  207 => 67,  200 => 63,  196 => 62,  190 => 59,  184 => 56,  179 => 54,  175 => 53,  170 => 51,  165 => 49,  156 => 45,  150 => 44,  144 => 43,  127 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  98 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  79 => 14,  72 => 12,  66 => 11,  57 => 10,  52 => 8,  48 => 7,  41 => 6,  38 => 5,  33 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./GanttViewer.js.twig", "/var/www/html/itop-web/env-production/combodo-gantt-view/view/GanttViewer.js.twig");
    }
}
