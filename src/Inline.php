<?php

namespace Mavericks\Inline;

use Closure;
use Laravel\Nova\Fields\Field;

class Inline extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'inline';

    /**
     * The text alignment for the field's text in tables.
     *
     * @var string
     */
    public $textAlign = 'center';

    /**
     * Enable inline editing on index view.
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function inlineOnIndex($callback = true)
    {
        return $this->withMeta(['inlineIndex' => $callback]);
    }

    /**
     * Enable inline editing on detail view.
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function inlineOnDetail($callback = true)
    {
        return $this->withMeta(['inlineDetail' => $callback]);
    }

    /**
     * Show text beside the checkbox on the index page
     *
     * @param Closure|bool $callback
     * @return $this
     */
    public function showTextOnIndex($callback = true)
    {
        return $this->withMeta(['textOnIndex' => $callback]);
    }

    /**
     * Set the toast message shown when successfully updating the value
     *
     * @param string $message
     * @return $this
     */
    public function successMessage($message = 'Successfully Updated')
    {
        return $this->withMeta(['successMessage' => $message]);
    }

    /**
     * Set the toast message shown when successfully updating the value
     *
     * @param string $message
     * @return $this
     */
    public function errorMessage($message = 'Successfully Updated')
    {
        return $this->withMeta(['errorMessage' => $message]);
    }

    /**
     * Map of values to colors to be used as badge colors.
     *
     * @param $map
     * @return Inline
     */
    public function colors($map)
    {
        return $this->withMeta(['colorMap' => $map,'withBackgroundColor' => true]);
    }
}
