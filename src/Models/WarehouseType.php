<?php

namespace NovaPoshta\Models;

/**
 * Class WarehouseType
 * @property string Ref
 * @property string Description
 * @property string DescriptionRu
 * @package NovaPoshta\Models
 */
class WarehouseType
{
	/** @return string */
	public function getRef(): string
	{
		return $this->Ref;
	}

	/** @return string */
	public function getDescription(): string
	{
		return $this->Description;
	}

	/** @return string */
	public function getDescriptionRu(): string
	{
		return $this->DescriptionRu;
	}

}
