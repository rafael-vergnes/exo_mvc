<?php
//Class ViewHeader
class ViewHeader{
    //ATTRIBUTS
    private ?string $title;

    //CONSTRUCTOR
    public function __construct(?string $title = "Mon Super Site"){
        $this->title = $title;
    }

    //GETTER ET SETTER

    //METHOD
    public function display(){
        echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->title.'</title>
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