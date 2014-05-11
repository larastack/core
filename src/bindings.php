<?php
// Load all the package bindings
$base = "Larastack\\Core\\";

$bindings = [
  // repositories
  // 'Repositories\UserRepositoryInterface' => 'Repositories\UserRepository',

  // services
];

// loop over the bindings and bind them
foreach($bindings as $key => $value) {
  $this->app->bind($base . $key, $base . $value);
}
