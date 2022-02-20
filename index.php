<?php
$profiles = [
  'GitHub'        => 'viraltaco.com'
, 'LinkedIn'      => 'capobianco.be'
, 'stackoverflow' => 'stackoverflow.com/users/story/9282847'
, 'Hackerrank'    => 'www.hackerrank.com/unsigned_lemon'
];

$title = '"A Belgian C++ Software Developer | Anthony Capobianco"';
$description =
  '"Anthony Capobianco is a young software engineer based '
. 'in Mons, Belgium. Obscessed with clean, fast, portable '
. 'and idiomatic code. Overthink every bit."'
?>
<!doctype html>
<html lang="en-US">
<meta charset="utf-8">
<meta name="viewport" 
      content="width=device-width">
<link rel="stylesheet"
      href="./style/min.css">
<meta name="description"
      content=<?= $description; ?>>
<meta property="og:description"
      content=<?= $description; ?>>
<meta property="og:title"
      content=<?= $title; ?>>
<title><?= $title; ?></title>
<body style="display: flex">
<main class="center">
<?php
  if (not isset $profiles) { die(); }
?>
  <ul class="list">
<?php
  foreach ($profiles as $name => $link) { ?>
    <li class="item">
      <a class=<?= '"icon inlinebox '.$name.'"';
      ?> title=<?= '"Personal '.$name.' profile."';
      ?> href=<?= '"https:\/\/'.$link.'/"';
      ?> ><?= $name; ?></a>
    </li>
<? } ?>
  </ul>
</main>
<footer>
  <span id="copyright">Copyright &copy; 2021 Anthony Capobianco</span>