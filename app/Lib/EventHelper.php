<?php

/* 
 * Ce fichier a été crée par Guillaume 'Elektordi' Genty
 * CONTRAT DE LICENCE DE LOGICIEL LIBRE CeCILL-B
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.html
 */

class EventHelper {
    
    
    
    static function getNextEvents() {
        
        App::uses('Chat', 'Model');
        $day = 3600 * 24;
        $events = array();
        
        for($i = 0; $i<8; $i++) {
            $options = array('conditions' => array('Chat.id' => 1));
            $model = new Chat();
            $chat = $model->find('first', $options);
            $date = 1382904328+($day*$i);
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
            $affecte = ($i==5)?'GG':'TT';
            $events[] = array('date' => $date, 'chat' => $chat['Chat'], 'message' => 'Rappel de vaccin contre de Tétanos', 'importance' => $importance, 'echeance'=>$echeance, 'affectation'=>$affecte);
        }
        return $events;
    }
    
}