export class Handler {
    toggleOptions = (toggler, optionsList) => {
        toggler.onclick = () => {
            optionsList.classList.toggle('show');
            toggler.classList.toggle('active');
        }
    }

    toggleCartPosition = (toggler, cartsList) => {
        toggler.onclick = () => {
            cartsList.classList.toggle('by-cells')
        }
    }

    togglePopup = (btnShow, btnHide = document.getElementsByClassName('btn_cancel')[0], popup = document.getElementsByClassName('popup')[0]) => {
        btnShow.onclick = () => {
            let scrollTop = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
            popup.setAttribute('style', `top: ${scrollTop - 30}px`);
            popup.classList.add('show');
            document.body.setAttribute('style', 'overflow: hidden; padding-right: 10px;');
        }
        btnHide.onclick = () => {
            let scrollTop = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
            popup.classList.remove('show');
            setTimeout(() => {
                document.body.removeAttribute('style');
                popup.setAttribute('style', `top: ${scrollTop - 30}px`);
            }, 500);
        }
        popup.onclick = (e) => {
            let isAreaOutOfForm = e.target.classList.contains('popup'),
                scrollTop = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
            if (isAreaOutOfForm) {
                popup.classList.remove('show');
                setTimeout(() => {
                    document.body.removeAttribute('style');
                    popup.setAttribute('style', `top: ${scrollTop - 30}px`);
                }, 500);
            }
        }
    }

    setPopupScrollTop = (popup = document.getElementsByClassName('popup')[0]) => {
        document.onscroll = () => {
            let scrollTop = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
            popup.setAttribute('style', `top: ${scrollTop - 30}px`);
        }
        document.onload = () => {
            let scrollTop = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
            popup.setAttribute('style', `top: ${scrollTop - 30}px`);
        }
    }

    toggleUserChoice = (usersContainer, btnOk, users = []) => {
        if (users) {
            if (typeof users === 'object') users = Object.values(users);
            if (usersContainer) {
                usersContainer.onclick = (e) => {
                    let userClicked = e.target.id.startsWith('choose_user_');
                    if (userClicked) {
                        let user = e.target,
                            chosen = user.classList.contains('chosen');
                        if (chosen)  {
                            user.classList.remove('chosen');
                        } else {
                            user.classList.add('chosen');
                            this.validateForm();
                        }
                    }
                    let hasChosenUser = users.find(user => {
                        return user.classList.contains('chosen');
                    })
                    hasChosenUser ?
                        btnOk.removeAttribute('disabled') :
                        btnOk.setAttribute('disabled', 'disabled');
                }
            }
        }
    }

    checkAllUsers = (btnCheckAll, btnResetAll, btnOk, users = []) => {
        if (users) {
            if (typeof users === 'object') users = Object.values(users);
            if (btnCheckAll) {
                btnCheckAll.onclick = () => {
                    users.map(userData => {
                        let userId = userData.getAttribute('id'),
                            userElem = document.getElementById(userId),
                            chosen = userElem.classList.contains('chosen');

                        if (!chosen) {
                            userElem.classList.add('chosen');
                        }
                    });
                    btnCheckAll.classList.add('hide');
                    btnResetAll.classList.replace('hide', 'show');
                    btnOk.removeAttribute('disabled');
                }
            }
        }
    }

    resetAllUsers = (btnResetAll, btnCheckAll, btnOk, users = []) => {
        if (users) {
            if (typeof users === 'object') users = Object.values(users);
            if (btnResetAll) {
                btnResetAll.onclick = () => {
                    users.map(userData => {
                        let userId = userData.getAttribute('id'),
                            userElem = document.getElementById(userId),
                            chosen = userElem.classList.contains('chosen');
                        if (chosen) {
                            userElem.classList.remove('chosen');
                        }
                    });
                    btnResetAll.classList.add('hide');
                    btnCheckAll.classList.replace('hide', 'show');
                    btnOk.setAttribute('disabled', 'disabled');
                }
            }
        }
    }
}