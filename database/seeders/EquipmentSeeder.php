<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
{
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'レーザープロジェクター（6500ルーメン）',
                'body' => 'Panasonic PT-RZ670J',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704088366/waexdkybjhwpawk6lr7u.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => '短焦点レンズ',
                'body' => 'Panasonic ET-DLE085',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704277216/sjm2gnvofqjckausjdet.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => '超短焦点レンズ',
                'body' => 'Panasonic ET-DLE030',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704277552/wqncvtfdc7ljzb5n7a8z.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => '望遠レンズ',
                'body' => 'Panasonic ET-DLE50',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704280011/p7jungh8yla7wpx83mxq.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => '短焦点プロジェクター（4500ルーメン）',
                'body' => 'Canon WUX450ST',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296242/mnsm31k3drmn0vyffpzb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => '標準プロジェクター（3500ルーメン）',
                'body' => 'BenQ MH550',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296710/wqnasu278qryrfsrtqwf.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '短焦点プロジェクター（3000ルーメン）',
                'body' => 'HITACHI CP-A100J',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296809/gvmmpphnt3ty1lcn5kap.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => '短焦点プロジェクター（3500ルーメン）',
                'body' => 'BenQ MH856UST',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296874/t8rjxn59zcgjritwvolj.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ポイントライトインターフェイス',
                'body' => 'BenQ PW01U',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296918/anbhsogn6ct5mycnpbdo.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => '短焦点プロジェクター（3200ルーメン）',
                'body' => 'BenQ H682ST',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296988/cqnngmhhgthqx8cckr2f.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ビジネスプロジェクター（3700ルーメン）',
                'body' => 'EPSON EB-X8',
                'category_id' => 1,
                'equipment_name_id' => 1,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704296987/iriuqtlvrxqa49qnr3ag.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'デジタルリンクスイッチャー',
                'body' => 'Panasonic ET-YFB200　（デジタル映像をイーサケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444857/utde0faqqkamr8xp8kre.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'HDMIツイストペアケーブル延長機',
                'body' => 'IDK HDC-TH100-D（送信機　デジタル映像をイーサケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444857/mnlfohgbjrmmhqzzag1i.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'HDMIツイストペアケーブル延長機',
                'body' => 'IDK HDC-RH100-D（受信機　デジタル映像をイーサケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444856/jouyyax9niyuhppbvcbu.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'BlackMagicDesign',
                'body' => 'Micro Converter HDMI to SDI　wPSU　（デジタル映像を同軸ケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444223/qjrro8xesqvephx6zrpc.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'BlackMagicDesign',
                'body' => 'Micro Converter SDI to HDMI wPSU　（デジタル映像を同軸ケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444222/bvbregyrh2fszjdc7oog.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'BlackMagicDesign',
                'body' => 'Mini Converter SDI to Audio　（デジタル映像を同軸ケーブルで伝送）',
                'category_id' => 1,
                'equipment_name_id' => 2,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704444222/kxoycouwhhkyd04orbir.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'プロジェクター天吊りマウントセット（長）',
                'body' => 'プロジェクターをバトンに吊る(白)',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704522580/pe7wtgvz0mzpubzijul3.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'プロジェクター天吊りマウントセット（長）',
                'body' => 'プロジェクターをバトンに吊る(黒)',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704522580/pe7wtgvz0mzpubzijul3.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'プロジェクター天吊りマウントセット（短）',
                'body' => 'プロジェクターをバトンに吊る(黒)',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704522581/t3e8mtzjmnstwgnz2hyy.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'プロジェクター台',
                'body' => 'パックス工業 ALPS200',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704523956/ozfxnr6yuswhjp2fu5hs.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'プロジェクター台スカート（黒）',
                'body' => 'パックス工業 ALPS200',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704523956/med81wmg8d1wqeert5mi.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'AVテーブル',
                'body' => 'LUXOR LEL-DUO',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704524647/pr2vlsst7i4xrwtjdf0i.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ラクサードレス',
                'body' => 'ドレス LUXORドレス（大）防災',
                'category_id' => 1,
                'equipment_name_id' => 3,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704524647/hzetwtlbgkzxvnnb0wik.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => '一眼レフカメラ',
                'body' => 'Canon EOS Kiss X8i、DM-E1',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596934/l6skeiigme66yqwyoekv.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ミラーレスカメラ',
                'body' => 'SONY α7sⅡ',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596934/peih5pghegrbk8w5bcok.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ズームレンス',
                'body' => 'SONY FE 24-70mm F2.8 GM',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596932/tljk3filw7cjdrdtwepw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ズームレンス',
                'body' => 'SONY FE 70-300mm F.5-5.6 GM',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596934/mng8t3bctd8cilfxkqmz.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ビデオカメラ',
                'body' => 'Blackmagic Pocket Cinema Camera 6K',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596930/j5vdwge48rnt7mzbbmv8.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => '4Kビデオカメラ',
                'body' => 'PANASONIC WXF990M',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596928/z3at0v30ghulbf0bap48.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => '4Kビデオカメラ',
                'body' => 'SONY FDR-AX45',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596928/g7fo7ye6p1n9h73vfatj.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 25; $i++) {
        DB::table('equipments')->insert([
                'name' => '360度カメラ',
                'body' => 'Insta360° EVO',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596929/eorhkw7mll5xohkxywiq.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => '360度カメラ',
                'body' => 'RICHO THETA V',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596928/pamoqkezszcd5bbgnjvb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '360度カメラ',
                'body' => 'NIKON KeyMission360',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596929/x34np7poyhbtdwodiatg.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'HDウェブカメラ',
                'body' => 'ロジクールHDプロウェブカム c920r',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596931/mnigoueeqxhtvugr9xja.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ハイスピードカメラ',
                'body' => 'CASIO EX-100PRO',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596933/bbehmbnsjbgqpoa6fhsu.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'アクションカメラ',
                'body' => 'SONY FDR-X1000V',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596932/klgvtkw8iup9slsfkdp2.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DJI ハンディカム OSMO',
                'body' => '一式 セット',
                'category_id' => 1,
                'equipment_name_id' => 4,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596930/lo8jqyftxfrsvmhnhasc.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ビデオ三脚',
                'body' => 'LIBEC TH-X',
                'category_id' => 1,
                'equipment_name_id' => 5,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596456/jvug5yy3q2fma4hgxb5c.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'カメラ三脚',
                'body' => 'Verbon E545MII',
                'category_id' => 1,
                'equipment_name_id' => 5,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596456/svp17qm3npcjr2xw4tb1.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ミニ三脚',
                'body' => 'MTPIXIEVO-BK Manfrotto PIXI EVO ボール雲台',
                'category_id' => 1,
                'equipment_name_id' => 5,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596457/ntqmgzch6ig3q5wuiz8a.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VR三脚',
                'body' => 'Manfrotto 360 VR',
                'category_id' => 1,
                'equipment_name_id' => 5,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596456/kunhyvr0sqopi2ibvawf.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VR三脚',
                'body' => 'MTALUVR',
                'category_id' => 1,
                'equipment_name_id' => 5,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704596456/gvrvaqkyxmzyzjmnl9ok.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'スマホ＆タブレットホルダー',
                'body' => 'SLIK V666',
                'category_id' => 1,
                'equipment_name_id' => 6,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597413/rvol8xxykif5izqyrcrr.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'タブレットホルダー',
                'body' => 'サンワサプライ PDA-TABH9BK',
                'category_id' => 1,
                'equipment_name_id' => 6,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597413/sgyambtu2fnlrkhooo5f.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'スマートフォンホルダー',
                'body' => 'K&M 19745',
                'category_id' => 1,
                'equipment_name_id' => 6,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597413/vdnfx9fqwhmyiujb3bav.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'タブレットホルダー',
                'body' => 'K&M 19740',
                'category_id' => 1,
                'equipment_name_id' => 6,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597413/ghx4crws2uifaenewbtf.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Resolume Arena7',
                'body' => '４ライセンス（ドングル）',
                'category_id' => 1,
                'equipment_name_id' => 7,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597560/rml1oezhwu2zr48wltsg.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ArKaos MediaMaster Pro ４',
                'body' => '2ライセンス（ドングル）',
                'category_id' => 1,
                'equipment_name_id' => 7,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597559/jaobcksezim735jdjnic.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'マッピングソフト',
                'body' => 'MadMapper　１ライセンス（スタジオ１設備）',
                'category_id' => 1,
                'equipment_name_id' => 7,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597559/gpf2npv8rj3qhhcuyeyv.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => '小型放送用デッキ',
                'body' => 'BlackMagicDesign HyperDeck Studio Mini（SDカードに記録再生）',
                'category_id' => 1,
                'equipment_name_id' => 8,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597668/oleuzinlumclui6m54vr.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '4CHビデオミキサー',
                'body' => 'Roland V-1HD',
                'category_id' => 1,
                'equipment_name_id' => 8,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597668/saysxqsv7lnajwdlwkq3.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '4CHビデオミキサー',
                'body' => 'Roland V-40HD（スタジオ１設備）',
                'category_id' => 1,
                'equipment_name_id' => 8,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597669/afynot0dh36j2rcmdyvx.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ストリーミングスイッチャー ',
                'body' => 'Blackmagic ATEM Mini Extreme ISO',
                'category_id' => 1,
                'equipment_name_id' => 8,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597669/lybmz4vbjy3pxsnjacin.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'HDMI切替機',
                'body' => 'SANWA SW-HDR41H',
                'category_id' => 1,
                'equipment_name_id' => 9,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597829/dzxae218fuajqukssjcb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'HDMIスプリッター',
                'body' => 'AD-TECNO HUS-0104E',
                'category_id' => 1,
                'equipment_name_id' => 9,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597829/vira4ssxnnugv7unssqs.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => '4K HDMI(DVI)1入力2分配器',
                'body' => 'IMAGENICS CRO-UD12（HDMIからステレオ音声を分離できる）',
                'category_id' => 1,
                'equipment_name_id' => 9,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597829/f2rgkkihwptukegipygt.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => '５０インチデジタルサイネージ',
                'body' => 'SHARP PN-HW501',
                'category_id' => 1,
                'equipment_name_id' => 10,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597919/zchavw6jssa61pvaqlal.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'サイネージスタンド',
                'body' => 'SDS DSS-M55B3',
                'category_id' => 1,
                'equipment_name_id' => 10,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597919/oxnkofnhr0gwos8xhchq.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => '27インチ液晶モニター',
                'body' => 'EIZO Color Edge CS2730-BK',
                'category_id' => 1,
                'equipment_name_id' => 10,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597919/lgv7peognphllmtp5edn.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => '11インチ小型モニター',
                'body' => 'CENTURY LCD-11600FHD2（貸し出し可能は現在５台）',
                'category_id' => 1,
                'equipment_name_id' => 10,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704597909/baifdlcjv1wuustqgjfx.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'LEDフラッドライト',
                'body' => ' LPL VLP-12500XP',
                'category_id' => 1,
                'equipment_name_id' => 11,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598013/k73rkwmnwww9bhwd6ini.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'LEDリングライトプロ',
                'body' => 'LPL VLR-F5950XP',
                'category_id' => 1,
                'equipment_name_id' => 11,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598013/d038psdvggkiercejfsb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 8; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ライトスタンド',
                'body' => 'Manfrotto 1004JBAC 8台 （２本ずつバッグに収納）',
                'category_id' => 1,
                'equipment_name_id' => 11,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598012/au3yvnxxc0lnp6tmetup.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'クロマキーカーテン（グリーン）',
                'body' => 'クロマキーカーテン 3X7m',
                'category_id' => 1,
                'equipment_name_id' => 12,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598103/cmth8ptswyfh0co1sep4.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'クロマキーカーテン(リバーシブル)',
                'body' => 'クロマキーカーテン 3X7m',
                'category_id' => 1,
                'equipment_name_id' => 12,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598103/b9clzoxzvlwl3guylgas.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'サポートスタンド',
                'body' => 'MANFROTTO 1314B',
                'category_id' => 1,
                'equipment_name_id' => 12,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598103/emfy3o3felbbrans4ln2.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 8; $i++) {
        DB::table('equipments')->insert([
                'name' => '無反射植毛布',
                'body' => '光陽オリエントジャパン Su09 950mm巾3m（暗幕ポリッド＆アミッドスクリーン背景用）',
                'category_id' => 1,
                'equipment_name_id' => 13,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598203/bgr4kcw4jmqy4iawm37n.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '撮影台',
                'body' => 'SUN LIGHT STUDIO SSR-800（スタジオ設備）',
                'category_id' => 1,
                'equipment_name_id' => 14,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598220/mdp3pm1pcog8xvxsuzyz.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 15; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ハンディレコーダー',
                'body' => 'Zoom H4N Pro（ヘッドフォンを含むセット）',
                'category_id' => 2,
                'equipment_name_id' => 15,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598280/iwekneyyuesq9lkyalap.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 8; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ヘッドフォン',
                'body' => 'SONY MDR-CD900ST',
                'category_id' => 2,
                'equipment_name_id' => 15,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598280/df8wfljaxtlnqx2gsmb4.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ヘッドフォンディストリビューター',
                'body' => 'PRESONUS HP4',
                'category_id' => 2,
                'equipment_name_id' => 15,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598280/wndlpotsonvapzrefgvj.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 8; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ダイナミックマイク',
                'body' => 'SHURE SM58SE （SW付）',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/axz750e114j5amgelqrt.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ダイナミックマイク',
                'body' => 'SHURE SN58（SWなし）',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/axz750e114j5amgelqrt.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'コンデンサーマイク',
                'body' => 'Seide PC-Me',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/owankwf25mnuffvjfngj.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'コンデンサーショットガンマイク',
                'body' => 'RØDE NTG1',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/inhly0ahvowgqmhw9fcz.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 12; $i++) {
        DB::table('equipments')->insert([
                'name' => 'マイクスタンド',
                'body' => 'K&M ST210-2',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/kqlszjdrg10i6xeb8u8o.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'デジタルワイヤレスチューナー',
                'body' => 'TOA WT-D1084',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/kfdvx0oeyhfs5pvqessi.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ハンド型デジタルワイヤレスマイク',
                'body' => 'TOA WM-D120',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/eznx4rlnxzxeyvb4qaie.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ピン型デジタルワイヤレスマイク',
                'body' => 'TOA WM-D1300',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/sk9muwjlzofcjzilaisu.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'バイノーラルマイク',
                'body' => '3Dio Free Space XLR',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/hrsdxberfmoynoemklve.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Ambisonic マイク',
                'body' => 'ZOOM H3-VR',
                'category_id' => 2,
                'equipment_name_id' => 16,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598354/rozgxlixtsxaduoiv0gv.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PCスピーカー  6W',
                'body' => 'ロジクール Z150',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/vgewtjhtrfyt6bicfkrl.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'モニタースピーカー 20W',
                'body' => 'YAMAHA MSP3',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/xvu6vsvk36ftghpw3k1f.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 12; $i++) {
        DB::table('equipments')->insert([
                'name' => 'モニタースピーカー',
                'body' => ' BODE S1 PRO（内２台はスタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/nkms67k8c4tgblbnizpp.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'スピーカースタンド',
                'body' => 'K&M 1450B',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/mx5biujedxqzq1ewz05c.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => '振動スピーカー',
                'body' => 'BASS EGG',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/can1zfsxewyebiijqxhz.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => '小型モニタースピーカー',
                'body' => 'YAMAHA MSP3',
                'category_id' => 2,
                'equipment_name_id' => 17,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704598934/bx9irdyzk9tpqbia9qqr.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 25; $i++) {
        DB::table('equipments')->insert([
                'name' => 'littleBits',
                'body' => 'littleBits DELUXE KIT',
                'category_id' => 2,
                'equipment_name_id' => 18,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599132/cxg1equq9brj7ca0e7w5.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 25; $i++) {
        DB::table('equipments')->insert([
                'name' => 'littleBits',
                'body' => 'littleBits SYNTH KIT',
                'category_id' => 2,
                'equipment_name_id' => 18,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599132/vmmudbyynkxf1zsrlqat.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'littleBits',
                'body' => 'littleBits SYNTH PRO',
                'category_id' => 2,
                'equipment_name_id' => 18,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599131/k35ionhccqaacwgjmm82.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'アナログオーディオミキサー',
                'body' => 'YAMAHA MG20XU',
                'category_id' => 2,
                'equipment_name_id' => 19,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599239/cmqdk91k6af6c4dezs10.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'デジタルオーディオミキサー',
                'body' => 'YAMAHA 01V',
                'category_id' => 2,
                'equipment_name_id' => 19,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599239/yvksavlkhmsbqlg2ttwd.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'デジタルオーディオミキサー',
                'body' => 'ZOOM LiveTrak L-12（貸出し機材）',
                'category_id' => 2,
                'equipment_name_id' => 19,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599238/jqzka0gzrdj3aiwp5zjo.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PAシステム',
                'body' => 'YAMAHA STAGEPAS 600i',
                'category_id' => 2,
                'equipment_name_id' => 20,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599346/srkjsln0xdjjmshjim5w.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PAスピーカー',
                'body' => 'ROLAND SST-151',
                'category_id' => 2,
                'equipment_name_id' => 20,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599347/eksmao0fon4wlbrma0am.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'サブウーファー',
                'body' => 'ROLAND SSW-351',
                'category_id' => 2,
                'equipment_name_id' => 20,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599346/bqew7cwlcfphjzyhwlcp.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '４CHパワーアンプ',
                'body' => 'YAMAHA P4050',
                'category_id' => 2,
                'equipment_name_id' => 20,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704599346/oqh9plw9kcj09dotvc1f.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'CDj',
                'body' => 'Pioneer DJ CDJ-2000NXS2',
                'category_id' => 2,
                'equipment_name_id' => 21,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600186/cnhcmlbajvud2s6x8ent.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DJミキサー',
                'body' => 'Pioneer DJM-900NXS2',
                'category_id' => 2,
                'equipment_name_id' => 21,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600186/mjltzyvyi9bmcbayuuqc.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DJソフト',
                'body' => 'Traktor Pro2',
                'category_id' => 2,
                'equipment_name_id' => 21,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600186/h8mteopawzzskoukxr3p.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DJコントローラー',
                'body' => 'Traktor S4',
                'category_id' => 2,
                'equipment_name_id' => 21,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600186/qnbc81qdqtaq3wxezcpy.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PreSonus プリソーナス オーディオ・インターフェイス',
                'body' => '18イン18アウト AudioBox 1818VSL',
                'category_id' => 2,
                'equipment_name_id' => 22,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600333/ite2aksjgwmbx25glgpn.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'RME ireface 802',
                'body' => '30イン/30アウト 192kHzサポート ハイエンド USB FireWire オーディオ・インターフェイス',
                'category_id' => 2,
                'equipment_name_id' => 22,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600326/znhjojyxfesp0n4lyev3.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'オーディオ・インターフェイス',
                'body' => 'Steinberg  UR-242',
                'category_id' => 2,
                'equipment_name_id' => 22,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600342/csnp47xddvxzvsfek0le.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'MIDIコントローラー',
                'body' => 'KORG nanoKONTROL2',
                'category_id' => 2,
                'equipment_name_id' => 22,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600326/ldy9oy0wlbnxgptroqv3.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '電子楽器（シンセサイザー）',
                'body' => 'Music Workstation KORG KRONOS２ 73key',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/p68ypfxoa4qcdmepelrw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '電子楽器（シンセサイザー）',
                'body' => 'Music Workstation KORG KARMA',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600451/zxxofqeiuzswvewquekv.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '電子楽器（シンセサイザー）',
                'body' => 'Korg MS-20 mini',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/tjdallsx0shokifub5fy.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '電子楽器（シンセサイザー）',
                'body' => 'Korg monotron DELAY',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600449/rkxrk4gvamdewhhjwy64.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '電子楽器（シンセサイザー）',
                'body' => 'Korg monotron DUO',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/tiq7diafq1lk40alk9s1.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '打楽器系電子楽器',
                'body' => 'Korg WaveDrum Global Editon',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/yyeavlk1ebmsplmrncyo.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '打楽器系電子楽器',
                'body' => 'Korg WaveDrum mini',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/xyd5cormwrkv0bvrdvea.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '打楽器系電子楽器',
                'body' => 'ATV aFrame',
                'category_id' => 2,
                'equipment_name_id' => 23,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600450/l1ayyzql0sprgb8idhtw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'にんげんがっき',
                'body' => 'ガジェット楽器（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 24,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600704/shvbdw25eei7gyox82gk.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'オタマトーンデラックス',
                'body' => 'ガジェット楽器（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 24,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600704/abekk1npahpta8bf5zyf.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'オタマトーンワッハゴーゴーモデル',
                'body' => 'ガジェット楽器（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 24,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600704/ldemihckabsp6nvu3g6z.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'オタマトーンメロディ',
                'body' => 'ガジェット楽器（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 24,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600704/wlaw4pyg2orhry3imnlh.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Cycling’74 Max8',
                'body' => '10ライセンス（ドングル ）',
                'category_id' => 2,
                'equipment_name_id' => 25,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600813/ruma9rsmqjkqpispwa7a.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Cubase Pro 8.5',
                'body' => 'DAWソフト（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 26,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600894/ks6wkthrkrpc9nh4bqtn.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Ableton Live Suite',
                'body' => 'DAWソフト（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 26,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600894/hhoxm6k1vfzguadniui6.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Push',
                'body' => 'Ableton Live Suiteに接続（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 26,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600894/mb7filcjbduznpqpchjn.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'WAVES Platinum',
                'body' => 'DAWプラグイン（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 26,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600894/py6ml0tuebpjtvrmsdtr.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ANTARES Auto-Tune 8',
                'body' => 'DAWプラグイン（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 26,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704600894/vuo1qedpxknsalgytysx.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VSL SYMPHONIC CUBE & HDD',
                'body' => 'ソフトウェア音源（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 27,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601051/ougdnnglbkxcsvihunix.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'NI KOMPLETE 10 ultimate',
                'body' => 'ソフトウェア音源（スタジオ１設備）',
                'category_id' => 2,
                'equipment_name_id' => 27,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601050/ubv3vodbapond4uv70iu.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 6; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Kinect Azure',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/hdysst6lkk3rko8cymjw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'RealSense Depth Camera D415',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/uecinlyhvibhti7upm9n.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'RealSense Tracking Camera T265',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/dueipxeasshutaqrqpqm.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Kinect V2+USB IF',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601116/dr9omr8dwbm1gfwnodpy.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'RealSense Depth Camera D435i',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601116/xokfyv50uygyifdej4vn.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Leap Motion',
                'body' => '深度センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/u4k7l6wfh8zhirbi3yun.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => '北陽電子 URG-04LX-UG0 (USB)',
                'body' => '測域センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/wmmzwc11uikvqqcehhlw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => '北陽電子 UST-10LX（イーサネット）',
                'body' => '測域センサー',
                'category_id' => 3,
                'equipment_name_id' => 28,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601117/pj7xhi4hk1277lxm9w2x.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'グラフィックアクセラレーター',
                'body' => 'BlackMagicDesign Blackmagic eGPU Pro',
                'category_id' => 3,
                'equipment_name_id' => 29,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601384/ts1unnwfvz0lzke2k4oe.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 3; $i++) {
        DB::table('equipments')->insert([
                'name' => 'サンダーボルト ドッキングステーション',
                'body' => 'Belkin Thunderbolt 3 Express Dock HD',
                'category_id' => 3,
                'equipment_name_id' => 29,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601384/mjgzm48fuip0s3r5hlca.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VR',
                'body' => 'Oculus Rift CV1',
                'category_id' => 3,
                'equipment_name_id' => 30,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601448/pf409q3ewkzgzqo6qklm.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VR HMD',
                'body' => 'Oculus GO２',
                'category_id' => 3,
                'equipment_name_id' => 30,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601448/i3qzzlbr3eicekasbquk.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'VR HMD',
                'body' => 'Oculus Quest',
                'category_id' => 3,
                'equipment_name_id' => 30,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601448/hlhljoq2r4qwajzw1hne.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ズーム機能搭載LEDウォッシュライト',
                'body' => 'Silver Star CYAN 2000 XE MK2',
                'category_id' => 3,
                'equipment_name_id' => 31,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601656/lc81r89gg83ibfd4tevh.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ムービングウォッシュライト',
                'body' => 'Silver Star GEMINI 100XE',
                'category_id' => 3,
                'equipment_name_id' => 31,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601656/pg3wywzh7gnn7ge5amzo.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Quad LEDムービングスポット',
                'body' => 'Silver Star GEMINI 100XS',
                'category_id' => 3,
                'equipment_name_id' => 31,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601656/ckhcwkdht5qbnnuoeks8.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 5; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ムービングウォッシュライト',
                'body' => 'ELIMINATOR Stealth Wash Zoom',
                'category_id' => 3,
                'equipment_name_id' => 31,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601656/k70tyk08abvwpy2jg2dp.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'ムービングスポットライト',
                'body' => 'ELIMINATOR Stealth Spot',
                'category_id' => 3,
                'equipment_name_id' => 31,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601656/ly5lh4bf3c0apfssq1za.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PC-DMXコントローラー',
                'body' => 'ENTTEC DMX USB PRO MK2',
                'category_id' => 3,
                'equipment_name_id' => 32,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601842/ynqni0al2wnrhbohwhcm.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'PC-DMXコントローラー',
                'body' => 'ENTTEC DMX-USB PRO',
                'category_id' => 3,
                'equipment_name_id' => 32,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601842/rg1g3vhgkqjgi8ev72gg.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DMXコンントローラー',
                'body' => 'SUITE2-FC',
                'category_id' => 3,
                'equipment_name_id' => 32,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601843/luchxoggzzg2hvlhzowv.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '多機能テストツール',
                'body' => 'City Theatrical DMXcat',
                'category_id' => 3,
                'equipment_name_id' => 32,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601843/wcytt1l2znend4kibpdb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '48ch ライティングコンソール',
                'body' => 'CODE A-48',
                'category_id' => 3,
                'equipment_name_id' => 33,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601946/jno0usmeh1ydyaoxtb6e.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '48ch DMXコンソール',
                'body' => 'Net.DO TG48',
                'category_id' => 3,
                'equipment_name_id' => 33,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601947/yqikhk2qtrrh0jfwmifo.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => '12ch DMXコントローラー',
                'body' => 'ELATION SDC12',
                'category_id' => 3,
                'equipment_name_id' => 33,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704601946/tc51massfeexaiq60bbd.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'LEDテープ',
                'body' => 'シリアルLEDテープ',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602052/uqsy7f2lfecwplxrtdnl.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'アルミコーナーフレーム角形',
                'body' => 'LEDテープ格納 16mm×16mm×1m',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602052/f5vg3gn0cag6fe5nszyj.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'アルミフレーム角形',
                'body' => 'LEDテープ格納 21mm×20mm×1m',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602052/fbrr0vujvtsnb9v3ul2p.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'Arduino UNO R3',
                'body' => '制御',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602051/k6mi6mytsie6w72y0s6f.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'RGBコントローラー',
                'body' => 'NeoPixel RGBコントローラー',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602051/f3hpcffotpym5801yvrb.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '３Pコネクター',
                'body' => 'WS2811用３Pコネクタ配線',
                'category_id' => 3,
                'equipment_name_id' => 34,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602051/dchyox9jikh0wrmedaqw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'LEDテープ',
                'body' => '5050 RGB LEDテープ',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602194/jf0yjjvjrhsjdie3ssgo.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DMXデコーダー',
                'body' => 'DMX制御',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602390/yzlz0ourn56wpyed9yus.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'AC/DCコンバーター12V30A',
                'body' => 'MEAN WELLスイッチング電源',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602390/fqr1s8dw67ondgrhegfa.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '３Pコネクター',
                'body' => 'RGB用　4pin コネクタ配線',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602194/fhttpsqhseky5co1rdxl.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 12; $i++) {
        DB::table('equipments')->insert([
                'name' => 'フルカラーLEDバー ',
                'body' => 'DMX制御フルカラーLEDバー ',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602194/xcabrmmh69yuvc3tdoz6.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => 'インターフェイス',
                'body' => '専用DMX インターフェイス',
                'category_id' => 3,
                'equipment_name_id' => 35,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602194/cwf39e1hqcjnznid8qzl.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 10; $i++) {
        DB::table('equipments')->insert([
                'name' => 'LEDスポットライト',
                'body' => 'SAILOT WS51160（ギャラリーB&Cに５台ずつ）',
                'category_id' => 3,
                'equipment_name_id' => 36,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602451/swkvfdvgcrs7ccnck6oq.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 1; $i++) {
        DB::table('equipments')->insert([
                'name' => '位置決めオプション',
                'body' => 'SAILOT MS-V-OP003',
                'category_id' => 3,
                'equipment_name_id' => 36,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602451/nshkhouzotrrjxr4yp0h.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => '位置決めオプション',
                'body' => 'SAILOT MS-V-OP009',
                'category_id' => 3,
                'equipment_name_id' => 36,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602452/ptleb9icfp7oi8hdw4zw.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => '加湿器',
                'body' => 'HQ-JS868',
                'category_id' => 3,
                'equipment_name_id' => 37,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602541/jt6uospn97wfyvbkdvuh.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 4; $i++) {
        DB::table('equipments')->insert([
                'name' => 'DMXサーキュレーター',
                'body' => 'ANTARI AF-3',
                'category_id' => 3,
                'equipment_name_id' => 37,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602542/tqqfu07at9qwbhomul6l.png',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 7; $i++) {
        DB::table('equipments')->insert([
                'name' => '電動バトン',
                'body' => '７本（ギャラリーBとC）',
                'category_id' => 3,
                'equipment_name_id' => 38,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602592/m9ay6z9lap838xei5k4f.jpg',
                'number' => '{$i}',
                
         ]);
    }
    
    for ($i = 1; $i <= 2; $i++) {
        DB::table('equipments')->insert([
                'name' => 'マトリックススイッチャー',
                'body' => 'IDK FDX2-16他一式',
                'category_id' => 3,
                'equipment_name_id' => 38,
                'image' => 'https://res.cloudinary.com/dsxwfqank/image/upload/v1704602592/kedfy1nl4ay5wxxssd82.jpg',
                'number' => '{$i}',
                
         ]);
    }
}
}

