<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_650f964e175b70ada3d480003ece1d8e0137157ed1fa78d71c86b4a29bdee930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_898f14bb454cdc21fe1315e37cb9d23ee8a33d7d4ff9c2a34aeb8461383cdd3e = $this->env->getExtension("native_profiler");
        $__internal_898f14bb454cdc21fe1315e37cb9d23ee8a33d7d4ff9c2a34aeb8461383cdd3e->enter($__internal_898f14bb454cdc21fe1315e37cb9d23ee8a33d7d4ff9c2a34aeb8461383cdd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898f14bb454cdc21fe1315e37cb9d23ee8a33d7d4ff9c2a34aeb8461383cdd3e->leave($__internal_898f14bb454cdc21fe1315e37cb9d23ee8a33d7d4ff9c2a34aeb8461383cdd3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e7590681405e3498e982f36a381bdc80ea100860822c48bb0d430573c195d9d = $this->env->getExtension("native_profiler");
        $__internal_3e7590681405e3498e982f36a381bdc80ea100860822c48bb0d430573c195d9d->enter($__internal_3e7590681405e3498e982f36a381bdc80ea100860822c48bb0d430573c195d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3e7590681405e3498e982f36a381bdc80ea100860822c48bb0d430573c195d9d->leave($__internal_3e7590681405e3498e982f36a381bdc80ea100860822c48bb0d430573c195d9d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
