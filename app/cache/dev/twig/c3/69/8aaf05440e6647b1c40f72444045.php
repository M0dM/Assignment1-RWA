<?php

/* ITBUltimateFrisbeeBundle:Contact:mapContact.html.twig */
class __TwigTemplate_c3698aaf05440e6647b1c40f72444045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=en\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgoogleMap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">General informations</a></li>
      <li class=\"active\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Location</a></li>
    </ul>
\t<h2>Itinerary generator</h2>
\t<div id=\"travelMode\">
\t\t\t<p style=\"display:block; float:left;\">By car</p>
\t\t\t<input style=\"display:block; float:left;\" type=\"radio\" name=\"optionsTravelMode\" value=\"car\" checked>
\t\t\t<p style=\"display:block; float:left;\">By foot</p>
\t\t\t<input style=\"display:block; float:left;\" type=\"radio\" name=\"optionsTravelMode\" value=\"walk\">
\t</div>
\t<div id=\"control_panel\" style=\"display:block;width:30px;text-align:left;padding-top:20px; margin-bottom:30px\">
\t\t<form class=\"form-horizontal\">
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"control-label\" for=\"start\">Your address</label>
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"/>
\t
\t<div id=\"directions_panel\" style=\"display:block; float:left; width:28%; margin-right: 8px; overflow-y:auto; height:500px; padding-right:5px;\">
\t    <p class=\"alert alert-info\">No directions informations availiable yet. Please generate the road using the from above this text.</p>
    </div>
    
\t<div id=\"map_canvas\" style=\"display:block;margin-top:10px;float:rigth;width:650px;height:500px;margin-bottom:20px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Contact:mapContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  67 => 16,  51 => 13,  47 => 12,  21 => 3,  60 => 19,  54 => 11,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 43,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 21,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 10,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 12,  89 => 27,  82 => 47,  42 => 9,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 46,  116 => 62,  112 => 43,  102 => 36,  98 => 33,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 38,  78 => 31,  72 => 19,  64 => 15,  53 => 13,  50 => 10,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 33,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 12,  55 => 14,  52 => 10,  49 => 12,  46 => 9,  43 => 10,  40 => 6,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
