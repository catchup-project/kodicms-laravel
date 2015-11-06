<?php

namespace KodiCMS\SleepingOwlAdmin\Filter;

use Input;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use KodiCMS\SleepingOwlAdmin\Interfaces\FilterInterface;

abstract class FilterBase implements FilterInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string
     */
    protected $operator = 'equal';

    /**
     * TODO: доюавить константы для операторов.
     * @var array
     */
    protected $sqlOperators = [
        'equal'            => ['method' => 'where', 'op' => '='],
        'not_equal'        => ['method' => 'where', 'op' => '!='],
        'less'             => ['method' => 'where', 'op' => '<'],
        'less_or_equal'    => ['method' => 'where', 'op' => '<='],
        'greater'          => ['method' => 'where', 'op' => '>'],
        'greater_or_equal' => ['method' => 'where', 'op' => '>='],
        'begins_with'      => ['method' => 'where', 'op' => 'like', 'mod' => '?%'],
        'not_begins_with'  => ['method' => 'where', 'op' => 'not like', 'mod' => '?%'],
        'contains'         => ['method' => 'where', 'op' => 'like', 'mod' => '%?%'],
        'not_contains'     => ['method' => 'where', 'op' => 'not like', 'mod' => '%?%'],
        'ends_with'        => ['method' => 'where', 'op' => 'like', 'mod' => '%?'],
        'not_ends_with'    => ['method' => 'where', 'op' => 'not like', 'mod' => '%?'],
        'is_empty'         => ['method' => 'where', 'op' => '=', 'value' => ''],
        'is_not_empty'     => ['method' => 'where', 'op' => '!=', 'value' => ''],
        'is_null'          => ['method' => 'whereNull'],
        'is_not_null'      => ['method' => 'whereNotNull'],
        'between'          => ['method' => 'whereBetween'],
        'not_between'      => ['method' => 'whereNotBetween'],
        'in'               => ['method' => 'whereIn'],
        'not_in'           => ['method' => 'whereNotIn'],
    ];

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->setName($name);
        $this->setAlias($name);
    }

    public function initialize()
    {
        $parameters = Input::all();
        $value = $this->getValue();
        if (is_null($value)) {
            $value = array_get($parameters, $this->getAlias());
        }
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        if (is_callable($this->title)) {
            return call_user_func($this->title, $this->getValue());
        }

        return $this->title;
    }

    /**
     * @param Closure|string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return ! is_null($this->getValue());
    }

    /**
     * @param Builder $query
     */
    public function apply(Builder $query)
    {
        $params = array_get($this->sqlOperators, $this->getOperator(), ['method' => 'where', 'op' => '=']);
        $method = $params['method'];
        switch ($method) {
            case 'where':
                $value = str_replace('?', $this->getValue(), array_get($params, 'mod', '?'));
                $query->where($this->getName(), $params['op'], $value);
                break;
            case 'whereNull':
            case 'whereNotNull':
                $query->$method($this->getName());
                break;
            case 'whereBetween':
            case 'whereNotBetween':
                $query->$method($this->getName(), (array) $this->getValue());
                break;
            case 'whereIn':
            case 'whereNotIn':
                $query->$method($this->getName(), (array) $this->getValue());
                break;
        }
    }
}
