<?php

/* default/index.html.twig */
class __TwigTemplate_8e6ad707456fc4f86b77277b4e572d13d600320bd13752d6dd121532e5d4598a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <ul class=\"nav navbar-nav\">
           <li class=\"active\"><a href=\"..\">#VDM <span class=\"sr-only\">(current)</span></a></li>
           <li><a href=\"form\">Ajouter une VDM</a></li>
           <li><a href=\"#\">Top 30</a></li>
        </ul>
      </div>
    </nav>
  ";
    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
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
        return array (  98 => 32,  81 => 21,  77 => 20,  73 => 19,  70 => 18,  65 => 17,  62 => 16,  49 => 5,  46 => 4,  41 => 33,  39 => 16,  36 => 15,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   {% block nav %}*/
/*     <nav class="navbar navbar-default">*/
/*       <div class="container">*/
/*         <ul class="nav navbar-nav">*/
/*            <li class="active"><a href="..">#VDM <span class="sr-only">(current)</span></a></li>*/
/*            <li><a href="form">Ajouter une VDM</a></li>*/
/*            <li><a href="#">Top 30</a></li>*/
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
