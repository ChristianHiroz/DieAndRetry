<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_68c35bbda32d84c90745d5d1e3823625d738af213ade5d2ef98a469de4f991e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_01535b2150889d13881c49470d43adbc2a6783faae8a9a1962f2b6d5a3ce0abc = $this->env->getExtension("native_profiler");
        $__internal_01535b2150889d13881c49470d43adbc2a6783faae8a9a1962f2b6d5a3ce0abc->enter($__internal_01535b2150889d13881c49470d43adbc2a6783faae8a9a1962f2b6d5a3ce0abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01535b2150889d13881c49470d43adbc2a6783faae8a9a1962f2b6d5a3ce0abc->leave($__internal_01535b2150889d13881c49470d43adbc2a6783faae8a9a1962f2b6d5a3ce0abc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c5729b63722cbd275355e6b3f6d52fc9eec86dc6c4e5e8eb24c8a02f99943b1 = $this->env->getExtension("native_profiler");
        $__internal_3c5729b63722cbd275355e6b3f6d52fc9eec86dc6c4e5e8eb24c8a02f99943b1->enter($__internal_3c5729b63722cbd275355e6b3f6d52fc9eec86dc6c4e5e8eb24c8a02f99943b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3c5729b63722cbd275355e6b3f6d52fc9eec86dc6c4e5e8eb24c8a02f99943b1->leave($__internal_3c5729b63722cbd275355e6b3f6d52fc9eec86dc6c4e5e8eb24c8a02f99943b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
