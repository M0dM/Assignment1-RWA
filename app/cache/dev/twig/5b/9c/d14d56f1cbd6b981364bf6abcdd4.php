<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_5b9cd14d56f1cbd6b981364bf6abcdd4 extends Twig_Template
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
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  105 => 58,  21 => 3,  84 => 34,  75 => 32,  54 => 16,  277 => 110,  257 => 92,  254 => 91,  251 => 90,  245 => 24,  241 => 23,  237 => 22,  232 => 21,  229 => 20,  212 => 15,  206 => 13,  200 => 11,  191 => 8,  188 => 7,  173 => 110,  167 => 90,  146 => 77,  97 => 54,  88 => 51,  60 => 20,  47 => 14,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 17,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 111,  158 => 83,  107 => 41,  101 => 34,  80 => 24,  63 => 21,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 74,  127 => 45,  123 => 44,  115 => 63,  110 => 61,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 57,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 18,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 9,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 67,  119 => 45,  116 => 44,  112 => 62,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 25,  56 => 13,  32 => 8,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 46,  57 => 14,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 73,  129 => 68,  121 => 66,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 8,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 6,  176 => 71,  169 => 108,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 49,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 12,  49 => 16,  46 => 11,  43 => 13,  40 => 8,  37 => 10,  34 => 9,  31 => 4,  28 => 7,);
    }
}
