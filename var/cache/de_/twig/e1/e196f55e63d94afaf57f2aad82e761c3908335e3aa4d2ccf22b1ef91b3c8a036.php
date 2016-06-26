<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_e6421f65796835a3e19fa59d4d4de0335a018ee2fbc96c748311f655eab90f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_09d49eec4194cf90b462e59337474c7f39e7a38d10498d49377f7aaeb6f3f407 = $this->env->getExtension("native_profiler");
        $__internal_09d49eec4194cf90b462e59337474c7f39e7a38d10498d49377f7aaeb6f3f407->enter($__internal_09d49eec4194cf90b462e59337474c7f39e7a38d10498d49377f7aaeb6f3f407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d49eec4194cf90b462e59337474c7f39e7a38d10498d49377f7aaeb6f3f407->leave($__internal_09d49eec4194cf90b462e59337474c7f39e7a38d10498d49377f7aaeb6f3f407_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aee23de35ed6bb22a4cd8da86d97a68018f7a4e0e210f675654f3d921b52892 = $this->env->getExtension("native_profiler");
        $__internal_2aee23de35ed6bb22a4cd8da86d97a68018f7a4e0e210f675654f3d921b52892->enter($__internal_2aee23de35ed6bb22a4cd8da86d97a68018f7a4e0e210f675654f3d921b52892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2aee23de35ed6bb22a4cd8da86d97a68018f7a4e0e210f675654f3d921b52892->leave($__internal_2aee23de35ed6bb22a4cd8da86d97a68018f7a4e0e210f675654f3d921b52892_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
