
<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ 'label' => 'HTML', 'color' => 'danger' ],
            [ 'label' => 'css', 'color' => 'primary' ],
            [ 'label' => 'js', 'color' => 'info' ],
            [ 'label' => 'laravel', 'color' => 'light' ],
        ];

        foreach($categories as $category){
            $newCategory = new Category();
            $newCategory->label = $category['label'];
            $newCategory->color = $category['color'];
            $newCategory->save();
        }

    }
}
