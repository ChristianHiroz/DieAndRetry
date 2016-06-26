<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fdc55950dcc12bd783d8cca820ad43a954577760166f88ab4ec83b24cd3ed63a extends Twig_Template
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
        $__internal_55b342e8ae89d37444399c1e5e26508433e2dfd7308a061211afb123fe1ccfc1 = $this->env->getExtension("native_profiler");
        $__internal_55b342e8ae89d37444399c1e5e26508433e2dfd7308a061211afb123fe1ccfc1->enter($__internal_55b342e8ae89d37444399c1e5e26508433e2dfd7308a061211afb123fe1ccfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_55b342e8ae89d37444399c1e5e26508433e2dfd7308a061211afb123fe1ccfc1->leave($__internal_55b342e8ae89d37444399c1e5e26508433e2dfd7308a061211afb123fe1ccfc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
