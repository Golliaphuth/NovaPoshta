<?php

namespace NovaPoshta\Traits;

/**
 * Trait WithPagination
 * @property array $query
 */
trait Pagination
{
	/**
	 * @param int $page
	 * @param int $limit
	 * @return self
	 */
	public function paginate(int $page, int $limit): self
	{
		$this->query['methodProperties']['Page']  = $page;
		$this->query['methodProperties']['Limit'] = $limit;
		return $this;
	}
}
