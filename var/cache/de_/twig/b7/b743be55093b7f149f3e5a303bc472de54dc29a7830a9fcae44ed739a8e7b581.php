<?php

/* ::base.html.twig */
class __TwigTemplate_47c689abcffde2fac61ec8ce837be2d9c105be9d3c9868c708eebc927f8ffbde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a28e0ca5bf876c15d1a9969de91fd3abbb5c08801646b7be9c5e32b4aada6a35 = $this->env->getExtension("native_profiler");
        $__internal_a28e0ca5bf876c15d1a9969de91fd3abbb5c08801646b7be9c5e32b4aada6a35->enter($__internal_a28e0ca5bf876c15d1a9969de91fd3abbb5c08801646b7be9c5e32b4aada6a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
    </head>
    <body>
    ";
        // line 19
        echo "    <div id=\"outer-wrap\">
        <nav class=\"mainNav\">
            <img  class=\"menuFooterLogo\" src=\"http://i.imgur.com/ZCQGy2u.png\">
            <div class=\"beforeNav\">
                ";
        // line 24
        echo "                <div class=\"beforeNavName  hidden-xs\">
                    ";
        // line 25
        if (array_key_exists("user", $context)) {
            // line 26
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</p>
                    ";
        } else {
            // line 28
            echo "                        <p>Kfdsio</p>
                    ";
        }
        // line 30
        echo "                </div>
            </div>
            <ul>
                <li class=\"selected\" ><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"bold\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;   NEWS</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"bold\"><span class=\"glyphicon glyphicon-list-alt\"></span>&nbsp;   FICHE PERSO</a></li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\" class=\"bold\"><span class=\"glyphicon glyphicon-thumbs-up\"></span>&nbsp;   MON GROUPE</a></li>
                <li><a href=\"calendar.html\" class=\"bold\"><span class=\"glyphicon glyphicon-calendar\"></span>&nbsp;   CALENDRIER EVENT</a></li>
            </ul>
            <div class=\"menuFooter\">
            </div>
        </nav>
        ";
        // line 41
        $this->displayBlock('container', $context, $blocks);
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    </div>
    </body>
</html>
";
        
        $__internal_a28e0ca5bf876c15d1a9969de91fd3abbb5c08801646b7be9c5e32b4aada6a35->leave($__internal_a28e0ca5bf876c15d1a9969de91fd3abbb5c08801646b7be9c5e32b4aada6a35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_033b0bb1669d01a4996273cb2ecb7c820e8cd102a4d6f080b80ef83aacb33a87 = $this->env->getExtension("native_profiler");
        $__internal_033b0bb1669d01a4996273cb2ecb7c820e8cd102a4d6f080b80ef83aacb33a87->enter($__internal_033b0bb1669d01a4996273cb2ecb7c820e8cd102a4d6f080b80ef83aacb33a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DieAndRetry";
        
        $__internal_033b0bb1669d01a4996273cb2ecb7c820e8cd102a4d6f080b80ef83aacb33a87->leave($__internal_033b0bb1669d01a4996273cb2ecb7c820e8cd102a4d6f080b80ef83aacb33a87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_caa8cff1f3dd96783e065d9c83562befeaa403f7c7eff9fa5841b9af75c0aa2b = $this->env->getExtension("native_profiler");
        $__internal_caa8cff1f3dd96783e065d9c83562befeaa403f7c7eff9fa5841b9af75c0aa2b->enter($__internal_caa8cff1f3dd96783e065d9c83562befeaa403f7c7eff9fa5841b9af75c0aa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b4d9cad_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4d9cad_0") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app_part_1_main_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "b4d9cad_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4d9cad_1") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app_part_1_reset_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "b4d9cad_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4d9cad_2") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app_part_1_style_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "b4d9cad"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4d9cad") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/app.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.css\">
            <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.print.css\">
        ";
        
        $__internal_caa8cff1f3dd96783e065d9c83562befeaa403f7c7eff9fa5841b9af75c0aa2b->leave($__internal_caa8cff1f3dd96783e065d9c83562befeaa403f7c7eff9fa5841b9af75c0aa2b_prof);

    }

    // line 41
    public function block_container($context, array $blocks = array())
    {
        $__internal_35e96d807de60e56844d847a1ccb84156b04ee26ad52f46db1811c26469ea1d4 = $this->env->getExtension("native_profiler");
        $__internal_35e96d807de60e56844d847a1ccb84156b04ee26ad52f46db1811c26469ea1d4->enter($__internal_35e96d807de60e56844d847a1ccb84156b04ee26ad52f46db1811c26469ea1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 42
        echo "        <div class=\"container\" style=\"width:80%; margin-left:20%; max-width:80%;\">
            <div class=\"row\">
                <div class=\"col-md-12\" id=\"news\">
                ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                </div>
            </div>
        </div>
        ";
        
        $__internal_35e96d807de60e56844d847a1ccb84156b04ee26ad52f46db1811c26469ea1d4->leave($__internal_35e96d807de60e56844d847a1ccb84156b04ee26ad52f46db1811c26469ea1d4_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_db4c426585f9b3428cf5bc1ac976c007b4ef7073aec0da89dbb2ae0fbcf51a10 = $this->env->getExtension("native_profiler");
        $__internal_db4c426585f9b3428cf5bc1ac976c007b4ef7073aec0da89dbb2ae0fbcf51a10->enter($__internal_db4c426585f9b3428cf5bc1ac976c007b4ef7073aec0da89dbb2ae0fbcf51a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db4c426585f9b3428cf5bc1ac976c007b4ef7073aec0da89dbb2ae0fbcf51a10->leave($__internal_db4c426585f9b3428cf5bc1ac976c007b4ef7073aec0da89dbb2ae0fbcf51a10_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b190a3737a9561fe0fb30b4e90d9fb965af729eb91d8c9e61316b6bb06e2dd07 = $this->env->getExtension("native_profiler");
        $__internal_b190a3737a9561fe0fb30b4e90d9fb965af729eb91d8c9e61316b6bb06e2dd07->enter($__internal_b190a3737a9561fe0fb30b4e90d9fb965af729eb91d8c9e61316b6bb06e2dd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.js\"></script>
            ";
        // line 57
        echo "            ";
        // line 58
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57456fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_0") : $this->env->getExtension('asset')->getAssetUrl("js/57456fa_part_1_index_1.js");
            // line 59
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "57456fa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_1") : $this->env->getExtension('asset')->getAssetUrl("js/57456fa_part_1_main_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "57456fa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_2") : $this->env->getExtension('asset')->getAssetUrl("js/57456fa_part_1_navAccordion.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "57456fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa") : $this->env->getExtension('asset')->getAssetUrl("js/57456fa.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "            <script>
                jQuery(document).ready(function(){
                    jQuery('.mainNav').navAccordion({
                                expandButtonText: '<i class=\"fa fa-plus\"></i>',
                                collapseButtonText: '<i class=\"fa fa-minus\"></i>'
                            },
                            function(){
                                console.log('Callback')
                            });
                });
            </script>
        ";
        
        $__internal_b190a3737a9561fe0fb30b4e90d9fb965af729eb91d8c9e61316b6bb06e2dd07->leave($__internal_b190a3737a9561fe0fb30b4e90d9fb965af729eb91d8c9e61316b6bb06e2dd07_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  219 => 59,  214 => 58,  212 => 57,  206 => 52,  200 => 51,  189 => 45,  179 => 46,  177 => 45,  172 => 42,  166 => 41,  155 => 10,  129 => 8,  124 => 7,  118 => 6,  106 => 5,  96 => 73,  94 => 51,  91 => 50,  89 => 41,  80 => 35,  76 => 34,  72 => 33,  67 => 30,  63 => 28,  57 => 26,  55 => 25,  52 => 24,  46 => 19,  39 => 15,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}DieAndRetry{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets 'bundles/user/css/*' filter='cssrewrite' output='css/compiled/app.css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.css">*/
/*             <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.print.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2" />*/
/*     </head>*/
/*     <body>*/
/*     {#{% include "ComurImageBundle:Form:croppable_image_modal.html.twig" with {'include_jquery': false, 'include_bootstrap': false} %}#}*/
/*     <div id="outer-wrap">*/
/*         <nav class="mainNav">*/
/*             <img  class="menuFooterLogo" src="http://i.imgur.com/ZCQGy2u.png">*/
/*             <div class="beforeNav">*/
/*                 {#<img src="images/profil.png" class="beforeNavPhoto">#}*/
/*                 <div class="beforeNavName  hidden-xs">*/
/*                     {% if user is defined %}*/
/*                     <p>{{ user.username }}</p>*/
/*                     {% else %}*/
/*                         <p>Kfdsio</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <ul>*/
/*                 <li class="selected" ><a href="{{ path('index') }}" class="bold"><span class="glyphicon glyphicon-home"></span>&nbsp;   NEWS</a></li>*/
/*                 <li><a href="{{ path('fos_user_profile_show') }}" class="bold"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;   FICHE PERSO</a></li>*/
/*                 <li><a href="{{ path('group') }}" class="bold"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;   MON GROUPE</a></li>*/
/*                 <li><a href="calendar.html" class="bold"><span class="glyphicon glyphicon-calendar"></span>&nbsp;   CALENDRIER EVENT</a></li>*/
/*             </ul>*/
/*             <div class="menuFooter">*/
/*             </div>*/
/*         </nav>*/
/*         {% block container %}*/
/*         <div class="container" style="width:80%; margin-left:20%; max-width:80%;">*/
/*             <div class="row">*/
/*                 <div class="col-md-12" id="news">*/
/*                 {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>*/
/*             <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.8.0/fullcalendar.min.js"></script>*/
/*             {#<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>#}*/
/*             {#<script src="{{ path('fos_js_routing_js') }}"></script>#}*/
/*             {% javascripts '@UserBundle/Resources/public/js/*' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             <script>*/
/*                 jQuery(document).ready(function(){*/
/*                     jQuery('.mainNav').navAccordion({*/
/*                                 expandButtonText: '<i class="fa fa-plus"></i>',*/
/*                                 collapseButtonText: '<i class="fa fa-minus"></i>'*/
/*                             },*/
/*                             function(){*/
/*                                 console.log('Callback')*/
/*                             });*/
/*                 });*/
/*             </script>*/
/*         {% endblock %}*/
/*     </div>*/
/*     </body>*/
/* </html>*/
/* */
