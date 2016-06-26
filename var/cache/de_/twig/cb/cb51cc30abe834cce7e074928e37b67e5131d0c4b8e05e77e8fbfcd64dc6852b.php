<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8199b3695a176dbe160b7a774e619e811e75f828c528574a4017a18064b2f9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385d9012ff01d0dc0fa397a981bb7bd7cf600475a05ec5d804860e42104a6b14 = $this->env->getExtension("native_profiler");
        $__internal_385d9012ff01d0dc0fa397a981bb7bd7cf600475a05ec5d804860e42104a6b14->enter($__internal_385d9012ff01d0dc0fa397a981bb7bd7cf600475a05ec5d804860e42104a6b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_385d9012ff01d0dc0fa397a981bb7bd7cf600475a05ec5d804860e42104a6b14->leave($__internal_385d9012ff01d0dc0fa397a981bb7bd7cf600475a05ec5d804860e42104a6b14_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a4c6283f9fca85377597bfb9caa7ec38140bb708caec0a01d2697eb98a91528 = $this->env->getExtension("native_profiler");
        $__internal_3a4c6283f9fca85377597bfb9caa7ec38140bb708caec0a01d2697eb98a91528->enter($__internal_3a4c6283f9fca85377597bfb9caa7ec38140bb708caec0a01d2697eb98a91528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a4c6283f9fca85377597bfb9caa7ec38140bb708caec0a01d2697eb98a91528->leave($__internal_3a4c6283f9fca85377597bfb9caa7ec38140bb708caec0a01d2697eb98a91528_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
