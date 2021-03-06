<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7b0c74570e6619a2978eeb4a3ae272d63636eb1330b119207e9f1721d5cff153 extends Twig_Template
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
        $__internal_6ec803782997002ab8e0b5919536565182048fa25f475cfe6c3cf5816d5bd6d9 = $this->env->getExtension("native_profiler");
        $__internal_6ec803782997002ab8e0b5919536565182048fa25f475cfe6c3cf5816d5bd6d9->enter($__internal_6ec803782997002ab8e0b5919536565182048fa25f475cfe6c3cf5816d5bd6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ec803782997002ab8e0b5919536565182048fa25f475cfe6c3cf5816d5bd6d9->leave($__internal_6ec803782997002ab8e0b5919536565182048fa25f475cfe6c3cf5816d5bd6d9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30d4ef80ec89838ff87eebeee3221a8cf0bef97c775200567b68d162f786113e = $this->env->getExtension("native_profiler");
        $__internal_30d4ef80ec89838ff87eebeee3221a8cf0bef97c775200567b68d162f786113e->enter($__internal_30d4ef80ec89838ff87eebeee3221a8cf0bef97c775200567b68d162f786113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_30d4ef80ec89838ff87eebeee3221a8cf0bef97c775200567b68d162f786113e->leave($__internal_30d4ef80ec89838ff87eebeee3221a8cf0bef97c775200567b68d162f786113e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_955d84bc3e5183a7416926ecb4876056677407b4c0e2b973c399c061801ad0f8 = $this->env->getExtension("native_profiler");
        $__internal_955d84bc3e5183a7416926ecb4876056677407b4c0e2b973c399c061801ad0f8->enter($__internal_955d84bc3e5183a7416926ecb4876056677407b4c0e2b973c399c061801ad0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_955d84bc3e5183a7416926ecb4876056677407b4c0e2b973c399c061801ad0f8->leave($__internal_955d84bc3e5183a7416926ecb4876056677407b4c0e2b973c399c061801ad0f8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d0eb54589aed9c38f4a5e0180f5e83c622fb5ec5472cc234393ccb9fbd47a7a9 = $this->env->getExtension("native_profiler");
        $__internal_d0eb54589aed9c38f4a5e0180f5e83c622fb5ec5472cc234393ccb9fbd47a7a9->enter($__internal_d0eb54589aed9c38f4a5e0180f5e83c622fb5ec5472cc234393ccb9fbd47a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d0eb54589aed9c38f4a5e0180f5e83c622fb5ec5472cc234393ccb9fbd47a7a9->leave($__internal_d0eb54589aed9c38f4a5e0180f5e83c622fb5ec5472cc234393ccb9fbd47a7a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
