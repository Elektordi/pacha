<?php

/* 
 * Ce fichier a été crée par Guillaume 'Elektordi' Genty
 * CONTRAT DE LICENCE DE LOGICIEL LIBRE CeCILL-B
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.html
 */

class EventHelper {
    
    
    
    static function getNextEvents() {
        
        App::uses('Rappel', 'Model');
        App::uses('Chat', 'Model');
        
        $day = 3600 * 24;
        $events = array();
        $model = new Rappel();
        $options = array('conditions' => array('Rappel.ok' => 0), 'order' => 'echeance ASC');
        $rappels = $model->find('all', $options);
        foreach($rappels as $rappel) {
            
            $date = strtotime($rappel['Rappel']['echeance']);
            $diff = floor($date / $day) - floor(time() / $day);
            $importance = "info"; // Importances: default, primary, success, info, warning, danger
            if(false) {
                $echeance = "OK";
                $importance = "success";
            } elseif(false) {
                $echeance = "Ignoré";
                $importance = "default";
            } elseif ($diff == 1) {
                $echeance = "Demain";
                $importance = "danger";
            } elseif ($diff == 0) {
                $echeance = "Aujourd'hui";
                $importance = "danger";
            } elseif ($diff == -1) {
                $echeance = "Hier";
                $importance = "danger";
            } elseif ($diff < 0) {
                $echeance = (-$diff)." jours de retard";
                $importance = "danger";
            } elseif ($diff < 7) {
                $echeance = "$diff jours";
                $importance = "warning";
            } else {
                $echeance = "$diff jours";
            }
            $events[] = array('date' => $date,
                'chat' => $rappel['Chat'],
                'message' => $rappel['Rappel']['texte'],
                'importance' => $importance,
                'echeance'=>$echeance,
                'affectation'=>$rappel['Rappel']['affectation'],
                'id'=>$rappel['Rappel']['id']);
        }
        return $events;
    }
    
}
