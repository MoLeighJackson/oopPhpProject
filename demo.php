<!--instantiate language object,
change properties,
debug contents (using var dump),
execute method-->

<?php
require 'class.Language.inc';

echo '<h2>Instantiating an Object</h2>';
$language = new Language;


// inspect contents of object using var dump
echo '<h2>Object - Language</h2>';
echo '<tt><pre>' . var_export($language, TRUE) . '</pre></tt>';

echo '<h2>Properties</h2>';
  $language->language_name = 'French';
  $language->helloworld_text = 'Bonjour le monde!';
  $language->helloworld_eng = 'Hello, World!';
  echo '<tt><pre>' . var_export($language, TRUE) . '</pre></tt>';

echo '<h2>Display language, <strong>Hello World</strong> in that language,
        followed by <strong>Hello World</strong> in <em>English</em></h2>';
echo $language->display();
