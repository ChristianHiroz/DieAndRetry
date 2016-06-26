<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_7ec259edef9f34b5d2afce16bafb8e4b308228b8f2bc00fa580aca55a6f53f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_001e62ad605644f0a57bb83ba10becb97da1832341a9c46a682028d749a6d40a = $this->env->getExtension("native_profiler");
        $__internal_001e62ad605644f0a57bb83ba10becb97da1832341a9c46a682028d749a6d40a->enter($__internal_001e62ad605644f0a57bb83ba10becb97da1832341a9c46a682028d749a6d40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_001e62ad605644f0a57bb83ba10becb97da1832341a9c46a682028d749a6d40a->leave($__internal_001e62ad605644f0a57bb83ba10becb97da1832341a9c46a682028d749a6d40a_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_5228f90a295f49ef3fbef035703c0979fc7907fe32f69065eb75fd6978678a7c = $this->env->getExtension("native_profiler");
        $__internal_5228f90a295f49ef3fbef035703c0979fc7907fe32f69065eb75fd6978678a7c->enter($__internal_5228f90a295f49ef3fbef035703c0979fc7907fe32f69065eb75fd6978678a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_5228f90a295f49ef3fbef035703c0979fc7907fe32f69065eb75fd6978678a7c->leave($__internal_5228f90a295f49ef3fbef035703c0979fc7907fe32f69065eb75fd6978678a7c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
