<?php

namespace NovaPoshta\Models;

/**
 * Class Settlement
 * @property string      Ref
 * @property string      SettlementType
 * @property string      Latitude
 * @property string      Longitude
 * @property string      Description
 * @property string      DescriptionRu
 * @property string      SettlementTypeDescription
 * @property string      SettlementTypeDescriptionRu
 * @property string|NULL Region
 * @property string      RegionsDescription
 * @property string      RegionsDescriptionRu
 * @property string      Area
 * @property string      AreaDescription
 * @property string      AreaDescriptionRu
 * @property string      Index1
 * @property string      Index2
 * @property string      IndexCOATSU1
 * @property string      Delivery1
 * @property string      Delivery2
 * @property string      Delivery3
 * @property string      Delivery4
 * @property string      Delivery5
 * @property string      Delivery6
 * @property string      Delivery7
 * @property string      Warehouse
 * @property array       Conglomerates
 * @package NovaPoshta\Models
 */
class Settlement
{
	/** @return string */
	public function getRef(): string
	{
		return $this->Ref;
	}

	/** @return string */
	public function getSettlementType(): string
	{
		return $this->SettlementType;
	}

	/** @return string */
	public function getLatitude(): string
	{
		return $this->Latitude;
	}

	/** @return string */
	public function getLongitude(): string
	{
		return $this->Longitude;
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

	/** @return string */
	public function getSettlementTypeDescription(): string
	{
		return $this->SettlementTypeDescription;
	}

	/** @return string */
	public function getSettlementTypeDescriptionRu(): string
	{
		return $this->SettlementTypeDescriptionRu;
	}

	/** @return string|NULL */
	public function getRegion(): ?string
	{
		return $this->Region;
	}

	/** @return string */
	public function getRegionsDescription(): string
	{
		return $this->RegionsDescription;
	}

	/** @return string */
	public function getRegionsDescriptionRu(): string
	{
		return $this->RegionsDescriptionRu;
	}

	/** @return string */
	public function getArea(): string
	{
		return $this->Area;
	}

	/** @return string */
	public function getAreaDescription(): string
	{
		return $this->AreaDescription;
	}

	/** @return string */
	public function getAreaDescriptionRu(): string
	{
		return $this->AreaDescriptionRu;
	}

	/** @return string */
	public function getIndex1(): string
	{
		return $this->Index1;
	}

	/** @return string */
	public function getIndex2(): string
	{
		return $this->Index2;
	}

	/** @return string */
	public function getIndexCOATSU1(): string
	{
		return $this->IndexCOATSU1;
	}

	/** @return string */
	public function getDelivery1(): string
	{
		return $this->Delivery1;
	}

	/** @return string */
	public function getDelivery2(): string
	{
		return $this->Delivery2;
	}

	/** @return string */
	public function getDelivery3(): string
	{
		return $this->Delivery3;
	}

	/** @return string */
	public function getDelivery4(): string
	{
		return $this->Delivery4;
	}

	/** @return string */
	public function getDelivery5(): string
	{
		return $this->Delivery5;
	}

	/** @return string */
	public function getDelivery6(): string
	{
		return $this->Delivery6;
	}

	/** @return string */
	public function getDelivery7(): string
	{
		return $this->Delivery7;
	}

	/** @return string */
	public function getWarehouse(): string
	{
		return $this->Warehouse;
	}

	/** @return array */
	public function getConglomerates(): array
	{
		return $this->Conglomerates;
	}
}
