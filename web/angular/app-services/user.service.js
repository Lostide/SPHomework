(function () {
    'use strict';

    angular
        .module('app')
        .factory('UserService', UserService);

    UserService.$inject = ['$http'];
    function UserService($http) {
        var service = {};

        service.GetById = GetById;
        service.Create = Create;

        return service;

        function GetById(id) {
            return $http.get('/users/' + id).then(handleSuccess, handleError('Error getting user by id'));
        }

        function Create(user) {
            return $http.post('/users', user).then(handleSuccess, handleError('Error creating user'));
        }

        function handleSuccess(res) {
                return { success: true, data: res.data };
        }

        function handleError(error) {
            return function () {
                return { success: false, message: error };
            };
        }
    }

})();
