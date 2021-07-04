<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/home', [
            'groups' => SkillGroup::all()
                ->sortBy('sort_order')
                ->map(function ($skillGroup) {
                    $skillGroup->skills = $skillGroup->skills()->get()->map(function ($skill) {
                        return $this->trim($skill->toArray(), [
                            'name',
                            'icon'
                        ]);
                    });

                    return $this->trim($skillGroup->toArray(), [
                        'name'
                    ]);
                })
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    private function trim(array $value, array $fields): array
    {
        foreach ($fields as $field) {
            $value[$field] = trim($value[$field]);
        }

        return $value;
    }
}
