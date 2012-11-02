<?php

/* ITBUltimateFrisbeeBundle:Home:mapContact.html.twig */
class __TwigTemplate_5f692ce01bd1cc7855a7c3de097dbd34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=en\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgoogleMap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Mail references</a></li>
      <li class=\"active\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Map</a></li>
    </ul>
\t<h2>Itinerary generator</h2>
\t<div id=\"control_panel\" style=\"display:block;width:30px;text-align:left;padding-top:20px; margin-bottom:30px\">
\t\t<form class=\"form-horizontal\">
\t\t    <div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"inputAddress\">Your address</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"text\" id=\"start\" class=\"span8\" placeholder=\"Address\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"control-group\">
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-success\" value=\"Generate road\" onclick=\"calcRoute();\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
    </div>
    
    <img id=\"imageForLink\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
\t
\t<div id=\"directions_panel\" style=\"display:block; float:left; width:30%; margin-right: 8px;\">
\t    <p class=\"alert alert-info\">No directions informations availiable yet. Please generate the road using the from above this text.</p>
    </div>
    
\t<div id=\"map_canvas\" style=\"display:block;margin-top:10px;float:rigth;width:650px;height:500px;margin-bottom:20px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Home:mapContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  75 => 28,  54 => 16,  195 => 22,  190 => 21,  164 => 13,  146 => 7,  133 => 82,  97 => 56,  67 => 43,  21 => 3,  60 => 16,  47 => 10,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 66,  196 => 63,  183 => 61,  181 => 18,  175 => 58,  158 => 11,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 6,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 11,  103 => 58,  91 => 54,  74 => 22,  70 => 14,  66 => 22,  89 => 53,  82 => 49,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 24,  199 => 23,  194 => 80,  192 => 62,  189 => 78,  187 => 20,  184 => 76,  178 => 72,  170 => 15,  157 => 61,  152 => 9,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 65,  102 => 36,  98 => 33,  76 => 46,  73 => 3,  69 => 19,  56 => 14,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 36,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 45,  64 => 17,  53 => 13,  50 => 15,  48 => 8,  41 => 8,  39 => 10,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 17,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 8,  141 => 54,  136 => 47,  134 => 50,  131 => 81,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 41,  58 => 17,  55 => 14,  52 => 13,  49 => 13,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
