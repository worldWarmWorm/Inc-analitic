<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Inc Analitic</title>
</head>
<body class="body">
    <div class="app">
        <header class="header">
            <h1 class="header__title">🪙 Inc-analitic</h1>
            <p class="header__slogan">Save money for big deals.</p>
        </header>
        <main class="main">
            <section class="section users">
                <div class="users__header">
                    <label class="label users__title">Users list</label>
                    <div class="users__options">
                        <button type="button" data-description="Grid" class="btn btn_tumbler">
                            <input type="checkbox" name="toggle-pos">
                        </button>
                        <button type="button" data-description="Add user" class="btn btn_add-user" id="get_add_user_form">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <button type="button" data-description="Analyze budget" class="btn btn_analyze" id="get_analyze_form">
                            <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        </button>
                        <button type="button" data-description="Predict budget" class="btn btn_predict" id="get_predict_form">
                            <i class="fa fa-fast-forward" aria-hidden="true"></i>
                        </button>
                        <button type="button" data-description="Remove user" class="btn btn_remove" id="get_remove_users_form">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" data-description="Options" class="btn btn_options">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                        <div class="window window_user-list-options">
                            <button type="button" class="tap tap_add-user">
                                Add user <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="tap tap_analyze">
                                Analyze <i class="fa fa-pie-chart" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="tap tap_predict">
                                Predict <i class="fa fa-fast-forward" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="tap tap_options">
                                Remove user <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="users__list">
                    <li class="user card">
                        <div class="user__header">
                            <img src="./images/user.png" alt="user.png" class="user__avatar">
                            <h2 class="user__name">User</h2>
                            <div class="user__options">
                                <button type="button" class="btn btn_analyze" data-description="Analyze budget">
                                    <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn_predict" data-description="Predict budget">
                                    <i class="fa fa-fast-forward" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn_edit" data-description="Edit user">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn_remove" data-description="Remove user">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="user__content">
                            <div class="income column">
                                <label class="label">Income</label>
                                <ol class="list">
                                    <li class="row">
                                        <div class="position">Salary</div>
                                        <div class="rate">70000.00 &#8381;</div>
                                        <div class="row__options">
                                            <button type="button" class="btn btn_edit" data-description="Edit row"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn_remove" data-description="Remove row"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                </ol>
                                <button type="button" class="btn btn_add-row" data-description="Add row">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                                <div class="income__total">Total income: 70000.00 &#8381;</div>
                            </div>
                            <div class="expense column">
                                <label class="label">Expenses</label>
                                <ol class="list">
                                    <li class="row">
                                        <div class="position">House</div>
                                        <div class="rate">17313.17 &#8381;</div>
                                        <div class="row__options">
                                            <button type="button" class="btn btn_edit" data-description="Edit row">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn_remove" data-description="Remove row">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="position">Family budget</div>
                                        <div class="rate">12000.00 &#8381;</div>
                                        <div class="row__options">
                                            <button type="button" class="btn btn_edit" data-description="Edit row"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn_remove" data-description="Remove row"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="position">Barbershop</div>
                                        <div class="rate">1100.00 &#8381;</div>
                                        <div class="row__options">
                                            <button type="button" class="btn btn_edit" data-description="Edit row"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn_remove" data-description="Remove row"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </div>
                                    </li>
                                </ol>
                                <button type="button" class="btn btn_add-row" data-description="Add row">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                                <div class="expense__total">Total expenses: 20413.17 &#8381;</div>
                            </div>
                            <div class="result">
                                <label class="label">Remaining funds</label>
                                <div class="result__content">49586.83 &#8381;</div>
                            </div>
                        </div>
                    </li>
                    <li class="user user_empty card">
                        <div class="user__empty-content">
                            <i class="fa fa-user" aria-hidden="true"></i> No users yet...
                        </div>
                    </li>
                </ul>
            </section>
        </main>
        <footer class="footer">
            <label class="contacts">Contacts</label>
            <section class="section links">
                <a href="mailto:st.valeriq@gamil.com">st.valeriq@gamil.com</a>
                <a href="https://vk.com/valeriy_good">vk</a>
                <a href="https://www.instagram.com/freakchef666/">instagram</a>
                <a href="https://github.com/worldWarmWorm">github</a>
            </section>
        </footer>
    </div>

    <div class="popup">
<!--        <form action="" class="form form_popup form_add-user" id="form_add_user">-->
<!--            <h2 class="form__title">Add user</h2>-->
<!--            <label class="form__label">-->
<!--                Username-->
<!--                <input type="text" name="name" placeholder="Type here..." autocomplete="off" required>-->
<!--            </label>-->
<!--            <label class="form__label">-->
<!--                Avatar-->
<!--                <input type="file" name="avatar" hidden="hidden" required>-->
<!--                <div class="input input_file">-->
<!--                    <button type="button" class="btn input__btn-download">-->
<!--                        <i class="fa fa-download" aria-hidden="true"></i>-->
<!--                    </button>-->
<!--                    <span class="input__file-name">No file chosen</span>-->
<!--                </div>-->
<!--                <div class="error-message">Incorrect format file!</div>-->
<!--            </label>-->
<!--            <div class="btn_bar">-->
<!--                <button type="submit" class="btn btn_ok btn_ok-form" disabled>OK</button>-->
<!--                <button type="button" class="btn btn_cancel">Cancel</button>-->
<!--            </div>-->
<!--        </form>-->

<!--        <form action="" class="form form_popup form_analyze-budget" id="form_analyze_budget">-->
<!--            <h2 class="form__title">Analyze budget</h2>-->
<!--            <div class="form__content">-->
<!--                <div class="form__input">-->
<!--                    <label class="form__label">Choose users</label>-->
<!--                    <div class="form__users">-->
<!--                        <div class="form__user">-->
<!--                            <button type="button" id="choose_user_1" class="btn btn_user" style="background: url('./images/user.png')">-->
<!--                                <div class="emulate-checkbox">-->
<!--                                    <i class="fa fa-check" aria-hidden="true"></i>-->
<!--                                </div>-->
<!--                            </button>-->
<!--                            <label class="label label_form-user">User</label>-->
<!--                        </div>-->
<!--                        <div class="form__user">-->
<!--                            <button type="button" id="choose_user_2" class="btn btn_user" style="background: url('./images/user.png')">-->
<!--                                <div class="emulate-checkbox">-->
<!--                                    <i class="fa fa-check" aria-hidden="true"></i>-->
<!--                                </div>-->
<!--                            </button>-->
<!--                            <label class="label label_form-user">User</label>-->
<!--                        </div>-->
<!--                        <div class="form__user">-->
<!--                            <button type="button" class="btn btn_check_all" data-description="Select all">-->
<!--                                <i class="fa fa-users" aria-hidden="true"></i>-->
<!--                            </button>-->
<!--                            <button type="button" class="btn btn_reset_all hide" data-description="Reset all">-->
<!--                                <i class="fa fa-times" aria-hidden="true"></i>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form__output">-->
<!--                    <div class="form__output_empty">-->
<!--                        <div class="animation-bolls">-->
<!--                            <div class="wrapper">-->
<!--                                <span class="ball"></span>-->
<!--                                <span class="ball"></span>-->
<!--                                <span class="ball"></span>-->
<!--                                <span class="ball"></span>-->
<!--                            </div>-->
<!--                            <div class="drop-shadow"></div>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">-->
<!--                                <defs>-->
<!--                                    <filter id="ball">-->
<!--                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />-->
<!--                                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="ball" />-->
<!--                                        <feBlend in="SourceGraphic" in2="ball" />-->
<!--                                    </filter>-->
<!--                                </defs>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="btn_bar">-->
<!--                <button type="submit" class="btn btn_ok btn_ok-form" disabled>Analyze</button>-->
<!--                <button type="button" class="btn btn_cancel">Close</button>-->
<!--            </div>-->
<!--        </form>-->

        <form action="" class="form form_popup form_predict-budget" id="form_predict_budget">
            <h2 class="form__title">Predict budget</h2>
            <div class="form__content">
                <div class="form__input">
                    <label class="form__label">Choose users</label>
                    <div class="form__users">
                        <div class="form__user">
                            <button type="button" id="choose_user_1" class="btn btn_user" style="background: url('./images/user.png')">
                                <div class="emulate-checkbox">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                            </button>
                            <label class="label label_form-user">User</label>
                        </div>
                        <div class="form__user">
                            <button type="button" id="choose_user_2" class="btn btn_user" style="background: url('./images/user.png')">
                                <div class="emulate-checkbox">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                            </button>
                            <label class="label label_form-user">User</label>
                        </div>
                        <div class="form__user">
                            <button type="button" class="btn btn_check_all" data-description="Select all">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn_reset_all hide" data-description="Reset all">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form__output">
                    <div class="form__output_empty">
                        <div class="animation-bolls">
                            <div class="balls">
                                <span class="ball"></span>
                                <span class="ball"></span>
                                <span class="ball"></span>
                                <span class="ball"></span>
                            </div>
                            <div class="drop-shadow"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="ball">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="ball" />
                                        <feBlend in="SourceGraphic" in2="ball" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_bar">
                <button type="submit" class="btn btn_ok btn_ok-form" disabled>Predict</button>
                <button type="button" class="btn btn_cancel">Close</button>
            </div>
        </form>

<!--        <form action="" class="form form_popup form_remove-users" id="form_remove_users">-->
<!--            <h2 class="form__title">Remove users</h2>-->
<!--            <label class="form__label">Choose users</label>-->
<!--            <div class="form__users">-->
<!--                <div class="form__user">-->
<!--                    <button type="button" id="choose_user_1" class="btn btn_user" style="background: url('./images/user.png')">-->
<!--                        <div class="emulate-checkbox">-->
<!--                            <i class="fa fa-check" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                    </button>-->
<!--                    <label class="label label_form-user">User</label>-->
<!--                </div>-->
<!--                <div class="form__user">-->
<!--                    <button type="button" class="btn btn_check_all">-->
<!--                        <i class="fa fa-users" aria-hidden="true"></i>-->
<!--                    </button>-->
<!--                    <button type="button" class="btn btn_reset_all hide">-->
<!--                        <i class="fa fa-times" aria-hidden="true"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="btn_bar">-->
<!--                <button type="submit" class="btn btn_ok btn_ok-form" disabled>OK</button>-->
<!--                <button type="button" class="btn btn_cancel">Cancel</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->

    <script type="module" src="./js/main.js"></script>
</body>

</html>