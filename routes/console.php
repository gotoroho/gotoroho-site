<?php

use App\Models\Project;
use App\Models\Skill;
use App\Models\SkillGroup;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('test', function () {
    $icons = [
        [
            'name' => 'opencart',
            'group' => 'sites',
        ],
        [
            'name' => 'wordpress',
            'group' => 'sites',
        ],

        [
            'name' => 'brave',
            'group' => 'browsers',
        ],
        [
            'name' => 'googlechrome',
            'group' => 'browsers',
        ],
        [
            'name' => 'mozillafirefox',
            'group' => 'browsers',
        ],
        [
            'name' => 'tor',
            'group' => 'browsers',
        ],
        [
            'name' => 'duckduckgo',
            'group' => 'browsers',
        ],

        [
            'name' => 'android',
            'group' => 'platforms'
        ],
        [
            'name' => 'google',
            'group' => 'platforms'
        ],
        [
            'name' => 'googleplay',
            'group' => 'platforms'
        ],

        [
            'name' => 'ubuntu',
            'group' => 'server-side'
        ],
        [
            'name' => 'linux',
            'group' => 'server-side'
        ],
        [
            'name' => 'docker',
            'group' => 'server-side'
        ],
        [
            'name' => 'mysql',
            'group' => 'server-side'
        ],
        [
            'name' => 'apache',
            'group' => 'server-side'
        ],
        [
            'name' => 'nginx',
            'group' => 'server-side'
        ],

        [
            'name' => 'bitbucket',
            'group' => 'files'
        ],
        [
            'name' => 'git',
            'group' => 'files'
        ],
        [
            'name' => 'filezilla',
            'group' => 'files'
        ],
        [
            'name' => 'powershell',
            'group' => 'files'
        ],
        [
            'name' => 'github',
            'group' => 'files'
        ],

        [
            'name' => 'notion',
            'group' => 'ecosystem'
        ],
        [
            'name' => 'codepen',
            'group' => 'ecosystem'
        ],
        [
            'name' => 'codesandbox',
            'group' => 'ecosystem'
        ],
        [
            'name' => 'atlassian',
            'group' => 'ecosystem'
        ],
        [
            'name' => 'cloudflare',
            'group' => 'ecosystem'
        ],
        [
            'name' => 'dev-dot-to',
            'group' => 'ecosystem'
        ],

        [
            'name' => 'css3',
            'group' => 'technologies'
        ],
        [
            'name' => 'html5',
            'group' => 'technologies'
        ],
        [
            'name' => 'javascript',
            'group' => 'technologies'
        ],
        [
            'name' => 'php',
            'group' => 'technologies'
        ],
        [
            'name' => 'sass',
            'group' => 'technologies'
        ],
        [
            'name' => 'jest',
            'group' => 'technologies'
        ],

        [
            'name' => 'node-dot-js',
            'group' => 'stack'
        ],
        [
            'name' => 'npm',
            'group' => 'stack'
        ],
        [
            'name' => 'webpack',
            'group' => 'stack'
        ],
        [
            'name' => 'laravel',
            'group' => 'stack'
        ],
        [
            'name' => 'redux',
            'group' => 'stack'
        ],
        [
            'name' => 'react',
            'group' => 'stack'
        ],
        [
            'name' => 'vue-dot-js',
            'group' => 'stack'
        ],
        [
            'name' => 'nuxt-dot-js',
            'group' => 'stack'
        ],

        [
            'name' => 'visualstudiocode',
            'group' => 'editors'
        ],
        [
            'name' => 'sublimetext',
            'group' => 'editors'
        ],
        [
            'name' => 'jetbrains',
            'group' => 'editors'
        ],

        [
            'name' => 'figma',
            'group' => 'visual'
        ],
        [
            'name' => 'gimp',
            'group' => 'visual'
        ],
        [
            'name' => 'inkscape',
            'group' => 'visual'
        ],
        [
            'name' => 'icomoon',
            'group' => 'visual'
        ],
        [
            'name' => 'fa',
            'group' => 'visual'
        ],
        [
            'name' => 'bootstrap',
            'group' => 'visual'
        ],

        [
            'name' => 'playstation',
            'group' => 'other'
        ],
        [
            'name' => 'gamepad',
            'group' => 'other'
        ],
        [
            'name' => 'playstation4',
            'group' => 'other'
        ],
        [
            'name' => 'xbox',
            'group' => 'other'
        ],
        [
            'name' => 'steam',
            'group' => 'other'
        ],
    ];

    foreach ($icons as $icon) {
        $group = SkillGroup::firstOrCreate([
            'name' => $icon['group'],
        ], [
            'sort_order' => SkillGroup::max('sort_order') + 1,
        ]);

        Skill::updateOrCreate([
            'name' => $icon['name']
        ], [
            'icon' => $icon['name'],
            'skill_group_id' => $group['id'],
        ]);
    }
})->purpose('Any test command');
