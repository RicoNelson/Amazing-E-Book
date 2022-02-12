<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            ['title' => 'Sambal Shiok: The Malaysian Cookbook', 'author' => 'Mandy Yin', 'description' => 'A soulful tribute to Malaysian cuisine, from snacks, soups and salads, to rice and noodle dishes, curries and sweet things.'],
            ['title' => 'All Day Baking: Savoury, Not Sweet', 'author' => 'Pippa James', 'description' => 'For every two lovers of sweet baked treats, there is at least another who will take the gruyere gougere or the curry pastie every time, thank you. All Day Baking: Savoury, Not Sweet is a baking cookbook – at last – for them. Its mission is to deliver comforting, inventive and wholegrain-forward ideas for pies, sausage rolls, pasties and myriad other mostly pastry-based recipes, alongside gutsy accompaniments that equip the reader with the tools to transform delicious bakes into nourishing any-time-of-day meals.'],
            ['title' => 'Maangchi Big Book of Korean Cooking: From Everyday Meals to Celebration Cuisine', 'author' => 'Maangchi and Martha Rose Shulman', 'description' => 'The book contains the favorite dishes Maangchi has perfected over the years, from Korean barbecue and fried chicken to bulgogi and bibimbap. It explores topics not covered in other Korean cookbooks, from the vegan fare of Buddhist mountain temples to the inventive snacks of street vendors to the healthful, beautiful lunch boxes Korean mothers make for their kids. Maangchi has updated and improved the traditional dishes, without losing their authentic spirit.'],
            ['title' => 'It Ends With Us', 'author' => 'Colleen Hoover', 'description' => 'American classic in which a manipulative woman and a roguish man carry on a turbulent love affair in the American south during the Civil War and Reconstruction.'],
            ['title' => 'Gone With the Wind', 'author' => 'Ong Hok Ham', 'description' => 'Socioeconomic history of Chinese Indonesian in Java, Indonesia.'],
            ['title' => 'Riwayat Tionghoa Peranakan di Jawa (The History of Peranakan Chinese in Java)', 'author' => 'Pramoedya Ananta Toer', 'description' => 'Contains 4 books'],
            ['title' => 'Buru Quartet', 'author' => 'F. Scott Fitzgerals', 'description' => 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway interactions with mysterious millionaire Jay Gatsby and Gatsby obsession to reunite with his former lover, Daisy Buchanan.'],
            ['title' => 'The Great Gatsby', 'author' => 'Margaret Atwood', 'description' => 'The Handmaids Tale is a dystopian novel by Canadian author Margaret Atwood, published in 1985. It is set in a near-future New England, in a strongly patriarchal, totalitarian theonomic state, known as Republic of Gilead, that has overthrown the United States government.'],
            ['title' => 'The Handmaids Tale', 'author' => 'E.B White', 'description' => 'Charlottes Web is the story of a little girl named Fern who loved a little pig named Wilbur—and of Wilburs dear friend Charlotte A. Cavatica, a beautiful large grey spider who lived with Wilbur in the barn.'],
            ['title' => 'Charlotte Web', 'author' => 'Brian Herbert', 'description' => 'Charlottes Web is the story of a little girl named Fern who loved a little pig named Wilbur—and of Wilburs dear friend Charlotte A. Cavatica, a beautiful large grey spider who lived with Wilbur in the barn.'],
            ['title' => 'Dune', 'author' => 'Michelle Obama', 'description' => 'Michelle Obama invites listeners into her world, chronicling the experiences that have shaped her - from her childhood on the South Side of Chicago to her years as an executive balancing the demands of motherhood and work to her time spent at the world most famous address.'],
            ['title' => 'Becoming', 'author' => 'Haemin Sunim', 'description' => 'By offering guideposts to well-being and happiness in eight areas—including relationships, love, and spirituality—Haemin Sunim emphasizes the importance of forging a deeper connection with others and being compassionate and forgiving toward ourselves.'],
            ['title' => 'The Things You Can See Only When You Slow Down: How to Be Calm in a Busy World', 'author' => 'Haemin Sunim', 'description' => 'Hearing the words "be good to yourself first, then to others" was like being struck by lightning.'],
        ]);
    }
}
