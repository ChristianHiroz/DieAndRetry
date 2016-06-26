<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_7ec259edef9f34b5d2afce16bafb8e4b308228b8f2bc00fa580aca55a6f53f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c840f0f99566c71f2787ddfad8d115c41f307902e5a3512227cd6f817bb00e8c = $this->env->getExtension("native_profiler");
        $__internal_c840f0f99566c71f2787ddfad8d115c41f307902e5a3512227cd6f817bb00e8c->enter($__internal_c840f0f99566c71f2787ddfad8d115c41f307902e5a3512227cd6f817bb00e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_c840f0f99566c71f2787ddfad8d115c41f307902e5a3512227cd6f817bb00e8c->leave($__internal_c840f0f99566c71f2787ddfad8d115c41f307902e5a3512227cd6f817bb00e8c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_92fac7491e7e8590ef618b66e37b279f76c8c21809ef3f323a0b68acca3439a9 = $this->env->getExtension("native_profiler");
        $__internal_92fac7491e7e8590ef618b66e37b279f76c8c21809ef3f323a0b68acca3439a9->enter($__internal_92fac7491e7e8590ef618b66e37b279f76c8c21809ef3f323a0b68acca3439a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_92fac7491e7e8590ef618b66e37b279f76c8c21809ef3f323a0b68acca3439a9->leave($__internal_92fac7491e7e8590ef618b66e37b279f76c8c21809ef3f323a0b68acca3439a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
