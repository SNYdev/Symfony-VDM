<?php

/* base.html.twig */
class __TwigTemplate_6a6024572071d9441ec61a9cb3f59241256bff62f07f4f368e2760d6429629e8 extends Twig_Template
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
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_137d8ca46782dcca4b9e36343933ad6d63231721ebf97ca8ef62799d1b2ca94c = $this->env->getExtension("native_profiler");
        $__internal_137d8ca46782dcca4b9e36343933ad6d63231721ebf97ca8ef62799d1b2ca94c->enter($__internal_137d8ca46782dcca4b9e36343933ad6d63231721ebf97ca8ef62799d1b2ca94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_137d8ca46782dcca4b9e36343933ad6d63231721ebf97ca8ef62799d1b2ca94c->leave($__internal_137d8ca46782dcca4b9e36343933ad6d63231721ebf97ca8ef62799d1b2ca94c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11b85c93672aa7c0ec0c7c0344efb924c5b9eea0c474138d179bb4236c3dabef = $this->env->getExtension("native_profiler");
        $__internal_11b85c93672aa7c0ec0c7c0344efb924c5b9eea0c474138d179bb4236c3dabef->enter($__internal_11b85c93672aa7c0ec0c7c0344efb924c5b9eea0c474138d179bb4236c3dabef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_11b85c93672aa7c0ec0c7c0344efb924c5b9eea0c474138d179bb4236c3dabef->leave($__internal_11b85c93672aa7c0ec0c7c0344efb924c5b9eea0c474138d179bb4236c3dabef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b4eeac4f90932307ebff755ff104c1a6ff6c33616d7ee9990ba2de5eda0f3ed = $this->env->getExtension("native_profiler");
        $__internal_4b4eeac4f90932307ebff755ff104c1a6ff6c33616d7ee9990ba2de5eda0f3ed->enter($__internal_4b4eeac4f90932307ebff755ff104c1a6ff6c33616d7ee9990ba2de5eda0f3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4b4eeac4f90932307ebff755ff104c1a6ff6c33616d7ee9990ba2de5eda0f3ed->leave($__internal_4b4eeac4f90932307ebff755ff104c1a6ff6c33616d7ee9990ba2de5eda0f3ed_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c0248e820187d60d84565be8b76f42ab3a72374410eb592a6f7838b9eeea3b = $this->env->getExtension("native_profiler");
        $__internal_69c0248e820187d60d84565be8b76f42ab3a72374410eb592a6f7838b9eeea3b->enter($__internal_69c0248e820187d60d84565be8b76f42ab3a72374410eb592a6f7838b9eeea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "          ";
        $this->displayBlock('nav', $context, $blocks);
        // line 30
        echo "          <div class=\"container\">
            ";
        // line 31
        $this->displayBlock('container', $context, $blocks);
        // line 33
        echo "          </div>
        ";
        
        $__internal_69c0248e820187d60d84565be8b76f42ab3a72374410eb592a6f7838b9eeea3b->leave($__internal_69c0248e820187d60d84565be8b76f42ab3a72374410eb592a6f7838b9eeea3b_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b853a259038cd0f156a969ae525252e52baaa02a10c2de5d4f52bbbf87640885 = $this->env->getExtension("native_profiler");
        $__internal_b853a259038cd0f156a969ae525252e52baaa02a10c2de5d4f52bbbf87640885->enter($__internal_b853a259038cd0f156a969ae525252e52baaa02a10c2de5d4f52bbbf87640885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "            <nav class=\"navbar navbar-default\">
              <div class=\"container\">
                <ul class=\"nav navbar-nav\">
                   <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM</a></li>
                   <li><a href=\"form\">Ajouter une VDM</a></li>
                   <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
                   <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("flop30");
        echo "\">Flop 30</a></li>
                </ul>
              </div>
            </nav>
          ";
        
        $__internal_b853a259038cd0f156a969ae525252e52baaa02a10c2de5d4f52bbbf87640885->leave($__internal_b853a259038cd0f156a969ae525252e52baaa02a10c2de5d4f52bbbf87640885_prof);

    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        $__internal_1ff4a0f710c2ca99dcd5be00d9aa31311f1a07715aee57249361d6de3f92f69d = $this->env->getExtension("native_profiler");
        $__internal_1ff4a0f710c2ca99dcd5be00d9aa31311f1a07715aee57249361d6de3f92f69d->enter($__internal_1ff4a0f710c2ca99dcd5be00d9aa31311f1a07715aee57249361d6de3f92f69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 32
        echo "            ";
        
        $__internal_1ff4a0f710c2ca99dcd5be00d9aa31311f1a07715aee57249361d6de3f92f69d->leave($__internal_1ff4a0f710c2ca99dcd5be00d9aa31311f1a07715aee57249361d6de3f92f69d_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1dda616d58876b06ecf46a324d51fb6fd778f436b1ab2e1e2dc4454cd40c6afa = $this->env->getExtension("native_profiler");
        $__internal_1dda616d58876b06ecf46a324d51fb6fd778f436b1ab2e1e2dc4454cd40c6afa->enter($__internal_1dda616d58876b06ecf46a324d51fb6fd778f436b1ab2e1e2dc4454cd40c6afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1dda616d58876b06ecf46a324d51fb6fd778f436b1ab2e1e2dc4454cd40c6afa->leave($__internal_1dda616d58876b06ecf46a324d51fb6fd778f436b1ab2e1e2dc4454cd40c6afa_prof);

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
        return array (  174 => 35,  167 => 32,  161 => 31,  149 => 25,  145 => 24,  140 => 22,  135 => 19,  129 => 18,  121 => 33,  119 => 31,  116 => 30,  113 => 18,  107 => 17,  98 => 9,  94 => 8,  89 => 7,  83 => 6,  71 => 5,  62 => 36,  59 => 35,  57 => 17,  51 => 14,  47 => 13,  43 => 12,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
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
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*           {% block nav %}*/
/*             <nav class="navbar navbar-default">*/
/*               <div class="container">*/
/*                 <ul class="nav navbar-nav">*/
/*                    <li><a href="{{ path('homepage') }}">#VDM</a></li>*/
/*                    <li><a href="form">Ajouter une VDM</a></li>*/
/*                    <li><a href="{{ path('top30') }}">Top 30</a></li>*/
/*                    <li><a href="{{ path('flop30') }}">Flop 30</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*             </nav>*/
/*           {% endblock %}*/
/*           <div class="container">*/
/*             {% block container %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
