<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9674029225d7ebb8a3ae82277579bb6abbb377707458b98a4c6d2a976d5cbf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9674029225d7ebb8a3ae82277579bb6abbb377707458b98a4c6d2a976d5cbf89->enter($__internal_9674029225d7ebb8a3ae82277579bb6abbb377707458b98a4c6d2a976d5cbf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6b9d489d8153651565ba9a2f3f090e27401ea51869b7166f970dafffbb50bf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9d489d8153651565ba9a2f3f090e27401ea51869b7166f970dafffbb50bf1d->enter($__internal_6b9d489d8153651565ba9a2f3f090e27401ea51869b7166f970dafffbb50bf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9674029225d7ebb8a3ae82277579bb6abbb377707458b98a4c6d2a976d5cbf89->leave($__internal_9674029225d7ebb8a3ae82277579bb6abbb377707458b98a4c6d2a976d5cbf89_prof);

        
        $__internal_6b9d489d8153651565ba9a2f3f090e27401ea51869b7166f970dafffbb50bf1d->leave($__internal_6b9d489d8153651565ba9a2f3f090e27401ea51869b7166f970dafffbb50bf1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1592535b2e741fde0a86d1932ff8d95ca88b5c0b76a9e4b482b6881839e4f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1592535b2e741fde0a86d1932ff8d95ca88b5c0b76a9e4b482b6881839e4f81f->enter($__internal_1592535b2e741fde0a86d1932ff8d95ca88b5c0b76a9e4b482b6881839e4f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_271f8e06eaa829b29fe45cd6d4bcbab3945a3396b969e8f96448c4dd49f6e7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271f8e06eaa829b29fe45cd6d4bcbab3945a3396b969e8f96448c4dd49f6e7f7->enter($__internal_271f8e06eaa829b29fe45cd6d4bcbab3945a3396b969e8f96448c4dd49f6e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_271f8e06eaa829b29fe45cd6d4bcbab3945a3396b969e8f96448c4dd49f6e7f7->leave($__internal_271f8e06eaa829b29fe45cd6d4bcbab3945a3396b969e8f96448c4dd49f6e7f7_prof);

        
        $__internal_1592535b2e741fde0a86d1932ff8d95ca88b5c0b76a9e4b482b6881839e4f81f->leave($__internal_1592535b2e741fde0a86d1932ff8d95ca88b5c0b76a9e4b482b6881839e4f81f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d45c7e25280c851d372ea94d7e9785350fdee4be65b11e2ec56828dd6eaec1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45c7e25280c851d372ea94d7e9785350fdee4be65b11e2ec56828dd6eaec1a1->enter($__internal_d45c7e25280c851d372ea94d7e9785350fdee4be65b11e2ec56828dd6eaec1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32c21a067261f9f58b99d08b507341f78677afe1196c52754a3900007fdbfea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c21a067261f9f58b99d08b507341f78677afe1196c52754a3900007fdbfea0->enter($__internal_32c21a067261f9f58b99d08b507341f78677afe1196c52754a3900007fdbfea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32c21a067261f9f58b99d08b507341f78677afe1196c52754a3900007fdbfea0->leave($__internal_32c21a067261f9f58b99d08b507341f78677afe1196c52754a3900007fdbfea0_prof);

        
        $__internal_d45c7e25280c851d372ea94d7e9785350fdee4be65b11e2ec56828dd6eaec1a1->leave($__internal_d45c7e25280c851d372ea94d7e9785350fdee4be65b11e2ec56828dd6eaec1a1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d84dfc7419c3c72f8542c880f981da8b897bcb0429a6c4b97728eb16a042789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d84dfc7419c3c72f8542c880f981da8b897bcb0429a6c4b97728eb16a042789->enter($__internal_2d84dfc7419c3c72f8542c880f981da8b897bcb0429a6c4b97728eb16a042789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57881528ede4ec29e4c0fe17f05460f868c7aaa6967ecee4a63b5e70921092a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57881528ede4ec29e4c0fe17f05460f868c7aaa6967ecee4a63b5e70921092a0->enter($__internal_57881528ede4ec29e4c0fe17f05460f868c7aaa6967ecee4a63b5e70921092a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57881528ede4ec29e4c0fe17f05460f868c7aaa6967ecee4a63b5e70921092a0->leave($__internal_57881528ede4ec29e4c0fe17f05460f868c7aaa6967ecee4a63b5e70921092a0_prof);

        
        $__internal_2d84dfc7419c3c72f8542c880f981da8b897bcb0429a6c4b97728eb16a042789->leave($__internal_2d84dfc7419c3c72f8542c880f981da8b897bcb0429a6c4b97728eb16a042789_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa905a84a759c751c22996081171c180fe2ae55d61d3c6ac0cd74f79e1299274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa905a84a759c751c22996081171c180fe2ae55d61d3c6ac0cd74f79e1299274->enter($__internal_aa905a84a759c751c22996081171c180fe2ae55d61d3c6ac0cd74f79e1299274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85ab9265eabb1b9e1a8cd0456d356bf2e80d1b312b66803a74e15233f0f5edc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ab9265eabb1b9e1a8cd0456d356bf2e80d1b312b66803a74e15233f0f5edc4->enter($__internal_85ab9265eabb1b9e1a8cd0456d356bf2e80d1b312b66803a74e15233f0f5edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_85ab9265eabb1b9e1a8cd0456d356bf2e80d1b312b66803a74e15233f0f5edc4->leave($__internal_85ab9265eabb1b9e1a8cd0456d356bf2e80d1b312b66803a74e15233f0f5edc4_prof);

        
        $__internal_aa905a84a759c751c22996081171c180fe2ae55d61d3c6ac0cd74f79e1299274->leave($__internal_aa905a84a759c751c22996081171c180fe2ae55d61d3c6ac0cd74f79e1299274_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\gestionProjet\\app\\Resources\\views\\base.html.twig");
    }
}
