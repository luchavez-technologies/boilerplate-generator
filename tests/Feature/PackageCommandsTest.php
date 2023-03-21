<?php

use function Pest\Laravel\artisan;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;

//dataset('commands', function () {
//    return ['command A', 'command B'];
//});
//
//it('has something', function () {
//    assertTrue(true);
//})->with('commands');
//
//it('is equal to my email', function ($email) {
//    assertEquals('jamescarloluchavez@gmail.com', $email, 'Oh no...');
//})->with('emails');

//it('can create and delete a package', function ($package) {
//    artisan('bg:package:create', ['package' => $package, '--no-interaction' => true])
//        ->expectsQuestion('What will be the vendor name?', false)
//        ->expectsQuestion('What will be the package name?', false)
//        ->expectsQuestion('What package skeleton would you like to use?', false)
//        ->expectsQuestion('Who is the author?', false)
//        ->expectsQuestion("What is the author's e-mail?", false)
//        ->expectsQuestion("What is the author's website?", false)
//        ->expectsQuestion('How would you describe the package?', false)
//        ->expectsQuestion('Under which license will it be released?', false)
//        ->assertSuccessful();
//
//    artisan('bg:package:remove', ['package' => $package])->assertSuccessful();
//})->with('packages');
