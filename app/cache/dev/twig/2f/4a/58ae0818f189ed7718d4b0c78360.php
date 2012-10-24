<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2f4a58ae0818f189ed7718d4b0c78360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Login</h1>
\t<ul class=\"nav nav-tabs\">
\t  <li class=\"active\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\">Login</a></li>
\t  <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\">Register</a></li>
\t</ul>
\t
\t";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "\t\t<p class=\"alert alert-danger\"><strong>Login error:</strong> login or password incorrect.</p>
\t";
        }
        // line 13
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
\t \t<div class=\"control-group\">
\t    \t<label class=\"control-label\" for=\"inputUsername\">Username</label>
\t    \t<div class=\"controls\">
\t    \t\t<input class=\"span4\" type=\"text\" id=\"inputUsername\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t    \t<label class=\"control-label\" for=\"inputPassword\">Password</label>
\t    \t<div class=\"controls\">
\t    \t\t<input class=\"span4\" type=\"password\" id=\"inputPassword\" name=\"_password\" required=\"required\" placeholder=\"Password\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<div class=\"controls\">
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Submit\" />
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  146 => 17,  122 => 9,  67 => 37,  21 => 1,  60 => 16,  47 => 28,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 62,  80 => 24,  63 => 16,  36 => 6,  156 => 20,  148 => 55,  142 => 50,  140 => 15,  127 => 45,  123 => 44,  115 => 42,  110 => 6,  85 => 28,  65 => 19,  59 => 34,  45 => 11,  103 => 63,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 46,  42 => 12,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 8,  116 => 7,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 39,  69 => 19,  56 => 15,  32 => 7,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 18,  44 => 7,  20 => 2,  161 => 63,  153 => 19,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 8,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 62,  163 => 62,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 13,  131 => 43,  128 => 11,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 33,  52 => 13,  49 => 13,  46 => 13,  43 => 10,  40 => 7,  37 => 7,  34 => 19,  31 => 4,  28 => 6,);
    }
}
