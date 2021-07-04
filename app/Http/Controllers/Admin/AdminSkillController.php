<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;

class AdminSkillController extends Controller
{
    public function update($id): RedirectResponse
    {
        Skill::firstWhere(['id' => $id])->update([
            'name' => request()->post('name'),
            'icon' => request()->post('icon')
        ]);
        return redirect()->route('admin');
    }
}
