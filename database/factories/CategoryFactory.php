 <?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CategoryFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
       Category::truncate();
       $cat = [
         ['title' => 'My Life'],
            ['title' => 'My Family'],
            ['title' => 'Friends'],
       ];

       return $cat;
   }
}
