<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_0d0c3a5ee5736f8ce3bbddf70ae460d0e93c4a9f6ed75869dd12534b29d9ac1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c51d83a495707b446241ee098a962595537bdab98a433d6d2a39b7230f4ec5d0 = $this->env->getExtension("native_profiler");
        $__internal_c51d83a495707b446241ee098a962595537bdab98a433d6d2a39b7230f4ec5d0->enter($__internal_c51d83a495707b446241ee098a962595537bdab98a433d6d2a39b7230f4ec5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51d83a495707b446241ee098a962595537bdab98a433d6d2a39b7230f4ec5d0->leave($__internal_c51d83a495707b446241ee098a962595537bdab98a433d6d2a39b7230f4ec5d0_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_348fd3b4c5dc4ce829d53afe1e78759d31cfe113893b860a171cb7744d57b1c9 = $this->env->getExtension("native_profiler");
        $__internal_348fd3b4c5dc4ce829d53afe1e78759d31cfe113893b860a171cb7744d57b1c9->enter($__internal_348fd3b4c5dc4ce829d53afe1e78759d31cfe113893b860a171cb7744d57b1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_348fd3b4c5dc4ce829d53afe1e78759d31cfe113893b860a171cb7744d57b1c9->leave($__internal_348fd3b4c5dc4ce829d53afe1e78759d31cfe113893b860a171cb7744d57b1c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
