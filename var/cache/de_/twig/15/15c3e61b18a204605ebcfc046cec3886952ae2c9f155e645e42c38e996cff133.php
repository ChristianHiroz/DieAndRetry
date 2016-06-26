<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a0c2a3c78052c04600085b47b77056ed0b52b82b6cc44194c18680032e2da315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_17380a2d29f839166c2ecd8fa2719eeb02c3af0bf25476fbbf6a739232e3d0d2 = $this->env->getExtension("native_profiler");
        $__internal_17380a2d29f839166c2ecd8fa2719eeb02c3af0bf25476fbbf6a739232e3d0d2->enter($__internal_17380a2d29f839166c2ecd8fa2719eeb02c3af0bf25476fbbf6a739232e3d0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17380a2d29f839166c2ecd8fa2719eeb02c3af0bf25476fbbf6a739232e3d0d2->leave($__internal_17380a2d29f839166c2ecd8fa2719eeb02c3af0bf25476fbbf6a739232e3d0d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc07e1c793426d0927fbf8183e397639dbdba3d6c3960759249bceb590047210 = $this->env->getExtension("native_profiler");
        $__internal_fc07e1c793426d0927fbf8183e397639dbdba3d6c3960759249bceb590047210->enter($__internal_fc07e1c793426d0927fbf8183e397639dbdba3d6c3960759249bceb590047210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fc07e1c793426d0927fbf8183e397639dbdba3d6c3960759249bceb590047210->leave($__internal_fc07e1c793426d0927fbf8183e397639dbdba3d6c3960759249bceb590047210_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock body %}*/
/* */
