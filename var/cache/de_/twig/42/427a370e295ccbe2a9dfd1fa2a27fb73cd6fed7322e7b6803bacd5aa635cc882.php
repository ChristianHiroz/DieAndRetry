<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_35cd585fa2bd4469801e5adc7866ad1ab4e0f524c52669d1d93d7558b60ce44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a33eb88d6a42b48797fdab60b5bea79c1ce06d166609e2581de9e2c8a591b2f = $this->env->getExtension("native_profiler");
        $__internal_0a33eb88d6a42b48797fdab60b5bea79c1ce06d166609e2581de9e2c8a591b2f->enter($__internal_0a33eb88d6a42b48797fdab60b5bea79c1ce06d166609e2581de9e2c8a591b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0a33eb88d6a42b48797fdab60b5bea79c1ce06d166609e2581de9e2c8a591b2f->leave($__internal_0a33eb88d6a42b48797fdab60b5bea79c1ce06d166609e2581de9e2c8a591b2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
