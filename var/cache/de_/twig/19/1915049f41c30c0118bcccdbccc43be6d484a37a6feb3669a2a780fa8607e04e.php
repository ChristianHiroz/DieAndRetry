<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3717b6b14f5ca9a471cc7dc1044e1926f11f98a70fd8a52e64135c8783c37e29 extends Twig_Template
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
        $__internal_70aece49e18a00a840c7190b102b9055fd73e897f9653732b3c81b63c12684dc = $this->env->getExtension("native_profiler");
        $__internal_70aece49e18a00a840c7190b102b9055fd73e897f9653732b3c81b63c12684dc->enter($__internal_70aece49e18a00a840c7190b102b9055fd73e897f9653732b3c81b63c12684dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_70aece49e18a00a840c7190b102b9055fd73e897f9653732b3c81b63c12684dc->leave($__internal_70aece49e18a00a840c7190b102b9055fd73e897f9653732b3c81b63c12684dc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5db38d3e307b50d046298de75e0186e327a2743d82b5cca57c6e4d990292c318 = $this->env->getExtension("native_profiler");
        $__internal_5db38d3e307b50d046298de75e0186e327a2743d82b5cca57c6e4d990292c318->enter($__internal_5db38d3e307b50d046298de75e0186e327a2743d82b5cca57c6e4d990292c318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5db38d3e307b50d046298de75e0186e327a2743d82b5cca57c6e4d990292c318->leave($__internal_5db38d3e307b50d046298de75e0186e327a2743d82b5cca57c6e4d990292c318_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de0b9d1d4a4f07ad08a1efb8918c9906628da96fc1fdd191df53e4ec1e619ce3 = $this->env->getExtension("native_profiler");
        $__internal_de0b9d1d4a4f07ad08a1efb8918c9906628da96fc1fdd191df53e4ec1e619ce3->enter($__internal_de0b9d1d4a4f07ad08a1efb8918c9906628da96fc1fdd191df53e4ec1e619ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de0b9d1d4a4f07ad08a1efb8918c9906628da96fc1fdd191df53e4ec1e619ce3->leave($__internal_de0b9d1d4a4f07ad08a1efb8918c9906628da96fc1fdd191df53e4ec1e619ce3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_48d2ce4b3801eb3a8558debd111ae0ec8a36e2e660f4215e14eb40674f4e218f = $this->env->getExtension("native_profiler");
        $__internal_48d2ce4b3801eb3a8558debd111ae0ec8a36e2e660f4215e14eb40674f4e218f->enter($__internal_48d2ce4b3801eb3a8558debd111ae0ec8a36e2e660f4215e14eb40674f4e218f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_48d2ce4b3801eb3a8558debd111ae0ec8a36e2e660f4215e14eb40674f4e218f->leave($__internal_48d2ce4b3801eb3a8558debd111ae0ec8a36e2e660f4215e14eb40674f4e218f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
