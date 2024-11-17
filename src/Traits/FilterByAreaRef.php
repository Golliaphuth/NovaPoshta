<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByAreaRef
 * @property array $query
 */
trait FilterByAreaRef
{
	/**
	 * @param string $ref
	 * @return self
	 */
	public function filterByAreaRef(string $ref): self
	{
		$this->query['methodProperties']['AreaRef']  = $ref;
		return $this;
	}
}
