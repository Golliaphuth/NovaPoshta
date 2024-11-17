<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByTypeOfWarehouseRef
 * @property array $query
 */
trait FilterByTypeOfWarehouseRef
{
	/**
	 * @param string $ref
	 * @return self
	 */
	public function filterByTypeOfWarehouseRef(string $ref): self
	{
		$this->query['methodProperties']['TypeOfWarehouseRef']  = $ref;
		return $this;
	}
}
