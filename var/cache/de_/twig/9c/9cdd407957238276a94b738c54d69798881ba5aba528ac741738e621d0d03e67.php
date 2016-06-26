<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_15260a7c548605507054f32b6ce1b118cb5b93d4becaa5ddf4d06a8a94236297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4b6ab2284c190faa4fbb3c47eecee31654d367464b35b6f420c9dbe7487fc339 = $this->env->getExtension("native_profiler");
        $__internal_4b6ab2284c190faa4fbb3c47eecee31654d367464b35b6f420c9dbe7487fc339->enter($__internal_4b6ab2284c190faa4fbb3c47eecee31654d367464b35b6f420c9dbe7487fc339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6ab2284c190faa4fbb3c47eecee31654d367464b35b6f420c9dbe7487fc339->leave($__internal_4b6ab2284c190faa4fbb3c47eecee31654d367464b35b6f420c9dbe7487fc339_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3340a3a8ba353450c333bfeb115873a7dd0fc42f489fec2c989457d4961d35b4 = $this->env->getExtension("native_profiler");
        $__internal_3340a3a8ba353450c333bfeb115873a7dd0fc42f489fec2c989457d4961d35b4->enter($__internal_3340a3a8ba353450c333bfeb115873a7dd0fc42f489fec2c989457d4961d35b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3340a3a8ba353450c333bfeb115873a7dd0fc42f489fec2c989457d4961d35b4->leave($__internal_3340a3a8ba353450c333bfeb115873a7dd0fc42f489fec2c989457d4961d35b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
