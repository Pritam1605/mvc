<?php

	class Controller {

		protected function _model($model) {
			// Returns the object of the model if it exists
			if (isset($model) && file_exists('../app/models/' . strtolower($model) . '.php')) {
				require_once '../app/models/' . strtolower($model) . '.php';
				return new $model();
			}
			return NULL;
		}

		protected function _view($view, $data = []) {
			if (isset($view) && file_exists('../app/views/' . $view . '.php')) {
				require_once '../app/views/' . strtolower($view) . '.php';
			}
		}

	}

?>