<!--instantiating language object, manipulate properties, debug contents, execute method-->

<?php
require 'class.Language.inc';

echo '<h2>Instantiating Language</h2>';
$language = new Language;

// inspect contents of object using var dump
echo '<h2>Blank Language</h2>';
echo '<tt><pre>' . var_export($language, TRUE) . '</pre></tt>';
