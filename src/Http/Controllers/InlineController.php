<?php

namespace Mavericks\Inline\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;

class InlineController extends Controller
{
    public function update(NovaRequest $request)
    {
        $model = $request->model()->find($request->id);
        $model->{$request->attribute} = $request->value;
        $model->save();
    }

}
