<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f55b5b6bd698a82f66a38ef3bb37a11acff7c94ea1e3a85c24b1f3a4975377fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7cbc567e5dfe41e36a1601bbf9f7f54098987766175d04511cfb43d49e756275 = $this->env->getExtension("native_profiler");
        $__internal_7cbc567e5dfe41e36a1601bbf9f7f54098987766175d04511cfb43d49e756275->enter($__internal_7cbc567e5dfe41e36a1601bbf9f7f54098987766175d04511cfb43d49e756275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cbc567e5dfe41e36a1601bbf9f7f54098987766175d04511cfb43d49e756275->leave($__internal_7cbc567e5dfe41e36a1601bbf9f7f54098987766175d04511cfb43d49e756275_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1beb1dbb1873d10281f33ae58da323dd80718777eb689bb52a7550bcb5e05248 = $this->env->getExtension("native_profiler");
        $__internal_1beb1dbb1873d10281f33ae58da323dd80718777eb689bb52a7550bcb5e05248->enter($__internal_1beb1dbb1873d10281f33ae58da323dd80718777eb689bb52a7550bcb5e05248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1beb1dbb1873d10281f33ae58da323dd80718777eb689bb52a7550bcb5e05248->leave($__internal_1beb1dbb1873d10281f33ae58da323dd80718777eb689bb52a7550bcb5e05248_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
