<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //collego il db 
        $comics = config('comics');


        //ciclo l'istanza per crearne una per ogni prodotto del db
        foreach ($comics as $comic){
           //creo una nuova istanza
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            $new_comic->slug = Str::slug($new_comic->title, '-');

            // dump($new_comic);
            //vedo il sump nel terminale facendo php artisan db:seed --class=ComicTableSeeder

            $new_comic->save();

 
        }
        
        
    }
}
