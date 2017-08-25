<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    $conditions = array();

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);

    $commingsoon = $this->eventDAO->selectFourItems();
    $this->set('commingsoon', $commingsoon);
  }

  public function programm() {
    $conditions = array();


    //De evenementen worden getoond naar gelang de datum
    //Voor kerst worden kerstevenementen getoond
    //na kerst worden paasevenementen getoond
    if (empty($_GET['age']) && empty($_GET['period'])) {
      date_default_timezone_set('Europe/Brussels');
      $dateNow = date("Y-m-d H:i:s");
      $dateEndChristmas = '2018-01-07 00:00:00';
      $dateBeginEaster = '2018-04-2 00:00:00';

      if ($dateNow <= $dateEndChristmas) {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => $dateEndChristmas
        );
      } else {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => $dateBeginEaster
        );
      }
    }

    //bij klikken op een link worden de juiste evenementen getoond
    if (!empty($_GET['age'])) {
      $age = $_GET['age'];
      $conditions[] = array(
        'field' => 'start_age',
        'comparator' => '<=',
        'value' => $age
      );

      $conditions[] = array(
        'field' => 'end_age',
        'comparator' => '>=',
        'value' => $age
      );
    }

    if (!empty($_GET['period']) && $_GET['period'] == 'Paasperiode') {
      $conditions[] = array(
        'field' => 'start',
        'comparator' => '>=',
        'value' => '2018-04-12 00:00:00'
      );

      $conditions[] = array(
        'field' => 'start',
        'comparator' => '<=',
        'value' => '2018-04-20 23:59:59'
      );
    }

    if (!empty($_GET['period']) && $_GET['period'] == 'Kerstperiode') {
      $conditions[] = array(
        'field' => 'start',
        'comparator' => '>=',
        'value' => '2017-12-27 00:00:00'
      );

      $conditions[] = array(
        'field' => 'start',
        'comparator' => '<=',
        'value' => '2018-01-06 23:59:59'
      );
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function detail(){
    $event = false;
		if(!empty($_GET['id'])) {

      if($_GET['id'] < 3 ) {
        $this->redirect('index.php?page=detail&id=29');
		  }

      else if($_GET['id'] > 29 ) {
        $this->redirect('index.php?page=detail&id=3');
      }

      else if(!empty($_GET['id'])) {
      $event = $this->eventDAO->selectById(($_GET['id']));
      $this->set('event', $event);

      $location = $this->eventDAO->selectLocationById(($_GET['id']));
      $this->set('location', $location);

      $eventbefore = $this->eventDAO->selectById(($_GET['id']-1));
      $this->set('eventbefore', $eventbefore);

      $eventafter = $this->eventDAO->selectById(($_GET['id']+1));
      $this->set('eventafter', $eventafter);
    }
		}
  }

}
