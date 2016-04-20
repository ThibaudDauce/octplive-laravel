<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAffichageDesTaches()
    {
        $mathieuTache = factory(App\Tache::class)->create([
            'prenom' => 'mathieu'
        ]);
        $thibaudTache = factory(App\Tache::class)->create([
            'prenom' => 'thibaud'
        ]);

        $this->visit('/')
             ->see('Les listes de tâches')
             ->click('Thibaud')
             ->seePageIs('/thibaud')
             ->dontSee($mathieuTache->titre)
             ->see($thibaudTache->titre);
    }

    public function testAffichageDesPrenoms()
    {
        $mathieuTache = factory(App\Tache::class)->create([
            'prenom' => 'mathieu'
        ]);
        $aliceTache = factory(App\Tache::class)->create([
            'prenom' => 'alice'
        ]);

        $this->visit('/')
            ->see('Mathieu')
            ->see('Alice')
            ->dontSee('Thibaud');
    }

    public function testCreerTache()
    {
        $this->visit('/')
            ->type('thibaud', 'prenom')
            ->type('Ma première tache', 'titre')
            ->press('Ajouter la tâche')
            ->seePageIs('/thibaud')
            ->see('Ma première tache');
    }
}
