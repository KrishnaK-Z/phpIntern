<?php

namespace App\controllers;

use App\Delegates\Suggestion;

class SuggestedList extends BaseController
{
  public function loadSuggestions( $request, $response, $args )
  {
    $suggestion = new Suggestion();
    $suggestion->loadSuggestedList();
  }

  public function loadNewEvents()
  {
    $suggestion = new Suggestion();
    $suggestion->loadEventsList();
  }

  public function updateSuggestions()
  {
    $suggestion = new Suggestion();
    $suggestion->updateSuggestNotify();
  }

  public function updateNewEventsNotfy()
  {
    $suggestion = new Suggestion();
    $suggestion->updateEventNotfy();
  }


}


 ?>
