<?php
/**
 * GetUniverseStationsStationIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetUniverseStationsStationIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseStationsStationIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_stations_station_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'station_id' => 'int',
        'name' => 'string',
        'owner' => 'int',
        'type_id' => 'int',
        'race_id' => 'int',
        'position' => '\Swagger\Client\Model\GetUniverseStationsStationIdOkPosition',
        'system_id' => 'int',
        'reprocessing_efficiency' => 'float',
        'reprocessing_stations_take' => 'float',
        'max_dockable_ship_volume' => 'float',
        'office_rental_cost' => 'float',
        'services' => 'string[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'station_id' => 'station_id',
        'name' => 'name',
        'owner' => 'owner',
        'type_id' => 'type_id',
        'race_id' => 'race_id',
        'position' => 'position',
        'system_id' => 'system_id',
        'reprocessing_efficiency' => 'reprocessing_efficiency',
        'reprocessing_stations_take' => 'reprocessing_stations_take',
        'max_dockable_ship_volume' => 'max_dockable_ship_volume',
        'office_rental_cost' => 'office_rental_cost',
        'services' => 'services'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'station_id' => 'setStationId',
        'name' => 'setName',
        'owner' => 'setOwner',
        'type_id' => 'setTypeId',
        'race_id' => 'setRaceId',
        'position' => 'setPosition',
        'system_id' => 'setSystemId',
        'reprocessing_efficiency' => 'setReprocessingEfficiency',
        'reprocessing_stations_take' => 'setReprocessingStationsTake',
        'max_dockable_ship_volume' => 'setMaxDockableShipVolume',
        'office_rental_cost' => 'setOfficeRentalCost',
        'services' => 'setServices'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'station_id' => 'getStationId',
        'name' => 'getName',
        'owner' => 'getOwner',
        'type_id' => 'getTypeId',
        'race_id' => 'getRaceId',
        'position' => 'getPosition',
        'system_id' => 'getSystemId',
        'reprocessing_efficiency' => 'getReprocessingEfficiency',
        'reprocessing_stations_take' => 'getReprocessingStationsTake',
        'max_dockable_ship_volume' => 'getMaxDockableShipVolume',
        'office_rental_cost' => 'getOfficeRentalCost',
        'services' => 'getServices'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SERVICES_BOUNTY_MISSIONS = 'bounty-missions';
    const SERVICES_ASSASINATION_MISSIONS = 'assasination-missions';
    const SERVICES_COURIER_MISSIONS = 'courier-missions';
    const SERVICES_INTERBUS = 'interbus';
    const SERVICES_REPROCESSING_PLANT = 'reprocessing-plant';
    const SERVICES_REFINERY = 'refinery';
    const SERVICES_MARKET = 'market';
    const SERVICES_BLACK_MARKET = 'black-market';
    const SERVICES_STOCK_EXCHANGE = 'stock-exchange';
    const SERVICES_CLONING = 'cloning';
    const SERVICES_SURGERY = 'surgery';
    const SERVICES_DNA_THERAPY = 'dna-therapy';
    const SERVICES_REPAIR_FACILITIES = 'repair-facilities';
    const SERVICES_FACTORY = 'factory';
    const SERVICES_LABRATORY = 'labratory';
    const SERVICES_GAMBLING = 'gambling';
    const SERVICES_FITTING = 'fitting';
    const SERVICES_PAINTSHOP = 'paintshop';
    const SERVICES_NEWS = 'news';
    const SERVICES_STORAGE = 'storage';
    const SERVICES_INSURANCE = 'insurance';
    const SERVICES_DOCKING = 'docking';
    const SERVICES_OFFICE_RENTAL = 'office-rental';
    const SERVICES_JUMP_CLONE_FACILITY = 'jump-clone-facility';
    const SERVICES_LOYALTY_POINT_STORE = 'loyalty-point-store';
    const SERVICES_NAVY_OFFICES = 'navy-offices';
    const SERVICES_SECURITY_OFFICES = 'security-offices';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getServicesAllowableValues()
    {
        return [
            self::SERVICES_BOUNTY_MISSIONS,
            self::SERVICES_ASSASINATION_MISSIONS,
            self::SERVICES_COURIER_MISSIONS,
            self::SERVICES_INTERBUS,
            self::SERVICES_REPROCESSING_PLANT,
            self::SERVICES_REFINERY,
            self::SERVICES_MARKET,
            self::SERVICES_BLACK_MARKET,
            self::SERVICES_STOCK_EXCHANGE,
            self::SERVICES_CLONING,
            self::SERVICES_SURGERY,
            self::SERVICES_DNA_THERAPY,
            self::SERVICES_REPAIR_FACILITIES,
            self::SERVICES_FACTORY,
            self::SERVICES_LABRATORY,
            self::SERVICES_GAMBLING,
            self::SERVICES_FITTING,
            self::SERVICES_PAINTSHOP,
            self::SERVICES_NEWS,
            self::SERVICES_STORAGE,
            self::SERVICES_INSURANCE,
            self::SERVICES_DOCKING,
            self::SERVICES_OFFICE_RENTAL,
            self::SERVICES_JUMP_CLONE_FACILITY,
            self::SERVICES_LOYALTY_POINT_STORE,
            self::SERVICES_NAVY_OFFICES,
            self::SERVICES_SECURITY_OFFICES,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['race_id'] = isset($data['race_id']) ? $data['race_id'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['reprocessing_efficiency'] = isset($data['reprocessing_efficiency']) ? $data['reprocessing_efficiency'] : null;
        $this->container['reprocessing_stations_take'] = isset($data['reprocessing_stations_take']) ? $data['reprocessing_stations_take'] : null;
        $this->container['max_dockable_ship_volume'] = isset($data['max_dockable_ship_volume']) ? $data['max_dockable_ship_volume'] : null;
        $this->container['office_rental_cost'] = isset($data['office_rental_cost']) ? $data['office_rental_cost'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['station_id'] === null) {
            $invalid_properties[] = "'station_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalid_properties[] = "'system_id' can't be null";
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            $invalid_properties[] = "'reprocessing_efficiency' can't be null";
        }
        if ($this->container['reprocessing_stations_take'] === null) {
            $invalid_properties[] = "'reprocessing_stations_take' can't be null";
        }
        if ($this->container['max_dockable_ship_volume'] === null) {
            $invalid_properties[] = "'max_dockable_ship_volume' can't be null";
        }
        if ($this->container['office_rental_cost'] === null) {
            $invalid_properties[] = "'office_rental_cost' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalid_properties[] = "'services' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['station_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            return false;
        }
        if ($this->container['reprocessing_stations_take'] === null) {
            return false;
        }
        if ($this->container['max_dockable_ship_volume'] === null) {
            return false;
        }
        if ($this->container['office_rental_cost'] === null) {
            return false;
        }
        if ($this->container['services'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets station_id
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     * @param int $station_id station_id integer
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name string
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     * @return int
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param int $owner ID of the corporation that controls this station
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id type_id integer
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets race_id
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     * @param int $race_id race_id integer
     * @return $this
     */
    public function setRaceId($race_id)
    {
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets position
     * @return \Swagger\Client\Model\GetUniverseStationsStationIdOkPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param \Swagger\Client\Model\GetUniverseStationsStationIdOkPosition $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets system_id
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     * @param int $system_id The solar system this station is in
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets reprocessing_efficiency
     * @return float
     */
    public function getReprocessingEfficiency()
    {
        return $this->container['reprocessing_efficiency'];
    }

    /**
     * Sets reprocessing_efficiency
     * @param float $reprocessing_efficiency reprocessing_efficiency number
     * @return $this
     */
    public function setReprocessingEfficiency($reprocessing_efficiency)
    {
        $this->container['reprocessing_efficiency'] = $reprocessing_efficiency;

        return $this;
    }

    /**
     * Gets reprocessing_stations_take
     * @return float
     */
    public function getReprocessingStationsTake()
    {
        return $this->container['reprocessing_stations_take'];
    }

    /**
     * Sets reprocessing_stations_take
     * @param float $reprocessing_stations_take reprocessing_stations_take number
     * @return $this
     */
    public function setReprocessingStationsTake($reprocessing_stations_take)
    {
        $this->container['reprocessing_stations_take'] = $reprocessing_stations_take;

        return $this;
    }

    /**
     * Gets max_dockable_ship_volume
     * @return float
     */
    public function getMaxDockableShipVolume()
    {
        return $this->container['max_dockable_ship_volume'];
    }

    /**
     * Sets max_dockable_ship_volume
     * @param float $max_dockable_ship_volume max_dockable_ship_volume number
     * @return $this
     */
    public function setMaxDockableShipVolume($max_dockable_ship_volume)
    {
        $this->container['max_dockable_ship_volume'] = $max_dockable_ship_volume;

        return $this;
    }

    /**
     * Gets office_rental_cost
     * @return float
     */
    public function getOfficeRentalCost()
    {
        return $this->container['office_rental_cost'];
    }

    /**
     * Sets office_rental_cost
     * @param float $office_rental_cost office_rental_cost number
     * @return $this
     */
    public function setOfficeRentalCost($office_rental_cost)
    {
        $this->container['office_rental_cost'] = $office_rental_cost;

        return $this;
    }

    /**
     * Gets services
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param string[] $services services array
     * @return $this
     */
    public function setServices($services)
    {
        $allowed_values = array('bounty-missions', 'assasination-missions', 'courier-missions', 'interbus', 'reprocessing-plant', 'refinery', 'market', 'black-market', 'stock-exchange', 'cloning', 'surgery', 'dna-therapy', 'repair-facilities', 'factory', 'labratory', 'gambling', 'fitting', 'paintshop', 'news', 'storage', 'insurance', 'docking', 'office-rental', 'jump-clone-facility', 'loyalty-point-store', 'navy-offices', 'security-offices');
        if (!in_array($services, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'services', must be one of 'bounty-missions', 'assasination-missions', 'courier-missions', 'interbus', 'reprocessing-plant', 'refinery', 'market', 'black-market', 'stock-exchange', 'cloning', 'surgery', 'dna-therapy', 'repair-facilities', 'factory', 'labratory', 'gambling', 'fitting', 'paintshop', 'news', 'storage', 'insurance', 'docking', 'office-rental', 'jump-clone-facility', 'loyalty-point-store', 'navy-offices', 'security-offices'");
        }
        $this->container['services'] = $services;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

