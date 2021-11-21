<?php

namespace App\Http\Controllers\AbstractFactory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use src\creational\AbstractFactory\FormBuilder\FormUIBuilder;
use function PHPUnit\Framework\returnArgument;

class FormBuilderController extends Controller {
    private $formUIBuilder;

    /**
     * @param FormUIBuilder $formUIBuilder
     */
    public function __construct(FormUIBuilder $formUIBuilder) {
//        $this->formUIBuilder = $formUIBuilder;
        $this->formUIBuilder = resolve(FormUIBuilder::class);
    }

    public function output(Request $request) {
        $button = $this->formUIBuilder->createButton();
        $radioButton = $this->formUIBuilder->createRadioButton();
        $textButton = $this->formUIBuilder->createTextInput();
        $button->render();
        $radioButton->render();
        $textButton->render();

    }
}
