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
        $__internal_a578e177cf8bafeb73b06b91e5043730c39ca7ccb6f144991345129286747395 = $this->env->getExtension("native_profiler");
        $__internal_a578e177cf8bafeb73b06b91e5043730c39ca7ccb6f144991345129286747395->enter($__internal_a578e177cf8bafeb73b06b91e5043730c39ca7ccb6f144991345129286747395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a578e177cf8bafeb73b06b91e5043730c39ca7ccb6f144991345129286747395->leave($__internal_a578e177cf8bafeb73b06b91e5043730c39ca7ccb6f144991345129286747395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36b870c583dec569c64393d5828765395488e460f286661dbd5466d4ad2220a = $this->env->getExtension("native_profiler");
        $__internal_e36b870c583dec569c64393d5828765395488e460f286661dbd5466d4ad2220a->enter($__internal_e36b870c583dec569c64393d5828765395488e460f286661dbd5466d4ad2220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "  <div class=\"container\">
  ";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 35
        echo "  </div>
";
        
        $__internal_e36b870c583dec569c64393d5828765395488e460f286661dbd5466d4ad2220a->leave($__internal_e36b870c583dec569c64393d5828765395488e460f286661dbd5466d4ad2220a_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_771e4146b8dc6387f9bef1bb11b12fbd708dc9a47c661d72b7b3ea4294d6e312 = $this->env->getExtension("native_profiler");
        $__internal_771e4146b8dc6387f9bef1bb11b12fbd708dc9a47c661d72b7b3ea4294d6e312->enter($__internal_771e4146b8dc6387f9bef1bb11b12fbd708dc9a47c661d72b7b3ea4294d6e312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <ul class=\"nav navbar-nav\">
           <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM</a></li>
           <li><a href=\"form\">Ajouter une VDM</a></li>
           <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
        </ul>
      </div>
    </nav>
  ";
        
        $__internal_771e4146b8dc6387f9bef1bb11b12fbd708dc9a47c661d72b7b3ea4294d6e312->leave($__internal_771e4146b8dc6387f9bef1bb11b12fbd708dc9a47c661d72b7b3ea4294d6e312_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_b91acc342a6702aed465ba623a2082fd99f47d55d3bd38b4ee3139e6e5a12cd2 = $this->env->getExtension("native_profiler");
        $__internal_b91acc342a6702aed465ba623a2082fd99f47d55d3bd38b4ee3139e6e5a12cd2->enter($__internal_b91acc342a6702aed465ba623a2082fd99f47d55d3bd38b4ee3139e6e5a12cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
          <div class=\"col-md-2 result\" id=\"rdislike\" style=\"color:red\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "unliketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-2 result\" id=\"rlike\" style=\"color:green\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "liketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-4\">
          <form method=\"POST\">
            <input type=\"submit\" id=\"btn-dislike\" class=\"btn btn-danger\" value=\"J'aime pas\">
            <input type=\"submit\" id=\"btn-like\" class=\"btn btn-success\" value=\"J'aime\">
            </form>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  ";
        
        $__internal_b91acc342a6702aed465ba623a2082fd99f47d55d3bd38b4ee3139e6e5a12cd2->leave($__internal_b91acc342a6702aed465ba623a2082fd99f47d55d3bd38b4ee3139e6e5a12cd2_prof);

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
        return array (  133 => 34,  117 => 24,  113 => 23,  108 => 21,  104 => 20,  100 => 19,  97 => 18,  92 => 17,  86 => 16,  74 => 10,  69 => 8,  64 => 5,  58 => 4,  50 => 35,  48 => 16,  45 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   {% block nav %}*/
/*     <nav class="navbar navbar-default">*/
/*       <div class="container">*/
/*         <ul class="nav navbar-nav">*/
/*            <li><a href="{{ path('homepage') }}">#VDM</a></li>*/
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
/*           <div class="col-md-2 result" id="rdislike" style="color:red">{{ advert.unliketicket }}</div>*/
/*           <div class="col-md-2 result" id="rlike" style="color:green">{{ advert.liketicket }}</div>*/
/*           <div class="col-md-4">*/
/*           <form method="POST">*/
/*             <input type="submit" id="btn-dislike" class="btn btn-danger" value="J'aime pas">*/
/*             <input type="submit" id="btn-like" class="btn btn-success" value="J'aime">*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
