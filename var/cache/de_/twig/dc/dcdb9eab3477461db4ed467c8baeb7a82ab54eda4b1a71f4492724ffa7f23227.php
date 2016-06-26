<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_56b76a0f307141370705a580a1124b0968daacd70f3309a6340fee845eb99027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cb30ee7912f154949a1eacc021ac4bc35b5d9c88bfd21a462884e2e6c95c5fbe = $this->env->getExtension("native_profiler");
        $__internal_cb30ee7912f154949a1eacc021ac4bc35b5d9c88bfd21a462884e2e6c95c5fbe->enter($__internal_cb30ee7912f154949a1eacc021ac4bc35b5d9c88bfd21a462884e2e6c95c5fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb30ee7912f154949a1eacc021ac4bc35b5d9c88bfd21a462884e2e6c95c5fbe->leave($__internal_cb30ee7912f154949a1eacc021ac4bc35b5d9c88bfd21a462884e2e6c95c5fbe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2188589adf55deef5c887081e9b25cb88ef6472a5ae377cda2bb079c8b0c6a00 = $this->env->getExtension("native_profiler");
        $__internal_2188589adf55deef5c887081e9b25cb88ef6472a5ae377cda2bb079c8b0c6a00->enter($__internal_2188589adf55deef5c887081e9b25cb88ef6472a5ae377cda2bb079c8b0c6a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2188589adf55deef5c887081e9b25cb88ef6472a5ae377cda2bb079c8b0c6a00->leave($__internal_2188589adf55deef5c887081e9b25cb88ef6472a5ae377cda2bb079c8b0c6a00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
