<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3b24ff1b1f7737cd2887e1a6efd2374a3caceab77d881b136f6d09a58d447338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_204d2ff073a939b3b41cb760783bca241ed959eabb8c3606598349f2f233e652 = $this->env->getExtension("native_profiler");
        $__internal_204d2ff073a939b3b41cb760783bca241ed959eabb8c3606598349f2f233e652->enter($__internal_204d2ff073a939b3b41cb760783bca241ed959eabb8c3606598349f2f233e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204d2ff073a939b3b41cb760783bca241ed959eabb8c3606598349f2f233e652->leave($__internal_204d2ff073a939b3b41cb760783bca241ed959eabb8c3606598349f2f233e652_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaf3dbeae096c21a9513416d135d8eef7437ed4bf01ffdc1ced5fb58df3b8818 = $this->env->getExtension("native_profiler");
        $__internal_aaf3dbeae096c21a9513416d135d8eef7437ed4bf01ffdc1ced5fb58df3b8818->enter($__internal_aaf3dbeae096c21a9513416d135d8eef7437ed4bf01ffdc1ced5fb58df3b8818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_aaf3dbeae096c21a9513416d135d8eef7437ed4bf01ffdc1ced5fb58df3b8818->leave($__internal_aaf3dbeae096c21a9513416d135d8eef7437ed4bf01ffdc1ced5fb58df3b8818_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
