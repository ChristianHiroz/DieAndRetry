<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c9d07b450d6d91539215d52a0bd2afb85d23b36e7a2cbbe7dc10687618beddcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a611e686f3318017b2bf95f5124a96bc97ba5a3a1ad1b3bbfdcc3e42fc9099a = $this->env->getExtension("native_profiler");
        $__internal_7a611e686f3318017b2bf95f5124a96bc97ba5a3a1ad1b3bbfdcc3e42fc9099a->enter($__internal_7a611e686f3318017b2bf95f5124a96bc97ba5a3a1ad1b3bbfdcc3e42fc9099a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7a611e686f3318017b2bf95f5124a96bc97ba5a3a1ad1b3bbfdcc3e42fc9099a->leave($__internal_7a611e686f3318017b2bf95f5124a96bc97ba5a3a1ad1b3bbfdcc3e42fc9099a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
