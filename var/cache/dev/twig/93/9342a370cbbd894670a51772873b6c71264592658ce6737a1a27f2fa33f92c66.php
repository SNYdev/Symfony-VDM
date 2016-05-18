<?php

/* default/form.html.twig */
class __TwigTemplate_d298d110f879ad14c9391a121806fb6eeaa92da4553d0499c3f8d4a5b1e71299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d68195a4d29edd1df1a138d7ee4dbcdc033af67a3788d63bd18035fcdc7a48c = $this->env->getExtension("native_profiler");
        $__internal_7d68195a4d29edd1df1a138d7ee4dbcdc033af67a3788d63bd18035fcdc7a48c->enter($__internal_7d68195a4d29edd1df1a138d7ee4dbcdc033af67a3788d63bd18035fcdc7a48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d68195a4d29edd1df1a138d7ee4dbcdc033af67a3788d63bd18035fcdc7a48c->leave($__internal_7d68195a4d29edd1df1a138d7ee4dbcdc033af67a3788d63bd18035fcdc7a48c_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_fa16175e2037e0f86c122cac8f13e96adee551c6a90849e0639c8facfe5d5a37 = $this->env->getExtension("native_profiler");
        $__internal_fa16175e2037e0f86c122cac8f13e96adee551c6a90849e0639c8facfe5d5a37->enter($__internal_fa16175e2037e0f86c122cac8f13e96adee551c6a90849e0639c8facfe5d5a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <div class=\"status-post\"></div>
  <form method=\"POST\" name=\"vdm\">
    <input type=\"text\" class=\"input input-pseudo\" placeholder=\"Votre pseudo\" name=\"champ-pseudo\">
    <input type=\"text\" class=\"input input-title\" placeholder=\"Titre de la VDM\" name=\"champ-titre\">
    <textarea type=\"text\" class=\"input input-content\" placeholder=\"Contenu\" rows=\"4\" name=\"champ-content\"></textarea>
    <input type=\"submit\" value=\"Poster une VDM\" id=\"butn-submit\">
  </form>
";
        
        $__internal_fa16175e2037e0f86c122cac8f13e96adee551c6a90849e0639c8facfe5d5a37->leave($__internal_fa16175e2037e0f86c122cac8f13e96adee551c6a90849e0639c8facfe5d5a37_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default/index.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <div class="status-post"></div>*/
/*   <form method="POST" name="vdm">*/
/*     <input type="text" class="input input-pseudo" placeholder="Votre pseudo" name="champ-pseudo">*/
/*     <input type="text" class="input input-title" placeholder="Titre de la VDM" name="champ-titre">*/
/*     <textarea type="text" class="input input-content" placeholder="Contenu" rows="4" name="champ-content"></textarea>*/
/*     <input type="submit" value="Poster une VDM" id="butn-submit">*/
/*   </form>*/
/* {% endblock %}*/
/* */
