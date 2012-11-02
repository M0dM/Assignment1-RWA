<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e0f7f218a726fe3334fe6d0426cf6a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  51 => 12,  84 => 34,  75 => 28,  54 => 16,  195 => 22,  190 => 21,  164 => 13,  146 => 7,  133 => 82,  97 => 56,  67 => 43,  21 => 3,  60 => 16,  47 => 10,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 66,  196 => 63,  183 => 61,  181 => 18,  175 => 58,  158 => 11,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 6,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 58,  91 => 54,  74 => 22,  70 => 14,  66 => 22,  89 => 53,  82 => 49,  42 => 8,  223 => 96,  214 => 90,  210 => 88,  203 => 24,  199 => 23,  194 => 80,  192 => 62,  189 => 78,  187 => 20,  184 => 76,  178 => 72,  170 => 15,  157 => 61,  152 => 9,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 65,  102 => 36,  98 => 33,  76 => 46,  73 => 23,  69 => 22,  56 => 13,  32 => 8,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 36,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 8,  39 => 10,  35 => 9,  33 => 5,  30 => 3,  27 => 3,  182 => 70,  176 => 17,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 8,  141 => 54,  136 => 47,  134 => 50,  131 => 81,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 23,  71 => 19,  62 => 41,  58 => 17,  55 => 14,  52 => 13,  49 => 16,  46 => 9,  43 => 13,  40 => 8,  37 => 10,  34 => 7,  31 => 6,  28 => 7,);
    }
}
