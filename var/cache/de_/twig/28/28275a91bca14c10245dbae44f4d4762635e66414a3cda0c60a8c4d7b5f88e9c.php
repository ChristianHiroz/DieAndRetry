<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_970f36e1c6cfea0f3b5d8808bfec9f4f2d76e053328e464c543a4e07737003f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9d617c4b0ae0fbc62b8cd6ffb6fdeb34384884a944e902ceddcc0a9d44491281 = $this->env->getExtension("native_profiler");
        $__internal_9d617c4b0ae0fbc62b8cd6ffb6fdeb34384884a944e902ceddcc0a9d44491281->enter($__internal_9d617c4b0ae0fbc62b8cd6ffb6fdeb34384884a944e902ceddcc0a9d44491281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d617c4b0ae0fbc62b8cd6ffb6fdeb34384884a944e902ceddcc0a9d44491281->leave($__internal_9d617c4b0ae0fbc62b8cd6ffb6fdeb34384884a944e902ceddcc0a9d44491281_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1f14cfed3ef5fad1d6722469c9c8d3f5fb877e88c3a51ee701aef72dc41c1e9 = $this->env->getExtension("native_profiler");
        $__internal_d1f14cfed3ef5fad1d6722469c9c8d3f5fb877e88c3a51ee701aef72dc41c1e9->enter($__internal_d1f14cfed3ef5fad1d6722469c9c8d3f5fb877e88c3a51ee701aef72dc41c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d1f14cfed3ef5fad1d6722469c9c8d3f5fb877e88c3a51ee701aef72dc41c1e9->leave($__internal_d1f14cfed3ef5fad1d6722469c9c8d3f5fb877e88c3a51ee701aef72dc41c1e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
