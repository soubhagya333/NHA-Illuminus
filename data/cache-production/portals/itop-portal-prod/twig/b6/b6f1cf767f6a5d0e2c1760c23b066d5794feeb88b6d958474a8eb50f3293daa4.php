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

/* itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig */
class __TwigTemplate_3d80c8de0ac40b60fa8dffd12dc45372e9d65f871e32cb4ee6521ed33acb3e1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pUserProfileWrapper' => [$this, 'block_pUserProfileWrapper'],
            'pUserProfilePictureFormContainer' => [$this, 'block_pUserProfilePictureFormContainer'],
            'pUserProfilePreferencesFormContainer' => [$this, 'block_pUserProfilePreferencesFormContainer'],
            'pUserProfilePasswordFormContainer' => [$this, 'block_pUserProfilePasswordFormContainer'],
            'pUserProfileFormButtons' => [$this, 'block_pUserProfileFormButtons'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 5
        $context["oContactForm"] = $this->getAttribute(($context["forms"] ?? null), "contact", []);
        // line 6
        $context["oPreferencesForm"] = $this->getAttribute(($context["forms"] ?? null), "preferences", []);
        // line 7
        $context["oPasswordForm"] = $this->getAttribute(($context["forms"] ?? null), "password", []);
        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/layout.html.twig", "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_user-profile_brick";
    }

    // line 11
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        // line 12
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetTitle", [], "method")]), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        // line 16
        echo "\t";
        if (($context["bDemoMode"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-warning\">
\t\t\t<span class=\"fas fa-info fa-2x\" style=\"margin-right: 10px; vertical-align: sub;\"></span>
\t\t\tUser profile edition is not available in demo mode.
\t\t</div>
\t";
        }
        // line 22
        echo "
\t<div id=\"user-profile-wrapper\">
\t\t";
        // line 24
        $this->displayBlock('pUserProfileWrapper', $context, $blocks);
        // line 144
        echo "\t</div>
";
    }

    // line 24
    public function block_pUserProfileWrapper($context, array $blocks = [])
    {
        // line 25
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:PersonalInformations:Title"]), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<form id=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"\" method=\"POST\" action=\"";
        echo $this->getAttribute($this->getAttribute(($context["oContactForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"transaction_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "transaction_id", []), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["oContactForm"] ?? null), "renderer", []), "GetBaseLayout", [], "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t";
        // line 47
        if ($this->getAttribute(($context["oBrick"] ?? null), "GetShowPictureForm", [], "method")) {
            // line 48
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePictureFormContainer', $context, $blocks);
            // line 83
            echo "\t\t\t\t\t";
        }
        // line 84
        echo "
            \t\t";
        // line 85
        if ($this->getAttribute(($context["oBrick"] ?? null), "GetShowPreferencesForm", [], "method")) {
            // line 86
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePreferencesFormContainer', $context, $blocks);
            // line 105
            echo "\t\t\t\t\t";
        }
        // line 106
        echo "
\t\t\t\t\t";
        // line 107
        if ($this->getAttribute(($context["oBrick"] ?? null), "GetShowPasswordForm", [], "method")) {
            // line 108
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePasswordFormContainer', $context, $blocks);
            // line 131
            echo "\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form_buttons\">
\t\t\t\t";
        // line 135
        $this->displayBlock('pUserProfileFormButtons', $context, $blocks);
        // line 142
        echo "\t\t\t</div>
\t\t";
    }

    // line 48
    public function block_pUserProfilePictureFormContainer($context, array $blocks = [])
    {
        // line 49
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default user_profile_picture\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Photo:Title"]), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form id=\"picture-form\" method=\"POST\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", [], "array"), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"current_values[form_type]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("\\Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::ENUM_FORM_TYPE_PICTURE"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"operation\" value=\"submit\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<span type=\"button\" class=\"btn btn-default btn_edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-pencil-alt fa-fw\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"picture\" type=\"file\" name=\"picture\" />
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 86
    public function block_pUserProfilePreferencesFormContainer($context, array $blocks = [])
    {
        // line 87
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Class:appUserPreferences/Attribute:preferences"]), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<form id=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oPreferencesForm"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"\" method=\"POST\" action=\"";
        echo $this->getAttribute($this->getAttribute(($context["oPreferencesForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->getAttribute($this->getAttribute(($context["oPreferencesForm"] ?? null), "renderer", []), "GetBaseLayout", [], "method");
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 108
    public function block_pUserProfilePasswordFormContainer($context, array $blocks = [])
    {
        // line 109
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Password:Title"]), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
        // line 114
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t<form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "id", []), "html", null, true);
            echo "\" class=\"\" method=\"POST\" action=\"";
            echo $this->getAttribute($this->getAttribute(($context["oPasswordForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
            echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 122
            echo $this->getAttribute($this->getAttribute(($context["oPasswordForm"] ?? null), "renderer", []), "GetBaseLayout", [], "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Brick:Portal:UserProfile:Password:CantChangeContactAdministrator", twig_constant("ITOP_APPLICATION_SHORT")]), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 135
    public function block_pUserProfileFormButtons($context, array $blocks = [])
    {
        // line 136
        echo "\t\t\t\t\t<div class=\"form_btn_regular\">
\t\t\t\t\t\t";
        // line 137
        if ((($context["sFormMode"] ?? null) == twig_constant("\\Combodo\\iTop\\Portal\\Helper\\ObjectFormHandlerHelper::ENUM_MODE_EDIT"))) {
            // line 138
            echo "\t\t\t\t\t\t\t<input class=\"btn btn-primary form_btn_submit\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Button:Submit"]), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 147
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        // line 148
        echo "\t";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "

\t// Personal informations form
\tvar oContactFormFieldSet = \$('#";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "id", []), "html", null, true);
        echo " > .form_fields').field_set(";
        echo twig_jsonencode_filter($this->getAttribute(($context["oContactForm"] ?? null), "fieldset", []));
        echo ");
\t\$('#";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "id", []), "html", null, true);
        echo "').portal_form_handler({
\t\tformmanager_class: \"";
        // line 153
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "formmanager_class", []), "js"), "html", null, true);
        echo "\",
\t\tformmanager_data: ";
        // line 154
        echo twig_jsonencode_filter($this->getAttribute(($context["oContactForm"] ?? null), "formmanager_data", []));
        echo ",
\t\tfield_set: oContactFormFieldSet,
\t\tendpoint: \"";
        // line 156
        echo $this->getAttribute($this->getAttribute(($context["oContactForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
        echo "\"
\t});

\t// Preferences form
\tvar oPreferencesFormFieldSet = \$('#";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oPreferencesForm"] ?? null), "id", []), "html", null, true);
        echo " > .form_fields').field_set(";
        echo twig_jsonencode_filter($this->getAttribute(($context["oPreferencesForm"] ?? null), "fieldset", []));
        echo ");
\t\$('#";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oPreferencesForm"] ?? null), "id", []), "html", null, true);
        echo "').portal_form_handler({
\t\tformmanager_class: \"";
        // line 162
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["oPreferencesForm"] ?? null), "formmanager_class", []), "js"), "html", null, true);
        echo "\",
\t\tformmanager_data: ";
        // line 163
        echo twig_jsonencode_filter($this->getAttribute(($context["oPreferencesForm"] ?? null), "formmanager_data", []));
        echo ",
\t\tfield_set: oPreferencesFormFieldSet,
\t\tendpoint: \"";
        // line 165
        echo $this->getAttribute($this->getAttribute(($context["oPreferencesForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
        echo "\"
\t});

\t";
        // line 168
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 169
            echo "\t\t// Password form
\t\tvar oPasswordFormFieldSet = \$('#";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "id", []), "html", null, true);
            echo " > .form_fields').field_set(";
            echo twig_jsonencode_filter($this->getAttribute(($context["oPasswordForm"] ?? null), "fieldset", []));
            echo ");
\t\t\$('#";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "id", []), "html", null, true);
            echo "').portal_form_handler({
\t\t\tformmanager_class: \"";
            // line 172
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "formmanager_class", []), "js"), "html", null, true);
            echo "\",
\t\t\tformmanager_data: ";
            // line 173
            echo twig_jsonencode_filter($this->getAttribute(($context["oPasswordForm"] ?? null), "formmanager_data", []));
            echo ",
\t\t\tfield_set: oPasswordFormFieldSet,
\t\t\tendpoint: \"";
            // line 175
            echo $this->getAttribute($this->getAttribute(($context["oPasswordForm"] ?? null), "renderer", []), "GetEndpoint", [], "method");
            echo "\"
\t\t});
\t";
        }
        // line 178
        echo "
\t// Picture form
\t// - JQuery upload widget
\t\$('#picture-form #picture').fileupload({
\t\tdataType: 'json',
\t\tacceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
\t\tdisableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent)
\t})
\t.on('fileuploadsend', function(oEvent, oData){
\t\t\$('.user_profile_picture .form_alerts .alert-error').hide()
\t\t\$('#page_overlay .overlay_content .content_loader').clone().prependTo('.user_profile_picture .panel-body');
\t})
\t.on('fileuploadalways', function(oEvent, oData){
\t\t\$('.user_profile_picture .content_loader').remove();
\t})
\t.on('fileuploaddone', function(oEvent, oData){
\t\tif( (oData._response.result.form !== undefined) && (oData._response.result.form.validation.valid === true) )
\t\t{
\t\t\t// Retrieving picture url
\t\t\tvar sPictureUrl = oData._response.result.form.picture_url;
\t\t\t// Replacing form preview image
\t\t\t\$('#picture-form .preview img').attr('src', sPictureUrl);
\t\t\t// Replacing menu image
\t\t\t\$('#topbar .user_photo, #sidebar .user_photo').css('background-image', 'url(\"' + sPictureUrl + '\")');
\t\t}
\t})
\t.on('fileuploadfail', function(oEvent, oData){
\t\tif( (oData._response.jqXHR.responseJSON !== undefined) && (oData._response.jqXHR.responseJSON.error_message !== undefined) )
\t\t{
\t\t\t\$('.user_profile_picture .form_alerts .alert-error').show().text(oData._response.jqXHR.responseJSON.error_message);
\t\t}
\t});
\t// - Undo button
\t/*\$('#user-profile-wrapper .actions .btn_undo').on('click', function(oEvent){
\t\t//console.log('Picture undo trigger');
\t});*/
\t// - Reset button
\t\$('#user-profile-wrapper .actions .btn_reset').on('click', function(oEvent){
\t\t//console.log('Picture reset trigger');
\t});

\t// Submit button
\t\$('#user-profile-wrapper .form_buttons .form_btn_submit').off('click').on('click', function(oEvent){
\t\toEvent.preventDefault();

\t\t// Resetting feedback
\t\t\$('#user-profile-wrapper .form_alerts .alert').hide();
\t\t\$('#user-profile-wrapper .form_alerts .alert > p').remove();
\t\t\$('#user-profile-wrapper .form_field').removeClass('has-error');
\t\t\$('#user-profile-wrapper .form_field .help-block > p').remove();

\t\t// Submiting contact form through AJAX
        \$('#";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oContactForm"] ?? null), "id", []), "html", null, true);
        echo "').portal_form_handler('submit', oEvent);

\t\t// Submiting preferences form through AJAX
        \$('#";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oPreferencesForm"] ?? null), "id", []), "html", null, true);
        echo "').portal_form_handler('submit', oEvent);

\t\t";
        // line 235
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 236
            echo "\t\t\t// Submiting password form through AJAX
\t\t\t// Only if fields are filled
\t\t\t\$('#";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "id", []), "html", null, true);
            echo " :password').each(function(iIndex, oElem){
\t\t\t\tif(\$(oElem).val() !== '')
\t\t\t\t{
\t\t\t\t\t\$('#";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oPasswordForm"] ?? null), "id", []), "html", null, true);
            echo "').portal_form_handler('submit', oEvent);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t";
        }
        // line 246
        echo "\t});
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 246,  495 => 241,  489 => 238,  485 => 236,  483 => 235,  478 => 233,  472 => 230,  418 => 178,  412 => 175,  407 => 173,  403 => 172,  399 => 171,  393 => 170,  390 => 169,  388 => 168,  382 => 165,  377 => 163,  373 => 162,  369 => 161,  363 => 160,  356 => 156,  351 => 154,  347 => 153,  343 => 152,  337 => 151,  330 => 148,  327 => 147,  322 => 140,  316 => 138,  314 => 137,  311 => 136,  308 => 135,  302 => 128,  296 => 126,  289 => 122,  276 => 115,  274 => 114,  268 => 111,  264 => 109,  261 => 108,  251 => 99,  239 => 92,  233 => 89,  229 => 87,  226 => 86,  217 => 77,  207 => 64,  200 => 60,  196 => 59,  185 => 51,  181 => 49,  178 => 48,  173 => 142,  171 => 135,  166 => 132,  163 => 131,  160 => 108,  158 => 107,  155 => 106,  152 => 105,  149 => 86,  147 => 85,  144 => 84,  141 => 83,  138 => 48,  136 => 47,  126 => 40,  116 => 33,  110 => 32,  104 => 29,  98 => 25,  95 => 24,  90 => 144,  88 => 24,  84 => 22,  77 => 17,  74 => 16,  71 => 15,  64 => 12,  61 => 11,  54 => 9,  49 => 3,  47 => 7,  45 => 6,  43 => 5,  37 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig", "/var/www/html/itop-web/env-production/itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig");
    }
}
