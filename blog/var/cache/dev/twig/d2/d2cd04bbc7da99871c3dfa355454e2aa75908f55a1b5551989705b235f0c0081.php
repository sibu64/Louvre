<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_22ea8ca5930624cab12f978184cbaf73f8482cbbdd4121d184a57f71890b8058 extends Twig_Template
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
        $__internal_baa5e6dca9a29430eeadae34d520f3bda57beadbf6472bb3d632c23113565eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa5e6dca9a29430eeadae34d520f3bda57beadbf6472bb3d632c23113565eba->enter($__internal_baa5e6dca9a29430eeadae34d520f3bda57beadbf6472bb3d632c23113565eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a6f5d70563aa3f98046676b09063889a89f947b309756bd361fb8dadb42032e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f5d70563aa3f98046676b09063889a89f947b309756bd361fb8dadb42032e3->enter($__internal_a6f5d70563aa3f98046676b09063889a89f947b309756bd361fb8dadb42032e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_baa5e6dca9a29430eeadae34d520f3bda57beadbf6472bb3d632c23113565eba->leave($__internal_baa5e6dca9a29430eeadae34d520f3bda57beadbf6472bb3d632c23113565eba_prof);

        
        $__internal_a6f5d70563aa3f98046676b09063889a89f947b309756bd361fb8dadb42032e3->leave($__internal_a6f5d70563aa3f98046676b09063889a89f947b309756bd361fb8dadb42032e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
