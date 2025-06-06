<?php
/**
 * Copyright 2025 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
/**
 * OperatorRecipient
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LINE Messaging API
 *
 * This document describes LINE Messaging API.
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\MessagingApi\Model;
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * OperatorRecipient Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OperatorRecipient extends Recipient
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperatorRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'and' => '\LINE\Clients\MessagingApi\Model\Recipient[]',
        'or' => '\LINE\Clients\MessagingApi\Model\Recipient[]',
        'not' => '\LINE\Clients\MessagingApi\Model\Recipient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'and' => null,
        'or' => null,
        'not' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'and' => false,
        'or' => false,
        'not' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'and' => 'and',
        'or' => 'or',
        'not' => 'not'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'and' => 'setAnd',
        'or' => 'setOr',
        'not' => 'setNot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'and' => 'getAnd',
        'or' => 'getOr',
        'not' => 'getNot'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }



    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('and', $data ?? [], null);
        $this->setIfExists('or', $data ?? [], null);
        $this->setIfExists('not', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets and
     *
     * @return \LINE\Clients\MessagingApi\Model\Recipient[]|null
     */
    public function getAnd()
    {
        return $this->container['and'];
    }

    /**
     * Sets and
     *
     * @param \LINE\Clients\MessagingApi\Model\Recipient[]|null $and Create a new recipient object by taking the logical conjunction (AND) of the specified array of recipient objects.
     *
     * @return self
     */
    public function setAnd($and)
    {
        if (is_null($and)) {
            throw new \InvalidArgumentException('non-nullable and cannot be null');
        }
        $this->container['and'] = $and;

        return $this;
    }

    /**
     * Gets or
     *
     * @return \LINE\Clients\MessagingApi\Model\Recipient[]|null
     */
    public function getOr()
    {
        return $this->container['or'];
    }

    /**
     * Sets or
     *
     * @param \LINE\Clients\MessagingApi\Model\Recipient[]|null $or Create a new recipient object by taking the logical disjunction (OR) of the specified array of recipient objects.
     *
     * @return self
     */
    public function setOr($or)
    {
        if (is_null($or)) {
            throw new \InvalidArgumentException('non-nullable or cannot be null');
        }
        $this->container['or'] = $or;

        return $this;
    }

    /**
     * Gets not
     *
     * @return \LINE\Clients\MessagingApi\Model\Recipient|null
     */
    public function getNot()
    {
        return $this->container['not'];
    }

    /**
     * Sets not
     *
     * @param \LINE\Clients\MessagingApi\Model\Recipient|null $not not
     *
     * @return self
     */
    public function setNot($not)
    {
        if (is_null($not)) {
            throw new \InvalidArgumentException('non-nullable not cannot be null');
        }
        $this->container['not'] = $not;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Create an instance of OperatorRecipient from a dict (associative array)
     *
     * @internal This method is intended to be used internally only for now.
     *
     * @param array|null $data Associative array of property values
     * @return OperatorRecipient
     */
    public static function fromAssocArray(?array $data): self
    {
        if ($data === null) {
            return new static();
        }

        $instance = new static();

        if (isset($data['type'])) {
            $instance->settype($data['type']);
        }
        if (isset($data['and'])) {
            $and = [];
            foreach ($data['and'] as $item) {
                $and[] = \LINE\Clients\MessagingApi\Model\Recipient::fromAssocArray($item);
            }
            $instance->setand($and);
        }
        if (isset($data['or'])) {
            $or = [];
            foreach ($data['or'] as $item) {
                $or[] = \LINE\Clients\MessagingApi\Model\Recipient::fromAssocArray($item);
            }
            $instance->setor($or);
        }
        if (isset($data['not'])) {
            $instance->setnot(\LINE\Clients\MessagingApi\Model\Recipient::fromAssocArray($data['not']));
        }

        return $instance;
    }
}


