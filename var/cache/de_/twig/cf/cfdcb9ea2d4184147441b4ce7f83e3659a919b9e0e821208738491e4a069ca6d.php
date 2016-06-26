<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4bb6500e4d1feb59071bac0f5bf6e26eabaf7add51224317fc57406f30d2226f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_7b2d487d7e0c8bfadc9c7ac08be6119b7ed6cb1e3f300af4fdf5e7f3960c4992 = $this->env->getExtension("native_profiler");
        $__internal_7b2d487d7e0c8bfadc9c7ac08be6119b7ed6cb1e3f300af4fdf5e7f3960c4992->enter($__internal_7b2d487d7e0c8bfadc9c7ac08be6119b7ed6cb1e3f300af4fdf5e7f3960c4992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2d487d7e0c8bfadc9c7ac08be6119b7ed6cb1e3f300af4fdf5e7f3960c4992->leave($__internal_7b2d487d7e0c8bfadc9c7ac08be6119b7ed6cb1e3f300af4fdf5e7f3960c4992_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0546086059e6c43f94f3b2daccf1ab61048d3a8b1a005d3b21504cb259a5e54b = $this->env->getExtension("native_profiler");
        $__internal_0546086059e6c43f94f3b2daccf1ab61048d3a8b1a005d3b21504cb259a5e54b->enter($__internal_0546086059e6c43f94f3b2daccf1ab61048d3a8b1a005d3b21504cb259a5e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0546086059e6c43f94f3b2daccf1ab61048d3a8b1a005d3b21504cb259a5e54b->leave($__internal_0546086059e6c43f94f3b2daccf1ab61048d3a8b1a005d3b21504cb259a5e54b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
