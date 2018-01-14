<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_847233f68bf9730593053ac9ee0631ee206d35accfa47e8791581b33787f1b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847233f68bf9730593053ac9ee0631ee206d35accfa47e8791581b33787f1b33->enter($__internal_847233f68bf9730593053ac9ee0631ee206d35accfa47e8791581b33787f1b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a77af306d672ed5bd618700ad2fbabf63a22cdb52523238fcc3374585089bd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77af306d672ed5bd618700ad2fbabf63a22cdb52523238fcc3374585089bd11->enter($__internal_a77af306d672ed5bd618700ad2fbabf63a22cdb52523238fcc3374585089bd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847233f68bf9730593053ac9ee0631ee206d35accfa47e8791581b33787f1b33->leave($__internal_847233f68bf9730593053ac9ee0631ee206d35accfa47e8791581b33787f1b33_prof);

        
        $__internal_a77af306d672ed5bd618700ad2fbabf63a22cdb52523238fcc3374585089bd11->leave($__internal_a77af306d672ed5bd618700ad2fbabf63a22cdb52523238fcc3374585089bd11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b88bd7c576877da99de2e5d45bd7fc6b45c966eca833fa2a11eeab080ed8d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b88bd7c576877da99de2e5d45bd7fc6b45c966eca833fa2a11eeab080ed8d47->enter($__internal_7b88bd7c576877da99de2e5d45bd7fc6b45c966eca833fa2a11eeab080ed8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa19b226a4ee805d39153d3b5debd8e2ffb5fb4a2cc4643c108be2419830e45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa19b226a4ee805d39153d3b5debd8e2ffb5fb4a2cc4643c108be2419830e45c->enter($__internal_aa19b226a4ee805d39153d3b5debd8e2ffb5fb4a2cc4643c108be2419830e45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa19b226a4ee805d39153d3b5debd8e2ffb5fb4a2cc4643c108be2419830e45c->leave($__internal_aa19b226a4ee805d39153d3b5debd8e2ffb5fb4a2cc4643c108be2419830e45c_prof);

        
        $__internal_7b88bd7c576877da99de2e5d45bd7fc6b45c966eca833fa2a11eeab080ed8d47->leave($__internal_7b88bd7c576877da99de2e5d45bd7fc6b45c966eca833fa2a11eeab080ed8d47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3577f3697e68316f34a8e8ea236f07ac1fc71251125f33f947c5a07675f12103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3577f3697e68316f34a8e8ea236f07ac1fc71251125f33f947c5a07675f12103->enter($__internal_3577f3697e68316f34a8e8ea236f07ac1fc71251125f33f947c5a07675f12103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86ee9b07fe97aa1b7c3348b391298186fee034754c6f272276ce97baddbe6d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ee9b07fe97aa1b7c3348b391298186fee034754c6f272276ce97baddbe6d37->enter($__internal_86ee9b07fe97aa1b7c3348b391298186fee034754c6f272276ce97baddbe6d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_86ee9b07fe97aa1b7c3348b391298186fee034754c6f272276ce97baddbe6d37->leave($__internal_86ee9b07fe97aa1b7c3348b391298186fee034754c6f272276ce97baddbe6d37_prof);

        
        $__internal_3577f3697e68316f34a8e8ea236f07ac1fc71251125f33f947c5a07675f12103->leave($__internal_3577f3697e68316f34a8e8ea236f07ac1fc71251125f33f947c5a07675f12103_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba0720ea336729654ce81f94cc99a56fb2117ce0b473a449f231889d9a6001d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0720ea336729654ce81f94cc99a56fb2117ce0b473a449f231889d9a6001d8->enter($__internal_ba0720ea336729654ce81f94cc99a56fb2117ce0b473a449f231889d9a6001d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68931252b0d418a3eb48f83990fa89a21bc769e58df87f458bd4d3232a0fc1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68931252b0d418a3eb48f83990fa89a21bc769e58df87f458bd4d3232a0fc1d5->enter($__internal_68931252b0d418a3eb48f83990fa89a21bc769e58df87f458bd4d3232a0fc1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_68931252b0d418a3eb48f83990fa89a21bc769e58df87f458bd4d3232a0fc1d5->leave($__internal_68931252b0d418a3eb48f83990fa89a21bc769e58df87f458bd4d3232a0fc1d5_prof);

        
        $__internal_ba0720ea336729654ce81f94cc99a56fb2117ce0b473a449f231889d9a6001d8->leave($__internal_ba0720ea336729654ce81f94cc99a56fb2117ce0b473a449f231889d9a6001d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\gestionProjet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
