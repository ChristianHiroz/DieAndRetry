<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_fe98bdaab19931653af94a2ee22febbd05fdbd58ad5fedcdb3cfeeb149c85ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d41f5969aeaeb8aec7c1b43ed370a452e29fc64a24881f4f5b1e0bdf327f7dd = $this->env->getExtension("native_profiler");
        $__internal_0d41f5969aeaeb8aec7c1b43ed370a452e29fc64a24881f4f5b1e0bdf327f7dd->enter($__internal_0d41f5969aeaeb8aec7c1b43ed370a452e29fc64a24881f4f5b1e0bdf327f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d41f5969aeaeb8aec7c1b43ed370a452e29fc64a24881f4f5b1e0bdf327f7dd->leave($__internal_0d41f5969aeaeb8aec7c1b43ed370a452e29fc64a24881f4f5b1e0bdf327f7dd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef7896fac0756885d07554918a7b8e1441037559384a355026b9df6a1e6dc78f = $this->env->getExtension("native_profiler");
        $__internal_ef7896fac0756885d07554918a7b8e1441037559384a355026b9df6a1e6dc78f->enter($__internal_ef7896fac0756885d07554918a7b8e1441037559384a355026b9df6a1e6dc78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef7896fac0756885d07554918a7b8e1441037559384a355026b9df6a1e6dc78f->leave($__internal_ef7896fac0756885d07554918a7b8e1441037559384a355026b9df6a1e6dc78f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c05c902e858a25c861941b216d5a2c5538ac8960c74b24c72aa259559c48e418 = $this->env->getExtension("native_profiler");
        $__internal_c05c902e858a25c861941b216d5a2c5538ac8960c74b24c72aa259559c48e418->enter($__internal_c05c902e858a25c861941b216d5a2c5538ac8960c74b24c72aa259559c48e418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c05c902e858a25c861941b216d5a2c5538ac8960c74b24c72aa259559c48e418->leave($__internal_c05c902e858a25c861941b216d5a2c5538ac8960c74b24c72aa259559c48e418_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d97358f4bba2cada84e46bd53e59ed45182481ba1010d3ad98b36ece5cad03a = $this->env->getExtension("native_profiler");
        $__internal_3d97358f4bba2cada84e46bd53e59ed45182481ba1010d3ad98b36ece5cad03a->enter($__internal_3d97358f4bba2cada84e46bd53e59ed45182481ba1010d3ad98b36ece5cad03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d97358f4bba2cada84e46bd53e59ed45182481ba1010d3ad98b36ece5cad03a->leave($__internal_3d97358f4bba2cada84e46bd53e59ed45182481ba1010d3ad98b36ece5cad03a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
