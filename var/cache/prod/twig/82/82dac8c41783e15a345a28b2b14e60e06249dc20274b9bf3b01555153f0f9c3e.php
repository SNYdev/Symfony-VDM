<?php

/* default/form.html.twig */
class __TwigTemplate_68c3995015a2814af70f1bb5cc99d20fd37e829b561b0bf02166389124e679d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ce5a3956cdb8402a0827c8a0ab21afc951d8f7a226cdb1835db3c6d98fec5a3 = $this->env->getExtension("native_profiler");
        $__internal_1ce5a3956cdb8402a0827c8a0ab21afc951d8f7a226cdb1835db3c6d98fec5a3->enter($__internal_1ce5a3956cdb8402a0827c8a0ab21afc951d8f7a226cdb1835db3c6d98fec5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce5a3956cdb8402a0827c8a0ab21afc951d8f7a226cdb1835db3c6d98fec5a3->leave($__internal_1ce5a3956cdb8402a0827c8a0ab21afc951d8f7a226cdb1835db3c6d98fec5a3_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_61a969221fb00517a91b66207689ba0fe377a8339608f8eab2bd651e3728416c = $this->env->getExtension("native_profiler");
        $__internal_61a969221fb00517a91b66207689ba0fe377a8339608f8eab2bd651e3728416c->enter($__internal_61a969221fb00517a91b66207689ba0fe377a8339608f8eab2bd651e3728416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <div class=\"status-post\"></div>
  <form method=\"POST\" name=\"vdm\">
    <input type=\"text\" class=\"input input-pseudo\" placeholder=\"Votre pseudo\" name=\"champ-pseudo\">
    <input type=\"text\" class=\"input input-title\" placeholder=\"Titre de la VDM\" name=\"champ-titre\">
    <textarea type=\"text\" class=\"input input-content\" placeholder=\"Contenu\" rows=\"4\" name=\"champ-content\"></textarea>
    <input type=\"submit\" value=\"Poster une VDM\" id=\"butn-submit\">
  </form>
";
        
        $__internal_61a969221fb00517a91b66207689ba0fe377a8339608f8eab2bd651e3728416c->leave($__internal_61a969221fb00517a91b66207689ba0fe377a8339608f8eab2bd651e3728416c_prof);

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
/* {% extends 'base.html.twig' %}*/
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
