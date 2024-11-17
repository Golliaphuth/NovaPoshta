<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByCityRef
 * @property array $query
 */
trait FilterByRef
{
	/**
	 * @param string $ref
	 * @return self
	 */
	public function filterByCity(string $ref): self
	{
		$this->query['methodProperties']['Ref']  = $ref;
		return $this;
	}
}
