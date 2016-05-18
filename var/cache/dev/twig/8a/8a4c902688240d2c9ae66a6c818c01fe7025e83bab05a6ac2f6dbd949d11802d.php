<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ccf665928f2ad137335b663156cfee18626deca56fa374e9234346394fd0419 extends Twig_Template
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
        $__internal_e8b8d1f8fb959d5acf4bbebdb085175bc808bbbc44956ce374aeb0de6ca39810 = $this->env->getExtension("native_profiler");
        $__internal_e8b8d1f8fb959d5acf4bbebdb085175bc808bbbc44956ce374aeb0de6ca39810->enter($__internal_e8b8d1f8fb959d5acf4bbebdb085175bc808bbbc44956ce374aeb0de6ca39810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8b8d1f8fb959d5acf4bbebdb085175bc808bbbc44956ce374aeb0de6ca39810->leave($__internal_e8b8d1f8fb959d5acf4bbebdb085175bc808bbbc44956ce374aeb0de6ca39810_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_701545798fd49b6a99767b2f92d5967fc3f6ca8ce4491670c7017c8ad02f7377 = $this->env->getExtension("native_profiler");
        $__internal_701545798fd49b6a99767b2f92d5967fc3f6ca8ce4491670c7017c8ad02f7377->enter($__internal_701545798fd49b6a99767b2f92d5967fc3f6ca8ce4491670c7017c8ad02f7377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_701545798fd49b6a99767b2f92d5967fc3f6ca8ce4491670c7017c8ad02f7377->leave($__internal_701545798fd49b6a99767b2f92d5967fc3f6ca8ce4491670c7017c8ad02f7377_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fe996e6f29b1dc5ba1f337269819ba73474d6774221390020896b0c28c21c09 = $this->env->getExtension("native_profiler");
        $__internal_4fe996e6f29b1dc5ba1f337269819ba73474d6774221390020896b0c28c21c09->enter($__internal_4fe996e6f29b1dc5ba1f337269819ba73474d6774221390020896b0c28c21c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fe996e6f29b1dc5ba1f337269819ba73474d6774221390020896b0c28c21c09->leave($__internal_4fe996e6f29b1dc5ba1f337269819ba73474d6774221390020896b0c28c21c09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc04a5ef9d8c20b0c5c189d213eb1d15bbf37338059fad0f7d65d659eb5f2e2d = $this->env->getExtension("native_profiler");
        $__internal_cc04a5ef9d8c20b0c5c189d213eb1d15bbf37338059fad0f7d65d659eb5f2e2d->enter($__internal_cc04a5ef9d8c20b0c5c189d213eb1d15bbf37338059fad0f7d65d659eb5f2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc04a5ef9d8c20b0c5c189d213eb1d15bbf37338059fad0f7d65d659eb5f2e2d->leave($__internal_cc04a5ef9d8c20b0c5c189d213eb1d15bbf37338059fad0f7d65d659eb5f2e2d_prof);

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
