<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0a8400cec4b4b4b3298c609efaa3b53023963b9296dbe0bb5f2671b44ab3d14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2e8a92d22a9457bb3303a2fa768584cd57dbee4c591ae2bccda7c14328d7a6b5 = $this->env->getExtension("native_profiler");
        $__internal_2e8a92d22a9457bb3303a2fa768584cd57dbee4c591ae2bccda7c14328d7a6b5->enter($__internal_2e8a92d22a9457bb3303a2fa768584cd57dbee4c591ae2bccda7c14328d7a6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8a92d22a9457bb3303a2fa768584cd57dbee4c591ae2bccda7c14328d7a6b5->leave($__internal_2e8a92d22a9457bb3303a2fa768584cd57dbee4c591ae2bccda7c14328d7a6b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ee468780f5dda219041eb1201068cb1c606e1b2ddefb4b7c94327f0d1073522 = $this->env->getExtension("native_profiler");
        $__internal_6ee468780f5dda219041eb1201068cb1c606e1b2ddefb4b7c94327f0d1073522->enter($__internal_6ee468780f5dda219041eb1201068cb1c606e1b2ddefb4b7c94327f0d1073522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6ee468780f5dda219041eb1201068cb1c606e1b2ddefb4b7c94327f0d1073522->leave($__internal_6ee468780f5dda219041eb1201068cb1c606e1b2ddefb4b7c94327f0d1073522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
