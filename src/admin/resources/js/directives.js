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
                plugins: 'link image code',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
            };
        }],
    }
});