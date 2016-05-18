<?php

/* base.html.twig */
class __TwigTemplate_dc8cfb731e93c05a41787944a9de5b969ff2df9690f81121cc86a3e1425fd7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6710d0991c6409c56d096c71f32f2cb5e76c8e4ce044703701c0a15853f4b0b2 = $this->env->getExtension("native_profiler");
        $__internal_6710d0991c6409c56d096c71f32f2cb5e76c8e4ce044703701c0a15853f4b0b2->enter($__internal_6710d0991c6409c56d096c71f32f2cb5e76c8e4ce044703701c0a15853f4b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_6710d0991c6409c56d096c71f32f2cb5e76c8e4ce044703701c0a15853f4b0b2->leave($__internal_6710d0991c6409c56d096c71f32f2cb5e76c8e4ce044703701c0a15853f4b0b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5802f7b32bba3d72d0fd74dbe2b4bb30b9b07376c83e60a99b278d1afcbfc6e = $this->env->getExtension("native_profiler");
        $__internal_c5802f7b32bba3d72d0fd74dbe2b4bb30b9b07376c83e60a99b278d1afcbfc6e->enter($__internal_c5802f7b32bba3d72d0fd74dbe2b4bb30b9b07376c83e60a99b278d1afcbfc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_c5802f7b32bba3d72d0fd74dbe2b4bb30b9b07376c83e60a99b278d1afcbfc6e->leave($__internal_c5802f7b32bba3d72d0fd74dbe2b4bb30b9b07376c83e60a99b278d1afcbfc6e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f1f67931681d4e81c984742bbbc2078982dca696c8929d552deec88ccedb76b = $this->env->getExtension("native_profiler");
        $__internal_1f1f67931681d4e81c984742bbbc2078982dca696c8929d552deec88ccedb76b->enter($__internal_1f1f67931681d4e81c984742bbbc2078982dca696c8929d552deec88ccedb76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel='stylesheet' type='text/css' href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_1f1f67931681d4e81c984742bbbc2078982dca696c8929d552deec88ccedb76b->leave($__internal_1f1f67931681d4e81c984742bbbc2078982dca696c8929d552deec88ccedb76b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_c90b827f9d211029b97d5c86a69bab684ed20441c880ba01981748246c9dd851 = $this->env->getExtension("native_profiler");
        $__internal_c90b827f9d211029b97d5c86a69bab684ed20441c880ba01981748246c9dd851->enter($__internal_c90b827f9d211029b97d5c86a69bab684ed20441c880ba01981748246c9dd851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "          ";
        $this->displayBlock('nav', $context, $blocks);
        // line 17
        echo "        ";
        
        $__internal_c90b827f9d211029b97d5c86a69bab684ed20441c880ba01981748246c9dd851->leave($__internal_c90b827f9d211029b97d5c86a69bab684ed20441c880ba01981748246c9dd851_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ed7a683ccdde28d0dd398b404926dc2d79fb29ad2ae8d98ba3e7d49cb8d98b41 = $this->env->getExtension("native_profiler");
        $__internal_ed7a683ccdde28d0dd398b404926dc2d79fb29ad2ae8d98ba3e7d49cb8d98b41->enter($__internal_ed7a683ccdde28d0dd398b404926dc2d79fb29ad2ae8d98ba3e7d49cb8d98b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 16
        echo "          ";
        
        $__internal_ed7a683ccdde28d0dd398b404926dc2d79fb29ad2ae8d98ba3e7d49cb8d98b41->leave($__internal_ed7a683ccdde28d0dd398b404926dc2d79fb29ad2ae8d98ba3e7d49cb8d98b41_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32accf6efb7dbc060a96c9046381a5d93c435eb1493192c57a07d840457319c3 = $this->env->getExtension("native_profiler");
        $__internal_32accf6efb7dbc060a96c9046381a5d93c435eb1493192c57a07d840457319c3->enter($__internal_32accf6efb7dbc060a96c9046381a5d93c435eb1493192c57a07d840457319c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_32accf6efb7dbc060a96c9046381a5d93c435eb1493192c57a07d840457319c3->leave($__internal_32accf6efb7dbc060a96c9046381a5d93c435eb1493192c57a07d840457319c3_prof);

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
        return array (  125 => 18,  118 => 16,  112 => 15,  105 => 17,  102 => 15,  96 => 14,  87 => 9,  83 => 8,  78 => 7,  72 => 6,  60 => 5,  51 => 19,  48 => 18,  46 => 14,  39 => 11,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony VDM{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/bootstrap-theme.min.css') }}">*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*           {% block nav %}*/
/*           {% endblock %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
