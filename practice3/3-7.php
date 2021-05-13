<?php

class Post
{
  private $text;
  private static $count = 0;

  public function __construct($text)
  {
    $this->text = $text;
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
  
  public static function showInfo()
  {
    printf('Count: %d' . PHP_EOL, self::$count);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo();