<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SettingsSeeder::class,
            UserAndPermissionSeeder::class,
            SpcialAdSeeder::class,
            RentalTimeSeeder::class,
            ContinentOfOriginSeeder::class,
            TermsSeeder::class,
            CarStatusSeeder::class,
            CarTypeSeeder::class,
            RentOrSaleSeeder::class,
            CarsSeeder::class,
            GovernorateSeeder::class,
            CountryOfManufactureSeeder::class,
            ColorSeeder::class,
            AdStatusSeeder::class,
            RealEstateMainCategorySeeder::class,
            LandTypeSeeder::class,
            BuildingStatusSeeder::class,
            ApartmentStatusSeeder::class,
            CommercialAndArtificialTypeSeeder::class,
            AreaSeeder::class,
            NeighborhoodSeeder::class,
            JobsCategorySeeder::class,
            PersonLanguegesSeeder::class,
            MotionVectorSeeder::class,
            YearsOfExperienceSeeder::class,
            JobsSeeder::class,
            RealEstateSeeder::class,
            FavoriteSeeder::class,
            RateSeeder::class,
            AdTypeSeeder::class,
        ]);
    }
}
