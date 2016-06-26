<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_5494a0d99c9bfca55c4de5c6e10326a0ae18f59ab601ab8e0c5d2eac64791291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_a02dc739bab8112bc7202a904501b458594849b7aa9faf6da77c00027727ea99 = $this->env->getExtension("native_profiler");
        $__internal_a02dc739bab8112bc7202a904501b458594849b7aa9faf6da77c00027727ea99->enter($__internal_a02dc739bab8112bc7202a904501b458594849b7aa9faf6da77c00027727ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02dc739bab8112bc7202a904501b458594849b7aa9faf6da77c00027727ea99->leave($__internal_a02dc739bab8112bc7202a904501b458594849b7aa9faf6da77c00027727ea99_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_78b04800d2f066823604662e57db1401809b6f08968363dfd00dde735738c88d = $this->env->getExtension("native_profiler");
        $__internal_78b04800d2f066823604662e57db1401809b6f08968363dfd00dde735738c88d->enter($__internal_78b04800d2f066823604662e57db1401809b6f08968363dfd00dde735738c88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_78b04800d2f066823604662e57db1401809b6f08968363dfd00dde735738c88d->leave($__internal_78b04800d2f066823604662e57db1401809b6f08968363dfd00dde735738c88d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
