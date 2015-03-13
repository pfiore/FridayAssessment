<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RepeatCounter.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/display", function() use ($app) {
    $input_search = ($_POST['word']);
    $input_string = ($_POST['string']);


    $new_count = new RepeatCounter;
    $count = $new_count->countRepeats($input_search, $input_string);
    return $app['twig']->render('display.twig', array('word' => $_POST['word'], 'count' => $count));
  });

  return $app;
?>
