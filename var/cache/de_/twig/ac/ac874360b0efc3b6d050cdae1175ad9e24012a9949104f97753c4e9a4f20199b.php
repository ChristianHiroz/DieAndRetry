<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1435633a34d1fedf579c88a4615064bba00c3940ffe3e4be67be7d67577ce27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_65fae0e64790e04887f88f9e08dcc97f52b7bc75dc38521551a192ec6ef4b4f6 = $this->env->getExtension("native_profiler");
        $__internal_65fae0e64790e04887f88f9e08dcc97f52b7bc75dc38521551a192ec6ef4b4f6->enter($__internal_65fae0e64790e04887f88f9e08dcc97f52b7bc75dc38521551a192ec6ef4b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fae0e64790e04887f88f9e08dcc97f52b7bc75dc38521551a192ec6ef4b4f6->leave($__internal_65fae0e64790e04887f88f9e08dcc97f52b7bc75dc38521551a192ec6ef4b4f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d7d09018ca711da60ca0b346f26d72d48f0672e0e5f1661d188f5668c8f9d31 = $this->env->getExtension("native_profiler");
        $__internal_2d7d09018ca711da60ca0b346f26d72d48f0672e0e5f1661d188f5668c8f9d31->enter($__internal_2d7d09018ca711da60ca0b346f26d72d48f0672e0e5f1661d188f5668c8f9d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2d7d09018ca711da60ca0b346f26d72d48f0672e0e5f1661d188f5668c8f9d31->leave($__internal_2d7d09018ca711da60ca0b346f26d72d48f0672e0e5f1661d188f5668c8f9d31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
