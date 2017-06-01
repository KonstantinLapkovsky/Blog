<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
        	'created_at' => \Carbon\Carbon::now()->subMonth()
        	]);
        $posts = Post::archives();

        $this->assertEquals([

        	[

	        	"year" => $first->created_at->year,
	        	"month" => $first->created_at->formatLocalized('%B'),
	        	"published" => '3'

        	],

        	[

	        	'year' => $second->created_at->year,
	        	'month' => $second->created_at->formatLocalized('%B'),
	        	'published' => '1'

        	]

        	], $posts);
    }
}
