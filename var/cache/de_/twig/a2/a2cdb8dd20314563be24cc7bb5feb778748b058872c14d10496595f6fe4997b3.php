<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ff62e0d074a0213a569d9232b7f8b65e07b0cd990d7dd7e17cf9e08fe1bf59ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c75ca8d67d4f3d9dd958d61c0d4d8ebfae776f05d03903bc7592848a06176e59 = $this->env->getExtension("native_profiler");
        $__internal_c75ca8d67d4f3d9dd958d61c0d4d8ebfae776f05d03903bc7592848a06176e59->enter($__internal_c75ca8d67d4f3d9dd958d61c0d4d8ebfae776f05d03903bc7592848a06176e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75ca8d67d4f3d9dd958d61c0d4d8ebfae776f05d03903bc7592848a06176e59->leave($__internal_c75ca8d67d4f3d9dd958d61c0d4d8ebfae776f05d03903bc7592848a06176e59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bc148afcb955a6829d5ffea81006dd58caf719811e621b546034a4941bc1207 = $this->env->getExtension("native_profiler");
        $__internal_4bc148afcb955a6829d5ffea81006dd58caf719811e621b546034a4941bc1207->enter($__internal_4bc148afcb955a6829d5ffea81006dd58caf719811e621b546034a4941bc1207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4bc148afcb955a6829d5ffea81006dd58caf719811e621b546034a4941bc1207->leave($__internal_4bc148afcb955a6829d5ffea81006dd58caf719811e621b546034a4941bc1207_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
