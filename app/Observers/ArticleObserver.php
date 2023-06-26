<?php

namespace App\Observers;

use App\Models\Article;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     *
     * @param Article $article
     * @return void
     */
    public function created(Article $article)
    {
        //
    }

    public function creating($model): void
    {
        $model->author_id = 1;
    }

    /**
     * Handle the Article "updated" event.
     *
     * @param Article $article
     * @return void
     */
    public function updated(Article $article)
    {
        //
    }

    /**
     * Handle the Article "deleted" event.
     *
     * @param Article $article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     *
     * @param Article $article
     * @return void
     */
    public function restored(Article $article)
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     *
     * @param Article $article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }
}
