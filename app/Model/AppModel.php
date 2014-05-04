<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	
    function checkLinks($data, $params)
    {
        if (!is_array($params)) {
            return false;
            //$params = array($params);
        }
        
        $k = reset(array_keys($data));
        $v = reset($data);
        
        $col = $params[0];
        $source = $params[1];
        $relation = $this->belongsTo[$source];
        
        $class = $relation['className'];
        $obj = $this->$class->findById($v, array('recursive' => 0));
        $value = $obj[$class][$col];
        
        return ($this->data[$this->name][$col] == $value);
    }

}
