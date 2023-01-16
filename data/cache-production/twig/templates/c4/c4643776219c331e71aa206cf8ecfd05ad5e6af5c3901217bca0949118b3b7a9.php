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

/* application/display-block/block-chart-ajax-bars/layout.js.twig */
class __TwigTemplate_5ba71a02a2fbdb84504f389b8332a02fa3731c05566d161ae1e9babc889915f8 extends \Twig\Template
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
        // line 3
        echo "var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), "html", null, true);
        echo "'),
    data: {
        json: ";
        // line 6
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJson", []);
        echo ",
        keys: {
            x: 'label',
            value: [\"value\"]
        },
        onclick: function (d) {
            var aURLs = ";
        // line 12
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJSURLs", []);
        echo ";
            window.location.href = aURLs[d.index];
        },
        selection: {
            enabled: true
        },
        type: 'bar'
    },
    axis: {
        x: {
            tick: {
                culling: {max: 25}, // Maximum 24 labels on x axis (2 years).
                centered: true,
                rotate: 90,
                multiline: false
            },
            type: 'category'   // this needed to load string x value
        }
    },
    grid: {
        y: {
            show: true
        }
    },
    legend: {
        show: false
    },
    tooltip: {
        grouped: false,
        format: {
            title: function() { return '' },
            name: function (name, ratio, id, index) {
                var aNames = ";
        // line 44
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJSNames", []);
        echo ";
                return aNames[index];
            }
        }
    }
});

if (typeof(charts) === \"undefined\")
{
    charts = [];
\trefreshChart = [];
}
var idxChart=charts.length;
charts.push(chart);
var refreshChart";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
        echo " = '\$.post(\"";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sURLForRefresh", []);
        echo "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t'})';
refreshChart.push(refreshChart";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
        echo ");";
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart-ajax-bars/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 62,  99 => 58,  82 => 44,  47 => 12,  38 => 6,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart-ajax-bars/layout.js.twig", "/var/www/html/itop-web/templates/application/display-block/block-chart-ajax-bars/layout.js.twig");
    }
}
