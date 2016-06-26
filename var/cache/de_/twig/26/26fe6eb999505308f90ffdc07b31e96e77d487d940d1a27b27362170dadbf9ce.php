<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c6cd1ef8702a4a6a19a05067ca0e5c7dcba490b9a8aa4db3a31166f9646adf39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_0a345607d95531bc3003c05de8d77857f3f7fa91cc54da36e9f118b2f3ee7711 = $this->env->getExtension("native_profiler");
        $__internal_0a345607d95531bc3003c05de8d77857f3f7fa91cc54da36e9f118b2f3ee7711->enter($__internal_0a345607d95531bc3003c05de8d77857f3f7fa91cc54da36e9f118b2f3ee7711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a345607d95531bc3003c05de8d77857f3f7fa91cc54da36e9f118b2f3ee7711->leave($__internal_0a345607d95531bc3003c05de8d77857f3f7fa91cc54da36e9f118b2f3ee7711_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20c045dd7847bf70a06d98ce7b76c5ead966a060c1b239091cdd68e603fc62b1 = $this->env->getExtension("native_profiler");
        $__internal_20c045dd7847bf70a06d98ce7b76c5ead966a060c1b239091cdd68e603fc62b1->enter($__internal_20c045dd7847bf70a06d98ce7b76c5ead966a060c1b239091cdd68e603fc62b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_20c045dd7847bf70a06d98ce7b76c5ead966a060c1b239091cdd68e603fc62b1->leave($__internal_20c045dd7847bf70a06d98ce7b76c5ead966a060c1b239091cdd68e603fc62b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
