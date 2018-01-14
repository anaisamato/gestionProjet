<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_383161af77eaf71b35ea1a6cbb644da679bc1474b6a902c03341b82b66a16680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383161af77eaf71b35ea1a6cbb644da679bc1474b6a902c03341b82b66a16680->enter($__internal_383161af77eaf71b35ea1a6cbb644da679bc1474b6a902c03341b82b66a16680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e7801953c65abda64e60d3ad73af3de8828b764058bfb1f19fd64b8a9ec5921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7801953c65abda64e60d3ad73af3de8828b764058bfb1f19fd64b8a9ec5921->enter($__internal_5e7801953c65abda64e60d3ad73af3de8828b764058bfb1f19fd64b8a9ec5921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383161af77eaf71b35ea1a6cbb644da679bc1474b6a902c03341b82b66a16680->leave($__internal_383161af77eaf71b35ea1a6cbb644da679bc1474b6a902c03341b82b66a16680_prof);

        
        $__internal_5e7801953c65abda64e60d3ad73af3de8828b764058bfb1f19fd64b8a9ec5921->leave($__internal_5e7801953c65abda64e60d3ad73af3de8828b764058bfb1f19fd64b8a9ec5921_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ff3219030a8e20de0a6d13f3ff63c75263e546580fb0e236300da499f5570c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff3219030a8e20de0a6d13f3ff63c75263e546580fb0e236300da499f5570c2->enter($__internal_2ff3219030a8e20de0a6d13f3ff63c75263e546580fb0e236300da499f5570c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab3a43d86ed2353318a81bcdf0a38bbf0c5774ebfa8c38e0678c8202d9a91fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3a43d86ed2353318a81bcdf0a38bbf0c5774ebfa8c38e0678c8202d9a91fb1->enter($__internal_ab3a43d86ed2353318a81bcdf0a38bbf0c5774ebfa8c38e0678c8202d9a91fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab3a43d86ed2353318a81bcdf0a38bbf0c5774ebfa8c38e0678c8202d9a91fb1->leave($__internal_ab3a43d86ed2353318a81bcdf0a38bbf0c5774ebfa8c38e0678c8202d9a91fb1_prof);

        
        $__internal_2ff3219030a8e20de0a6d13f3ff63c75263e546580fb0e236300da499f5570c2->leave($__internal_2ff3219030a8e20de0a6d13f3ff63c75263e546580fb0e236300da499f5570c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25279056f535f8e39abe78cf8f869cabdd1c127feba72be6fd26b2fadcdfd7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25279056f535f8e39abe78cf8f869cabdd1c127feba72be6fd26b2fadcdfd7ad->enter($__internal_25279056f535f8e39abe78cf8f869cabdd1c127feba72be6fd26b2fadcdfd7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cf12b370096be29e495234b56a675ce74b5f9fd08dc414555db5dff71617a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf12b370096be29e495234b56a675ce74b5f9fd08dc414555db5dff71617a18->enter($__internal_2cf12b370096be29e495234b56a675ce74b5f9fd08dc414555db5dff71617a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2cf12b370096be29e495234b56a675ce74b5f9fd08dc414555db5dff71617a18->leave($__internal_2cf12b370096be29e495234b56a675ce74b5f9fd08dc414555db5dff71617a18_prof);

        
        $__internal_25279056f535f8e39abe78cf8f869cabdd1c127feba72be6fd26b2fadcdfd7ad->leave($__internal_25279056f535f8e39abe78cf8f869cabdd1c127feba72be6fd26b2fadcdfd7ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b41f791cc4616d58b6179dfdfc9812885cdf776cee07ce97642a554f5766c7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41f791cc4616d58b6179dfdfc9812885cdf776cee07ce97642a554f5766c7cb->enter($__internal_b41f791cc4616d58b6179dfdfc9812885cdf776cee07ce97642a554f5766c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2f5bb1dae8a796b81e2f184f95ad2cd2f15e914d3575a2eb88d004b439cf326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f5bb1dae8a796b81e2f184f95ad2cd2f15e914d3575a2eb88d004b439cf326->enter($__internal_c2f5bb1dae8a796b81e2f184f95ad2cd2f15e914d3575a2eb88d004b439cf326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2f5bb1dae8a796b81e2f184f95ad2cd2f15e914d3575a2eb88d004b439cf326->leave($__internal_c2f5bb1dae8a796b81e2f184f95ad2cd2f15e914d3575a2eb88d004b439cf326_prof);

        
        $__internal_b41f791cc4616d58b6179dfdfc9812885cdf776cee07ce97642a554f5766c7cb->leave($__internal_b41f791cc4616d58b6179dfdfc9812885cdf776cee07ce97642a554f5766c7cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\gestionProjet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
