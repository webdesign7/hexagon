<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Repeater;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class HomepageController extends BaseModuleController
{
    protected $moduleName = 'homepages';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->type('textarea')->name('about_us')->label('About Us ( Section )')
        );

        $form->add(
            Input::make()->type('textarea')->name('services')->label('Services ( Section )')
        );

        $form->add(
        InlineRepeater::make()
            ->name('why')
            ->label('Why block')
            ->fields([
                Input::make()
                    ->label('We are ...')
                    ->name('we_are'),
                Input::make()
                    ->label('Content')
                    ->name('content')
            ])
        );

        return $form;
    }
}
