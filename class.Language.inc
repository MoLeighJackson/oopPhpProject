<!--class-->
<?php
class Language {
  // language properties
  public $language_name;
  public $helloworld_text;

//method
  //display hello world in user's selected language
  function display() {
    $output = '';

    //name of country
    $output .= $this->language_name;
    $output .= '<br>';
    // hello world text
    $output .= $this->helloworld_text;
    return $output;

  }
}
 ?>
