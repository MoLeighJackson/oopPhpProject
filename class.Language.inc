<!--class-->
<?php
class Language {
  // language properties
  public $language_name;
  public $helloworld_text;
  public $helloworld_eng;

//method
  //display hello world in specified language
  function display() {
    $output = '';

    //name of language
    $output .= $this->language_name;
    $output .= '<br>';
    
    // hello world in above language
    $output .=$this->helloworld_text;
    $output .='<br>';
    
    // hello world in English
    $output .= $this->helloworld_eng;
    return $output;

  }
}
 ?>
