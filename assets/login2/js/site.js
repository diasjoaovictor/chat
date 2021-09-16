// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.

let images = document.getElementsByClassName('img-fallback');

for (img of images) {
    img.addEventListener("error", function () {
        this.src = this.getAttribute("fallback-src");
        this.classList.remove("img-fallback");
    });
}

function setBorder(e) {
    e.target.parentElement.parentElement.classList.add("focused-border");
    for (let k = 0; k < e.target.parentElement.parentElement.childNodes.length; k++) {
        const item = e.target.parentElement.parentElement.childNodes[k];
        if (item.nodeName === "I") {
            item.classList.add("focused-icon");
        }
    }
}

function unsetBorder(e) {
    e.target.parentElement.parentElement.classList.remove("focused-border");
    for (let k = 0; k < e.target.parentElement.parentElement.childNodes.length; k++) {
        const item = e.target.parentElement.parentElement.childNodes[k];
        if (item.nodeName === "I") {
            item.classList.remove("focused-icon");
        }
    }
}

var group = document.getElementsByClassName("floating-label-input-group");

for (let i = 0; i < group.length; i++) {
    const element = group[i];
    for (let j = 0; j < element.childNodes.length; j++) {
        const input = element.childNodes[j];
        if (input.nodeName === "INPUT" || input.nodeName === "SELECT") {
            input.addEventListener("focus", setBorder);
            input.addEventListener("focusout", unsetBorder);
        }
    }
}

function setValidationValues(options, ruleName, value) {
    options.rules[ruleName] = value;
    if (options.message) {
        options.messages[ruleName] = options.message;
    }
}

(function ($) {

    var $jQval = $.validator;

    $.validator.addMethod("containsuppercase",
        function (value, element, params) {
            return (value && value.match("[A-Z]"));
        });


    $jQval.addMethod("containslowercase",
        function (value, element, params) {
            return (value && value.match("[a-z]"));
        });

    $jQval.addMethod("containsnonalpha",
        function (value, element, params) {
            return (value && value.match("[^a-zA-Z0-9 ]"));
        });

    $jQval.addMethod("containsdigits",
        function (value, element, params) {
            return (value && value.match("[0-9 ]"));
        });


    $jQval.addMethod("uniquechars",
        function (value, element, qtdUniqueChars) {
            var uniques = [];
            for (var i = 0; i < value.length; i++) {
                console.error(uniques);
                let count = [...value].filter(c => c === value[i]).length;

                if (count === 1) {
                    uniques.push(value[i]);
                } else {
                    var index = uniques.indexOf(value[i]);
                    if (index !== -1) {
                        uniques.splice(index, 1);
                    }
                }
            }
            return parseInt(qtdUniqueChars) <= uniques.length;
        });

    $.validator.unobtrusive.adapters.addBool("containsuppercase");
    $.validator.unobtrusive.adapters.addBool("containslowercase");
    $.validator.unobtrusive.adapters.addBool("containsnonalpha");
    $.validator.unobtrusive.adapters.addBool("containsdigits");


    $.validator.unobtrusive.adapters.add("uniquechars", ["min"], function (options) {
        setValidationValues(options, "uniquechars", options.params.min);
    });

    $.validator.unobtrusive.parse(document);

})(jQuery);

$('[data-toggle="tooltip"]').tooltip();

$(document).ready(function () {

    function disableSubmitButtons(disable = true) {

        $('form[data-blocksubmit] input[type="submit"]').each((i, btn) => {
            configureButtonState(disable, $(btn), 'val', 'val');
        });

        $('form[data-blocksubmit] button').each((i, btn) => {
            configureButtonState(disable, $(btn), 'text', 'text');
        });

    }

    function configureButtonState(shoulBlock, btn, getLabel, setLabel) {
        const disableClass = 'btn.disabled disabled'
        if (shoulBlock) {
            if (btn[getLabel]()) {
                btn[setLabel](`${btn[getLabel]()}...`);
            }
            btn.addClass(disableClass);
            btn.on('click', function (event) { event.preventDefault(); });
        } else {
            if (btn[getLabel]() && btn[getLabel]().endsWith('...')) {
                btn[setLabel](btn[getLabel]().replace('...', ''));
            }
            btn.removeClass(disableClass);
            btn.on('click', function () { });
        }
    }

    function blockSubmitButtonNotValidating() {

        $('form[data-blocksubmit]').each(function () {
            let form = $(this);
            form[0].addEventListener('submit', function (event) {

                if (form.data("submiting")) {
                    event.preventDefault();
                    return;
                }

                disableSubmitButtons();

                form.data("submiting", true);
            });
        });
    }

    let processedForms = $('[data-blocksubmit]').addTriggersToJqueryValidate();

    processedForms.each(function (index, form) {
        $(form).data('submiting', false);
        if (!$(form).data('validator')) {
            blockSubmitButtonNotValidating(form[0]);
        }
    });

    $('[data-blocksubmit]').bind('formValidation', function (event, form, formIsValid) {
        disableSubmitButtons(formIsValid);
    });
});