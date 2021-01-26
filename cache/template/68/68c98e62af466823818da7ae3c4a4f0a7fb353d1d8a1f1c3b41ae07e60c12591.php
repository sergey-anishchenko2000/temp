<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/pavmegamenu/pavmegamenu.twig */
class __TwigTemplate_40c9635ea364980a822397c6a891fa22fef36c949a3cf0b6c86615d6d0e40f8f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--
/******************************************************
 * @package Pav Megamenu module for Opencart 3.0.x
 * @version 3.0
 * @author http://www.pavothemes.com
 * @copyright\tCopyright (C) Oct 2017 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license\t\tGNU General Public License version 2
*******************************************************/
-->

";
        // line 11
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " ";
        $context["module_row"] = 0;
        // line 12
        echo "
<div id=\"content\">
\t
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button class=\"btn btn-primary\" title=\"";
        // line 18
        echo ($context["button_save"] ?? null);
        echo "\" onclick=\"\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t\t<a class=\"btn btn-info\" title=\"";
        // line 19
        echo ($context["button_save_edit"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('save-edit');\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save_edit"] ?? null);
        echo "</a>
\t\t\t\t<a class=\"btn btn-success\" title=\"";
        // line 20
        echo ($context["button_save_new"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('save-new');\$('#form').submit();\"><i class=\"fa fa-book\"></i> ";
        echo ($context["button_save_new"] ?? null);
        echo "</a> | 
\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 21
        echo ($context["button_cancel"] ?? null);
        echo "\" href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" ><i class=\"fa fa-book\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a> | 
\t\t\t\t<a class=\"btn btn-info\" title=\"Guide\" id=\"btn-guide\" href=\"http://www.pavothemes.com/guides/pav_megamenu/\"><i class=\"fa fa-book\"></i>Guide</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
            echo "\t\t        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "</a></li>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div id=\"page-content\" class=\"container-fluid\">

\t\t";
        // line 35
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "\t    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 40
        echo "\t
\t\t<div id=\"ajaxloading\" class=\"hide\">
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">";
        // line 42
        echo ($context["text_process_request"] ?? null);
        echo "</div>
\t\t</div>

\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul id=\"grouptabs\" class=\"nav nav-tabs hidden\" role=\"tablist\">
\t\t\t\t\t<li class=\"active\"><a href=\"#manage-menus\" role=\"tab\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_manage_megamenus"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#manage-widgets\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_manage_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane hidden\" id=\"manage-widgets\">
\t\t\t\t\t\t<p><i>";
        // line 57
        echo ($context["text_explain_widgets"] ?? null);
        echo "</i></p>
\t\t\t\t\t\t<a class=\"btn btn-info btn-modal\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
        // line 58
        echo ($context["user_token"] ?? null);
        echo "\" >";
        echo ($context["text_create_widget"] ?? null);
        echo "</a>
\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>\t
\t\t\t\t\t\t\t\t<td>";
        // line 62
        echo ($context["text_widget_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 63
        echo ($context["text_widget_type"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 64
        echo ($context["text_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 67
        if (twig_test_iterable(($context["widgets"] ?? null))) {
            // line 68
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "name", [], "any", false, false, false, 70);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 71
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 71);
                echo " ";
                echo (($context["text_widget_"] ?? null) . ($context["type"] ?? null));
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a class=\"btn-action-widget btn-modal\" rel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
                // line 72
                echo ($context["user_token"] ?? null);
                echo "&id=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 72);
                echo "&wtype=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 72);
                echo "\">";
                echo ($context["text_edit"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t| 
\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('";
                // line 74
                echo ($context["text_confirm_delete"] ?? null);
                echo "');\"\trel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/delwidget&user_token=";
                echo ($context["user_token"] ?? null);
                echo "&id=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 74);
                echo "&wtype=";
                echo twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 74);
                echo "\">";
                echo ($context["text_delete"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div><!-- div.panel > manage-widgets -->

\t\t\t\t\t<div class=\"tab-pane active\" id=\"manage-menus\">
\t\t\t\t\t\t<form action=\"";
        // line 83
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" title=\"";
        // line 87
        echo ($context["button_import_categories"] ?? null);
        echo "\" onclick=\"\$('#save_mode').val('import-categories');\$('#form').submit();\">";
        echo ($context["button_import_categories"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 88
        echo ($context["button_delete_categories"] ?? null);
        echo "\" data-toggle=\"modal\" data-target=\".deleteTree-modal-sm\">";
        echo ($context["button_delete_categories"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<select class=\"form-control pull-right\" name=\"stores\" id=\"pavstores\" style=\"width: 20%;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 95) == ($context["store_id"] ?? null))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 96);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 96);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 98);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t \t\t<span class=\"pull-right\" style=\"font-weight:bold;\"> ";
        // line 102
        echo ($context["entry_filter_store"] ?? null);
        echo " </span>
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 103
        echo ($context["store_id"] ?? null);
        echo "\" name=\"megamenu[store_id]\"/></br></br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><br/><br/>

\t\t\t\t\t\t\t<div class=\"megamenu\">
\t\t\t\t\t\t\t\t<div class=\"tree-megamenu\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 110
        echo ($context["text_treemenu"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 111
        echo ($context["button_update_order"] ?? null);
        echo "</a>\t
\t\t\t\t\t\t\t\t\t";
        // line 112
        echo ($context["tree"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 113
        echo ($context["button_update_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<p class=\"note\"><i>";
        // line 114
        echo ($context["text_explain_drapanddrop"] ?? null);
        echo "</i></p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- end div.megamenu -->

\t\t\t\t\t\t\t<div class=\"megamenu-form\">
\t\t\t\t\t\t\t\t<div id=\"megamenu-form\">
\t\t\t\t\t\t\t\t\t";
        // line 121
        $this->loadTemplate("extension/module/pavmegamenu/pavmegamenu_form.twig", "extension/module/pavmegamenu/pavmegamenu.twig", 121)->display($context);
        // line 122
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end div.megamenu-form -->

\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"save_mode\" id=\"save_mode\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!-- div.panel > manage-menus -->


\t\t\t\t</div>
\t\t\t</div>

\t\t</div><!-- end div.panel panel-default -->
\t\t<div id=\"info\" style=\"font-size:10px;color:#666\"><p>Pav Mega Menu is free to use. it's released under GPL/V2. Powered By <a href=\"http://www.pavothemes.com\">PavoThemes.Com</a></div>

\t</div><!-- container-fluid -->
</div>

 \t<!-- Modal Form-->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t          \t<h4 class=\"modal-title\">";
        // line 146
        echo ($context["text_preview_on_live_site"] ?? null);
        echo "</h4>
\t\t        </div>
\t        \t<div class=\"modal-body\"></div>
\t\t        <div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 150
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t        </div>
\t      \t</div> 
\t    </div> 
\t</div>

\t<!-- Modal confirm dialog -->
\t<div id=\"cmodal\" class=\"modal fade deleteTree-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
\t  \t<div class=\"modal-dialog modal-sm\">
\t\t    <div class=\"modal-content\">
\t\t    \t<div class=\"modal-body\">
\t\t         \t";
        // line 161
        echo ($context["message_delete_category"] ?? null);
        echo "
\t\t        </div>
\t\t     \t<div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 164
        echo ($context["text_close"] ?? null);
        echo "</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" id=\"btnDeleteTree\">";
        // line 165
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t        </div>
\t\t        <input id=\"menuid\" type=\"hidden\" name=\"menuid\" value=\"0\"/>
\t\t    </div>
\t  \t</div>
\t</div>
  
<script type=\"text/javascript\"><!--
\t
\t// Drag and Drop menu Item
\t\$('ol.sortable').nestedSortable({
\t\tforcePlaceholderSize: true,
\t\thandle: 'div',
\t\thelper:\t'clone',
\t\titems: 'li',
\t\topacity: .6,
\t\tplaceholder: 'placeholder',
\t\trevert: 250,
\t\ttabSize: 25,
\t\ttolerance: 'pointer',
\t\ttoleranceElement: '> div',
\t\tmaxLevels: 4,

\t\tisTree: true,
\t\texpandOnHover: 700,
\t\tstartCollapsed: true
\t});
\t
\t\$('#serialize, .btn-updatetree').click(function(){
\t\t\tvar serialized = \$('ol.sortable').nestedSortable('serialize');
\t\t\t\$.ajax({
\t\t\tasync : false,
\t\t\ttype: 'POST',
\t\t\tdataType:'json',
\t\t\turl: \"";
        // line 199
        echo ($context["updateTree"] ?? null);
        echo "\",
\t\t\tdata : serialized, 
\t\t\tsuccess : function (r) { 
\t\t
\t\t\t\tif (\$('#msg-tree').length > 0 ) { 
\t\t\t\t\t\$(\"#page-content\").remove('#msg-tree');
\t\t\t\t} else {
\t\t\t\t\tvar html = \"<div id='msg-tree' class='alert alert-success'><i class='fa fa-check-circle'></i>";
        // line 206
        echo ($context["text_success_update_tree"] ?? null);
        echo "<button type='button' class='close' data-dismiss='alert'>×</button></div>\";
\t\t\t\t\t\$(\"#ajaxloading\").before(html);
\t\t\t\t\t//Scroll up
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t// Mutiple Store
\t\$('#pavstores').bind('change', function () {
\t\turl = 'index.php?route=extension/module/pavmegamenu&user_token=";
        // line 217
        echo ($context["user_token"] ?? null);
        echo "';
\t\tvar id = \$(this).val();
\t\tif (id) {
\t\t\turl += '&store_id=' + encodeURIComponent(id);
\t\t}
\t\twindow.location = url;
\t});

\t// Modal delete tree categories
\t\$('#btnDeleteTree').click(function() {
\t\tvar id = \$(\"#menuid\").val();
\t\tif(id == 0) {
\t\t\t\$(\"#save_mode\").val('delete-categories');
\t\t\t\$('#form').submit();\t
\t\t} else {
\t\t\twindow.location.href=\"";
        // line 232
        echo ($context["actionDel"] ?? null);
        echo "&id=\"+id;
\t\t}
\t\t
\t});

\t\$(\".quickdel\").click(function(){
\t\t\$('#cmodal .modal-body').html( \"";
        // line 238
        echo ($context["message_delete"] ?? null);
        echo "\" );
\t\t\$('#cmodal').modal();
\t\tvar id = \$(this).attr(\"rel\").replace(\"id_\",\"\");
\t\t\$(\"#menuid\").val(id);
\t\treturn false;
\t});

\t// Ajax load
\t\$(document).ajaxSend(function() {
\t\t\$(\"#ajaxloading\").show();
\t});
\t\$(document).ajaxComplete(function() {
\t\t\$(\"#ajaxloading\").hide();
\t});

\t// Cookies tab
\t\$('#grouptabs a').click( function(){
\t\t\$.cookie(\"megaactived_tab\", \$(this).attr(\"href\") );
\t});

\tif(\$.cookie(\"megaactived_tab\") !=\"undefined\"){
\t\t\$('#grouptabs a').each( function(){
\t\t\tif( \$(this).attr(\"href\") ==  \$.cookie(\"megaactived_tab\")){
\t\t\t\t\$(this).click();
\t\t\t\treturn ;
\t\t\t}
\t\t});
\t}

\t// Modal Link guide
\t\$(\"#btn-guide\").click( function(){
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal();
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t} );
\t\treturn false;
\t});

\t// Modal Create widget
\t\$(\".btn-modal\").click( function(){ 
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal( );
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t});

\t\treturn false;
\t});
\t\$('#myModal').on('hidden.bs.modal', function () { 
\t \t if( \$(this).attr('rel') == 'refresh-page' ){
\t \t \twindow.parent.location.reload();
\t \t }
\t});
//-->
</script>

";
        // line 305
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/pavmegamenu/pavmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 305,  488 => 238,  479 => 232,  461 => 217,  447 => 206,  437 => 199,  400 => 165,  396 => 164,  390 => 161,  376 => 150,  369 => 146,  343 => 122,  341 => 121,  331 => 114,  327 => 113,  323 => 112,  319 => 111,  315 => 110,  305 => 103,  301 => 102,  298 => 101,  292 => 100,  284 => 98,  276 => 96,  273 => 95,  269 => 94,  258 => 88,  252 => 87,  245 => 83,  239 => 79,  236 => 78,  218 => 74,  207 => 72,  201 => 71,  197 => 70,  194 => 69,  189 => 68,  187 => 67,  181 => 64,  177 => 63,  173 => 62,  164 => 58,  160 => 57,  152 => 52,  148 => 51,  141 => 47,  133 => 42,  129 => 40,  121 => 36,  119 => 35,  111 => 29,  100 => 27,  96 => 26,  91 => 24,  81 => 21,  75 => 20,  69 => 19,  63 => 18,  55 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/pavmegamenu/pavmegamenu.twig", "");
    }
}
