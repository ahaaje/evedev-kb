<?php
/**
 * GetCharactersCharacterIdChatChannels200Ok
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
 * GetCharactersCharacterIdChatChannels200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdChatChannels200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_chat_channels_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'channel_id' => 'int',
        'name' => 'string',
        'owner_id' => 'int',
        'comparison_key' => 'string',
        'has_password' => 'bool',
        'motd' => 'string',
        'allowed' => '\Swagger\Client\Model\V1characterscharacterIdchatChannelsAllowed[]',
        'operators' => '\Swagger\Client\Model\V1characterscharacterIdchatChannelsOperators[]',
        'blocked' => '\Swagger\Client\Model\V1characterscharacterIdchatChannelsBlocked[]',
        'muted' => '\Swagger\Client\Model\V1characterscharacterIdchatChannelsMuted[]'
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
        'channel_id' => 'channel_id',
        'name' => 'name',
        'owner_id' => 'owner_id',
        'comparison_key' => 'comparison_key',
        'has_password' => 'has_password',
        'motd' => 'motd',
        'allowed' => 'allowed',
        'operators' => 'operators',
        'blocked' => 'blocked',
        'muted' => 'muted'
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
        'channel_id' => 'setChannelId',
        'name' => 'setName',
        'owner_id' => 'setOwnerId',
        'comparison_key' => 'setComparisonKey',
        'has_password' => 'setHasPassword',
        'motd' => 'setMotd',
        'allowed' => 'setAllowed',
        'operators' => 'setOperators',
        'blocked' => 'setBlocked',
        'muted' => 'setMuted'
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
        'channel_id' => 'getChannelId',
        'name' => 'getName',
        'owner_id' => 'getOwnerId',
        'comparison_key' => 'getComparisonKey',
        'has_password' => 'getHasPassword',
        'motd' => 'getMotd',
        'allowed' => 'getAllowed',
        'operators' => 'getOperators',
        'blocked' => 'getBlocked',
        'muted' => 'getMuted'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['comparison_key'] = isset($data['comparison_key']) ? $data['comparison_key'] : null;
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : null;
        $this->container['motd'] = isset($data['motd']) ? $data['motd'] : null;
        $this->container['allowed'] = isset($data['allowed']) ? $data['allowed'] : null;
        $this->container['operators'] = isset($data['operators']) ? $data['operators'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['muted'] = isset($data['muted']) ? $data['muted'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['channel_id'] === null) {
            $invalid_properties[] = "'channel_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalid_properties[] = "'owner_id' can't be null";
        }
        if ($this->container['comparison_key'] === null) {
            $invalid_properties[] = "'comparison_key' can't be null";
        }
        if ($this->container['has_password'] === null) {
            $invalid_properties[] = "'has_password' can't be null";
        }
        if ($this->container['motd'] === null) {
            $invalid_properties[] = "'motd' can't be null";
        }
        if ($this->container['allowed'] === null) {
            $invalid_properties[] = "'allowed' can't be null";
        }
        if ($this->container['operators'] === null) {
            $invalid_properties[] = "'operators' can't be null";
        }
        if ($this->container['blocked'] === null) {
            $invalid_properties[] = "'blocked' can't be null";
        }
        if ($this->container['muted'] === null) {
            $invalid_properties[] = "'muted' can't be null";
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
        if ($this->container['channel_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['owner_id'] === null) {
            return false;
        }
        if ($this->container['comparison_key'] === null) {
            return false;
        }
        if ($this->container['has_password'] === null) {
            return false;
        }
        if ($this->container['motd'] === null) {
            return false;
        }
        if ($this->container['allowed'] === null) {
            return false;
        }
        if ($this->container['operators'] === null) {
            return false;
        }
        if ($this->container['blocked'] === null) {
            return false;
        }
        if ($this->container['muted'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param int $channel_id Unique channel ID. Always negative for player-created channels. Permanent (CCP created) channels have a positive ID, but don't appear in the API
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

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
     * @param string $name Displayed name of channel
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_id
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     * @param int $owner_id owner_id integer
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets comparison_key
     * @return string
     */
    public function getComparisonKey()
    {
        return $this->container['comparison_key'];
    }

    /**
     * Sets comparison_key
     * @param string $comparison_key Normalized, unique string used to compare channel names
     * @return $this
     */
    public function setComparisonKey($comparison_key)
    {
        $this->container['comparison_key'] = $comparison_key;

        return $this;
    }

    /**
     * Gets has_password
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     * @param bool $has_password If this is a password protected channel
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets motd
     * @return string
     */
    public function getMotd()
    {
        return $this->container['motd'];
    }

    /**
     * Sets motd
     * @param string $motd Message of the day for this channel
     * @return $this
     */
    public function setMotd($motd)
    {
        $this->container['motd'] = $motd;

        return $this;
    }

    /**
     * Gets allowed
     * @return \Swagger\Client\Model\V1characterscharacterIdchatChannelsAllowed[]
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     * @param \Swagger\Client\Model\V1characterscharacterIdchatChannelsAllowed[] $allowed allowed array
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets operators
     * @return \Swagger\Client\Model\V1characterscharacterIdchatChannelsOperators[]
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     * @param \Swagger\Client\Model\V1characterscharacterIdchatChannelsOperators[] $operators operators array
     * @return $this
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

        return $this;
    }

    /**
     * Gets blocked
     * @return \Swagger\Client\Model\V1characterscharacterIdchatChannelsBlocked[]
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param \Swagger\Client\Model\V1characterscharacterIdchatChannelsBlocked[] $blocked blocked array
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets muted
     * @return \Swagger\Client\Model\V1characterscharacterIdchatChannelsMuted[]
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     * @param \Swagger\Client\Model\V1characterscharacterIdchatChannelsMuted[] $muted muted array
     * @return $this
     */
    public function setMuted($muted)
    {
        $this->container['muted'] = $muted;

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

