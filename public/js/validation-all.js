class _validationAll {
    constructor(input, wanted = true, view = true) {
        this.input = input;
        this.wanted = wanted;
        this.view = view;
    }

    error = (message, input = this.input) => {
        if (this.view === true) {
            let divMessage = input.nextElementSibling;
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
            if (divMessage !== null) {
                if (divMessage.className == 'invalid-feedback' || divMessage.className == 'valid-feedback') {
                    divMessage.remove();
                }
            }
            if (input.value.length == 0) {
                if (this.wanted === true && input.type !== 'checkbox' && input.type !== 'radio') {
                    input.insertAdjacentHTML("afterend", `<div class="invalid-feedback">هذا الحقل مطلوب</div>`);
                    input.focus();
                } else {
                    input.classList.remove('is-invalid');
                    return null;
                }
            } else {
                if (input.type !== 'checkbox' && input.type !== 'radio') {
                    input.insertAdjacentHTML("afterend", `<div class="invalid-feedback">${message}</div>`);
                    input.focus();
                }
            }
        }

        return false;
    }

    correct = (message = '', input = this.input) => {
        if (this.view === true) {
            let divMessage = input.nextElementSibling;
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            if (divMessage !== null) {
                if (divMessage.className == 'invalid-feedback' || divMessage.className == 'valid-feedback') {
                    divMessage.remove();
                }
            }

            if (input.type !== 'checkbox' && input.type !== 'radio') {
                input.insertAdjacentHTML("afterend", `<div class="valid-feedback">${message}</div>`);
            }
        }

        return true;
    }

    checkbox = (show) => {
        if (this.input.type == 'checkbox') {
            if (!this.input.checked) {
                return this.error('');
            } else {
                return this.correct();
            }
        } else {
            console.error(Error('Input type not equal to checkbox'));
        }
    }

    radio = (show) => {
        if (this.input.type == 'radio') {
            if (!this.input.checked) {
                return this.error('');
            } else {
                return this.correct();
            }
        } else {
            console.error(Error('Input type not equal to radio'));
        }
    }

    email = () => {
        let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(String(this.input.value).toLowerCase())) {
            return this.error('البريد الالكتيروني غير صحيح');
        } else {
            return this.correct();
        }
    }

    password = (passwordLevel = 'simple', inputResetPassword = null) => {
        let resetPassword = () => {
            if (inputResetPassword != null) {
                if (this.input.value != inputResetPassword.value) {
                    return this.error('عذرا ، لكن كلمة المرور غير متطابقة', inputResetPassword);
                } else {
                    return this.correct('', inputResetPassword);
                }
            }
        }
        switch (passwordLevel) {
            case 'simple':
                let simpleMatch = /^[^]{8,}$/im;
                if (!this.input.value.match(simpleMatch)) {
                    return this.error('عذرًا ، لكن يجب أن تكون كلمة المرور 8 على الأقل');
                } else {
                    resetPassword();
                    return this.correct();
                }
                break;
            case 'complex':
                let complexMatch = /(?=.*[a-zA-Z])(?=.*[0-9]).{8,}/g;
                if (!this.input.value.match(complexMatch)) {
                    return this.error('عذرًا ، لكن يجب أن تكون كلمة المرور 8 على الأقل وتحتوي على أحرف وأرقام');
                } else {
                    resetPassword();
                    return this.correct();
                }
                break;
            case 'difficult':
                let difficultMatch = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;
                if (!this.input.value.match(difficultMatch)) {
                    return this.error('عذرًا ، ولكن يجب أن تكون كلمة المرور 8 على الأقل وتحتوي على أحرف كبيرة وصغيرة وأرقام ورموز');
                } else {
                    resetPassword();
                    return this.correct();
                }
                break;

            default:
                console.error(Error('There is no such level, from the levels in (simple, complex, difficult)'));
                break;
        }
    }

    required = () => {
        if (this.input.value.length === 0) {
            return this.error('هذه الحقل مطلوب');
        } else {
            return this.correct();
        }
    }

    number = (min, mix) => {
        let value = this.input.value;
        let numberMatch = /^(([0-9]{1,})|(([0-9]+\.)+[0-9]{1,}))$/;
        if (!value.match(numberMatch) || value.length < min || value.length > mix) {
            return this.error('الرقم غير صحيح');
        } else {
            return this.correct();
        }
    }

    integer = (min, mix) => {
        let value = this.input.value;
        if (!value.match(/[0-9]/) || value.length < min || value.length > mix) {
            return this.error('الرقم غير صحيح');
        } else {
            return this.correct();
        }
    }

    file = (requiredFormats = []) => {
        let format = this.input.value.split('.').pop();
        if (requiredFormats.length > 0) {
            if (requiredFormats.indexOf(format) < 0) {
                return this.error('تنسيق الملف هذا غير صحيح');
            } else {
                return this.correct();
            }
        } else if (this.input.value.length <= 0) {
            return this.error('');
        } else {
            return this.correct();
        }
    }

    rules = (rules = {}) => {
        let value = this.input.value,
            type = rules.type,
            min = rules.min,
            mix = rules.mix,
            errorMessage = rules.errorMessage,
            correctMessage = rules.correctMessage;

        if (!rules.errorMessage) {
            errorMessage = '';
        }

        if (value.length === 0) {
            return this.error();
        }

        if (type === 'string' && typeof value !== 'string') {
            return this.error(errorMessage);
        }

        if (type === 'number' && !value.match(/^(([0-9]{1,})|(([0-9]+\.)+[0-9]{1,}))$/)) {
            return this.error(errorMessage);
        }
        if (type === 'integer' && value.match(/[^0-9]/) || type === 'INT' && value.match(/[^0-9]/)) {
            return this.error(errorMessage);
        }

        if (value.length > mix) {
            return this.error(errorMessage);
        }

        if (value.length < min) {
            return this.error(errorMessage);
        }

        if (value.length !== 0) {
            return this.correct(correctMessage);
        }
    }
}
let validationAll = (input, options = {}) => new _validationAll(input, options.required, options.view);