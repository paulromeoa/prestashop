<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psxdesign/views/templates/components/save_banner.html.twig */
class __TwigTemplate_ef6e364f45675b4327b45c45330eb5015d54a646e8a7266f4c5814c2a8116d98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 31
        echo "
<div class=\"save-banner save-banner--hidden\">
    <p class=\"save-banner__text\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unsaved changes", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <div class=\"save-banner__actions\">
        ";
        // line 37
        if (( !array_key_exists("resettable", $context) || (0 !== twig_compare(($context["resettable"] ?? null), false)))) {
            // line 38
            echo "            <button type=\"reset\" id=\"cancel-button\" form=\"";
            echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-light\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</button>
        ";
        }
        // line 40
        echo "        <button type=\"submit\" id=\"save-button\" form=\"";
        echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save changes", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/save_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 40,  53 => 38,  51 => 37,  45 => 34,  40 => 31,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/save_banner.html.twig", "C:\\wamp64\\www\\prestashop\\modules\\psxdesign\\views\\templates\\components\\save_banner.html.twig");
    }
}
