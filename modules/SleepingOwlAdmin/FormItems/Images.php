<?php

namespace KodiCMS\SleepingOwlAdmin\FormItems;

use Meta;
use Input;

class Images extends Image
{
    protected $view = 'images';

    public function initialize()
    {
        Meta::loadPackage(get_class());
    }

    public function save()
    {
        $name = $this->name();
        $value = Input::get($name, '');
        if (! empty($value)) {
            $value = explode(',', $value);
        } else {
            $value = [];
        }
        Input::merge([$name => $value]);
        parent::save();
    }

    /**
     * @return string
     */
    public function value()
    {
        $value = parent::value();
        if (is_null($value)) {
            $value = [];
        }
        if (is_string($value)) {
            $value = preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
        }

        return $value;
    }
}
