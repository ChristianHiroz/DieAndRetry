<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1dff88a80bd37ce5069bdbfe0414f243f8f106af8c49c0ca19739d7074627ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f15700bb67cebd13687c8321621db145a06d77ec897946958eaffdbf0dceec = $this->env->getExtension("native_profiler");
        $__internal_e2f15700bb67cebd13687c8321621db145a06d77ec897946958eaffdbf0dceec->enter($__internal_e2f15700bb67cebd13687c8321621db145a06d77ec897946958eaffdbf0dceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f15700bb67cebd13687c8321621db145a06d77ec897946958eaffdbf0dceec->leave($__internal_e2f15700bb67cebd13687c8321621db145a06d77ec897946958eaffdbf0dceec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_502c1d158cdf5ceb03763f88b5a4a769c9b7f1d8ee9bb89121242cd40c62b39f = $this->env->getExtension("native_profiler");
        $__internal_502c1d158cdf5ceb03763f88b5a4a769c9b7f1d8ee9bb89121242cd40c62b39f->enter($__internal_502c1d158cdf5ceb03763f88b5a4a769c9b7f1d8ee9bb89121242cd40c62b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_502c1d158cdf5ceb03763f88b5a4a769c9b7f1d8ee9bb89121242cd40c62b39f->leave($__internal_502c1d158cdf5ceb03763f88b5a4a769c9b7f1d8ee9bb89121242cd40c62b39f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock body %}*/
/* */
