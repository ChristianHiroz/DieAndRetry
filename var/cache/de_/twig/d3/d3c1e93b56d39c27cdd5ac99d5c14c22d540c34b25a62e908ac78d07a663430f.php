<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f16678da14db0d4345a49623ad338f90140fb281fde27e0b40cf29f1a24d1a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_038ff27b846600919468d4a2e525b9d4de135cb0c46e2a299f175a0de0fd0d1b = $this->env->getExtension("native_profiler");
        $__internal_038ff27b846600919468d4a2e525b9d4de135cb0c46e2a299f175a0de0fd0d1b->enter($__internal_038ff27b846600919468d4a2e525b9d4de135cb0c46e2a299f175a0de0fd0d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_038ff27b846600919468d4a2e525b9d4de135cb0c46e2a299f175a0de0fd0d1b->leave($__internal_038ff27b846600919468d4a2e525b9d4de135cb0c46e2a299f175a0de0fd0d1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7e7d6eee43692ee59089c00063c1e60c7c656ac90256094a35e309c1c3da67b = $this->env->getExtension("native_profiler");
        $__internal_e7e7d6eee43692ee59089c00063c1e60c7c656ac90256094a35e309c1c3da67b->enter($__internal_e7e7d6eee43692ee59089c00063c1e60c7c656ac90256094a35e309c1c3da67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e7e7d6eee43692ee59089c00063c1e60c7c656ac90256094a35e309c1c3da67b->leave($__internal_e7e7d6eee43692ee59089c00063c1e60c7c656ac90256094a35e309c1c3da67b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
