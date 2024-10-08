<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Image;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class BlogController extends BaseModuleController
{
    protected $moduleName = 'blogs';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
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
                ->toolbarOptions([ [ 'header' => [1, 2, false] ], 'ordered', 'bullet', 'link', 'image' ])
                ->label('Description')
        );

        $form->add(
            Wysiwyg::make()->name('short_description')
                ->toolbarOptions(['link'])
                ->label('Short description')
        );

        $form->add(
            Medias::make()
                ->name('image')
                ->label('Image')
                ->max(1)
        );

        $form->add(
            Input::make()->name('meta_description')->label('Description')
        );

        $form->add(
            Input::make()->name('meta_title')->label('Title')
        );

        return $form;
    }


    protected function getIndexTableColumns(): TableColumns
    {
        $columns = new TableColumns();

        $columns->add(
            Image::make()
                ->field('image')
                ->title('Image'),
        );
        $columns->add(
            Text::make()
                ->field('title')
                ->title('Title'),
        );

        $columns->add(
            Text::make()
                ->field('short_description')
                ->title('Short description'),
        );



        return $columns;
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
