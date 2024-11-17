<?php

namespace NovaPoshta\Models;

/**
 * Class Area
 * @property string Ref
 * @property string AreasCenter
 * @property string Description
 * @property string RegionType
 * @package NovaPoshta\Models
 */
class Area
{
	/** @return string */
	public function getRef(): string
	{
		return $this->Ref;
	}

	/** @return string */
	public function getAreasCenter(): string
	{
		return $this->AreasCenter;
	}

	/** @return string */
	public function getDescription(): string
	{
		return $this->Description;
	}

	/** @return string */
	public function getRegionType(): string
	{
		return $this->RegionType;
	}
}
