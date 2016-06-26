<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_3ac047be3a98439782b444ad63e5e5174afa2c9906075669204c310ea10216c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_8ecd445e1cf509350b6f5c266d38048d0c734705e72f6f0ad741cd0369ed9c1c = $this->env->getExtension("native_profiler");
        $__internal_8ecd445e1cf509350b6f5c266d38048d0c734705e72f6f0ad741cd0369ed9c1c->enter($__internal_8ecd445e1cf509350b6f5c266d38048d0c734705e72f6f0ad741cd0369ed9c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecd445e1cf509350b6f5c266d38048d0c734705e72f6f0ad741cd0369ed9c1c->leave($__internal_8ecd445e1cf509350b6f5c266d38048d0c734705e72f6f0ad741cd0369ed9c1c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8655596fbcd9f47fa5af5f3346ab151ba72d408f393a035a5080b9700d48127e = $this->env->getExtension("native_profiler");
        $__internal_8655596fbcd9f47fa5af5f3346ab151ba72d408f393a035a5080b9700d48127e->enter($__internal_8655596fbcd9f47fa5af5f3346ab151ba72d408f393a035a5080b9700d48127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8655596fbcd9f47fa5af5f3346ab151ba72d408f393a035a5080b9700d48127e->leave($__internal_8655596fbcd9f47fa5af5f3346ab151ba72d408f393a035a5080b9700d48127e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
