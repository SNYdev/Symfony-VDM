<?php

/* default/best.html.twig */
class __TwigTemplate_341481641c0e61472618e8ee440bbb81c7911a0f72d0decf060e6f26c45fca05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "default/best.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a5c871d8c9d473b70b5fc1d0780cdc0a130dd1fa641059ab1722e87ea6d9c42 = $this->env->getExtension("native_profiler");
        $__internal_6a5c871d8c9d473b70b5fc1d0780cdc0a130dd1fa641059ab1722e87ea6d9c42->enter($__internal_6a5c871d8c9d473b70b5fc1d0780cdc0a130dd1fa641059ab1722e87ea6d9c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/best.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5c871d8c9d473b70b5fc1d0780cdc0a130dd1fa641059ab1722e87ea6d9c42->leave($__internal_6a5c871d8c9d473b70b5fc1d0780cdc0a130dd1fa641059ab1722e87ea6d9c42_prof);

    }

    public function getTemplateName()
    {
        return "default/best.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'default/index.html.twig' %}*/
/* */
