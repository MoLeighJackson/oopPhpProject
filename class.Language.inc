<!--class-->
<?php
class Language {
  // language properties
  public $country_name;
  public $helloworld_text;

//method
  //display hello world in user's selected language
  function display() {
    $output = '';

    //name of country
    $output .= $this->country_name;
    return $output;

    // hello world text
    $output .= '<br/>';
    $output .= $this->helloworld_text;
    return $output;
  }
}
 ?>
