<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4c9b0bdaa48d46a643fbe76fbac39f16d880a0d520f229efbdf0517b5b7b2af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8ebc55bdff6ee5e543646b958f6e94adcebb4bdd5da92581ca1f329d208933 = $this->env->getExtension("native_profiler");
        $__internal_dd8ebc55bdff6ee5e543646b958f6e94adcebb4bdd5da92581ca1f329d208933->enter($__internal_dd8ebc55bdff6ee5e543646b958f6e94adcebb4bdd5da92581ca1f329d208933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_dd8ebc55bdff6ee5e543646b958f6e94adcebb4bdd5da92581ca1f329d208933->leave($__internal_dd8ebc55bdff6ee5e543646b958f6e94adcebb4bdd5da92581ca1f329d208933_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_315bc9551e3a1b7b9d41d762f0a3f2c87167bdd904198c8b0e3bf9fc924d3d03 = $this->env->getExtension("native_profiler");
        $__internal_315bc9551e3a1b7b9d41d762f0a3f2c87167bdd904198c8b0e3bf9fc924d3d03->enter($__internal_315bc9551e3a1b7b9d41d762f0a3f2c87167bdd904198c8b0e3bf9fc924d3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_315bc9551e3a1b7b9d41d762f0a3f2c87167bdd904198c8b0e3bf9fc924d3d03->leave($__internal_315bc9551e3a1b7b9d41d762f0a3f2c87167bdd904198c8b0e3bf9fc924d3d03_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
