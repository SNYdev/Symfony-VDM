<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a77bcb3f0f712b904ed19fe0612a6a49e7b43d40d1b2a9d4abe4fa99a96a1a6b extends Twig_Template
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
        $__internal_2225ebf888ba708b1a58c0da587bd0b204014b734b4c42a2b66c6657f06040c4 = $this->env->getExtension("native_profiler");
        $__internal_2225ebf888ba708b1a58c0da587bd0b204014b734b4c42a2b66c6657f06040c4->enter($__internal_2225ebf888ba708b1a58c0da587bd0b204014b734b4c42a2b66c6657f06040c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2225ebf888ba708b1a58c0da587bd0b204014b734b4c42a2b66c6657f06040c4->leave($__internal_2225ebf888ba708b1a58c0da587bd0b204014b734b4c42a2b66c6657f06040c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eff8c0d7c688c820054a1a68f3009525f5f46b8c07875645d26946167c7a5ffe = $this->env->getExtension("native_profiler");
        $__internal_eff8c0d7c688c820054a1a68f3009525f5f46b8c07875645d26946167c7a5ffe->enter($__internal_eff8c0d7c688c820054a1a68f3009525f5f46b8c07875645d26946167c7a5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eff8c0d7c688c820054a1a68f3009525f5f46b8c07875645d26946167c7a5ffe->leave($__internal_eff8c0d7c688c820054a1a68f3009525f5f46b8c07875645d26946167c7a5ffe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_010f71afdcf46d65edc1e60c7d24b98a066ba23c99c60c8c6f3b1c9b1fa05062 = $this->env->getExtension("native_profiler");
        $__internal_010f71afdcf46d65edc1e60c7d24b98a066ba23c99c60c8c6f3b1c9b1fa05062->enter($__internal_010f71afdcf46d65edc1e60c7d24b98a066ba23c99c60c8c6f3b1c9b1fa05062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_010f71afdcf46d65edc1e60c7d24b98a066ba23c99c60c8c6f3b1c9b1fa05062->leave($__internal_010f71afdcf46d65edc1e60c7d24b98a066ba23c99c60c8c6f3b1c9b1fa05062_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48f2ab3768e04fc37776860836326c9bc4aa3978b37a64eb4322fb9fb94f8d3f = $this->env->getExtension("native_profiler");
        $__internal_48f2ab3768e04fc37776860836326c9bc4aa3978b37a64eb4322fb9fb94f8d3f->enter($__internal_48f2ab3768e04fc37776860836326c9bc4aa3978b37a64eb4322fb9fb94f8d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48f2ab3768e04fc37776860836326c9bc4aa3978b37a64eb4322fb9fb94f8d3f->leave($__internal_48f2ab3768e04fc37776860836326c9bc4aa3978b37a64eb4322fb9fb94f8d3f_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
