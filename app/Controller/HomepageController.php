<?php

App::uses('AppController', 'Controller');
App::uses('EventHelper', 'Lib');

class HomepageController extends AppController {

    public $uses = array('Chat');

    public function index() {

        $events = EventHelper::getNextEvents();
        $this->set('events', $events);
    }

}
