<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f40205e6a69a1f8c9611cc8e2312d62ac6dfa0112c82333ad461a1490976f471 extends Twig_Template
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
        $__internal_fa0f51f818a7a3611602ee7a715f2a62872126f1a3aab7aaffd1332fd84f0ade = $this->env->getExtension("native_profiler");
        $__internal_fa0f51f818a7a3611602ee7a715f2a62872126f1a3aab7aaffd1332fd84f0ade->enter($__internal_fa0f51f818a7a3611602ee7a715f2a62872126f1a3aab7aaffd1332fd84f0ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fa0f51f818a7a3611602ee7a715f2a62872126f1a3aab7aaffd1332fd84f0ade->leave($__internal_fa0f51f818a7a3611602ee7a715f2a62872126f1a3aab7aaffd1332fd84f0ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
