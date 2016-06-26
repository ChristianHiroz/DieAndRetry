<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ac302ea55b717fcd1461841b71cb8846c7232fd427be19d64323f977af6d9cd1 extends Twig_Template
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
        $__internal_30025129b0fe1a52086f80374c279997f880925e4ee293b187dfad0f59c7fe09 = $this->env->getExtension("native_profiler");
        $__internal_30025129b0fe1a52086f80374c279997f880925e4ee293b187dfad0f59c7fe09->enter($__internal_30025129b0fe1a52086f80374c279997f880925e4ee293b187dfad0f59c7fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_30025129b0fe1a52086f80374c279997f880925e4ee293b187dfad0f59c7fe09->leave($__internal_30025129b0fe1a52086f80374c279997f880925e4ee293b187dfad0f59c7fe09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
