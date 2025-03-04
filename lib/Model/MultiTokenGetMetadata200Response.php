<?php

/**
 * MultiTokenGetMetadata_200_response Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * MultiTokenGetMetadata_200_response Model
 */
class MultiTokenGetMetadata200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "MultiTokenGetMetadata_200_response";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0]]
    ];

    /**
     * MultiTokenGetMetadata200Response
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Metadata associated with token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
    }
}
