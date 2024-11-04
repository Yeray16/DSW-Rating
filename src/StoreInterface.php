<?php
namespace Daw2\DswRating;

interface StoreInterface {
  public function addRate(int $rate);

  public function getStadistics() : array;
}