<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cc4ca0ad1c7ca1ca08748da4eab872d08dab5db249952eabd1182b8f20b43771 extends Twig_Template
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
        $__internal_dd62d412698d0f82d31befe98b71f4a7fae7a8d352ea6c45893ef678632db46f = $this->env->getExtension("native_profiler");
        $__internal_dd62d412698d0f82d31befe98b71f4a7fae7a8d352ea6c45893ef678632db46f->enter($__internal_dd62d412698d0f82d31befe98b71f4a7fae7a8d352ea6c45893ef678632db46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dd62d412698d0f82d31befe98b71f4a7fae7a8d352ea6c45893ef678632db46f->leave($__internal_dd62d412698d0f82d31befe98b71f4a7fae7a8d352ea6c45893ef678632db46f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
