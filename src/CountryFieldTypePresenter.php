<?php namespace Anomaly\CountryFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class CountryFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CountryFieldType
 */
class CountryFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE support.
     *
     * @var CountryFieldType
     */
    protected $object;

    /**
     * Get the country name.
     *
     * @return null|string
     */
    public function name()
    {
        if (!$key = $this->object->getValue()) {
            return null;
        }

        return trans(array_get($this->object->getOptions(), $key));
    }

    /**
     * Return the translated country name.
     *
     * @param  null $locale
     * @return null|string
     */
    public function translated($locale = null)
    {
        if (!$key = $this->object->getValue()) {
            return null;
        }

        return trans('anomaly.field_type.country::country.' . $key, [], $locale);
    }
}
