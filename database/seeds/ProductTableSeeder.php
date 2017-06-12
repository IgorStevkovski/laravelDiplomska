<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            "name" => "Casio A159WGEA-1EF_1",
            "price"=> 60,
            "description"=> "Material: steel, Golden",
            "imageUrl"=> "images/Casio_A159WGEA-1EF_1.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio A158WEA-1E",
            "price"=> 42,
            "description"=> "Material: steel, Options: alarm, calendar, Size: 33.2mm",
            "imageUrl"=> "images/Casio_A158WEA-1E.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio A500WEA-7E",
            "price"=> 50,
            "description"=> "Material: steel, Options: alarm, calendar, World time",
            "imageUrl"=> "images/Casio_A500WEA-7E.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio AE-1000W-1A",
            "price"=> 38,
            "description"=> "Material: plastic, Options: digital, timer, Size: 44mm",
            "imageUrl"=> "images/Casio_AE-1000W-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio AEQ-200W-1A",
            "price"=> 68,
            "description"=> "Material: gum, Options: alarm, timer, Size: 53mm",
            "imageUrl"=> "images/Casio_AEQ-200W-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio BEM-111D-1A",
            "price"=> 85,
            "description"=> "Material: steel, Options: date, Size: 37mm",
            "imageUrl"=> "images/Casio_BEM-111D-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio BEM-116L-1A",
            "price"=> 66,
            "description"=> "Material: gum & leather, Options: date, Size: 39mm",
            "imageUrl"=> "images/Casio_BEM-116L-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio DW-6900CR-1E",
            "price"=> 98,
            "description"=> "G-Shock, Material: gum & plastic, Options: digital, Size: 50mm",
            "imageUrl"=> "images/Casio_DW-6900CR-1E.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio DW-6900SG-2E",
            "price"=> 73,
            "description"=> "G-Shock, Material: gum & plastic, Options: digital, Size: 50mm",
            "imageUrl"=> "images/Casio_DW-6900SG-2E.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio ECB-500D-1A",
            "price"=> 344,
            "description"=> "Material: steel, Options: bluetooth, timer, Size: 48.3mm",
            "imageUrl"=> "images/Casio_ECB-500D-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio EF-527D-1A",
            "price"=> 147,
            "description"=> "Material: steel, Options: chronograph, Size: 45mm",
            "imageUrl"=> "images/Casio_EF-527D-1A.jpg",
            "gender"=> 1,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio LTP-1355D-2A",
            "price"=> 46,
            "description"=> "Material: steel, Glass: mineral, Size: 21mm",
            "imageUrl"=> "images/Casio_LTP-1355D-2A.jpg",
            "gender"=> 2,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio LTP-2069L-4A",
            "price"=> 55,
            "description"=> "Material: steel & leather, Options: multifunctional, Size: 31mm",
            "imageUrl"=> "images/Casio_LTP-2069L-4A.jpg",
            "gender"=> 2,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio SHE-4512BR-9A",
            "price"=> 147,
            "description"=> "Material: steel, Glass: sapphire, Size: 35mm",
            "imageUrl"=> "images/Casio_SHE-4512BR-9A.jpg",
            "gender"=> 2,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio LTP-1283D-4A2",
            "price"=> 45,
            "description"=> "Material: steel, Glass: mineral, Waterproof, Size: 39mm",
            "imageUrl"=> "images/Casio_LTP-1283D-4A2.jpg",
            "gender"=> 2,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio LTP-1282D-7A",
            "price"=> 38,
            "description"=> "Material: steel, Options: waterproof, Size: 26mm",
            "imageUrl"=> "images/Casio_LTP-1282D-7A.jpg",
            "gender"=> 2,
            "brandName"=> "Casio"
        ]);
        $product->save();

        //Esprit

        $product = new \App\Product([
            "name" => "Esprit ES105331008",
            "price"=> 122,
            "description"=> "Material: steel, aluminium, Options: chronograph, Size: 44mm",
            "imageUrl"=> "images/Esprit_ES105331008.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES107961004",
            "price"=> 114,
            "description"=> "Material: steel & leather, Options: date,chronograph, Size: 41mm",
            "imageUrl"=> "images/Esprit_ES107961004.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108241001",
            "price"=> 180,
            "description"=> "Material: steel & leather, Options: chronograph, Size: 39mm",
            "imageUrl"=> "images/Esprit_ES108241001.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108241003",
            "price"=> 112,
            "description"=> "Material: steel, Options: chronograph, Size: 45mm",
            "imageUrl"=> "images/Esprit_ES108241003.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108241006",
            "price"=> 180,
            "description"=> "Material: steel, Glass: mineral, Options: chronograph, Size: 45mm",
            "imageUrl"=> "images/Esprit_ES108241006.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108251003",
            "price"=> 119,
            "description"=> "Material: steel & leather, Glass: mineral, Size: 45mm",
            "imageUrl"=> "images/Esprit_ES108251003.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108361003",
            "price"=> 117,
            "description"=> "Material: steel & linen, Glass: mineral, Size: 43mm",
            "imageUrl"=> "images/Esprit_ES108361003.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108801002",
            "price"=> 157,
            "description"=> "Material: steel & leather, Glass: mineral, Size: 44mm",
            "imageUrl"=> "images/Esprit_ES108801002.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES109211001",
            "price"=> 139,
            "description"=> "Material: steel & leather, Options: day of week, Size: 44mm",
            "imageUrl"=> "images/Esprit_ES109211001.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES109211003",
            "price"=> 139,
            "description"=> "Material: steel & leather, Options: day of week, Size: 44mm",
            "imageUrl"=> "images/Esprit_ES109211003.jpg",
            "gender"=> 1,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES000EO2011",
            "price"=> 102,
            "description"=> "Material: steel, Glass: mineral, Size: 23mm",
            "imageUrl"=> "images/Esprit_ES000EO2011.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES000EO2013",
            "price"=> 94,
            "description"=> "Material: steel, Glass: mineral, Size: 23mm",
            "imageUrl"=> "images/Esprit_ES000EO2013.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES103562010",
            "price"=> 36,
            "description"=> "Material: plastic, Glass: acrylic, Size: 22mm",
            "imageUrl"=> "images/Esprit_ES103562010.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES105172004",
            "price"=> 54,
            "description"=> "Material: plastic & steel, Glass: mineral, Size: 37mm",
            "imageUrl"=> "images/Esprit_ES105172004.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES106022006",
            "price"=> 98,
            "description"=> "Material: steel, Glass: mineral, Size: 33mm",
            "imageUrl"=> "images/Esprit_ES106022006.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES106162001",
            "price"=> 78,
            "description"=> "Material: steel & leather, Waterproof: 3bar, Size: 20mm",
            "imageUrl"=> "images/Esprit_ES106162001.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES106262014",
            "price"=> 163,
            "description"=> "Material: steel, Waterproof: 3bar, Multifunctional, Size: 36mm",
            "imageUrl"=> "images/Esprit_ES106262014.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES107112002",
            "price"=> 106,
            "description"=> "Material: steel, Waterproof: 3bar, Size: 20mm",
            "imageUrl"=> "images/Esprit_ES107112002.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES107212004",
            "price"=> 91,
            "description"=> "Material: steel, Waterproof: 3bar, Size: 25mm",
            "imageUrl"=> "images/Esprit_ES107212004.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES107242008",
            "price"=> 88,
            "description"=> "Material: steel, Options:date, Size: 34mm",
            "imageUrl"=> "images/Esprit_ES107242008.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES107282005",
            "price"=> 147,
            "description"=> "Material: steel, Glass:mineral, Size: 38mm",
            "imageUrl"=> "images/Esprit_ES107282005.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Esprit ES108072001",
            "price"=> 64,
            "description"=> "Material: steel, Glass:mineral, Size: 27mm",
            "imageUrl"=> "images/Esprit_ES108072001.jpg",
            "gender"=> 2,
            "brandName"=> "Esprit"
        ]);
        $product->save();

        //Fossil
        $product = new \App\Product([
            "name" => "Fossil CH2564",
            "price"=> 155,
            "description"=> "Material: steel & leather, Glass:mineral, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH2564.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2565",
            "price"=> 124,
            "description"=> "Material: steel & leather, Glass:mineral, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH2565.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2573",
            "price"=> 104,
            "description"=> "Material: steel & leather, Options: chronograph, Size: 44mm",
            "imageUrl"=> "images/Fossil_CH2573.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2586",
            "price"=> 124,
            "description"=> "Material: steel & leather, Options: chronograph, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH2586.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2600IE",
            "price"=> 106,
            "description"=> "Material: steel, Waterproof: 10bar, Options: chronograph, Size: 44mm",
            "imageUrl"=> "images/Fossil_CH2600IE.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2601",
            "price"=> 135,
            "description"=> "Material: steel, Waterproof: 10bar, Options: chronograph, Size: 44mm",
            "imageUrl"=> "images/Fossil_CH2601.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2891",
            "price"=> 155,
            "description"=> "Material: steel & leather, Waterproof: 10bar, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH2891.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH2935",
            "price"=> 128,
            "description"=> "Material: steel, Waterproof: 10bar, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH2935.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil FCH3029",
            "price"=> 152,
            "description"=> "Material: steel & leather, Waterproof: 10bar, Size: 44mm",
            "imageUrl"=> "images/Fossil_FCH3029.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH3030",
            "price"=> 175,
            "description"=> "Material: steel, Waterproof: 10bar, Size: 45mm",
            "imageUrl"=> "images/Fossil_CH3030.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil FFS4357",
            "price"=> 174,
            "description"=> "Material: steel, Waterproof: 5bar, Size: 47mm",
            "imageUrl"=> "images/Fossil_FFS4357.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil FS4487",
            "price"=> 124,
            "description"=> "Material: steel & gum, Waterproof: 5bar, Size: 45mm",
            "imageUrl"=> "images/Fossil_FS4487.jpg",
            "gender"=> 1,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        //Fossil Zenski

        $product = new \App\Product([
            "name" => "Fossil AM4141",
            "price"=> 106,
            "description"=> "Material: steel, Options: date, Waterproof: 10bar, Size: 28mm",
            "imageUrl"=> "images/Fossil_AM4141.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil AM4481",
            "price"=> 165,
            "description"=> "Material: steel, Options: multifunctional, Waterproof: 10bar, Size: 40mm",
            "imageUrl"=> "images/Fossil_AM4481.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil AM4482",
            "price"=> 185,
            "description"=> "Material: steel, Options: multifunctional, Waterproof: 10bar, Size: 40mm",
            "imageUrl"=> "images/Fossil_AM4482.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil AM4532",
            "price"=> 145,
            "description"=> "Material: steel & leather, Waterproof: 10bar, Size: 40mm",
            "imageUrl"=> "images/Fossil_AM4532.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH3014",
            "price"=> 135,
            "description"=> "Material: steel & leather, Waterproof: 3bar, Size: 34mm",
            "imageUrl"=> "images/Fossil_CH3014.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil CH3088",
            "price"=> 145,
            "description"=> "Material: steel & leather, Waterproof: 3bar, Size: 34mm",
            "imageUrl"=> "images/Fossil_CH3088.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil ES2362",
            "price"=> 106,
            "description"=> "Material: steel, Waterproof: 5bar, Size: 34mm",
            "imageUrl"=> "images/Fossil_ES2362.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil FES2681",
            "price"=> 145,
            "description"=> "Material: steel, Waterproof: 10bar, Size: 38mm",
            "imageUrl"=> "images/Fossil_FES2681.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil ES2811",
            "price"=> 162,
            "description"=> "Material: steel, Waterproof: 10bar, Size: 38mm",
            "imageUrl"=> "images/Fossil_ES2811.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Fossil ES2830",
            "price"=> 96,
            "description"=> "Material: steel & leather, Waterproof: 5bar, Size: 32mm",
            "imageUrl"=> "images/Fossil_ES2830.jpg",
            "gender"=> 2,
            "brandName"=> "Fossil"
        ]);
        $product->save();

        //Detski

        $product = new \App\Product([
            "name" => "Casio KWD5511",
            "price"=> 25,
            "description"=> "Material: steel & plastic, Waterproof: 2bar, Size: 29mm",
            "imageUrl"=> "images/Casio_KWD5511.jpg",
            "gender"=> 0,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio SBR333",
            "price"=> 43,
            "description"=> "Material: steel & linen, Waterproof: 5bar, Size: 34mm",
            "imageUrl"=> "images/Casio_SBR333.jpg",
            "gender"=> 0,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio SST333",
            "price"=> 40,
            "description"=> "Material: steel & gum, Waterproof: 5bar, Size: 34mm",
            "imageUrl"=> "images/Casio_SST333.jpg",
            "gender"=> 0,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio KPA8003",
            "price"=> 22,
            "description"=> "Material: steel & gum, Waterproof: 3bar, Size: 30mm",
            "imageUrl"=> "images/Casio_KPA8003.jpg",
            "gender"=> 0,
            "brandName"=> "Casio"
        ]);
        $product->save();

        $product = new \App\Product([
            "name" => "Casio KWD5203",
            "price"=> 27,
            "description"=> "Material: steel & plastic & silicone, Waterproof: 3bar, Size: 29mm",
            "imageUrl"=> "images/Casio_KWD5203.jpg",
            "gender"=> 0,
            "brandName"=> "Casio"
        ]);
        $product->save();
    }
}
