<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ermeson Oliveira">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php 
    echo $this->addHead();  
    $BreadCrumb = new Src\Classes\ClassBreadcrumb();
    $BreadCrumb->addBreadcrumb();
    ?>
</head>

<body>

<div class="Head">
    <a href="<?php echo DIRPAGE; ?>">Home</a>
    <a href="<?php echo DIRPAGE.'contato'; ?>">Contato</a>
</div>

<div class="Header">
    <!-- <img src="<?php echo DIRIMG.'Banner.jpg'; ?>" alt="Banner"><br> -->
    TEL.: (XX) XXXXXXXX <br>
    <?php echo $this->addHeader(); ?>
</div>

<div class="Main">
    <?php echo $this->addMain(); ?>
</div>

<div class="Footer"></div>
    2020 - TODOS OS DIREITOS RESERVADOS ERMESON OLIVEIRA <br>
        <?php echo $this->addFooter(); ?>
</body>

</html>