<?php

App::uses('FormHelper', 'View/Helper');

class MyFormHelper extends FormHelper {

    protected function _getInput($args) {
		extract($args);
		switch ($type) {
		
			case 'date':
			case 'datetime': // TODO
				$options['value'] = $selected;
				$options = $this->_initInputField($fieldName, $options);
				return $this->Html->useTag('input', $options['name'], $options).$this->Html->scriptBlock("\$('#{$options['id']}').datepicker({ format: 'yyyy-mm-dd' });");
		
			case 'time': // TODO
				$options['value'] = $selected;
				return $this->dateTime($fieldName, null, $timeFormat, $options);
				
			case 'number':
			    if($fieldName=='ok') return $this->checkbox($fieldName, $options);

		}
		return parent::_getInput($args);
	}

}
