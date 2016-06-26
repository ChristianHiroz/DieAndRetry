<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8417ddd1395bb0b62641bfc08b67a3a5a8c9e1b93ca153503ca5ba9edfa66a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f58964cf11c8d8077e503e92924a720198600a628ecf51ea5eb7454398eee11 = $this->env->getExtension("native_profiler");
        $__internal_9f58964cf11c8d8077e503e92924a720198600a628ecf51ea5eb7454398eee11->enter($__internal_9f58964cf11c8d8077e503e92924a720198600a628ecf51ea5eb7454398eee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "
<div class=\"fichePerso\">
        ";
        // line 3
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "job", array(), "any", true, true)) {
            // line 4
            echo "            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Sorceress")) {
                // line 5
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sorc.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 6
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Warrior")) {
                // line 7
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/war.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 8
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Maewa")) {
                // line 9
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/maewa.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 10
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Musa")) {
                // line 11
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/musa.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 12
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Ranger")) {
                // line 13
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ranger.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 14
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Tamer")) {
                // line 15
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tamer.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 16
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Valkyrie")) {
                // line 17
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/valk.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 18
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Witch")) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/witch.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 20
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Wizard")) {
                // line 21
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wizard.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            } elseif (($this->getAttribute(            // line 22
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()) == "Berseker")) {
                // line 23
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/zerk.png"), "html", null, true);
                echo "\" class=\"beforeNavPhoto\"/>
            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "        <p>
            ";
        // line 27
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())) {
            // line 28
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 30
            echo "                Famille : N/A
            ";
        }
        // line 32
        echo "            ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 35
            echo "                Pseudo : N/A
            ";
        }
        // line 37
        echo "        </p>
        <p>
            ";
        // line 39
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array())) {
            // line 40
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 42
            echo "                Classe : N/A
            ";
        }
        // line 44
        echo "        </p>
        <p>
            ";
        // line 46
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ap", array())) {
            // line 47
            echo "                AP :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ap", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 49
            echo "                AP : N/A
            ";
        }
        // line 51
        echo "            ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dp", array())) {
            // line 52
            echo "                DP :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dp", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 54
            echo "                DP : N/A
            ";
        }
        // line 56
        echo "        </p>
        <p>
            ";
        // line 58
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hp", array())) {
            // line 59
            echo "                HP :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hp", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 61
            echo "                HP : N/A
            ";
        }
        // line 63
        echo "            ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mp", array())) {
            // line 64
            echo "                MP :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mp", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 66
            echo "                MP : N/A
            ";
        }
        // line 68
        echo "        </p>
    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\"  data-backdrop=\"false\" >Modifier</button>
    <div class=\"modal fade\" style=\"margin:40px auto auto 20%;\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modification fiche perso</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "")));
        echo "
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "nom", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "famille")));
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "prenom", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "pseudo")));
        echo "
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "job", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "classe")));
        echo "
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "level", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "level")));
        echo "
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "AP", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "ap")));
        echo "
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "DP", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "dp")));
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "HP", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "hp")));
        echo "
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "MP", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "mp")));
        echo "
                    ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9f58964cf11c8d8077e503e92924a720198600a628ecf51ea5eb7454398eee11->leave($__internal_9f58964cf11c8d8077e503e92924a720198600a628ecf51ea5eb7454398eee11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 87,  249 => 86,  245 => 85,  241 => 84,  237 => 83,  233 => 82,  229 => 81,  225 => 80,  221 => 79,  217 => 78,  205 => 68,  201 => 66,  195 => 64,  192 => 63,  188 => 61,  182 => 59,  180 => 58,  176 => 56,  172 => 54,  166 => 52,  163 => 51,  159 => 49,  153 => 47,  151 => 46,  147 => 44,  143 => 42,  137 => 40,  135 => 39,  131 => 37,  127 => 35,  121 => 33,  118 => 32,  114 => 30,  108 => 28,  106 => 27,  103 => 26,  100 => 25,  94 => 23,  92 => 22,  87 => 21,  85 => 20,  80 => 19,  78 => 18,  73 => 17,  71 => 16,  66 => 15,  64 => 14,  59 => 13,  57 => 12,  52 => 11,  50 => 10,  45 => 9,  43 => 8,  38 => 7,  36 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div class="fichePerso">*/
/*         {% if user.job is defined %}*/
/*             {% if user.job == "Sorceress" %}*/
/*                 <img src="{{ asset('images/sorc.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Warrior" %}*/
/*                 <img src="{{ asset('images/war.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Maewa" %}*/
/*                 <img src="{{ asset('images/maewa.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Musa" %}*/
/*                 <img src="{{ asset('images/musa.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Ranger" %}*/
/*                 <img src="{{ asset('images/ranger.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Tamer" %}*/
/*                 <img src="{{ asset('images/tamer.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Valkyrie" %}*/
/*                 <img src="{{ asset('images/valk.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Witch" %}*/
/*                 <img src="{{ asset('images/witch.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Wizard" %}*/
/*                 <img src="{{ asset('images/wizard.png') }}" class="beforeNavPhoto"/>*/
/*             {% elseif user.job == "Berseker" %}*/
/*                 <img src="{{ asset('images/zerk.png') }}" class="beforeNavPhoto"/>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <p>*/
/*             {% if user.nom %}*/
/*                 {{ user.nom }}*/
/*             {% else %}*/
/*                 Famille : N/A*/
/*             {% endif %}*/
/*             {% if user.prenom %}*/
/*                 {{ user.prenom }}*/
/*             {% else %}*/
/*                 Pseudo : N/A*/
/*             {% endif %}*/
/*         </p>*/
/*         <p>*/
/*             {% if user.job %}*/
/*                 {{ user.job }}*/
/*             {% else %}*/
/*                 Classe : N/A*/
/*             {% endif %}*/
/*         </p>*/
/*         <p>*/
/*             {% if user.ap %}*/
/*                 AP :{{ user.ap }}*/
/*             {% else %}*/
/*                 AP : N/A*/
/*             {% endif %}*/
/*             {% if user.dp %}*/
/*                 DP :{{ user.dp }}*/
/*             {% else %}*/
/*                 DP : N/A*/
/*             {% endif %}*/
/*         </p>*/
/*         <p>*/
/*             {% if user.hp %}*/
/*                 HP :{{ user.hp }}*/
/*             {% else %}*/
/*                 HP : N/A*/
/*             {% endif %}*/
/*             {% if user.mp %}*/
/*                 MP :{{ user.mp }}*/
/*             {% else %}*/
/*                 MP : N/A*/
/*             {% endif %}*/
/*         </p>*/
/*     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"  data-backdrop="false" >Modifier</button>*/
/*     <div class="modal fade" style="margin:40px auto auto 20%;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Modification fiche perso</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_start(edit, {'method': 'post', 'action': path('fos_user_profile_edit'), 'attr': {'class': ''}}) }}*/
/*                     {{ form_widget(edit.nom, {'attr' : {'class' : 'champ', 'placeholder' : 'famille'}}) }}*/
/*                     {{ form_widget(edit.prenom, {'attr' : {'class' : 'champ', 'placeholder' : 'pseudo'}}) }}*/
/*                     {{ form_widget(edit.job, {'attr' : {'class' : 'champ', 'placeholder' : 'classe'}}) }}*/
/*                     {{ form_widget(edit.level, {'attr' : {'class' : 'champ', 'placeholder' : 'level'}}) }}*/
/*                     {{ form_widget(edit.AP, {'attr' : {'class' : 'champ', 'placeholder' : 'ap'}}) }}*/
/*                     {{ form_widget(edit.DP, {'attr' : {'class' : 'champ', 'placeholder' : 'dp'}}) }}*/
/*                     {{ form_widget(edit.HP, {'attr' : {'class' : 'champ', 'placeholder' : 'hp'}}) }}*/
/*                     {{ form_widget(edit.MP, {'attr' : {'class' : 'champ', 'placeholder' : 'mp'}}) }}*/
/*                     {{ form_end(edit) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
