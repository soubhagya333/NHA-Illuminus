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

/* base/layouts/object/object-details/layout.html.twig */
class __TwigTemplate_c4c0cd09766f0fd7531e34235efc153b03b6f3e47e06e5a25c79b969047d9316 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base/components/panel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/components/panel/layout.html.twig", "base/layouts/object/object-details/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboPanelMetaData($context, array $blocks = [])
    {
        // line 6
        echo "    data-object-class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetClassName", [], "method"), "html", null, true);
        echo "\"
    data-object-id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectId", [], "method"), "html", null, true);
        echo "\"
    data-object-mode=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectMode", [], "method"), "html", null, true);
        echo "\"
    ";
        // line 9
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasStatus", [], "method")) {
            echo "data-object-state=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetStatusCode", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 10
        echo "    data-role=\"ibo-object-details\"
";
    }

    // line 13
    public function block_iboPanelSubTitle($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method"))) {
            // line 15
            echo "        <span class=\"ibo-object-details--status\" data-role=\"ibo-object-details--status\" data-status-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetStatusCode", [], "method"), "html", null, true);
            echo "\">
            <span class=\"ibo-object-details--status-dot\" data-role=\"ibo-object-details--status-dot\" style=\"background-color: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetStatusColor", [], "method"), "html", null, true);
            echo ";\"></span>
            <span class=\"ibo-object-details--status-label\" data-role=\"ibo-object-details--status-label\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 20
        echo "    <span class=\"ibo-object-details--object-class\" data-role=\"ibo-object-details--object-class\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetClassLabel", [], "method"), "html", null, true);
        echo "</span>
    ";
        // line 21
        $this->displayParentBlock("iboPanelSubTitle", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/layouts/object/object-details/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  88 => 20,  82 => 17,  78 => 16,  73 => 15,  70 => 14,  67 => 13,  62 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 6,  40 => 5,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/object/object-details/layout.html.twig", "/var/www/html/itop-web/templates/base/layouts/object/object-details/layout.html.twig");
    }
}
