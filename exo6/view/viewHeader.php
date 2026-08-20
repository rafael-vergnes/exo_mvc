<?php

class ViewHeader {
    private string $title;

    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function __construct() {
        $this->title;
    }

    public function display():void {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title ?></title>
        </head>
        <body>
            <header>
                <nav>
                    <a href=<?php echo $_ENV['utilisateurs'] ?>>Utilisateurs</a>
                    <a href=<?php echo $_ENV['articles'] ?>>Articles</a>
                </nav>
            </header>
        </html>

        <?php
    }

}