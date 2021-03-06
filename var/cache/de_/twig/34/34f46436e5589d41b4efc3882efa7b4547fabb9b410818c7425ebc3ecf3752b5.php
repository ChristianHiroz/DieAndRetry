<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c349310ba8984b137003f9e2218201c781f3afde2e4e5f35f98d6744b34fa05e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_9cecd1bc1bec7d0011bfdb5e54c341d9210c9ae71255691a78e11ec3785762dd = $this->env->getExtension("native_profiler");
        $__internal_9cecd1bc1bec7d0011bfdb5e54c341d9210c9ae71255691a78e11ec3785762dd->enter($__internal_9cecd1bc1bec7d0011bfdb5e54c341d9210c9ae71255691a78e11ec3785762dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cecd1bc1bec7d0011bfdb5e54c341d9210c9ae71255691a78e11ec3785762dd->leave($__internal_9cecd1bc1bec7d0011bfdb5e54c341d9210c9ae71255691a78e11ec3785762dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb0098d1a7e9887331f7eb0ca3126914568fdf0194d2395df9ff0d1663883dcb = $this->env->getExtension("native_profiler");
        $__internal_fb0098d1a7e9887331f7eb0ca3126914568fdf0194d2395df9ff0d1663883dcb->enter($__internal_fb0098d1a7e9887331f7eb0ca3126914568fdf0194d2395df9ff0d1663883dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fb0098d1a7e9887331f7eb0ca3126914568fdf0194d2395df9ff0d1663883dcb->leave($__internal_fb0098d1a7e9887331f7eb0ca3126914568fdf0194d2395df9ff0d1663883dcb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
