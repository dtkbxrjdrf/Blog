<div class="st-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="primary" class="content-area padding-content white-color">
                    <main id="main" class="site-main" role="main">

                        <section class="error-404 not-found text-center">
                            <h1 class="404">404</h1>

                            <p class="lead">Sorry, we could not found the page you are looking for!</p>

                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <form role="search" method="get" id="searchform" action="#">
                                        <div>
                                            <input type="text" placeholder="Search and hit enter..." name="s" id="s"/>
                                        </div>
                                    </form>
                                    <p class="go-back-home"><a href="index.html">
                                            Back to Home Page</a></p>
                                </div>
                            </div>

                        </section><!-- .error-404 -->

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>
=======
<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>

