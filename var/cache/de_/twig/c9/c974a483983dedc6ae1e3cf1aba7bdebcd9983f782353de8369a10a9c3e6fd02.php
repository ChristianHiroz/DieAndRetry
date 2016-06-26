<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6b1378cff56e3235ca0fec24c80b0394c74cb94b386e5067c02ff3db27336620 extends Twig_Template
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
        $__internal_6265c1a8ac78a22a140f9cfe4c267748f92fb6c881225462cf4572d2de6f7ac5 = $this->env->getExtension("native_profiler");
        $__internal_6265c1a8ac78a22a140f9cfe4c267748f92fb6c881225462cf4572d2de6f7ac5->enter($__internal_6265c1a8ac78a22a140f9cfe4c267748f92fb6c881225462cf4572d2de6f7ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6265c1a8ac78a22a140f9cfe4c267748f92fb6c881225462cf4572d2de6f7ac5->leave($__internal_6265c1a8ac78a22a140f9cfe4c267748f92fb6c881225462cf4572d2de6f7ac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
