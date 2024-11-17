<?php

namespace NovaPoshta\Models;

/**
 * Class Area
 * @property string     SiteKey
 * @property string     Description
 * @property string     DescriptionRu
 * @property string     ShortAddress
 * @property string     ShortAddressRu
 * @property string     Phone
 * @property string     TypeOfWarehouse
 * @property string     Ref
 * @property string     Number
 * @property string     CityRef
 * @property string     CityDescription
 * @property string     CityDescriptionRu
 * @property string     SettlementRef
 * @property string     SettlementDescription
 * @property string     SettlementAreaDescription
 * @property string     SettlementRegionsDescription
 * @property string     SettlementTypeDescription
 * @property string     SettlementTypeDescriptionRu
 * @property float|NULL Longitude
 * @property float|NULL Latitude
 * @property string     PostFinance
 * @property string     BicycleParking
 * @property string     PaymentAccess
 * @property string     POSTerminal
 * @property string     InternationalShipping
 * @property string     SelfServiceWorkplacesCount
 * @property string     TotalMaxWeightAllowed
 * @property string     PlaceMaxWeightAllowed
 * @property array      SendingLimitationsOnDimensions
 * @property array      ReceivingLimitationsOnDimensions
 * @property array      Reception
 * @property array      Delivery
 * @property array      Schedule
 * @property string     DistrictCode
 * @property string     WarehouseStatus
 * @property string     WarehouseStatusDate
 * @property string     CategoryOfWarehouse
 * @property string     RegionCity
 * @property string     WarehouseForAgent
 * @property string     MaxDeclaredCost
 * @property string     DenyToSelect
 * @property string     PostMachineType
 * @property string     PostalCodeUA
 * @property string     OnlyReceivingParcel
 * @property string     WarehouseIndex
 * @package NovaPoshta\Models
 */
class Warehouse
{
	/** @return string */
	public function getSiteKey(): string
	{
		return $this->SiteKey;
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
	public function getShortAddress(): string
	{
		return $this->ShortAddress;
	}

	/** @return string */
	public function getShortAddressRu(): string
	{
		return $this->ShortAddressRu;
	}

	/** @return string */
	public function getPhone(): string
	{
		return $this->Phone;
	}

	/** @return string */
	public function getTypeOfWarehouse(): string
	{
		return $this->TypeOfWarehouse;
	}

	/** @return string */
	public function getRef(): string
	{
		return $this->Ref;
	}

	/** @return string */
	public function getNumber(): string
	{
		return $this->Number;
	}

	/** @return string */
	public function getCityRef(): string
	{
		return $this->CityRef;
	}

	/** @return string */
	public function getCityDescription(): string
	{
		return $this->CityDescription;
	}

	/** @return string */
	public function getCityDescriptionRu(): string
	{
		return $this->CityDescriptionRu;
	}

	/** @return string */
	public function getSettlementRef(): string
	{
		return $this->SettlementRef;
	}

	/** @return string */
	public function getSettlementDescription(): string
	{
		return $this->SettlementDescription;
	}

	/** @return string */
	public function getSettlementAreaDescription(): string
	{
		return $this->SettlementAreaDescription;
	}

	/** @return string */
	public function getSettlementRegionsDescription(): string
	{
		return $this->SettlementRegionsDescription;
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

	/** @return float|NULL */
	public function getLongitude(): ?float
	{
		return $this->Longitude;
	}

	/** @return float|NULL */
	public function getLatitude(): ?float
	{
		return $this->Latitude;
	}

	/** @return string */
	public function getPostFinance(): string
	{
		return $this->PostFinance;
	}

	/** @return string */
	public function getBicycleParking(): string
	{
		return $this->BicycleParking;
	}

	/** @return string */
	public function getPaymentAccess(): string
	{
		return $this->PaymentAccess;
	}

	/** @return string */
	public function getPOSTerminal(): string
	{
		return $this->POSTerminal;
	}

	/** @return string */
	public function getInternationalShipping(): string
	{
		return $this->InternationalShipping;
	}

	/** @return string */
	public function getSelfServiceWorkplacesCount(): string
	{
		return $this->SelfServiceWorkplacesCount;
	}

	/** @return string */
	public function getTotalMaxWeightAllowed(): string
	{
		return $this->TotalMaxWeightAllowed;
	}

	/** @return string */
	public function getPlaceMaxWeightAllowed(): string
	{
		return $this->PlaceMaxWeightAllowed;
	}

	/** @return array */
	public function getSendingLimitationsOnDimensions(): array
	{
		return $this->SendingLimitationsOnDimensions;
	}

	/** @return array */
	public function getReceivingLimitationsOnDimensions(): array
	{
		return $this->ReceivingLimitationsOnDimensions;
	}

	/** @return array */
	public function getReception(): array
	{
		return $this->Reception;
	}

	/** @return array */
	public function getDelivery(): array
	{
		return $this->Delivery;
	}

	/** @return array */
	public function getSchedule(): array
	{
		return $this->Schedule;
	}

	/** @return string */
	public function getDistrictCode(): string
	{
		return $this->DistrictCode;
	}

	/** @return string */
	public function getWarehouseStatus(): string
	{
		return $this->WarehouseStatus;
	}

	/** @return string */
	public function getWarehouseStatusDate(): string
	{
		return $this->WarehouseStatusDate;
	}

	/** @return string */
	public function getCategoryOfWarehouse(): string
	{
		return $this->CategoryOfWarehouse;
	}

	/** @return string */
	public function getRegionCity(): string
	{
		return $this->RegionCity;
	}

	/** @return string */
	public function getWarehouseForAgent(): string
	{
		return $this->WarehouseForAgent;
	}

	/** @return string */
	public function getMaxDeclaredCost(): string
	{
		return $this->MaxDeclaredCost;
	}

	/** @return string */
	public function getDenyToSelect(): string
	{
		return $this->DenyToSelect;
	}

	/**
	 * @return string
	 */
	public function getPostMachineType(): string
	{
		return $this->PostMachineType;
	}

	/** @return string */
	public function getPostalCodeUA(): string
	{
		return $this->PostalCodeUA;
	}

	/** @return string */
	public function getOnlyReceivingParcel(): string
	{
		return $this->OnlyReceivingParcel;
	}

	/** @return string */
	public function getWarehouseIndex(): string
	{
		return $this->WarehouseIndex;
	}

}
