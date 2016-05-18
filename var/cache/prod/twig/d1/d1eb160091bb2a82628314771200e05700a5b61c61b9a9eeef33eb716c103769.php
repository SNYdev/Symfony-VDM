<?php

/* default/index.html.twig */
class __TwigTemplate_282571d6077a13cd3f78607f45f32c2417d36441c90dc7928d758ad851e5985c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db00c72c529a8f6cda7169e862155a56908a7148a29dc17388d275f73579b681 = $this->env->getExtension("native_profiler");
        $__internal_db00c72c529a8f6cda7169e862155a56908a7148a29dc17388d275f73579b681->enter($__internal_db00c72c529a8f6cda7169e862155a56908a7148a29dc17388d275f73579b681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db00c72c529a8f6cda7169e862155a56908a7148a29dc17388d275f73579b681->leave($__internal_db00c72c529a8f6cda7169e862155a56908a7148a29dc17388d275f73579b681_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2da1ed3dbd822db6bcc83cb54922ff1574f6dc1e5befd567a93bfb541ea331cf = $this->env->getExtension("native_profiler");
        $__internal_2da1ed3dbd822db6bcc83cb54922ff1574f6dc1e5befd567a93bfb541ea331cf->enter($__internal_2da1ed3dbd822db6bcc83cb54922ff1574f6dc1e5befd567a93bfb541ea331cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "  <div class=\"container\">
  ";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 33
        echo "  </div>
";
        
        $__internal_2da1ed3dbd822db6bcc83cb54922ff1574f6dc1e5befd567a93bfb541ea331cf->leave($__internal_2da1ed3dbd822db6bcc83cb54922ff1574f6dc1e5befd567a93bfb541ea331cf_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_31430d99afd78bda53484cbab08c6953c6c2d8666b656a0162c88edde26bd08b = $this->env->getExtension("native_profiler");
        $__internal_31430d99afd78bda53484cbab08c6953c6c2d8666b656a0162c88edde26bd08b->enter($__internal_31430d99afd78bda53484cbab08c6953c6c2d8666b656a0162c88edde26bd08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <ul class=\"nav navbar-nav\">
           <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM <span class=\"sr-only\">(current)</span></a></li>
           <li><a href=\"form\">Ajouter une VDM</a></li>
           <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
        </ul>
      </div>
    </nav>
  ";
        
        $__internal_31430d99afd78bda53484cbab08c6953c6c2d8666b656a0162c88edde26bd08b->leave($__internal_31430d99afd78bda53484cbab08c6953c6c2d8666b656a0162c88edde26bd08b_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_a593f2f805c8ca48778b861917c684208c3fc27c7e1033ba10a62244be856806 = $this->env->getExtension("native_profiler");
        $__internal_a593f2f805c8ca48778b861917c684208c3fc27c7e1033ba10a62244be856806->enter($__internal_a593f2f805c8ca48778b861917c684208c3fc27c7e1033ba10a62244be856806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 18
            echo "      <div class=\"jumbotron\">
        <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "</h1>
        <h2>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "pseudo", array()), "html", null, true);
            echo "</h2>
        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</p>
        <div class=\"col-md-8\">
          <div class=\"col-md-2 result\" id=\"rdislike\" style=\"color:red\">0</div>
          <div class=\"col-md-2 result\" id=\"rlike\" style=\"color:green\">0</div>
          <div class=\"col-md-4\">
            <button type=\"button\" class=\"btn btn-danger\">J'aime pas</button>
            <button type=\"button\" class=\"btn btn-success\">J'aime</button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  ";
        
        $__internal_a593f2f805c8ca48778b861917c684208c3fc27c7e1033ba10a62244be856806->leave($__internal_a593f2f805c8ca48778b861917c684208c3fc27c7e1033ba10a62244be856806_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  108 => 21,  104 => 20,  100 => 19,  97 => 18,  92 => 17,  86 => 16,  74 => 10,  69 => 8,  64 => 5,  58 => 4,  50 => 33,  48 => 16,  45 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   {% block nav %}*/
/*     <nav class="navbar navbar-default">*/
/*       <div class="container">*/
/*         <ul class="nav navbar-nav">*/
/*            <li class="active"><a href="{{ path('homepage') }}">#VDM <span class="sr-only">(current)</span></a></li>*/
/*            <li><a href="form">Ajouter une VDM</a></li>*/
/*            <li><a href="{{ path('top30') }}">Top 30</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   {% endblock %}*/
/*   <div class="container">*/
/*   {% block container %}*/
/*     {% for advert in list %}*/
/*       <div class="jumbotron">*/
/*         <h1>{{ advert.titre }}</h1>*/
/*         <h2>{{ advert.pseudo }}</h2>*/
/*         <p>{{ advert.content }}</p>*/
/*         <div class="col-md-8">*/
/*           <div class="col-md-2 result" id="rdislike" style="color:red">0</div>*/
/*           <div class="col-md-2 result" id="rlike" style="color:green">0</div>*/
/*           <div class="col-md-4">*/
/*             <button type="button" class="btn btn-danger">J'aime pas</button>*/
/*             <button type="button" class="btn btn-success">J'aime</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
