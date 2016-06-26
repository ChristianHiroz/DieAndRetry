<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_bebba83e37eca77d375a10ca2d8f1bd66fe947757d4603c7093f713c653380d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_98e14a1e482aba22f9376494b3a4a92657595ee1ba8efbb9b827d53b01b311fb = $this->env->getExtension("native_profiler");
        $__internal_98e14a1e482aba22f9376494b3a4a92657595ee1ba8efbb9b827d53b01b311fb->enter($__internal_98e14a1e482aba22f9376494b3a4a92657595ee1ba8efbb9b827d53b01b311fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e14a1e482aba22f9376494b3a4a92657595ee1ba8efbb9b827d53b01b311fb->leave($__internal_98e14a1e482aba22f9376494b3a4a92657595ee1ba8efbb9b827d53b01b311fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75e0b6dbbef03fc3b8154f1e82bda635379ee3a95eb7dfb201984a4f07b0e5e2 = $this->env->getExtension("native_profiler");
        $__internal_75e0b6dbbef03fc3b8154f1e82bda635379ee3a95eb7dfb201984a4f07b0e5e2->enter($__internal_75e0b6dbbef03fc3b8154f1e82bda635379ee3a95eb7dfb201984a4f07b0e5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_75e0b6dbbef03fc3b8154f1e82bda635379ee3a95eb7dfb201984a4f07b0e5e2->leave($__internal_75e0b6dbbef03fc3b8154f1e82bda635379ee3a95eb7dfb201984a4f07b0e5e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
