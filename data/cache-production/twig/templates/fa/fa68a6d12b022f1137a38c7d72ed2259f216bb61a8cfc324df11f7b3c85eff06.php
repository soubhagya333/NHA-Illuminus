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

/* base/components/popover-menu/item/layout.html.twig */
class __TwigTemplate_cab377d485953fb546b4751a728463d7d954dd038439444ef2e59c150cadc253 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPopoverMenuItem' => [$this, 'block_iboPopoverMenuItem'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('iboPopoverMenuItem', $context, $blocks);
    }

    public function block_iboPopoverMenuItem($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/item/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/item/layout.html.twig", "/var/www/html/itop-web/templates/base/components/popover-menu/item/layout.html.twig");
    }
}
