<?php

namespace Tests\Feature;

use App\Models\Word;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ImportWordsCommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_import_words(): void
    {
        // Mock the HTTP response
        Http::fake([
            'https://raw.githubusercontent.com/dwyl/english-words/refs/heads/master/words_dictionary.json' => Http::response([
                'test' => 1,
            ], 200),
        ]);

        // Call the command
        Artisan::call('app:import-words');

        // Assert that the command was successful
        $this->assertEquals(1, Word::count());

        $words = Word::pluck('word')->toArray();
        $this->assertContains('test', $words);

        // Call the command again to ensure it doesn't duplicate records
        Artisan::call('app:import-words');

        $this->assertEquals(1, Word::count());
    }

    public function test_fail_import(): void
    {
        // Mock the HTTP response
        Http::fake([
            'https://raw.githubusercontent.com/dwyl/english-words/refs/heads/master/words_dictionary.json' => Http::response([
                'error' => 'Internal Server Error'
            ], 500)
        ]);

        //Call the command
        Artisan::call('app:import-words');

        //Assert that the words table remains empty
        $this->assertEquals(0, Word::count());

        //Assert that the command output contains the error message
        $this->expectsOutput('Failed to fetch words from the API.');
    }
}
