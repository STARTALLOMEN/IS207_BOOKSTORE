$domain='http://bookstore.website/';
var myApp = angular.module('myApp', ['angularUtils.directives.dirPagination']).constant('API',$domain);
function OtherController($scope) {}