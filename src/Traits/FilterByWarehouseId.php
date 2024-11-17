<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByWarehouseId
 * @property array $query
 */
trait FilterByWarehouseId
{
	/**
	 * @param int $warehouseId
	 * @return self
	 */
	public function filterByAreaRef(int $warehouseId): self
	{
		$this->query['methodProperties']['WarehouseId']  = $warehouseId;
		return $this;
	}
}
