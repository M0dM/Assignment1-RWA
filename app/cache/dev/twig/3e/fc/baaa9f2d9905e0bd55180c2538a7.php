<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_3efcbaaa9f2d9905e0bd55180c2538a7 extends Twig_Template
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
        if ((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'errors'))) {
            // line 2
            echo "\t<p class=\"alert alert-danger\">
\t\t";
            // line 3
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors')) {
                // line 4
                echo "\t\t\t<strong>Username error:</strong> The username is blank or already used.<br />
\t\t";
            }
            // line 6
            echo "\t\t";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors')) {
                // line 7
                echo "\t\t\t<strong>Email error:</strong> Please verify the syntaxe of your email address.<br />
\t\t";
            }
            // line 9
            echo "\t\t";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'errors')) {
                // line 10
                echo "\t\t\t<strong>Password incorrect:</strong> Please enter a valid password and confirm with the same password.
\t\t";
            }
            // line 12
            echo "\t</p>
";
        }
        // line 14
        echo "<form novalidate action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">
     <p class=\"alert alert-danger span 6\">
     ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
     ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
     </p>
     <div class=\"control-group\">
     \t<label class=\"control-label\" for=\"inputUsername\">Username</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("id" => "inputUsername", "placeholder" => "Username", "class" => "span4")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"control-group\">
\t    <label class=\"control-label\" for=\"inputEmail\">Email</label>
\t    <div class=\"controls\">
\t    \t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("id" => "inputEmail", "placeholder" => "Email address", "class" => "span4")));
        echo "
    \t</div>
\t</div>
    <div class=\"control-group\">
    \t<label class=\"control-label\" for=\"inputPassword\">Password</label>
\t    <div class=\"controls\">
\t    \t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'widget', array("attr" => array("id" => "inputPassword", "placeholder" => "Password", "class" => "span4")));
        echo "
    \t</div>
\t</div>
    <div class=\"control-group\">
    \t<label class=\"control-label\" for=\"inputPasswordConfirmation\">Password confirmation</label>
\t    <div class=\"controls\">
\t    \t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'widget', array("attr" => array("id" => "inputPasswordConfirmation", "placeholder" => "Password confirmation", "class" => "span4")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"control-group\">
\t\t<div class=\"controls\">
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Submit registration\"/>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  75 => 28,  275 => 111,  255 => 93,  252 => 92,  249 => 91,  239 => 23,  235 => 22,  230 => 21,  227 => 20,  221 => 18,  216 => 17,  204 => 13,  198 => 11,  186 => 7,  180 => 6,  173 => 112,  171 => 111,  167 => 109,  165 => 91,  144 => 78,  138 => 74,  126 => 68,  122 => 67,  97 => 54,  54 => 16,  51 => 3,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 24,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 58,  101 => 55,  80 => 24,  63 => 16,  36 => 6,  156 => 84,  148 => 79,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 12,  223 => 96,  214 => 90,  210 => 15,  203 => 84,  199 => 83,  194 => 80,  192 => 9,  189 => 8,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 69,  125 => 49,  119 => 45,  116 => 63,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 19,  56 => 12,  32 => 11,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 52,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 4,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 47,  78 => 24,  72 => 16,  64 => 39,  53 => 34,  50 => 15,  48 => 32,  41 => 7,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 62,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 50,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 10,  49 => 13,  46 => 14,  43 => 10,  40 => 7,  37 => 7,  34 => 5,  31 => 7,  28 => 6,);
    }
}
