<?php defined('SYSPATH') OR die('No direct access allowed.');

class Kohana_Mango_Valid extends Kohana_Valid {

	/**
	 * Checks if a field is set.
	 *
	 * Modified version of Validate::not_empty, also accepts FALSE
	 * as a valid value
	 *
	 * @return  boolean
	 */
	public static function required($value)
	{
		return Valid::not_empty($value) || $value === FALSE;
	}

	/**
	 * Tests if a number has a minimum value.
	 *
	 * @return  boolean
	 */
	public static function min_value($number, $min)
	{
		return $number >= $min;
	}

	/**
	 * Tests if a number has a maximum value.
	 *
	 * @return  boolean
	 */
	public static function max_value($number, $max)
	{
		return $number <= $max;
	}

    /**
     * Tests if a value is a valid MongoId
     *
     * @return  boolean
     */
    public static function is_mongoid($value)
    {
        if ( empty($value)) {
            return FALSE;
        }

        if ($value instanceof MongoId) {
            return TRUE;
        }

        if ( is_string($value)) {
            try {
                new MongoId($value);
                return TRUE;
            } catch (MongoException $e) {
                // nothing
            }
        }

        return FALSE;
    }
}