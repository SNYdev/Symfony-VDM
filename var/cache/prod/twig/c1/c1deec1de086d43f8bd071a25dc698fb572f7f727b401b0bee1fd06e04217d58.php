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
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd65bb7554b9c31affbcdec030b62281655e5c38a312ef12efd185f03ec17747 = $this->env->getExtension("native_profiler");
        $__internal_dd65bb7554b9c31affbcdec030b62281655e5c38a312ef12efd185f03ec17747->enter($__internal_dd65bb7554b9c31affbcdec030b62281655e5c38a312ef12efd185f03ec17747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dd65bb7554b9c31affbcdec030b62281655e5c38a312ef12efd185f03ec17747->leave($__internal_dd65bb7554b9c31affbcdec030b62281655e5c38a312ef12efd185f03ec17747_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_138889116c63c27990618c9ace7c7c17d25d94ed68f28aba05a18870decbff89 = $this->env->getExtension("native_profiler");
        $__internal_138889116c63c27990618c9ace7c7c17d25d94ed68f28aba05a18870decbff89->enter($__internal_138889116c63c27990618c9ace7c7c17d25d94ed68f28aba05a18870decbff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_138889116c63c27990618c9ace7c7c17d25d94ed68f28aba05a18870decbff89->leave($__internal_138889116c63c27990618c9ace7c7c17d25d94ed68f28aba05a18870decbff89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e70a5248d384b4bad5bd258278b244b44911738dc160ac9277abde67758727c = $this->env->getExtension("native_profiler");
        $__internal_6e70a5248d384b4bad5bd258278b244b44911738dc160ac9277abde67758727c->enter($__internal_6e70a5248d384b4bad5bd258278b244b44911738dc160ac9277abde67758727c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6e70a5248d384b4bad5bd258278b244b44911738dc160ac9277abde67758727c->leave($__internal_6e70a5248d384b4bad5bd258278b244b44911738dc160ac9277abde67758727c_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d4eaf95ba3999132f9c130a5029e11ecd7757d3ba133549108254d5d40e1b82 = $this->env->getExtension("native_profiler");
        $__internal_4d4eaf95ba3999132f9c130a5029e11ecd7757d3ba133549108254d5d40e1b82->enter($__internal_4d4eaf95ba3999132f9c130a5029e11ecd7757d3ba133549108254d5d40e1b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d4eaf95ba3999132f9c130a5029e11ecd7757d3ba133549108254d5d40e1b82->leave($__internal_4d4eaf95ba3999132f9c130a5029e11ecd7757d3ba133549108254d5d40e1b82_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2a498e17543b852220431638655f460c3efac5524326882a97916c17573af92f = $this->env->getExtension("native_profiler");
        $__internal_2a498e17543b852220431638655f460c3efac5524326882a97916c17573af92f->enter($__internal_2a498e17543b852220431638655f460c3efac5524326882a97916c17573af92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_2a498e17543b852220431638655f460c3efac5524326882a97916c17573af92f->leave($__internal_2a498e17543b852220431638655f460c3efac5524326882a97916c17573af92f_prof);

    }

    // line 31
    public function block_container($context, array $blocks = array())
    {
        $__internal_586814c26290e3d30c3fd19e72ae656874438ddb1c20df7591c4d1b16173741a = $this->env->getExtension("native_profiler");
        $__internal_586814c26290e3d30c3fd19e72ae656874438ddb1c20df7591c4d1b16173741a->enter($__internal_586814c26290e3d30c3fd19e72ae656874438ddb1c20df7591c4d1b16173741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 32
        echo "            ";
        
        $__internal_586814c26290e3d30c3fd19e72ae656874438ddb1c20df7591c4d1b16173741a->leave($__internal_586814c26290e3d30c3fd19e72ae656874438ddb1c20df7591c4d1b16173741a_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e3a25e61a4a20a7d6b4e59461a5974f657862576d17c7d714e3f745b5c98b94 = $this->env->getExtension("native_profiler");
        $__internal_0e3a25e61a4a20a7d6b4e59461a5974f657862576d17c7d714e3f745b5c98b94->enter($__internal_0e3a25e61a4a20a7d6b4e59461a5974f657862576d17c7d714e3f745b5c98b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e3a25e61a4a20a7d6b4e59461a5974f657862576d17c7d714e3f745b5c98b94->leave($__internal_0e3a25e61a4a20a7d6b4e59461a5974f657862576d17c7d714e3f745b5c98b94_prof);

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
