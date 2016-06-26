<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_119a4c19b59802b47f65e8d501a98fddea21e526e65b24c8120309cad1010788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_42499b4205b3bc51942a00ca7d0089c2cd38a1af70b9230e4c432ab1ca98fdce = $this->env->getExtension("native_profiler");
        $__internal_42499b4205b3bc51942a00ca7d0089c2cd38a1af70b9230e4c432ab1ca98fdce->enter($__internal_42499b4205b3bc51942a00ca7d0089c2cd38a1af70b9230e4c432ab1ca98fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42499b4205b3bc51942a00ca7d0089c2cd38a1af70b9230e4c432ab1ca98fdce->leave($__internal_42499b4205b3bc51942a00ca7d0089c2cd38a1af70b9230e4c432ab1ca98fdce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b48eadc26dda7ac595a564ba57d8467e4f004e08295e2713b81f6f789396827 = $this->env->getExtension("native_profiler");
        $__internal_4b48eadc26dda7ac595a564ba57d8467e4f004e08295e2713b81f6f789396827->enter($__internal_4b48eadc26dda7ac595a564ba57d8467e4f004e08295e2713b81f6f789396827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4b48eadc26dda7ac595a564ba57d8467e4f004e08295e2713b81f6f789396827->leave($__internal_4b48eadc26dda7ac595a564ba57d8467e4f004e08295e2713b81f6f789396827_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
