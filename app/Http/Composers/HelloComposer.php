<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    /**
     * ビューコンポーザークラスのcomposeメソッド、サービスプロパイダのboot()メソッドから呼び出しされる
     */
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "'. $view->getName() . '"!!');
    }
}
