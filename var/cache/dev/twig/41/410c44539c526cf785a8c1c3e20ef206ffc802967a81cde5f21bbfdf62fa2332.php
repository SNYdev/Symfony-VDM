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
        $__internal_eb25ccbff3cde7877a68e06991d6c62981f62ac5bbdc7994b4b81c4c8b739969 = $this->env->getExtension("native_profiler");
        $__internal_eb25ccbff3cde7877a68e06991d6c62981f62ac5bbdc7994b4b81c4c8b739969->enter($__internal_eb25ccbff3cde7877a68e06991d6c62981f62ac5bbdc7994b4b81c4c8b739969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_eb25ccbff3cde7877a68e06991d6c62981f62ac5bbdc7994b4b81c4c8b739969->leave($__internal_eb25ccbff3cde7877a68e06991d6c62981f62ac5bbdc7994b4b81c4c8b739969_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_276599f1760f9cbf0e6258df5ef87d16a8af5c4c01af9e582cf523d3099a71b0 = $this->env->getExtension("native_profiler");
        $__internal_276599f1760f9cbf0e6258df5ef87d16a8af5c4c01af9e582cf523d3099a71b0->enter($__internal_276599f1760f9cbf0e6258df5ef87d16a8af5c4c01af9e582cf523d3099a71b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_276599f1760f9cbf0e6258df5ef87d16a8af5c4c01af9e582cf523d3099a71b0->leave($__internal_276599f1760f9cbf0e6258df5ef87d16a8af5c4c01af9e582cf523d3099a71b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1b1ce10c8446f1d7ecce1046f589600c5acb47ba2e8c6bc1e05592a159e53a5 = $this->env->getExtension("native_profiler");
        $__internal_a1b1ce10c8446f1d7ecce1046f589600c5acb47ba2e8c6bc1e05592a159e53a5->enter($__internal_a1b1ce10c8446f1d7ecce1046f589600c5acb47ba2e8c6bc1e05592a159e53a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a1b1ce10c8446f1d7ecce1046f589600c5acb47ba2e8c6bc1e05592a159e53a5->leave($__internal_a1b1ce10c8446f1d7ecce1046f589600c5acb47ba2e8c6bc1e05592a159e53a5_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb88889e3ee3e51b1741628ab82bb06fa75d72c8b77b7a41d92c804dc259f6f5 = $this->env->getExtension("native_profiler");
        $__internal_eb88889e3ee3e51b1741628ab82bb06fa75d72c8b77b7a41d92c804dc259f6f5->enter($__internal_eb88889e3ee3e51b1741628ab82bb06fa75d72c8b77b7a41d92c804dc259f6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb88889e3ee3e51b1741628ab82bb06fa75d72c8b77b7a41d92c804dc259f6f5->leave($__internal_eb88889e3ee3e51b1741628ab82bb06fa75d72c8b77b7a41d92c804dc259f6f5_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_23b5687c00f760b04dd926d16d4e033711b3d075d58668d7518b0f8d942e1196 = $this->env->getExtension("native_profiler");
        $__internal_23b5687c00f760b04dd926d16d4e033711b3d075d58668d7518b0f8d942e1196->enter($__internal_23b5687c00f760b04dd926d16d4e033711b3d075d58668d7518b0f8d942e1196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_23b5687c00f760b04dd926d16d4e033711b3d075d58668d7518b0f8d942e1196->leave($__internal_23b5687c00f760b04dd926d16d4e033711b3d075d58668d7518b0f8d942e1196_prof);

    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        $__internal_d4cac3cd6a26748e59ad5d7cfd327e81ed7efff35a0b34a41f37770509d7384c = $this->env->getExtension("native_profiler");
        $__internal_d4cac3cd6a26748e59ad5d7cfd327e81ed7efff35a0b34a41f37770509d7384c->enter($__internal_d4cac3cd6a26748e59ad5d7cfd327e81ed7efff35a0b34a41f37770509d7384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 32
        echo "            ";
        
        $__internal_d4cac3cd6a26748e59ad5d7cfd327e81ed7efff35a0b34a41f37770509d7384c->leave($__internal_d4cac3cd6a26748e59ad5d7cfd327e81ed7efff35a0b34a41f37770509d7384c_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8447a015bff5b6042a83fb345e0b66d730c9f3befb6c68b829e69dfe3db9b4cf = $this->env->getExtension("native_profiler");
        $__internal_8447a015bff5b6042a83fb345e0b66d730c9f3befb6c68b829e69dfe3db9b4cf->enter($__internal_8447a015bff5b6042a83fb345e0b66d730c9f3befb6c68b829e69dfe3db9b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8447a015bff5b6042a83fb345e0b66d730c9f3befb6c68b829e69dfe3db9b4cf->leave($__internal_8447a015bff5b6042a83fb345e0b66d730c9f3befb6c68b829e69dfe3db9b4cf_prof);

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
