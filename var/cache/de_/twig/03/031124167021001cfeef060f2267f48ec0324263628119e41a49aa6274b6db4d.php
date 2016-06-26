<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0270478e100b0da0195ede629f2360b3c2df19affc36d3b251485f453b211483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2ac8bca4bfcc50dbe9b80839ba7785b64abfd63e4b0dd5bdb5f4c1df1f7589bd = $this->env->getExtension("native_profiler");
        $__internal_2ac8bca4bfcc50dbe9b80839ba7785b64abfd63e4b0dd5bdb5f4c1df1f7589bd->enter($__internal_2ac8bca4bfcc50dbe9b80839ba7785b64abfd63e4b0dd5bdb5f4c1df1f7589bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ac8bca4bfcc50dbe9b80839ba7785b64abfd63e4b0dd5bdb5f4c1df1f7589bd->leave($__internal_2ac8bca4bfcc50dbe9b80839ba7785b64abfd63e4b0dd5bdb5f4c1df1f7589bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b30dad45cc31055bfc06a83cb6ac6a7a7b05bdd1ac0f6ca61b530aef83503e73 = $this->env->getExtension("native_profiler");
        $__internal_b30dad45cc31055bfc06a83cb6ac6a7a7b05bdd1ac0f6ca61b530aef83503e73->enter($__internal_b30dad45cc31055bfc06a83cb6ac6a7a7b05bdd1ac0f6ca61b530aef83503e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b30dad45cc31055bfc06a83cb6ac6a7a7b05bdd1ac0f6ca61b530aef83503e73->leave($__internal_b30dad45cc31055bfc06a83cb6ac6a7a7b05bdd1ac0f6ca61b530aef83503e73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
