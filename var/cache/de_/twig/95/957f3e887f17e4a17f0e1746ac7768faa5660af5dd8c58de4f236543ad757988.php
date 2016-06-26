<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_49b4ab8ae8d6457455ff8750f90a6efb716a05bb7f38dc3f2a66592343e720d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e089409de9fe6d8a7dc2f80eb84ef43ff6ef93ca254bd42cba0b2ae2fadffdd5 = $this->env->getExtension("native_profiler");
        $__internal_e089409de9fe6d8a7dc2f80eb84ef43ff6ef93ca254bd42cba0b2ae2fadffdd5->enter($__internal_e089409de9fe6d8a7dc2f80eb84ef43ff6ef93ca254bd42cba0b2ae2fadffdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e089409de9fe6d8a7dc2f80eb84ef43ff6ef93ca254bd42cba0b2ae2fadffdd5->leave($__internal_e089409de9fe6d8a7dc2f80eb84ef43ff6ef93ca254bd42cba0b2ae2fadffdd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_579ba9cab2e7a458f24758b4005f0d3e9ca5429c76de696c40895b5fe81ba035 = $this->env->getExtension("native_profiler");
        $__internal_579ba9cab2e7a458f24758b4005f0d3e9ca5429c76de696c40895b5fe81ba035->enter($__internal_579ba9cab2e7a458f24758b4005f0d3e9ca5429c76de696c40895b5fe81ba035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_579ba9cab2e7a458f24758b4005f0d3e9ca5429c76de696c40895b5fe81ba035->leave($__internal_579ba9cab2e7a458f24758b4005f0d3e9ca5429c76de696c40895b5fe81ba035_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
