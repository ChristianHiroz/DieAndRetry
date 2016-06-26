<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1349a67c0a2bbafb143e45440fefa59fd048b14fb93ceeefa8289517ddd0053b extends Twig_Template
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
        $__internal_73339c246fefa428ec576ecd93107d7e81bbdffc58f7bfef6960b7f63f557a18 = $this->env->getExtension("native_profiler");
        $__internal_73339c246fefa428ec576ecd93107d7e81bbdffc58f7bfef6960b7f63f557a18->enter($__internal_73339c246fefa428ec576ecd93107d7e81bbdffc58f7bfef6960b7f63f557a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_73339c246fefa428ec576ecd93107d7e81bbdffc58f7bfef6960b7f63f557a18->leave($__internal_73339c246fefa428ec576ecd93107d7e81bbdffc58f7bfef6960b7f63f557a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
