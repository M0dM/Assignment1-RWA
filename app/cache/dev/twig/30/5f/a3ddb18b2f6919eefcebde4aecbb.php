<?php

/* ITBUltimateFrisbeeBundle:Tournament:tournamentCalendar.html.twig */
class __TwigTemplate_305fa3ddb18b2f6919eefcebde4aecbb extends Twig_Template
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
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFtournamentCalendar.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<h1>Tournaments by date</h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament"), "html", null, true);
        echo "\">All tournaments</a></li>
      <li class=\"active\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament_calendar"), "html", null, true);
        echo "\">Tournaments by date</a></li>
    </ul>
    <p class=\"alert alert-info\">Click on a green date below to see the tournaments associated</p>
\t<div class=\"row span12\" id=\"calendarContent\">
\t    <div id=\"calendar\"></div>
\t    <div class=\"span8\" id=\"tableCalendar\">
\t\t    <table dataUrl=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("json/tournaments.json"), "html", null, true);
        echo "\" id=\"tournamentCalendarTable\" class=\"table\">
\t\t\t\t<thead>
\t\t                <tr>
\t\t                  <th>Name</th>
\t\t\t\t\t\t  <th>Date</th>
\t\t                  <th>Country</th>
\t\t                  <th>Location</th>
\t\t                  <th>Surface</th>
\t\t                  <th>Description</th>
\t\t                </tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        </tbody>
\t\t    </table>
\t    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Tournament:tournamentCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 18,  95 => 30,  67 => 16,  51 => 15,  47 => 14,  21 => 3,  60 => 19,  54 => 11,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 31,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 30,  101 => 34,  80 => 21,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 14,  89 => 24,  82 => 47,  42 => 9,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 46,  116 => 33,  112 => 43,  102 => 28,  98 => 27,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 14,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 38,  78 => 31,  72 => 17,  64 => 15,  53 => 13,  50 => 10,  48 => 11,  41 => 8,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 34,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 25,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 13,  58 => 12,  55 => 14,  52 => 12,  49 => 10,  46 => 9,  43 => 10,  40 => 6,  37 => 7,  34 => 8,  31 => 4,  28 => 3,);
    }
}
