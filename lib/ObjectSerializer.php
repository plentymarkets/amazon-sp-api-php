<?php
/**
 * ObjectSerializer.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Solicitations.
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * OpenAPI spec version: v1
 */

namespace Plenty\AmazonSellingPartnerAPI;

/**
 * ObjectSerializer Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ObjectSerializer
{
    /**
     * Serialize data.
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the SwaggerType of the data
     * @param string $format the format of the Swagger type of the data
     *
     * @return string|object serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ('date' === $format) ? $data->format('Y-m-d') : $data->format(\DateTime::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }

            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if (null !== $value
                    && !in_array($swaggerType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($swaggerType, 'getAllowableEnumValues')
                    && !in_array($value, $swaggerType::getAllowableEnumValues())) {
                    $imploded = implode("', '", $swaggerType::getAllowableEnumValues());
                    throw new \InvalidArgumentException("Invalid value for enum '$swaggerType', must be one of: '$imploded'");
                }
                if (null !== $value) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $swaggerType, $formats[$property]);
                }
            }

            return (object) $values;
        } else {
            return (string) $data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif.
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) { // datetime in ISO8601 format
            return $value->format(\DateTime::ATOM);
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     *                                           ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($collectionFormat) {
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'ssv':
                return implode(' ', $collection);

            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object.
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null an single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif ('map[' === substr($class, 0, 4)) { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (false !== strrpos($inner, ',')) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }

            return $deserialized;
        } elseif (0 === strcasecmp(substr($class, -2), '[]')) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }

            return $values;
        } elseif (method_exists($class, 'getSubClass')) {
            $subClass = (new $class())->getSubClass();
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }

            return $values;
        } elseif ('object' === $class) {
            settype($data, 'array');

            return $data;
        } elseif ('\DateTime' === $class) {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return new \DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);

            return $data;
        } elseif ('\SplFileObject' === $class) {
            /* @var \Psr\Http\Message\StreamInterface $data */

            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath().DIRECTORY_SEPARATOR.self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues())) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }

            return $data;
        } else {
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '{{invokerPackage}}\Model\\'.$data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::swaggerTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }

            return $instance;
        }
    }
}
