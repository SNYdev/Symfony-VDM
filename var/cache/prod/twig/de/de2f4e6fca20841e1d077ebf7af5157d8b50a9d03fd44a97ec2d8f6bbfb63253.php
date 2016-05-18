<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dabc97d8202316541fc6e159fd4e65bcb95a7d88a0b4c26a7858cd9c7bab0ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c2b9f8324e8dc12640c401622b01bb0ee899b03b892cfd97f6e93609fff0fb9 = $this->env->getExtension("native_profiler");
        $__internal_8c2b9f8324e8dc12640c401622b01bb0ee899b03b892cfd97f6e93609fff0fb9->enter($__internal_8c2b9f8324e8dc12640c401622b01bb0ee899b03b892cfd97f6e93609fff0fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2b9f8324e8dc12640c401622b01bb0ee899b03b892cfd97f6e93609fff0fb9->leave($__internal_8c2b9f8324e8dc12640c401622b01bb0ee899b03b892cfd97f6e93609fff0fb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69b66447b515c9e10b0ddc3b62a79ae9e09a31916f18386d03fb2fa0597154d5 = $this->env->getExtension("native_profiler");
        $__internal_69b66447b515c9e10b0ddc3b62a79ae9e09a31916f18386d03fb2fa0597154d5->enter($__internal_69b66447b515c9e10b0ddc3b62a79ae9e09a31916f18386d03fb2fa0597154d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_69b66447b515c9e10b0ddc3b62a79ae9e09a31916f18386d03fb2fa0597154d5->leave($__internal_69b66447b515c9e10b0ddc3b62a79ae9e09a31916f18386d03fb2fa0597154d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad09e18504d3f7ccd3b4c98e9099881c0f8a07facffb4903fa98fb2d923531c0 = $this->env->getExtension("native_profiler");
        $__internal_ad09e18504d3f7ccd3b4c98e9099881c0f8a07facffb4903fa98fb2d923531c0->enter($__internal_ad09e18504d3f7ccd3b4c98e9099881c0f8a07facffb4903fa98fb2d923531c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad09e18504d3f7ccd3b4c98e9099881c0f8a07facffb4903fa98fb2d923531c0->leave($__internal_ad09e18504d3f7ccd3b4c98e9099881c0f8a07facffb4903fa98fb2d923531c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6da96cbeddabb196e530b82486e4a1a56072309070f116d092ebaaf7b4d48a = $this->env->getExtension("native_profiler");
        $__internal_9e6da96cbeddabb196e530b82486e4a1a56072309070f116d092ebaaf7b4d48a->enter($__internal_9e6da96cbeddabb196e530b82486e4a1a56072309070f116d092ebaaf7b4d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9e6da96cbeddabb196e530b82486e4a1a56072309070f116d092ebaaf7b4d48a->leave($__internal_9e6da96cbeddabb196e530b82486e4a1a56072309070f116d092ebaaf7b4d48a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
