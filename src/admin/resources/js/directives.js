var myAppModule = angular.module('myApp', ['ui.tinymce']);
//
// myAppModule.controller('TinyMceController', function($scope) {
//     $scope.tinymceModel = 'Initial content';
//
//     $scope.getContent = function() {
//         console.log('Editor content:', $scope.tinymceModel);
//     };
//
//     $scope.setContent = function() {
//         $scope.tinymceModel = 'Time: ' + (new Date());
//     };
//
//     $scope.tinymceOptions = {
//         plugins: 'link image code',
//         toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
//     };
// });

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
            return "<div><textarea ui-tinymce ng-model='model' class='form-control'></textarea></div>";
        },
    }
});