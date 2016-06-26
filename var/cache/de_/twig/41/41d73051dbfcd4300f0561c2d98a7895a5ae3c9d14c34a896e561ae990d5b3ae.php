<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_a2fe0e4f804abe7817c4394c793f434cc7b5104af77ca1ff029c0158126c3fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e57f7cffc860461100b61e108c02d8a45c4cb431dfb8a547473c6e1e7a205915 = $this->env->getExtension("native_profiler");
        $__internal_e57f7cffc860461100b61e108c02d8a45c4cb431dfb8a547473c6e1e7a205915->enter($__internal_e57f7cffc860461100b61e108c02d8a45c4cb431dfb8a547473c6e1e7a205915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57f7cffc860461100b61e108c02d8a45c4cb431dfb8a547473c6e1e7a205915->leave($__internal_e57f7cffc860461100b61e108c02d8a45c4cb431dfb8a547473c6e1e7a205915_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c7675336c6dcba37eb0bc2c488820d4f043db51b1c9b5ce222da74c92fb9685d = $this->env->getExtension("native_profiler");
        $__internal_c7675336c6dcba37eb0bc2c488820d4f043db51b1c9b5ce222da74c92fb9685d->enter($__internal_c7675336c6dcba37eb0bc2c488820d4f043db51b1c9b5ce222da74c92fb9685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_c7675336c6dcba37eb0bc2c488820d4f043db51b1c9b5ce222da74c92fb9685d->leave($__internal_c7675336c6dcba37eb0bc2c488820d4f043db51b1c9b5ce222da74c92fb9685d_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_ca99e5a1b86c2625d32ef3bdc2f40b0bd1c32fce1868c0a12045b21a6f22b879 = $this->env->getExtension("native_profiler");
        $__internal_ca99e5a1b86c2625d32ef3bdc2f40b0bd1c32fce1868c0a12045b21a6f22b879->enter($__internal_ca99e5a1b86c2625d32ef3bdc2f40b0bd1c32fce1868c0a12045b21a6f22b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_ca99e5a1b86c2625d32ef3bdc2f40b0bd1c32fce1868c0a12045b21a6f22b879->leave($__internal_ca99e5a1b86c2625d32ef3bdc2f40b0bd1c32fce1868c0a12045b21a6f22b879_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_ffacb1124ad7b29a55688925f7b17db6c948f61149afc9f12513b074b5bc432c = $this->env->getExtension("native_profiler");
        $__internal_ffacb1124ad7b29a55688925f7b17db6c948f61149afc9f12513b074b5bc432c->enter($__internal_ffacb1124ad7b29a55688925f7b17db6c948f61149afc9f12513b074b5bc432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_ffacb1124ad7b29a55688925f7b17db6c948f61149afc9f12513b074b5bc432c->leave($__internal_ffacb1124ad7b29a55688925f7b17db6c948f61149afc9f12513b074b5bc432c_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_3eff3738ab186e4a07f799ac2866eea578244c3196ddfe1f16010ca839a32bea = $this->env->getExtension("native_profiler");
        $__internal_3eff3738ab186e4a07f799ac2866eea578244c3196ddfe1f16010ca839a32bea->enter($__internal_3eff3738ab186e4a07f799ac2866eea578244c3196ddfe1f16010ca839a32bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_3eff3738ab186e4a07f799ac2866eea578244c3196ddfe1f16010ca839a32bea->leave($__internal_3eff3738ab186e4a07f799ac2866eea578244c3196ddfe1f16010ca839a32bea_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_ea3399616e3f0ff6b94d4dca5a7ef6d8d50d367b3bf054bf94eb7b61f272113b = $this->env->getExtension("native_profiler");
        $__internal_ea3399616e3f0ff6b94d4dca5a7ef6d8d50d367b3bf054bf94eb7b61f272113b->enter($__internal_ea3399616e3f0ff6b94d4dca5a7ef6d8d50d367b3bf054bf94eb7b61f272113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_ea3399616e3f0ff6b94d4dca5a7ef6d8d50d367b3bf054bf94eb7b61f272113b->leave($__internal_ea3399616e3f0ff6b94d4dca5a7ef6d8d50d367b3bf054bf94eb7b61f272113b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* */
/* {% block actions %}*/
/* {% endblock %}*/
/* */
/* {% block side_menu %}*/
/* {% endblock %}*/
/* */
/* {% block formactions %}*/
/*     <button class="btn btn-success" type="submit" name="btn_preview_approve">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/*     <button class="btn btn-danger" type="submit" name="btn_preview_decline">*/
/*         <i class="fa fa-times"></i>*/
/*         {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/* {% endblock %}*/
/* */
/* {% block preview %}*/
/*     <div class="sonata-ba-view">*/
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <td colspan="2">*/
/*                             {{ admin.trans(name) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if admin.show[field_name] is defined %}*/
/*                             {{ admin.show[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <div class="sonata-preview-form-container">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
