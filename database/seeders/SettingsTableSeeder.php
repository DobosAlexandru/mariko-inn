<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    protected $settings = [
        [
            'key'=>'site_name',
            'value'=>'Mariko Inn'
        ],
        [
            'key'=>'seo_site_name',
            'value'=>'Mariko Inn'
        ],
        [
            'key' => 'site_description',
            'value' => 'Complex hotelier Mariko Inn 3 stele'
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = Setting::create($setting);
            if(!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->settings) . ' records');
    }
}
