<?php

namespace NovaPoshta\Traits;

/**
 * Trait FilterByString
 * @property array $query
 */
trait FilterByString
{
	/**
	 * @param string $string
	 * @return self
	 */
	public function filterByString(string $string): self
	{
		$this->query['methodProperties']['FindByString'] = $string;
		return $this;
	}
}
