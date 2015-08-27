<?php
    $currentUrl = $this->Url->build();

    $links = [
/*        [
            "label" => "Projects",
            "url" => ["plugin" => "Accounting", "controller" => "projects", "action" => "index"],
        ],
        [
            "label" => "Clients",
            "url" => ["plugin" => "Accounting", "controller" => "clients", "action" => "index"],
        ],
        [
            "label" => "Contacts",
            "url" => ["plugin" => "Accounting", "controller" => "contacts", "action" => "index"],
        ],
        [
            "label" => "Annexes",
            "url" => ["plugin" => "Accounting", "controller" => "annexes", "action" => "index"],
        ],
        [
            "label" => "Invoices",
            "url" => ["plugin" => "Accounting", "controller" => "invoices", "action" => "index"],
        ],
        [
            "label" => "Quarterly numbers",
            "url" => ["plugin" => "Accounting", "controller" => "accounting", "action" => "vat"],
        ],
        [
            "label" => "Totals",
            "url" => ["plugin" => "Accounting", "controller" => "accounting", "action" => "index"],
        ]*/

    ];
?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link("Cnstruct", "/", ["class" => "navbar-brand"]); ?>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
<?php
foreach ($links as $link) {
    $linkLabel = $link['label'];
    $linkUrl = $this->Url->build($link['url']);
    $linkHtml = $this->Html->link( $linkLabel, $link['url'] );

    $linkActive = $currentUrl === $linkUrl;

    echo $this->Html->tag('li', $linkHtml, array(
        'class' => $linkActive ? 'active' : '',
        'escape' => false
    ));
}
?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>