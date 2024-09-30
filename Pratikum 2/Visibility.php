<!--Visibility.php --> 
 <?php

 class Visibility{
    public $public = 'Public';
    private $private = 'Private';
    protected $protected = 'Protected';

    function tampilkanProperty(){
        echo "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
 }