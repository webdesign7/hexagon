<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class AboutController extends BaseModuleController
{
    protected $moduleName = 'abouts';
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
            Wysiwyg::make()->name('description')
                ->toolbarOptions(['link' ])
                ->label('Description')
        );

        $form->add(
            Wysiwyg::make()->name('mission')
                ->toolbarOptions(['link' ])
                ->label('Our mission')
        );


        $form->add(
            Wysiwyg::make()->name('what_we_do')
                ->toolbarOptions(['link' ])
                ->label('What we do')
        );

        $form->add(
            Wysiwyg::make()->name('unrivalled')
                ->toolbarOptions(['link' ])
                ->label('Unrivalled experience')
        );

        $form->add(
            Medias::make()
                ->name('image1')
                ->label('Image 1 ')
                ->max(1)
        );

        $form->add(
            Medias::make()
                ->name('image2')
                ->label('Image 2')
                ->max(1)
        );


        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
