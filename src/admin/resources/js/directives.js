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
        controller: ['$scope', '$element', '$timeout', '$http', '$rootScope', function ($scope, $element, $timeout, $http, $rootScope) {
            $rootScope.tinymceOptions = {height: '', plugins: '', toolbar: ''};

            $http.get('admin/api-luyawisywyg-config/get').then(function (response) {
                $scope.tinymceOptions = {
                    height: response.data.height,
                    plugins: response.data.plugins,
                    toolbar: response.data.toolbar
                };
                // tinymce bug workaround
                setTimeout(function () {
                    $scope.$broadcast('$tinymce:refresh');
                }, 500);
            });
        }],
    }
});

zaa.directive("wysiwyg2Label", function () {
    return {
        restrict: "E",
        scope: {
            "model": "=",
            "label": "@label",
            "i18n": "@i18n"
        },
        template: function ($scope) {
            return "<div class=\"form-group form-side-by-side\" ng-class=\"{'input--hide-label': i18n}\"><div class=\"form-side form-side-label\"><label class=\"ng-binding\" ng-value='label'>{{label}}</label></div><div class=\"form-side\"><div><textarea ui-tinymce=\"tinymceOptions\" ng-model=\"model\"></textarea></div></div></div>";
        },
        controller: ['$scope', '$element', '$timeout', function ($scope, $element, $timeout) {
            $scope.tinymceOptions = {
                height: 200,
                menubar: false,
                plugins: 'link image code lists textcolor',
                toolbar: 'undo redo | bold underline italic forecolor backcolor | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | code'
            };
        }],
    }
});
