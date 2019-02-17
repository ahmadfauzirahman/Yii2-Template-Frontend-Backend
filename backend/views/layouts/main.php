<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="az-body az-body-sidebar az-light">
<?php $this->beginBody() ?>
<div class="az-sidebar">
    <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">Yii<span> Sp</span>ace</a>
    </div><!-- az-sidebar-header -->
    <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
        <div class="media-body">
            <h6 class="text-capitalize"><?= Yii::$app->user->identity->username ?></h6>
            <span><?= Yii::$app->user->identity->status_hak ?></span>
        </div><!-- media-body -->
    </div><!-- az-sidebar-loggedin -->
    <div class="az-sidebar-body">
        <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item active">
                <a href="?r=site" class="nav-link"><i class="la la-home"></i> Home</a>
            </li>
            <li class="nav-item active">
                <a href="?r=site" class="nav-link"><i class="la la-home"></i> Home</a>
            </li>
        </ul><!-- nav -->
    </div><!-- az-sidebar-body -->
</div><!-- az-sidebar -->
<div class="az-content az-content-dashboard-five">
    <div class="az-header">
        <div class="container-fluid">
            <div class="az-header-left">
                <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
                <input type="search" class="form-control" placeholder="Search for anything...">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
                <div class="az-header-message">
                    <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
                </div><!-- az-header-message -->
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header mg-b-20 d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <h6 class="az-notification-title">Notifications</h6>
                        <p class="az-notification-text">You have 2 unread notification</p>
                        <div class="az-notification-list">
                            <div class="media new">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                    <span>Mar 15 12:32pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media new">
                                <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt="">
                                </div>
                                <div class="media-body">
                                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                    <span>Mar 13 04:16am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                    <span>Mar 13 02:56am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                    <span>Mar 12 10:40pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- az-notification-list -->
                        <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                    </div><!-- dropdown-menu -->
                </div><!-- az-header-notification -->
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="https://via.placeholder.com/500x500" alt="">
                            </div><!-- az-img-user -->
                            <h6 class="text-capitalize"><?= Yii::$app->user->identity->username ?></h6>
                            <span><?= Yii::$app->user->identity->status_hak ?></span>
                        </div><!-- az-header-profile -->

                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                        <a href="?r=site/logout" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign
                            Out</a>
                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
            <p class="mg-b-0">Your customer service/help desk monitoring dashboard template.</p>
        </div>
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <?= $content ?>
    </div><!-- az-content-body -->
    <div class="az-footer">
        <div class="container-fluid">
            <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
            <span>Designed by: ThemePixels</span>
        </div><!-- container -->
    </div><!-- az-footer -->
</div><!-- az-content -->

<?php $this->endBody() ?>
<script>
    $(function () {
        'use strict'

        $('.az-sidebar .with-sub').on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('show');
            $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function (e) {
            e.stopPropagation();

            // closing of sidebar menu when clicking outside of it
            if (!$(e.target).closest('.az-header-menu-icon').length) {
                var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                if (!sidebarTarg) {
                    $('body').removeClass('az-sidebar-show');
                }
            }
        });


        $('#azSidebarToggle').on('click', function (e) {
            e.preventDefault();

            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.az-sidebar').toggle();
            } else {
                $('body').toggleClass('az-sidebar-show');
            }
        })

        /* ----------------------------------- */
        /* Dashboard content */

    });
</script>
</body>
</html>
<?php $this->endPage() ?>
