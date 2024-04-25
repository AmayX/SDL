<?php
class Page {
    protected $title;
    protected $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function render() {
        echo "<!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>$this->title</title>
                </head>
                <body>
                    <h1>$this->title</h1>
                    <div>$this->content</div>
                </body>
                </html>";
    }
}
?>
