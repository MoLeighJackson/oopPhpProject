<!--instantiating language object, manipulate properties, debug contents, execute method-->

<?php
require 'class.Language.inc';

echo '<h2>Instantiating Language</h2>';
$language = new Language;


// inspect contents of object using var dump
echo '<h2>Blank Language</h2>';
echo '<tt><pre>' . var_export($language, TRUE) . '</pre></tt>';

echo '<h2>Setting properties...</h2>';
  $language->language_name = 'French';
  $language->helloworld_text = 'Bonjour le monde';
  echo '<tt><pre>' . var_export($language, TRUE) . '</pre></tt>';

echo '<h2>Displaying language and hello world in that language...</h2>';
echo $language->display();
