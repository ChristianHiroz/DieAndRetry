<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_503f63659fc1206c931a841ca1a5e5206c59a16c7d65cbd805d585396a042153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_fe07034cce963bc5006a5ea9029989faa574c235f8d9a42215b5683c0678dfe3 = $this->env->getExtension("native_profiler");
        $__internal_fe07034cce963bc5006a5ea9029989faa574c235f8d9a42215b5683c0678dfe3->enter($__internal_fe07034cce963bc5006a5ea9029989faa574c235f8d9a42215b5683c0678dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe07034cce963bc5006a5ea9029989faa574c235f8d9a42215b5683c0678dfe3->leave($__internal_fe07034cce963bc5006a5ea9029989faa574c235f8d9a42215b5683c0678dfe3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca4e622cc1930be972bd76ba7d77526a8c22c98db9dbc1cce32de6b5b788fe39 = $this->env->getExtension("native_profiler");
        $__internal_ca4e622cc1930be972bd76ba7d77526a8c22c98db9dbc1cce32de6b5b788fe39->enter($__internal_ca4e622cc1930be972bd76ba7d77526a8c22c98db9dbc1cce32de6b5b788fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ca4e622cc1930be972bd76ba7d77526a8c22c98db9dbc1cce32de6b5b788fe39->leave($__internal_ca4e622cc1930be972bd76ba7d77526a8c22c98db9dbc1cce32de6b5b788fe39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
