<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_fd7b0fcf8705271d162acbcecdbb39163a7fd3446a3aeeadcd666d8cf6bf66e4 extends Twig_Template
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
        $__internal_29e64dc7839b16444c7f508b9b808564d3e6d625fa2ade44fa9487fcc43da63b = $this->env->getExtension("native_profiler");
        $__internal_29e64dc7839b16444c7f508b9b808564d3e6d625fa2ade44fa9487fcc43da63b->enter($__internal_29e64dc7839b16444c7f508b9b808564d3e6d625fa2ade44fa9487fcc43da63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_29e64dc7839b16444c7f508b9b808564d3e6d625fa2ade44fa9487fcc43da63b->leave($__internal_29e64dc7839b16444c7f508b9b808564d3e6d625fa2ade44fa9487fcc43da63b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef4181dc030b6cbe096dacde774328f8bb72d484c39cb5588fde0a11dc2eda85 = $this->env->getExtension("native_profiler");
        $__internal_ef4181dc030b6cbe096dacde774328f8bb72d484c39cb5588fde0a11dc2eda85->enter($__internal_ef4181dc030b6cbe096dacde774328f8bb72d484c39cb5588fde0a11dc2eda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef4181dc030b6cbe096dacde774328f8bb72d484c39cb5588fde0a11dc2eda85->leave($__internal_ef4181dc030b6cbe096dacde774328f8bb72d484c39cb5588fde0a11dc2eda85_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28bb6776c739cec8466d051f4b50d4131c50a534eafd15cf462e531ca09467dc = $this->env->getExtension("native_profiler");
        $__internal_28bb6776c739cec8466d051f4b50d4131c50a534eafd15cf462e531ca09467dc->enter($__internal_28bb6776c739cec8466d051f4b50d4131c50a534eafd15cf462e531ca09467dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28bb6776c739cec8466d051f4b50d4131c50a534eafd15cf462e531ca09467dc->leave($__internal_28bb6776c739cec8466d051f4b50d4131c50a534eafd15cf462e531ca09467dc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_158522e1a9be5472845565baaf12349f0085a304a9fb4e5e7a1f5d3aad158b5b = $this->env->getExtension("native_profiler");
        $__internal_158522e1a9be5472845565baaf12349f0085a304a9fb4e5e7a1f5d3aad158b5b->enter($__internal_158522e1a9be5472845565baaf12349f0085a304a9fb4e5e7a1f5d3aad158b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_158522e1a9be5472845565baaf12349f0085a304a9fb4e5e7a1f5d3aad158b5b->leave($__internal_158522e1a9be5472845565baaf12349f0085a304a9fb4e5e7a1f5d3aad158b5b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
