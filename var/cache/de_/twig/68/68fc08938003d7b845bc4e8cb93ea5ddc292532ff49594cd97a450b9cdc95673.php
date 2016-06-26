<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a066276b1c100b4e2684b47e93ba0857caf2d6abdd380abb58657a76c5f5559d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_582013fe4e0f46b0be7c0d9ec225b9d49a93815f351c988fcab773fde040f1b2 = $this->env->getExtension("native_profiler");
        $__internal_582013fe4e0f46b0be7c0d9ec225b9d49a93815f351c988fcab773fde040f1b2->enter($__internal_582013fe4e0f46b0be7c0d9ec225b9d49a93815f351c988fcab773fde040f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582013fe4e0f46b0be7c0d9ec225b9d49a93815f351c988fcab773fde040f1b2->leave($__internal_582013fe4e0f46b0be7c0d9ec225b9d49a93815f351c988fcab773fde040f1b2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_655141dd11bfb407e7176d517cf593f63a1e1729b61bd79c6edd369cd5be580b = $this->env->getExtension("native_profiler");
        $__internal_655141dd11bfb407e7176d517cf593f63a1e1729b61bd79c6edd369cd5be580b->enter($__internal_655141dd11bfb407e7176d517cf593f63a1e1729b61bd79c6edd369cd5be580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_655141dd11bfb407e7176d517cf593f63a1e1729b61bd79c6edd369cd5be580b->leave($__internal_655141dd11bfb407e7176d517cf593f63a1e1729b61bd79c6edd369cd5be580b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
