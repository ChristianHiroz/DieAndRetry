<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_a574561337f08e2cb0962e77b7247ac662ec8de4ebc3dc53a1c4fb4cac774be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d7cced8ea1288947d846f0cb00a056f07389591e2514e5f32a89028d0d9261 = $this->env->getExtension("native_profiler");
        $__internal_d4d7cced8ea1288947d846f0cb00a056f07389591e2514e5f32a89028d0d9261->enter($__internal_d4d7cced8ea1288947d846f0cb00a056f07389591e2514e5f32a89028d0d9261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d7cced8ea1288947d846f0cb00a056f07389591e2514e5f32a89028d0d9261->leave($__internal_d4d7cced8ea1288947d846f0cb00a056f07389591e2514e5f32a89028d0d9261_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0108f388583040d1066cda7555827f745e94a5078a80c61e4e1c6b4e31cd7b72 = $this->env->getExtension("native_profiler");
        $__internal_0108f388583040d1066cda7555827f745e94a5078a80c61e4e1c6b4e31cd7b72->enter($__internal_0108f388583040d1066cda7555827f745e94a5078a80c61e4e1c6b4e31cd7b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_0108f388583040d1066cda7555827f745e94a5078a80c61e4e1c6b4e31cd7b72->leave($__internal_0108f388583040d1066cda7555827f745e94a5078a80c61e4e1c6b4e31cd7b72_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
