<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* formulaire/form.html.twig */
class __TwigTemplate_6b4dbcd0c961051c809041f0e53396ba extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/form.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Formulaire de Connexion</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body class=\"bg-light d-flex justify-content-center align-items-center vh-100\">

<div class=\"card p-4 shadow-lg\" style=\"max-width: 400px; width: 100%;\">
    <div class=\"card-body\">
        <h2 class=\"text-center mb-4 text-primary\">Connexion</h2>
        <form id=\"loginForm\">
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"email\" placeholder=\"Entrez votre nom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"surname\" class=\"form-label\">Prenom</label>
                <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"email\" placeholder=\"Entrez votre prenom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Entrez votre email\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" required>
            </div>
            <div class=\"d-grid\">
                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
            </div>
        </form>
    </div>
</div>

<!-- Lien vers Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"script.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "formulaire/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Formulaire de Connexion</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body class=\"bg-light d-flex justify-content-center align-items-center vh-100\">

<div class=\"card p-4 shadow-lg\" style=\"max-width: 400px; width: 100%;\">
    <div class=\"card-body\">
        <h2 class=\"text-center mb-4 text-primary\">Connexion</h2>
        <form id=\"loginForm\">
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"email\" placeholder=\"Entrez votre nom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"surname\" class=\"form-label\">Prenom</label>
                <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"email\" placeholder=\"Entrez votre prenom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Entrez votre email\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" required>
            </div>
            <div class=\"d-grid\">
                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
            </div>
        </form>
    </div>
</div>

<!-- Lien vers Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"script.js\"></script>
</body>
</html>", "formulaire/form.html.twig", "/Users/pierrefeumarius/Desktop/gestion-projet-chat/TP-agil/form/templates/formulaire/form.html.twig");
    }
}
