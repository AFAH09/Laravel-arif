<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $seni = config("mapel.mataPelajaran_x.x.seni");
        $webDev = config("mapel.mataPelajaran_xi.xi.webDev");

        self::assertEquals($seni, "kelasX");
        self::assertEquals($webDev, "kelasXI");
    }
}
