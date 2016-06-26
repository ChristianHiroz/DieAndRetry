<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec3ee45695d6288b74cb040f1912a63a9b2fa54121310131fe3b52772feda287 extends Twig_Template
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
        $__internal_8e91dda8902a54aca24f3b49023d1b16776d4104947669c518aa58dba8af6f89 = $this->env->getExtension("native_profiler");
        $__internal_8e91dda8902a54aca24f3b49023d1b16776d4104947669c518aa58dba8af6f89->enter($__internal_8e91dda8902a54aca24f3b49023d1b16776d4104947669c518aa58dba8af6f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e91dda8902a54aca24f3b49023d1b16776d4104947669c518aa58dba8af6f89->leave($__internal_8e91dda8902a54aca24f3b49023d1b16776d4104947669c518aa58dba8af6f89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
