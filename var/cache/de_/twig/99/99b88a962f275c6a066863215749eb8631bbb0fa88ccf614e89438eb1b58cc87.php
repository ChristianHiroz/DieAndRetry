<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3b61bcba430a5fc12eddee4f14ba3b1d5415d9cedc693787055d145dfc5ed01b extends Twig_Template
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
        $__internal_4098be604e99e6727c58b535fb220071010761342e628216f5c6596e15f0d01a = $this->env->getExtension("native_profiler");
        $__internal_4098be604e99e6727c58b535fb220071010761342e628216f5c6596e15f0d01a->enter($__internal_4098be604e99e6727c58b535fb220071010761342e628216f5c6596e15f0d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4098be604e99e6727c58b535fb220071010761342e628216f5c6596e15f0d01a->leave($__internal_4098be604e99e6727c58b535fb220071010761342e628216f5c6596e15f0d01a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
