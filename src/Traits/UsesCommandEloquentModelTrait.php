<?php

namespace Luchavez\BoilerplateGenerator\Traits;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

/**
 * Trait UsesModel
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
trait UsesCommandEloquentModelTrait
{
    use UsesCommandVendorPackageDomainTrait;

    /**
     * @var bool
     */
    protected bool $model_exists = false;

    /**
     * @var string|null
     */
    protected ?string $model_name = null;

    /**
     * @var string|null
     */
    protected ?string $model_class = null;

    /**
     * @var string|null
     */
    protected ?string $model_snake = null;

    /**
     * @var string|null
     */
    protected ?string $model_kebab = null;

    /**
     * Add the standard command options for generating matching tests.
     *
     * @return void
     */
    protected function addModelOptions(): void
    {
        if ($this->getDefinition()->hasOption('model') === false) {
            $this->getDefinition()->addOption(
                new InputOption(
                    'model',
                    'm',
                    InputOption::VALUE_REQUIRED,
                    'Specify model to consider.'
                )
            );
        }
        $this->getDefinition()->addOption(
            new InputOption(
                'skip',
                's',
                InputOption::VALUE_NONE,
                'Skip model existence check. Use if Laravel fails to verify a legitimate Eloquent Model class.'
            )
        );
    }

    /*****
     * SETTERS & GETTERS
     *****/

    /**
     * @param  bool  $require_model
     * @return void
     */
    public function setModelFields(bool $require_model = false): void
    {
        if ($this->hasOption('model') && ($this->option('model') || $require_model)) {
            $model = $this->getModelClass('model');

            if ($this->option('model')) {
                $this->setModelClass($model);
                $this->setModelName($model);
                $this->setModelKebab($model);
                $this->setModelSnake($model);
            }
        }
    }

    /**
     * @param  string|null  $str
     */
    public function setModelClass(?string $str): void
    {
        $this->model_class = $str;

        $this->addMoreReplaceNamespace(['ModelClass' => $this->model_class]);
    }

    /**
     * @param  string|null  $str
     */
    public function setModelSnake(?string $str): void
    {
        $this->model_snake = Str::of($str)->afterLast('\\')->snake();

        $this->addMoreReplaceNamespace(['ModelSnake' => $this->model_snake]);
    }

    /**
     * @param  string|null  $str
     */
    public function setModelKebab(?string $str): void
    {
        $this->model_kebab = Str::of($str)->afterLast('\\')->kebab();

        $this->addMoreReplaceNamespace(['ModelKebab' => $this->model_kebab]);
    }

    /**
     * @param  string|null  $str
     */
    public function setModelName(?string $str): void
    {
        $this->model_name = Str::of($str)->afterLast('\\');

        $this->addMoreReplaceNamespace(['ModelName' => $this->model_name]);
    }
}
