<?php

 namespace App\Delegates;
 use App\models\UserDetailsModel;
 use App\models\EventsModel;
 use App\DAO\UsersDao;
 use App\DAO\EventsDao;
 use App\DAO\EventsParticipation;


 class participateEvent
 {
   public function getUserObject($datas)
   {
     $userDetailsModel = new UserDetailsModel();
     $userDetailsModel->setUserId($datas['userId']);
     return $userDetailsModel;
   }

   public function getEventObject($datas)
   {
     $eventsModel = new EventsModel;
     $eventsModel->setEventId($datas['eventId']);
     return $eventsModel;
   }

   public function participateInEvent($datas)
   {
     $eventObject = $this->getEventObject($datas);
     $userObject = $this->getUserObject($datas);


     $eventsDao = new EventsDao();
     //getting the total number of spots from the events table
     $totalSpots = $eventsDao->getEventSpots( $eventObject->getEventId() )[0]['spots'];

     //getting the booked spots from the participation table
     $eventsParticipation = new EventsParticipation();
     $bookedSpots = $eventsParticipation->getParticipatedSpots( $eventObject->getEventId() )[0]['booked_spots'];

     //checking the exsistence of the participation of the user
     if(!$eventsParticipation->searchExsistence( $userObject->getUserId(), $eventObject->getEventId() ) )
     {
       //checking if the spots available
       if($availableSpots < $totalSpots)
       {
         //inserting into the participation table
         $eventsParticipation->participate( $userObject->getUserId(), $eventObject->getEventId() );
         return true;
       }
       else {
         return false;
       }
     }

     return false;

   }

 }

 ?>
