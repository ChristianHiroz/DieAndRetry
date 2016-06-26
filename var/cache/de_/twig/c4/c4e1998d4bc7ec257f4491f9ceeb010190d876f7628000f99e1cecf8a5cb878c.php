<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4e9f3bc20f0479f78a7304607cfa48ea7d882b7caa198753e735c7621b0d70bf extends Twig_Template
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
        $__internal_bdb329f764fd496c72ac1d8f34e1db5c39cba7f1b03f2e6857b221f2995e45aa = $this->env->getExtension("native_profiler");
        $__internal_bdb329f764fd496c72ac1d8f34e1db5c39cba7f1b03f2e6857b221f2995e45aa->enter($__internal_bdb329f764fd496c72ac1d8f34e1db5c39cba7f1b03f2e6857b221f2995e45aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bdb329f764fd496c72ac1d8f34e1db5c39cba7f1b03f2e6857b221f2995e45aa->leave($__internal_bdb329f764fd496c72ac1d8f34e1db5c39cba7f1b03f2e6857b221f2995e45aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
