angular.module("zaa").requires.push('ui.tinymce');

zaa.directive("wysiwyg2", function () {
    return {
        restrict: "E",
        scope: {
            "model": "=",
            "options": "=",
            "label": "@label",
            "i18n": "@i18n",
            "id": "@fieldid",
            "placeholder": "@placeholder"
        },
        template: function () {
            return "<div><textarea ui-tinymce=\"tinymceOptions\" ng-model=\"model\"></textarea></div>";
        },
        controller: ['$scope', '$element', '$timeout', function ($scope, $element, $timeout) {
            $scope.tinymceOptions = {
                 height : '480',
                 plugins: 'link image code',
                 toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | code'

                // theme: 'modern',
                // plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern code',
                // toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
                // image_advtab: true,
                // content_css: [
                //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                //     '//www.tinymce.com/css/codepen.min.css'
                // ]
            };
        }],
    }
});

zaa.directive("wysiwyg2Label", function () {
    return {
        restrict: "E",
        scope: {
            "model": "=",
            "options": "=",
            "label": "@label",
            "i18n": "@i18n",
            "id": "@fieldid",
            "placeholder": "@placeholder"
        },
        template: function ($scope) {
            return "<div class=\"form-group form-side-by-side\" ng-class=\"{'input--hide-label': i18n}\"><div class=\"form-side form-side-label\"><label class=\"ng-binding\" ng-value='label'>{{label}}</label></div><div class=\"form-side\"><div><textarea ui-tinymce=\"tinymceOptions\" ng-model=\"model\"></textarea></div></div></div>";
        },
        controller: ['$scope', '$element', '$timeout', function ($scope, $element, $timeout) {
            $scope.tinymceOptions = {
                height : '200',
                menubar: false,
                plugins: 'link image code lists textcolor',
                toolbar: 'undo redo | bold underline italic forecolor backcolor | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code'

                // theme: 'modern',
                // plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern code',
                // toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
                // image_advtab: true,
                // content_css: [
                //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                //     '//www.tinymce.com/css/codepen.min.css'
                // ]
            };
        }],
    }
});
