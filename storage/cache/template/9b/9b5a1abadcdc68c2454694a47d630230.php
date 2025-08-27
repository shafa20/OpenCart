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

/* extension/opencart/admin/view/template/report/product_viewed.twig */
class __TwigTemplate_1137b2b5c596deb426cd495111c866be extends Template
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
        // line 1
        yield "<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"fa-solid fa-filter\"></i> ";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "
    <div class=\"float-end\">
      <button type=\"button\" id=\"button-generate\" class=\"btn btn-warning btn-sm\"><i class=\"fa-solid fa-rotate\"></i> ";
        // line 5
        yield ($context["button_generate"] ?? null);
        yield "</button>
    </div>
  </div>
  <div id=\"product-viewed\" class=\"card-body\">";
        // line 8
        yield ($context["list"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#product-viewed').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#product-viewed').load(this.href);
});

\$('#button-generate').on('click', function() {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=extension/opencart/report/product_viewed.generate&user_token=";
        // line 22
        yield ($context["user_token"] ?? null);
        yield "';

    var viewed = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#product-viewed').load('index.php?route=extension/opencart/report/product_viewed.list&user_token=";
        // line 48
        yield ($context["user_token"] ?? null);
        yield "');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(viewed);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(viewed);
});
//--></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/product_viewed.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  103 => 48,  74 => 22,  57 => 8,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"fa-solid fa-filter\"></i> {{ heading_title }}
    <div class=\"float-end\">
      <button type=\"button\" id=\"button-generate\" class=\"btn btn-warning btn-sm\"><i class=\"fa-solid fa-rotate\"></i> {{ button_generate }}</button>
    </div>
  </div>
  <div id=\"product-viewed\" class=\"card-body\">{{ list }}</div>
</div>
<script type=\"text/javascript\"><!--
\$('#product-viewed').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#product-viewed').load(this.href);
});

\$('#button-generate').on('click', function() {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=extension/opencart/report/product_viewed.generate&user_token={{ user_token }}';

    var viewed = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#product-viewed').load('index.php?route=extension/opencart/report/product_viewed.list&user_token={{ user_token }}');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(viewed);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(viewed);
});
//--></script>", "extension/opencart/admin/view/template/report/product_viewed.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\report\\product_viewed.twig");
    }
}
