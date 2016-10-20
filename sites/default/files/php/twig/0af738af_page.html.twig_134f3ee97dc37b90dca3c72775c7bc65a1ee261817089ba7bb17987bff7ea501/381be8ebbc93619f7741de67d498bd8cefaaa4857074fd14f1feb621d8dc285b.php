<?php

/* themes/insight/page.html.twig */
class __TwigTemplate_619ab1a82fa7134e6761504fb0f81418be85fa723efd30b9613bf2df702eb3f6 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<body class=\"home\">
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_top_region", array()), "html", null, true));
        echo "
<header class=\"global-header\" data-module=\"headroom\">
  
<h1 class=\"logo\">
  <a href=\"/\" class=\"logo__link\">
    <span class=\"visuallyhidden\">AthenaInsight</span>
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"397.29\" height=\"107.66\" viewBox=\"0 0 397.29 107.66\" alt=\"AthenaInsight logo\">
  <g fill=\"#626066\" class=\"tagline\">
    <path d=\"M11.6 93.9h-4v10.4H6V93.9H2v-1.4h9.6v1.4zM19.6 100.3c0 2.4-1.8 4.2-4.3 4.2-2.4 0-4.3-1.8-4.3-4.2 0-2.4 1.8-4.2 4.3-4.2s4.3 1.8 4.3 4.2zm-7.1 0c0 1.7 1.2 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9s-1.2-2.9-2.8-2.9c-1.5 0-2.8 1.2-2.8 2.9zM28 97.4v-5.2h1.4v12.2H28v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.2 0 2.1.5 2.8 1.3zm-5.5 2.9c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM39.7 104.3h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.3 0 2.2.5 2.8 1.3v-1.1h1.4v8.1zm-6.9-4c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM43.3 107.8h-1.5l3-5.2-3.8-6.3h1.6l2.9 4.9 2.8-4.9h1.5l-6.5 11.5zM53 92.1l-.9 4.4h-1.2l.5-4.4H53zM59.8 98.1c-.5-.3-1.5-.7-2.6-.7s-1.8.5-1.8 1.2c0 .6.6.9 1.6 1.1l.9.1c1.7.2 2.7.9 2.7 2.3 0 1.5-1.4 2.5-3.6 2.5-1 0-2.3-.2-3.4-1l.6-1c.6.5 1.4.9 2.8.9 1.3 0 2.1-.4 2.1-1.2 0-.6-.5-1-1.6-1.1l-.9-.1c-1.8-.2-2.7-1-2.7-2.3 0-1.5 1.3-2.5 3.2-2.5 1.3 0 2.4.3 3.2.9l-.5.9zM73.1 97.4v-5.2h1.4v12.2h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.2 0 2.2.5 2.8 1.3zm-5.4 2.9c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM84.8 104.3h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.3 0 2.2.5 2.8 1.3v-1.1h1.4v8.1zm-6.8-4c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM92.9 97.6h-3.4v3.9c0 1.2.6 1.7 1.5 1.7.6 0 1.2-.2 1.6-.5l.7 1c-.6.4-1.4.8-2.4.8-1.7 0-2.8-1-2.8-3v-3.9h-1.7v-1.3h1.7v-2.5h1.4v2.5h3.4v1.3zM102.5 104.3h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.3 0 2.2.5 2.8 1.3v-1.1h1.4v8.1zm-6.8-4c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM107.1 103.3c0 .6-.5 1.2-1.2 1.2-.6 0-1.2-.5-1.2-1.2 0-.6.5-1.2 1.2-1.2.7.1 1.2.6 1.2 1.2zM121.8 93.9h-4v10.4h-1.5V93.9h-4v-1.4h9.6v1.4zM129.9 100.3c0 2.4-1.8 4.2-4.3 4.2-2.4 0-4.3-1.8-4.3-4.2 0-2.4 1.8-4.2 4.3-4.2s4.3 1.8 4.3 4.2zm-7.1 0c0 1.7 1.2 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9s-1.2-2.9-2.8-2.9c-1.6 0-2.8 1.2-2.8 2.9zM145.3 99.3v5h-1.4v-4.6c0-1.5-.8-2.4-2.2-2.4-1.3 0-2.4.9-2.4 2.4v4.5h-1.4v-4.6c0-1.5-.8-2.4-2.2-2.4-1.3 0-2.4.9-2.4 2.4v4.5H132v-8h1.4v1.1c.7-.9 1.7-1.2 2.6-1.2 1.4 0 2.4.6 3 1.6.7-1.2 1.9-1.6 3-1.6 1.9.1 3.3 1.4 3.3 3.3zM155.8 100.3c0 2.4-1.8 4.2-4.3 4.2-2.4 0-4.3-1.8-4.3-4.2 0-2.4 1.8-4.2 4.3-4.2s4.3 1.8 4.3 4.2zm-7.1 0c0 1.7 1.2 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9s-1.2-2.9-2.8-2.9c-1.6 0-2.8 1.2-2.8 2.9zM163 96.4l-.3 1.4c-.4-.2-.9-.3-1.4-.3-1.2 0-2.1.9-2.1 2.4v4.5h-1.4v-8h1.4v1.1c.6-.8 1.4-1.2 2.4-1.2.5-.2 1-.1 1.4.1zM169.9 96.4l-.3 1.4c-.4-.2-.9-.3-1.4-.3-1.2 0-2.1.9-2.1 2.4v4.5h-1.4v-8h1.4v1.1c.6-.8 1.4-1.2 2.4-1.2.5-.2.9-.1 1.4.1zM179.1 100.3c0 2.4-1.8 4.2-4.3 4.2-2.4 0-4.3-1.8-4.3-4.2 0-2.4 1.8-4.2 4.3-4.2s4.3 1.8 4.3 4.2zm-7.1 0c0 1.7 1.2 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9s-1.2-2.9-2.8-2.9c-1.6 0-2.8 1.2-2.8 2.9zM189.9 102.9l2.3-6.6h1.4l-2.9 8H189l-2.3-6.5-2.3 6.5h-1.6l-2.9-8h1.5l2.3 6.6 2.3-6.6h1.6l2.3 6.6zM197.2 92.1l-.9 4.4H195l.5-4.4h1.7zM204 98.1c-.5-.3-1.5-.7-2.6-.7s-1.8.5-1.8 1.2c0 .6.6.9 1.6 1.1l.9.1c1.7.2 2.7.9 2.7 2.3 0 1.5-1.4 2.5-3.6 2.5-1 0-2.3-.2-3.4-1l.6-1c.6.5 1.4.9 2.8.9 1.3 0 2.1-.4 2.1-1.2 0-.6-.5-1-1.6-1.1l-.9-.1c-1.8-.2-2.7-1-2.7-2.3 0-1.5 1.3-2.5 3.2-2.5 1.3 0 2.4.3 3.2.9l-.5.9zM212.4 97.3c.7-.9 1.7-1.2 2.6-1.2 2 0 3.4 1.3 3.4 3.2v5H217v-4.6c0-1.5-.8-2.4-2.2-2.4-1.3 0-2.4.9-2.4 2.4v4.5H211V92.1h1.4v5.2zM228.1 100.3v.5h-6.3c.2 1.7 1.4 2.5 2.7 2.5.9 0 1.8-.4 2.5-1l.7.9c-1 .9-2.1 1.2-3.3 1.2-2.4 0-4.1-1.7-4.1-4.2s1.7-4.2 4-4.2c2.2.1 3.8 1.8 3.8 4.3zm-6.3-.6h4.9c-.2-1.4-1.1-2.3-2.4-2.3-1.4 0-2.3.9-2.5 2.3zM237.8 104.3h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.3 0 2.2.5 2.8 1.3v-1.1h1.4v8.1zm-6.8-4c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM241.9 104.3h-1.4V92.1h1.4v12.2zM250 97.6h-3.4v3.9c0 1.2.6 1.7 1.5 1.7.6 0 1.2-.2 1.6-.5l.7 1c-.6.4-1.4.8-2.4.8-1.7 0-2.8-1-2.8-3v-3.9h-1.7v-1.3h1.7v-2.5h1.4v2.5h3.4v1.3zM253.4 97.3c.7-.9 1.7-1.2 2.6-1.2 2 0 3.4 1.3 3.4 3.2v5H258v-4.6c0-1.5-.8-2.4-2.2-2.4-1.3 0-2.4.9-2.4 2.4v4.5H252V92.1h1.4v5.2zM268.6 97.4l-.9.9c-.6-.6-1.3-.9-2.1-.9-1.6 0-2.7 1.2-2.7 2.9s1.2 2.9 2.7 2.9c.9 0 1.6-.4 2.2-.9l.9 1c-.7.8-1.8 1.3-3 1.3-2.5 0-4.2-1.8-4.2-4.2 0-2.4 1.7-4.2 4.2-4.2 1.1-.1 2.1.4 2.9 1.2zM277.9 104.3h-1.4v-1.1c-.6.8-1.6 1.2-2.8 1.2-2.3 0-4-1.8-4-4.2s1.8-4.2 4-4.2c1.3 0 2.2.5 2.8 1.3v-1.1h1.4v8.1zm-6.8-4c0 1.6 1.1 2.9 2.8 2.9 1.6 0 2.8-1.2 2.8-2.9 0-1.6-1.1-2.9-2.8-2.9-1.7 0-2.8 1.3-2.8 2.9zM285.8 96.4l-.3 1.4c-.4-.2-.9-.3-1.4-.3-1.2 0-2.1.9-2.1 2.4v4.5h-1.4v-8h1.4v1.1c.6-.8 1.4-1.2 2.4-1.2.5-.2 1-.1 1.4.1zM294.3 100.3v.5H288c.2 1.7 1.4 2.5 2.7 2.5.9 0 1.8-.4 2.5-1l.7.9c-1 .9-2.1 1.2-3.3 1.2-2.4 0-4.1-1.7-4.1-4.2s1.7-4.2 4-4.2c2.2.1 3.8 1.8 3.8 4.3zm-6.4-.6h4.9c-.2-1.4-1.1-2.3-2.4-2.3-1.4 0-2.2.9-2.5 2.3zM298.1 103.3c0 .6-.5 1.2-1.2 1.2-.6 0-1.2-.5-1.2-1.2 0-.6.5-1.2 1.2-1.2.7.1 1.2.6 1.2 1.2z\"/>
  </g>
  <path fill=\"none\" stroke=\"#5c2c81\" stroke-width=\"3.139\" d=\"M214.63 40.13l37.85-13.11 37.85 13.11 43.35-33.34\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"dots graph\" />
  <g fill=\"#799b3e\" class=\"athena wordmark\">
    <path d=\"M219.63 40.59a4.84 4.84 0 0 1-5 4.88 4.79 4.79 0 0 1-4.89-4.88 4.84 4.84 0 0 1 4.89-5 4.9 4.9 0 0 1 5 5zm-1.41 43.13h-7V51.66h7v32.06zM253.66 63.58v20.14h-7V65.88c0-5.39-2.78-8.4-7.46-8.4-4.52 0-8.3 3-8.3 8.47v17.77h-7V51.66h7v3.92c2.58-3.78 6.56-4.75 9.84-4.75 7.54 0 12.92 5.25 12.92 12.75zM280.77 59.69a20.68 20.68 0 0 0-9.9-2.69c-3.81 0-6.06 1.54-6.06 3.81s2.34 2.88 5.29 3.31l3.31.5c7 1 11.14 4 11.14 9.47 0 6.16-5.35 10.47-14.59 10.47-3.31 0-9.07-.64-13.75-4.12l3.25-5.25c2.31 1.77 5.35 3.28 10.57 3.28 4.79 0 7.29-1.51 7.29-3.92 0-1.81-1.74-3-5.55-3.55l-3.35-.44c-7.09-1-10.87-4.25-10.87-9.4 0-6.36 5.09-10.27 13.25-10.27a24.35 24.35 0 0 1 13 3.38zM295.86 40.59a4.84 4.84 0 0 1-5 4.88 4.79 4.79 0 0 1-4.86-4.88 4.84 4.84 0 0 1 4.88-5 4.9 4.9 0 0 1 4.98 5zm-1.41 43.13h-7V51.66h7v32.06zM324.64 55.51v-3.85h7v29.82c0 10.07-6.49 16.26-17.2 16.26-4.79 0-10-1.3-13.42-3.71l2.54-5.92a21 21 0 0 0 10.88 3.25c6.56 0 10.17-3.61 10.17-9.57V79.2c-2.41 3.08-6 4.68-10.67 4.68-7.33 0-14.86-6.16-14.86-16.53s7.56-16.52 14.92-16.52c4.62 0 8.23 1.64 10.64 4.68zm-18.33 11.85c0 5.39 3.55 9.94 9.47 9.94 5.66 0 9.47-4.32 9.47-9.94s-3.81-9.94-9.47-9.94c-5.93 0-9.47 4.52-9.47 9.94zM345.66 55.48a11.44 11.44 0 0 1 9.77-4.65c7.63 0 13 5.25 13 12.75v20.14h-7V65.88c0-5.39-2.78-8.4-7.46-8.4-4.52 0-8.3 3-8.3 8.47v17.77h-7V35.54h7v19.94zM395.25 58H383v14c0 4.32 2.28 6 5.09 6a12.84 12.84 0 0 0 6.46-2.17l2.78 5.59a17.31 17.31 0 0 1-9.84 3.18c-7.26 0-11.51-3.92-11.51-12.45V58h-6.39v-6.34h6.39V42h7v9.71h12.28V58z\" />
  </g>
  <g fill=\"#5c2c81\" class=\"insight wordmark\">
    <path d=\"M33.09 83.72h-7v-3.85A12.16 12.16 0 0 1 16 84.56c-9 0-16-7.06-16-16.87s7.06-16.86 16-16.86a12.19 12.19 0 0 1 10.1 4.71v-3.88h7v32.06zm-25.9-16C7.2 73.31 10.84 78 16.87 78c5.79 0 9.67-4.42 9.67-10.27s-3.88-10.27-9.67-10.27c-6.03-.04-9.67 4.61-9.67 10.23zM61.91 58H49.63v14c0 4.32 2.28 6 5.09 6a12.84 12.84 0 0 0 6.46-2.17L64 81.38a17.31 17.31 0 0 1-9.84 3.18c-7.26 0-11.51-3.92-11.51-12.45V58h-6.44v-6.34h6.39V42h7v9.71h12.31V58zM73.46 55.48a11.44 11.44 0 0 1 9.77-4.65c7.63 0 13 5.25 13 12.75v20.14h-7V65.88c0-5.39-2.78-8.4-7.46-8.4-4.52 0-8.3 3-8.3 8.47v17.77h-7V35.54h7v19.94zM131.68 67.66c0 .9-.07 1.81-.13 2.61h-23.69c.94 5.76 5 8.17 9.54 8.17a15.32 15.32 0 0 0 9.27-3.38l3.48 5a19.31 19.31 0 0 1-13.15 4.5c-9.6 0-16.4-6.69-16.4-16.87s6.53-16.87 16-16.87c8.89.01 15.05 6.83 15.08 16.84zm-23.79-2.71h16.63c-.77-5-3.68-7.9-8.13-7.9-4.98 0-7.76 3.21-8.5 7.9zM166.49 63.58v20.14h-7V65.88c0-5.39-2.78-8.4-7.46-8.4-4.52 0-8.3 3-8.3 8.47v17.77h-7V51.66h7v3.92c2.58-3.78 6.56-4.75 9.84-4.75 7.53 0 12.92 5.25 12.92 12.75zM204.24 83.72h-7v-3.85a12.16 12.16 0 0 1-10.07 4.69c-9 0-16-7.06-16-16.87s7.06-16.87 16-16.87a12.19 12.19 0 0 1 10.07 4.72v-3.88h7v32.06zm-25.9-16C178.34 73.31 182 78 188 78c5.79 0 9.67-4.42 9.67-10.27s-3.88-10.31-9.67-10.31c-6 0-9.66 4.65-9.66 10.27z\" />
  </g>
  <g class=\"graph lines\">
    <path fill=\"#f3c317\" d=\"M257.7 26.9a5.22 5.22 0 1 1-5.22-5.22 5.22 5.22 0 0 1 5.22 5.22M338.9 6.79a5.22 5.22 0 1 1-5.22-5.22 5.22 5.22 0 0 1 5.22 5.22\" />
    <circle cx=\"214.63\" cy=\"40.13\" r=\"5.22\" fill=\"none\" stroke=\"#5c2c81\" stroke-width=\"3.139\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
    <circle cx=\"290.33\" cy=\"40.13\" r=\"5.22\" fill=\"none\" stroke=\"#5c2c81\" stroke-width=\"3.139\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
    <circle cx=\"252.48\" cy=\"26.9\" r=\"5.22\" fill=\"none\" stroke=\"#5c2c81\" stroke-width=\"3.139\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
    <circle cx=\"333.68\" cy=\"6.79\" r=\"5.22\" fill=\"none\" stroke=\"#5c2c81\" stroke-width=\"3.139\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
  </g>
</svg>
  </a>
</h1>
  
<button class=\"hamburger-menu\" data-module=\"hamburgerMenu\" aria-controls=\"flyout-menu\" aria-label=\"Flyout Menu\">
  <div class=\"hamburger-menu__icon\">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</button>
  
<div class=\"search-toggle\" data-module=\"searchToggle\">
  <button class=\"search-toggle__icon icon icon-search\" aria-label=\"Search\" aria-controls=\"headerSearch\">
    <span class=\"visuallyhidden\">Search</span>
  </button>
</div>
  
<div id=\"headerSearch\" class=\"search-bar\" aria-hidden=\"true\">
";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
        echo "
</div>
</header>


<div id=\"flyout-menu\" class=\"flyout-menu\" aria-expanded=\"false\" aria-hidden=\"true\">
  <div class=\"flyout-menu__inner\">
    ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "category_left_menu", array()), "html", null, true));
        echo "
  </div>
</div>

<section class=\"page-hero page-hero--big\" style=\"background-image: url(/images/home-hero.jpg)\">
  ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_banner", array()), "html", null, true));
        echo "
</section>
  <main>
    <section>
<div class=\"stories-container wrapper card-view\" data-module=\"homepageExperience\">
  <div class=\"stories-container__inner\">
  ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
        echo "
  ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
  ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  </div>
</div>
    </section>

    <section class=\"wrapper\">
      <div class=\"email-signup email-signup--cta-full\" data-module=\"emailSignUp\">
        <div class=\"wrapper row\">
          <div class=\"span-1of1 span-1of3@desktop\">
            <h3>Stay in the know</h3>
          </div>
          <div class=\"span-1of1 span-1of2@desktop\">
            <p class=\"email-signup--description\">Sign up for weekly data and news from athenaInsight.</p>
            <form action=\"https://s1227305179.t.eloqua.com/e/f2\" method=\"post\" data-module=\"formValidation\">
              <div class=\"form-group email\">

                <label for=\"CTAemailSignup\" class=\"visuallyhidden\">Your Email</label>

                
<input type=\"email\" name=\"emailAddress\" placeholder=\"Your Email\" id=\"CTAemailSignup\" required />
                
<input type=\"hidden\" name=\"elqFormName\" value=\"athenainsightnews\" />
                
<input type=\"hidden\" name=\"elqSiteID\" value=\"1227305179\" />
                
  <input type=\"submit\" class=\" button\" value=\"Sign Up\" />

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class=\"interactive wrapper\">
  <div class=\"interactive__content wrapper\">
    <div class=\"span-8@tablet\">
      
<section class=\"ceros-iframe\">
";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first_bar", array()), "html", null, true));
        echo "
</section>
    </div>
    
  </div>
</section>

  </main>

  <div id=\"manifesto\" style=\"display:none;\" data-module=\"manifesto\">
    <div class=\"wrapper text-center\">
      <h1 class=\"page-hero__title\"><span class=\"thin\">Today's data.</span> tomorrow's healthcare.</h1>
      <p><em>athenaInsight</em> is a daily news hub from the heart of the health care internet. Come here for surprising data, performance strategies, and sparks of inspiration to make healthcare work as it should – all powered by data from athenahealth’s national network.
      </p>
      <a role=\"button\" href=\"https://www.youtube.com/embed/PN5mWoZX6Nw?rel=0\" class=\"button page-hero__button\" id=\"learnMore\" aria-label=\"Learn More\" target=\"_blank\">Learn More</a>
      <a role=\"button\" href=\"#\" class=\"button page-hero__button\" id=\"startExploring\" aria-label=\"Start Exploring\">Start Exploring</a>
    </div>
  </div>



<footer class=\"global-footer\">
  <section class=\"wrapper\">
    <div class=\"global-footer__column\">
      ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn", array()), "html", null, true));
        echo "
    </div>
    <div class=\"global-footer__column\">
      ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn", array()), "html", null, true));
        echo "
    </div>
    <div class=\"global-footer__column\">
      ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn", array()), "html", null, true));
        echo "
    </div>
  </section>
  <section class=\"wrapper\">
    ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last_bar", array()), "html", null, true));
        echo "
  </section>
  <section class=\"wrapper\">
    ";
        // line 143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
  </section>
</footer>

<script type='text/javascript'>
/* <![CDATA[ */
var ath_quiz_vars = {\"ajaxurl\":\"http:\\/\\/athena.genuinedev2.com\\/wp-admin\\/admin-ajax.php\",\"qnonce\":\"12c6caf454\"};
var ath_load_more_vars = {\"ajaxurl\":\"http:\\/\\/athena.genuinedev2.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"8f49a9b5ea\",\"query_vars\":\"YTo2NDp7czo0OiJwYWdlIjtpOjA7czo4OiJwYWdlbmFtZSI7czoxMToiYWxsLXN0b3JpZXMiO3M6NToiZXJyb3IiO3M6MDoiIjtzOjE6Im0iO3M6MDoiIjtzOjE6InAiO2k6MDtzOjExOiJwb3N0X3BhcmVudCI7czowOiIiO3M6Nzoic3VicG9zdCI7czowOiIiO3M6MTA6InN1YnBvc3RfaWQiO3M6MDoiIjtzOjEwOiJhdHRhY2htZW50IjtzOjA6IiI7czoxMzoiYXR0YWNobWVudF9pZCI7aTowO3M6NDoibmFtZSI7czowOiIiO3M6Njoic3RhdGljIjtzOjA6IiI7czo3OiJwYWdlX2lkIjtpOjA7czo2OiJzZWNvbmQiO3M6MDoiIjtzOjY6Im1pbnV0ZSI7czowOiIiO3M6NDoiaG91ciI7czowOiIiO3M6MzoiZGF5IjtpOjA7czo4OiJtb250aG51bSI7aTowO3M6NDoieWVhciI7aTowO3M6MToidyI7aTowO3M6MTM6ImNhdGVnb3J5X25hbWUiO3M6MDoiIjtzOjM6InRhZyI7czowOiIiO3M6MzoiY2F0IjtzOjA6IiI7czo2OiJ0YWdfaWQiO3M6MDoiIjtzOjY6ImF1dGhvciI7czowOiIiO3M6MTE6ImF1dGhvcl9uYW1lIjtzOjA6IiI7czo0OiJmZWVkIjtzOjA6IiI7czoyOiJ0YiI7czowOiIiO3M6NToicGFnZWQiO2k6MDtzOjg6Im1ldGFfa2V5IjtzOjA6IiI7czoxMDoibWV0YV92YWx1ZSI7czowOiIiO3M6NzoicHJldmlldyI7czowOiIiO3M6MToicyI7czowOiIiO3M6ODoic2VudGVuY2UiO3M6MDoiIjtzOjU6InRpdGxlIjtzOjA6IiI7czo2OiJmaWVsZHMiO3M6MDoiIjtzOjEwOiJtZW51X29yZGVyIjtzOjA6IiI7czo1OiJlbWJlZCI7czowOiIiO3M6MTI6ImNhdGVnb3J5X19pbiI7YTowOnt9czoxNjoiY2F0ZWdvcnlfX25vdF9pbiI7YTowOnt9czoxMzoiY2F0ZWdvcnlfX2FuZCI7YTowOnt9czo4OiJwb3N0X19pbiI7YTowOnt9czoxMjoicG9zdF9fbm90X2luIjthOjA6e31zOjEzOiJwb3N0X25hbWVfX2luIjthOjA6e31zOjc6InRhZ19faW4iO2E6MDp7fXM6MTE6InRhZ19fbm90X2luIjthOjA6e31zOjg6InRhZ19fYW5kIjthOjA6e31zOjEyOiJ0YWdfc2x1Z19faW4iO2E6MDp7fXM6MTM6InRhZ19zbHVnX19hbmQiO2E6MDp7fXM6MTU6InBvc3RfcGFyZW50X19pbiI7YTowOnt9czoxOToicG9zdF9wYXJlbnRfX25vdF9pbiI7YTowOnt9czoxMDoiYXV0aG9yX19pbiI7YTowOnt9czoxNDoiYXV0aG9yX19ub3RfaW4iO2E6MDp7fXM6MTk6Imlnbm9yZV9zdGlja3lfcG9zdHMiO2I6MDtzOjE2OiJzdXBwcmVzc19maWx0ZXJzIjtiOjA7czoxMzoiY2FjaGVfcmVzdWx0cyI7YjoxO3M6MjI6InVwZGF0ZV9wb3N0X3Rlcm1fY2FjaGUiO2I6MTtzOjIyOiJ1cGRhdGVfcG9zdF9tZXRhX2NhY2hlIjtiOjE7czo5OiJwb3N0X3R5cGUiO3M6MDoiIjtzOjE0OiJwb3N0c19wZXJfcGFnZSI7aToxMjtzOjg6Im5vcGFnaW5nIjtiOjA7czoxNzoiY29tbWVudHNfcGVyX3BhZ2UiO3M6MjoiNTAiO3M6MTM6Im5vX2ZvdW5kX3Jvd3MiO2I6MDtzOjU6Im9yZGVyIjtzOjQ6IkRFU0MiO30=\",\"max_num_pages\":\"4\"};
/* ]]> */
</script>

<!-- Global script includes -->
<script src=\"scripts/app.built.js\" async></script>
<script src=\"scripts/fontloader.built.js\" async></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/insight/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 143,  220 => 140,  213 => 136,  207 => 133,  201 => 130,  174 => 106,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  111 => 58,  103 => 53,  93 => 46,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
