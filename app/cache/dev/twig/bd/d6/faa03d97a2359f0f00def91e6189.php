<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_bdd6faa03d97a2359f0f00def91e6189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  138 => 61,  95 => 45,  51 => 11,  84 => 39,  75 => 27,  54 => 16,  205 => 76,  198 => 34,  195 => 33,  188 => 31,  185 => 30,  179 => 28,  164 => 23,  146 => 17,  122 => 9,  67 => 51,  21 => 3,  60 => 16,  47 => 10,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 21,  107 => 42,  101 => 76,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 6,  85 => 28,  65 => 19,  59 => 22,  45 => 9,  103 => 41,  91 => 20,  74 => 22,  70 => 14,  66 => 21,  89 => 20,  82 => 60,  42 => 8,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 25,  157 => 61,  152 => 19,  145 => 53,  130 => 48,  125 => 10,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 53,  69 => 19,  56 => 17,  32 => 8,  26 => 3,  22 => 3,  25 => 4,  23 => 29,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  29 => 3,  24 => 9,  19 => 2,  68 => 22,  61 => 19,  44 => 8,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 16,  137 => 14,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 24,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 7,  39 => 10,  35 => 5,  33 => 5,  30 => 3,  27 => 3,  182 => 70,  176 => 27,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 18,  141 => 40,  136 => 47,  134 => 50,  131 => 31,  128 => 30,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 40,  90 => 43,  87 => 31,  83 => 29,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 12,  52 => 13,  49 => 16,  46 => 9,  43 => 13,  40 => 7,  37 => 10,  34 => 7,  31 => 6,  28 => 7,);
    }
}
