import {Handler} from "./Handler.js";

document.addEventListener('DOMContentLoaded', () => {

    let handler = new Handler(),
        btnToggleOptions = document.getElementsByClassName('btn_options'),
        optionsList = document.getElementsByClassName('window_user-list-options'),
        btnTogglePosition = document.getElementsByClassName('btn_tumbler'),
        cartListContainer = document.getElementsByClassName('users__list'),
        btnPopupAddUser = document.getElementById('get_add_user_form'),
        btnPopupAnalyzeBudget = document.getElementById('get_analyze_form'),
        btnPopupPredictBudget = document.getElementById('get_predict_form'),
        btnPopupRemoveUsers = document.getElementById('get_remove_users_form'),
        hasForm = !!document.getElementsByClassName('popup')[0].children[0],
        addUserForm = document.getElementById('form_add_user'),
        analyzeBudgetForm = document.getElementById('form_analyze_budget'),
        predictBudgetForm = document.getElementById('form_predict_budget'),
        removeUsersForm = document.getElementById('form_remove_users'),
        users = Object.values(document.querySelectorAll('.btn_user')),
        btnChooseAllUsers = document.querySelector('.btn_check_all'),
        btnResetAllUsers = document.querySelector('.btn_reset_all'),
        btnOk = document.querySelector('.btn_ok-form'),
        usersContainer = document.querySelector('.form__users');

    if (btnToggleOptions && optionsList) {
        handler.toggleOptions(btnToggleOptions[0], optionsList[0]);
    }

    if (btnTogglePosition && cartListContainer) {
        handler.toggleCartPosition(btnTogglePosition[0], cartListContainer[0]);
    }

    if (hasForm) {
        if (btnPopupAddUser && addUserForm) {
            handler.togglePopup(btnPopupAddUser);
        }
        if (btnPopupAnalyzeBudget && analyzeBudgetForm) {
            handler.togglePopup(btnPopupAnalyzeBudget);
        }
        if (btnPopupPredictBudget && predictBudgetForm) {
            handler.togglePopup(btnPopupPredictBudget);
        }
        if (btnPopupRemoveUsers && removeUsersForm) {
            handler.togglePopup(btnPopupRemoveUsers);
        }
    }

    handler.toggleUserChoice(usersContainer, btnOk, users);
    handler.checkAllUsers(btnChooseAllUsers, btnResetAllUsers, btnOk, users);
    handler.resetAllUsers(btnResetAllUsers, btnChooseAllUsers, btnOk, users);
    handler.setPopupScrollTop();
});