<?php

use App\controllers\RegisterLoginCtrl;
use App\controllers\EventsCtrl;
use App\controllers\SuggestedList;


$app->group('/register',function(){
  $this->get('', RegisterLoginCtrl::class . ':registerHome');
  $this->post('', RegisterLoginCtrl::class . ':registerSubmit');
});


//sample
$app->get('/showuser', RegisterLoginCtrl::class . ':showAllUserDetailsCtrl');

$app->post('/edit/{userId}', RegisterLoginCtrl::class . ':editUserDetails');

$app->group('/login',function(){
  $this->get('', RegisterLoginCtrl::class . ':loginHome');
  $this->post('', RegisterLoginCtrl::class . ':loginSubmit');
});

$app->group('/events',function(){
  $this->get('', EventsCtrl::class . ':showAddEventPage');
  $this->post('', EventsCtrl::class . ':addEvents')->setName('add_event_form_action');
  $this->get('/showAllEvents',EventsCtrl::class . ':showAllEventsPage');
});

$app->get('/se',EventsCtrl::class . ':showAllEventsPage');

$app->post('/join/{userId}/events/{eventId}', EventsCtrl::class . ':joinEvent');


$app->post('/events/{eventId}/suggest/{suggestedToUserId}', EventsCtrl::class . ':suggestEvent');


//load this api on page load
$app->get('/notification/suggestions', SuggestedList::class . ':loadSuggestions');

//load this api for seeing the new added events
$app->get('/notification/events', SuggestedList::class . ':loadNewEvents');

$app->put('/notification/suggestions/seen', SuggestedList::class . ':updateSuggestions');

$app->put('/notification/events/seen', SuggestedList::class . ':updateNewEventsNotfy');

?>
