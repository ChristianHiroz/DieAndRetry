<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_ffa9ef9f2dab5f72f20c4e9a1f62501abe0d2b0dbed7b9b9c745278a82eff19a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f211fb6c280aec1f9d9540702036ece805cceb7945e94c634881e9419364c9f = $this->env->getExtension("native_profiler");
        $__internal_8f211fb6c280aec1f9d9540702036ece805cceb7945e94c634881e9419364c9f->enter($__internal_8f211fb6c280aec1f9d9540702036ece805cceb7945e94c634881e9419364c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f211fb6c280aec1f9d9540702036ece805cceb7945e94c634881e9419364c9f->leave($__internal_8f211fb6c280aec1f9d9540702036ece805cceb7945e94c634881e9419364c9f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b672348f1d0f19bb3bc2c17002aff86f5f5e63873afcae5c311d53ecc1be200 = $this->env->getExtension("native_profiler");
        $__internal_8b672348f1d0f19bb3bc2c17002aff86f5f5e63873afcae5c311d53ecc1be200->enter($__internal_8b672348f1d0f19bb3bc2c17002aff86f5f5e63873afcae5c311d53ecc1be200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_8b672348f1d0f19bb3bc2c17002aff86f5f5e63873afcae5c311d53ecc1be200->leave($__internal_8b672348f1d0f19bb3bc2c17002aff86f5f5e63873afcae5c311d53ecc1be200_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
