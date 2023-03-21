<?php

//
//namespace Luchavez\BoilerplateGenerator\Feature;
//
//use Tests\TestCase;
//
///**
// * Class MakeCommandTest
// *
// * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
// */
//class MakeCommandTest extends TestCase
//{
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateDummyPackage(): void
//    {
//        if (file_exists(package_path('dummy/package'))) {
//            // Delete Dummy Package First
//            exec('php artisan bg:package:remove dummy/package --no-interaction');
//        }
//
//        // Create Dummy Package
//        exec('php artisan bg:package:create dummy/package --no-interaction', $output, $code);
//
//        $this->assertSame($code, 0);
//    }
//
//    /*****
//     * ClassMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomClassWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:class',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Class created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomClassWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:class',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Class created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * DddActionMakeCommand
//     *****/
//
//    /*****
//     * DddControllerMakeCommand
//     *****/
//
//    /*****
//     * DtoMakeCommand
//     *****/
//
//    /*****
//     * DocsGenCommand
//     *****/
//
//    /*****
//     * ExtendedMakeCast
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomCastWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:cast',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Cast created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomCastWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:cast',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Cast created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeChannel
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomChannelWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:channel',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Channel created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomChannelWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:channel',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Channel created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomCommandWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:command',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Console command created successfully.')
////            ->expectsOutput('Test created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomCommandWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:command',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Console command created successfully.')
////            ->expectsOutput('Test created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeComponent
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomComponentWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:component',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Component created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomComponentWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:component',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Component created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeController
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomControllerWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:controller',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Controller created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomControllerWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:controller',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Controller created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeEvent
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomEventWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:event',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Event created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomEventWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:event',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Event created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeException
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomExceptionWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:exception',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Exception created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomExceptionWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:exception',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Exception created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeFactory
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomFactoryWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:factory',
//            [
//                'name' => 'RandomOne',
//                '--model' => 'User',
//                '--no-interaction' => true,
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Factory created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomFactoryWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:factory',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//                '--model' => 'User',
//                '--no-interaction' => true,
//            ]
//        )
//            ->expectsOutput('Factory created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeJob
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomJobWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:job',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Job created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomJobWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:job',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Job created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeListener
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomListenerWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:listener',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Listener created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomListenerWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:listener',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Listener created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeMail
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMailWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:mail',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Mail created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMailWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:mail',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Mail created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeMiddleware
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMiddlewareWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:middleware',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Middleware created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMiddlewareWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:middleware',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeMigration
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMigrationWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:migration',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomMigrationWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:migration',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeModel
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomModelWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:model',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Model created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomModelWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:model',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Model created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateSomethingModelWithAllOption(): void
//    {
//        $this->artisan(
//            'bg:make:model',
//            [
//                'name' => 'UserDataFactory',
//                '--package' => 'dummy/package',
//                '--all' => true,
//                '--no-interaction' => true,
//            ]
//        )
//            ->expectsOutput('Model created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeNotification
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomNotificationWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:notification',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Notification created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomNotificationWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:notification',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Notification created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeObserver
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomObserverWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:observer',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Observer created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomObserverWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:observer',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Observer created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakePolicy
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomPolicyWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:policy',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Policy created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomPolicyWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:policy',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Policy created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeProvider
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomProviderWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:provider',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Provider created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomProviderWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:provider',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Provider created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeRequest
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRequestWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:request',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Request created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRequestWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:request',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Request created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeResource
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomResourceWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:resource',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Resource created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomResourceWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:resource',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Resource created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeRule
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRuleWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:rule',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Rule created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRuleWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:rule',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Rule created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeSeeder
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomSeedWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:seeder',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Seeder created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomSeedWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:seeder',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Seeder created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * ExtendedMakeTest
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomTestWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:test',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Test created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomTestWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:test',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Test created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * GitlabCiMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomGitlabCiWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:gitlab:publish',
//            [
//                '--force' => true,
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Gitlab file created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomGitlabCiWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:gitlab:publish',
//            [
//                '--package' => 'dummy/package',
//                '--force' => true,
//            ]
//        )
//            ->expectsOutput('Gitlab file created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * InterfaceMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomInterfaceWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:interface',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Interface created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomInterfaceWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:interface',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Interface created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * RepositoryMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRepositoryWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:repository',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Repository created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRepositoryWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:repository',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Repository created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * RouteMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRouteWithoutSpecifiedPackage(): void
//    {
//        collect(['web', 'api'])->each(function ($route) {
//            $this->artisan(
//                'bg:make:route',
//                [
//                    'name' => $route,
//                    '--api' => $route !== 'web',
//                ]
//            )
//                ->expectsQuestion('Choose target package', 'dummy/package')
//                ->expectsOutput('Route created successfully.')
//                ->assertSuccessful();
//        });
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomRouteWithSpecifiedPackage(): void
//    {
//        collect(['web', 'api'])->each(function ($route) {
//            $this->artisan(
//                'bg:make:route',
//                [
//                    'name' => $route,
//                    '--api' => $route !== 'web',
//                    '--package' => 'dummy/package',
//                ]
//            )
//                ->expectsQuestion('Choose target package', 'dummy/package')
//                ->expectsOutput('Route created successfully.')
//                ->assertSuccessful();
//        });
//    }
//
//    /*****
//     * TraitMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomTraitWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:trait',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Trait created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomTraitWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:trait',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Trait created successfully.')
//            ->assertSuccessful();
//    }
//
//    // Service Container
//
//    /*****
//     * ContainerMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomContainerWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:service',
//            [
//                'name' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Service created successfully.')
//            ->expectsOutput('Helper created successfully.')
//            ->expectsOutput('Facade created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomContainerWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:service',
//            [
//                'name' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Service created successfully.')
//            ->expectsOutput('Helper created successfully.')
//            ->expectsOutput('Facade created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * HelperMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomHelperWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:helper',
//            [
//                'name' => 'OtherOne',
//                '--service' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Helper created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomHelperWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:helper',
//            [
//                'name' => 'OtherTwo',
//                '--service' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Helper created successfully.')
//            ->assertSuccessful();
//    }
//
//    /*****
//     * FacadeMakeCommand
//     *****/
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomFacadeWithoutSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:facade',
//            [
//                'name' => 'OtherOne',
//                '--service' => 'RandomOne',
//            ]
//        )
//            ->expectsQuestion('Choose target package', 'dummy/package')
//            ->expectsOutput('Facade created successfully.')
//            ->assertSuccessful();
//    }
//
//    /**
//     * @return void
//     *
//     * @test
//     */
//    public function canCreateRandomFacadeWithSpecifiedPackage(): void
//    {
//        $this->artisan(
//            'bg:make:facade',
//            [
//                'name' => 'OtherTwo',
//                '--service' => 'RandomTwo',
//                '--package' => 'dummy/package',
//            ]
//        )
//            ->expectsOutput('Facade created successfully.')
//            ->assertSuccessful();
//    }
//}
