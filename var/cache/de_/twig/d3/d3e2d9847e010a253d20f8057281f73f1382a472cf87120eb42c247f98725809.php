<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3b2af33f07a02ed6a5f9eaf0e2b1b665b23a5718913f10843864091d507cdf39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_cd42d2cc8b868d85ea5eec9a68616977831c500a950a9a9d38c3c79893ee9e27 = $this->env->getExtension("native_profiler");
        $__internal_cd42d2cc8b868d85ea5eec9a68616977831c500a950a9a9d38c3c79893ee9e27->enter($__internal_cd42d2cc8b868d85ea5eec9a68616977831c500a950a9a9d38c3c79893ee9e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd42d2cc8b868d85ea5eec9a68616977831c500a950a9a9d38c3c79893ee9e27->leave($__internal_cd42d2cc8b868d85ea5eec9a68616977831c500a950a9a9d38c3c79893ee9e27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70027514b67009e44ee6f62d6a68fd69b7215120679d4f0afeb867bd0d471658 = $this->env->getExtension("native_profiler");
        $__internal_70027514b67009e44ee6f62d6a68fd69b7215120679d4f0afeb867bd0d471658->enter($__internal_70027514b67009e44ee6f62d6a68fd69b7215120679d4f0afeb867bd0d471658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_70027514b67009e44ee6f62d6a68fd69b7215120679d4f0afeb867bd0d471658->leave($__internal_70027514b67009e44ee6f62d6a68fd69b7215120679d4f0afeb867bd0d471658_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
