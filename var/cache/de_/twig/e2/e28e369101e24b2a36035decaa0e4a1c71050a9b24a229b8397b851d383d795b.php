<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8b0914d35ddce57df7403a40bf953d2ad5049af1b2ceb0025bd9fd5c996f0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e1c8d78ca49beba516b3ebf22d66883b47dcd3c1863d4dbe2e424d56e3209427 = $this->env->getExtension("native_profiler");
        $__internal_e1c8d78ca49beba516b3ebf22d66883b47dcd3c1863d4dbe2e424d56e3209427->enter($__internal_e1c8d78ca49beba516b3ebf22d66883b47dcd3c1863d4dbe2e424d56e3209427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c8d78ca49beba516b3ebf22d66883b47dcd3c1863d4dbe2e424d56e3209427->leave($__internal_e1c8d78ca49beba516b3ebf22d66883b47dcd3c1863d4dbe2e424d56e3209427_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d20826733c028b87eb3c4e301076b374059d8638c180c55695199b6ed4d521f = $this->env->getExtension("native_profiler");
        $__internal_5d20826733c028b87eb3c4e301076b374059d8638c180c55695199b6ed4d521f->enter($__internal_5d20826733c028b87eb3c4e301076b374059d8638c180c55695199b6ed4d521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5d20826733c028b87eb3c4e301076b374059d8638c180c55695199b6ed4d521f->leave($__internal_5d20826733c028b87eb3c4e301076b374059d8638c180c55695199b6ed4d521f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
