<?php

namespace NovaPoshta\Response;

use NovaPoshta\Factories\ModelFactory;
use NovaPoshta\Models\Settlement;

/**
 * Class GetSettlementsResponse
 * @package NovaPoshta\Response
 */
class GetSettlementsResponse extends AResponse
{
	/** @var array */
	private array $settlements = [];

	public function __construct(array $data)
	{
		foreach ($data as $item) {
			$this->settlements[] = ModelFactory::create(new Settlement(), $item);
		}
	}

	/** @return array */
	public function settlements(): array
	{
		return $this->settlements;
	}
}
