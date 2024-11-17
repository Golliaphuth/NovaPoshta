<?php

namespace NovaPoshta\Factories;

use Exception;
use stdClass;

/**
 * Class ModelFactory
 * @package NovaPoshta
 */
class ModelFactory
{
	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = get_class($model) . '\\' . ucfirst($key);
					if (class_exists($modelClass)) {
						$value = self::create(new $modelClass(), $value);
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
			}
			$model->$key = (string)$value;
		}
		return $model;
	}

}
