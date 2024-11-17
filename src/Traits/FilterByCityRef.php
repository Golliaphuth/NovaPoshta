<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByCityRef
 * @property array $query
 */
trait FilterByCityRef
{
	/**
	 * @param string $ref
	 * @return self
	 */
	public function filterByCity(string $ref): self
	{
		$this->query['methodProperties']['CityRef']  = $ref;
		return $this;
	}
}
