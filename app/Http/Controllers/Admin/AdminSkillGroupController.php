<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillGroup;
use Illuminate\Http\RedirectResponse;

class AdminSkillGroupController extends Controller
{
    public function create(): RedirectResponse
    {
        SkillGroup::create([
            'name' => request()->post('name'),
            'sort_order' => request()->post('sort_order'),
        ]);
        return redirect()->route('admin');
    }

    public function update($id): RedirectResponse
    {
        SkillGroup::firstWhere(['id' => $id])->update([
            'name' => request()->post('name'),
            'sort_order' => request()->post('sort_order')
        ]);
        return redirect()->route('admin');
    }
}
