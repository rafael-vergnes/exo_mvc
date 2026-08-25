<?php
//Class ViewHeader
class ViewHeader{
    //ATTRIBUTS
    private ?string $title;
    private ?string $linkScript;

    //CONSTRUCTOR
    public function __construct(?string $title = "Mon Super Site", ?string $linkScript = ''){
        $this->title = $title;
        $this->linkScript = $linkScript;
    }

    //GETTER ET SETTER

    //METHOD
    public function display(){
        echo '<!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->title.'</title>
                <link rel="stylesheet" href="./public/src/css/style.css">
                <script src="'. $this->linkScript .'" defer></script>
            </head>
            <body>
                <header>
                    <nav>
                        <a href='.$_ENV['utilisateurs'].'>Utilisateurs</a>
                        <a href='.$_ENV['articles'].'>Articles</a>
                    </nav>
                </header>';
                }
            }

?>