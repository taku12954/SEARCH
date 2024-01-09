<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_names')->insert([
                'title' => 'プロジェクター',
        ]);
         
        DB::table('equipment_names')->insert([
                'title' => '送受信機',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'プロジェクター補助具',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'カメラ',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '三脚',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'スマホ＆タブレットホルダー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'マッピング＆VJソフト',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '映像再生記録機器、ビデオミキサー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'HDMI機器',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'デジタルサイネージ、液晶モニター',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '照明機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'クロマキー機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '無反射布',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '撮影関連機材',
        ]);
        
        
        DB::table('equipment_names')->insert([
                'title' => '音響機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'マイク',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'スピーカー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'littleBits',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'オーディオミキサー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'PA機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'DJ機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'オーディオ機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => '電子楽器',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'ガジェット楽器',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'サウンドプログラミング',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'DAWソフト、プラグイン',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'ソフトウェア音源',
        ]);
        
        
        DB::table('equipment_names')->insert([
                'title' => 'センサー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'eGPU',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'VR機器',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'LEDムービングライト',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'DMXインターフェイス、コントローラー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'DMXミキサー',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'シリアルLED関連',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'LED、DMX制御関連',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'LEDスポットライト',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'ミスト用機材',
        ]);
        
        DB::table('equipment_names')->insert([
                'title' => 'ギャラリーB＆Cの映像設備',
        ]);
    }
}
