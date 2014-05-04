<?php

App::uses('FormHelper', 'View/Helper');

class MyFormHelper extends FormHelper {

    protected function _getInput($args) {
		extract($args);
		switch ($type) {
		
			case 'date':
				$options['value'] = $selected;
				$options = $this->_initInputField($fieldName, $options);
				return $this->Html->useTag('input', $options['name'], $options).$this->Html->scriptBlock("\$('#{$options['id']}').datepicker({ format: 'yyyy-mm-dd' });");
		
			case 'time': // TODO
				$options['value'] = $selected;
				return $this->dateTime($fieldName, null, $timeFormat, $options);
			case 'datetime': // TODO
				$options['value'] = $selected;
				return $this->dateTime($fieldName, $dateFormat, $timeFormat, $options);
		}
		return parent::_getInput($args);
	}

}
