<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_57c4fa89ce9cfbb3ddad292edc6e44e58a4d99aa58848e84ec552d4d559d7dd0 extends Twig_Template
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
        $__internal_c1ce6854e503a6ca4614562e91d302fbe56415665f23a68e7ca4b2c6d890e7e9 = $this->env->getExtension("native_profiler");
        $__internal_c1ce6854e503a6ca4614562e91d302fbe56415665f23a68e7ca4b2c6d890e7e9->enter($__internal_c1ce6854e503a6ca4614562e91d302fbe56415665f23a68e7ca4b2c6d890e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c1ce6854e503a6ca4614562e91d302fbe56415665f23a68e7ca4b2c6d890e7e9->leave($__internal_c1ce6854e503a6ca4614562e91d302fbe56415665f23a68e7ca4b2c6d890e7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
