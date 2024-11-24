<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\Area;

/**
 * Class GetSettlementAreasResponse
 * @package NovaPoshta\Response
 */
class GetSettlementAreasResponse extends AResponse
{
	/** @var array */
	private array $areas = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->areas[] = ModelFactory::create(new Area(), $item);
		}
	}

	/** @return array */
	public function areas(): array
	{
		return $this->areas;
	}
}
