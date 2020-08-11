<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/')
                    ->assertSee('Laravel');

            $browser->plainCookie('laravel_session', 'eyJpdiI6IlRVbEJ2L0xObmxHb3Vzd1lxLzBKMVE9PSIsInZhbHVlIjoidFpTcTJUYXJkb25YY24rbDFrNXNiQ2dUTEVaYjJTS1lTQjFqR1dUVU5MZnVvcVVETXJvSDkvWlJQZmR0YzdqMk9uc3duSCtWOC9sQVJkbG5tQVNiQ2p3Tkluc3FlVDAzYWYrREdyTzhFdHFlY1UxdXZucys0OTVXb1FoaVJWRE4iLCJtYWMiOiJjNWMxZTg0MmU2ZTc1M2FkNjhlMTYwZWVjN2IzNWMwOWY1ZWRkOGUwOWI5MzM1ODQ2MGQzMDIxNjNkOTQ4ZDZkIn0%3D');
            $browser->plainCookie('XSRF-TOKEN', 'eyJpdiI6Inlpemo3M3Jwb2cxSG93MmQ3MVExNnc9PSIsInZhbHVlIjoic3gzOU1FbDdpdmhpbkJpdmFBandZNDk4V2NnRXFMR2twd01maURrSERjbUo5ZGVaUkZWQVF5bFgrT3lZV2RyYTkrYzNVWHlma2lPT01qTmU5WGlUMUplZDFkOHB1ZkRTamFzcERsYldqc0RESUpRQ3F0Y1UrOGQreCtMeVFEQnAiLCJtYWMiOiJhNGU2NmQ3ZDcxYTljNDg1YzM2Mzk3ZjdkY2RmNzk2MWE4MDA3ZjA2MjcxYjkyYjU3OWVmMGEwMWVhMWVlMjczIn0%3D%3D');

            $visit = $browser->visit('http://localhost:8000/home');

            $visit->assertUrlIs('http://localhost:8000/home');
            $visit->assertSee('You are logged in!');
        });
    }
}
