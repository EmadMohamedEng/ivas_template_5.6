<?php

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
      $this->call('UsersTableSeeder');
      $this->call('RolesTableSeeder');
      $this->call('UserHasRolesTableSeeder');
      $this->call('PermissionsTableSeeder');
      $this->call('UserHasPermissionsTableSeeder');
      $this->call('RoleHasPermissionsTableSeeder');
      $this->call('ScaffoldinterfacesTableSeeder');
      $this->call('RelationsTableSeeder');
      //$this->call('MigrationsTableSeeder');
      $this->call('PasswordResetsTableSeeder');
      $this->call('RoutesTableSeeder');
      $this->call('RoleRouteTableSeeder');
      $this->call('TypesTableSeeder');
      $this->call('SettingsTableSeeder');
      $this->call('DeleteAllFlagsTableSeeder');
      $this->call('LanguagesTableSeeder');
      $this->call('StaticBodiesTableSeeder');
      $this->call('StaticTranslationsTableSeeder');
      $this->call('TansBodiesTableSeeder');
      $this->call('TranslatablesTableSeeder');
      $this->call('CountriesTableSeeder');
      $this->call('OperatorsTableSeeder');
      $this->call('CategoriesTableSeeder');
      $this->call('ContentTypesTableSeeder');
      $this->call('ContentsTableSeeder');
      $this->call('PostsTableSeeder');
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContentTypesTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DeleteAllFlagsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OperatorsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RelationsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(RoleRouteTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(ScaffoldinterfacesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(StaticBodiesTableSeeder::class);
        $this->call(StaticTranslationsTableSeeder::class);
        $this->call(TansBodiesTableSeeder::class);
        $this->call(TranslatablesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(UserHasPermissionsTableSeeder::class);
        $this->call(UserHasRolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
