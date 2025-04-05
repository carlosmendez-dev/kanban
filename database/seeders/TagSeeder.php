<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(["name"=>"diseño ui"]);
        Tag::create(["name"=>"diseño ux"]);
        Tag::create(["name"=>"programacion"]);
        Tag::create(["name"=>"testing"]);
        Tag::create(["name"=>"marketing"]);
        Tag::create(["name"=>"soporte"]);
    }
}
