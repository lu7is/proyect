<?php

//namespace Tests\Unit;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

//use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_usuario()
    {
       $usuario = new User;
      $this->assertInstanceOf(Collection::class,$usuario);
    }
}
