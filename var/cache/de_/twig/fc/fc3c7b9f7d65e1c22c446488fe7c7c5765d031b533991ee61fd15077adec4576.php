<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_e0b644149a0b9ae774a0b2e15ca0baefa971685cf35486125f0664d10a9a9b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db76ee614318644ddc61d876973ad033b88851342efbcb1586177c85f81af80 = $this->env->getExtension("native_profiler");
        $__internal_3db76ee614318644ddc61d876973ad033b88851342efbcb1586177c85f81af80->enter($__internal_3db76ee614318644ddc61d876973ad033b88851342efbcb1586177c85f81af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db76ee614318644ddc61d876973ad033b88851342efbcb1586177c85f81af80->leave($__internal_3db76ee614318644ddc61d876973ad033b88851342efbcb1586177c85f81af80_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ae8aa17e2ecc278f76e6643a3aab35e42b5be33527919d98758417a40b3c2119 = $this->env->getExtension("native_profiler");
        $__internal_ae8aa17e2ecc278f76e6643a3aab35e42b5be33527919d98758417a40b3c2119->enter($__internal_ae8aa17e2ecc278f76e6643a3aab35e42b5be33527919d98758417a40b3c2119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_ae8aa17e2ecc278f76e6643a3aab35e42b5be33527919d98758417a40b3c2119->leave($__internal_ae8aa17e2ecc278f76e6643a3aab35e42b5be33527919d98758417a40b3c2119_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8af2b55e38afe9ed0a66dfc2ad1205cd80422e243f2a7fe7e0f8ff391a08c392 = $this->env->getExtension("native_profiler");
        $__internal_8af2b55e38afe9ed0a66dfc2ad1205cd80422e243f2a7fe7e0f8ff391a08c392->enter($__internal_8af2b55e38afe9ed0a66dfc2ad1205cd80422e243f2a7fe7e0f8ff391a08c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8af2b55e38afe9ed0a66dfc2ad1205cd80422e243f2a7fe7e0f8ff391a08c392->leave($__internal_8af2b55e38afe9ed0a66dfc2ad1205cd80422e243f2a7fe7e0f8ff391a08c392_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3ed8fb24cf744982160d2e00a3d8549e726be1c7e1839e90184a38552827934a = $this->env->getExtension("native_profiler");
        $__internal_3ed8fb24cf744982160d2e00a3d8549e726be1c7e1839e90184a38552827934a->enter($__internal_3ed8fb24cf744982160d2e00a3d8549e726be1c7e1839e90184a38552827934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3ed8fb24cf744982160d2e00a3d8549e726be1c7e1839e90184a38552827934a->leave($__internal_3ed8fb24cf744982160d2e00a3d8549e726be1c7e1839e90184a38552827934a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d39b03ff16b484d43822c3e9aaa6ce53ee5baf6b50012b6f9f9f7022d6a97d80 = $this->env->getExtension("native_profiler");
        $__internal_d39b03ff16b484d43822c3e9aaa6ce53ee5baf6b50012b6f9f9f7022d6a97d80->enter($__internal_d39b03ff16b484d43822c3e9aaa6ce53ee5baf6b50012b6f9f9f7022d6a97d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_d39b03ff16b484d43822c3e9aaa6ce53ee5baf6b50012b6f9f9f7022d6a97d80->leave($__internal_d39b03ff16b484d43822c3e9aaa6ce53ee5baf6b50012b6f9f9f7022d6a97d80_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7fb203ae3235c7da302043dad51a0928601f2226691cbade907c83b681ead2 = $this->env->getExtension("native_profiler");
        $__internal_0d7fb203ae3235c7da302043dad51a0928601f2226691cbade907c83b681ead2->enter($__internal_0d7fb203ae3235c7da302043dad51a0928601f2226691cbade907c83b681ead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_0d7fb203ae3235c7da302043dad51a0928601f2226691cbade907c83b681ead2->leave($__internal_0d7fb203ae3235c7da302043dad51a0928601f2226691cbade907c83b681ead2_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_229a7c97e2965a6d29fc2ee4678c3341fef06bde2b0516db6b58657215006195 = $this->env->getExtension("native_profiler");
        $__internal_229a7c97e2965a6d29fc2ee4678c3341fef06bde2b0516db6b58657215006195->enter($__internal_229a7c97e2965a6d29fc2ee4678c3341fef06bde2b0516db6b58657215006195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_229a7c97e2965a6d29fc2ee4678c3341fef06bde2b0516db6b58657215006195->leave($__internal_229a7c97e2965a6d29fc2ee4678c3341fef06bde2b0516db6b58657215006195_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_7aabb3209199da5a3f7a35da4390ab6f54433849f59d5f6aed8432d993a2f4b7 = $this->env->getExtension("native_profiler");
        $__internal_7aabb3209199da5a3f7a35da4390ab6f54433849f59d5f6aed8432d993a2f4b7->enter($__internal_7aabb3209199da5a3f7a35da4390ab6f54433849f59d5f6aed8432d993a2f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_7aabb3209199da5a3f7a35da4390ab6f54433849f59d5f6aed8432d993a2f4b7->leave($__internal_7aabb3209199da5a3f7a35da4390ab6f54433849f59d5f6aed8432d993a2f4b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
