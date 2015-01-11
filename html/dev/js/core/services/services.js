"use strict";

/*
* Simple promise implementation
* get, post, login and delete methods
* if, the response gets an 403 error,
* it should redirect the user to the login
*/
Core.factory('MyHTTP', function(INIT, $http,$q) {
    return {
        get : function(url) {
            return $http.get(INIT.APP_PATH + url)
                .then(function(response){
                    return response;
                }, function(response) {
                    return $q.reject(response);
                });
        },

        login : function(url, auth) {
            return $http({
                    'headers' :  {
                        Authorization : 'Basic ' + auth
                    },
                    params : {'nocache' : new Date().getTime() },
                    method: 'POST',
                    url: INIT.APP_PATH + url
                }).then(function(response){
                    return response;
                }, function(response) {
                    return $q.reject(response);
                });  
        },

        post : function(url, body) {
            if (body == undefined) body = '';
            return $http({
                    headers: {
                        'Content-Type' : 'application/x-www-form-urlencoded'
                    },
                    params : {'nocache' : new Date().getTime() },
                    method: 'POST',
                    url: INIT.APP_PATH + url,
                    data: body,
                }).then(function(response){
                    return response;
                }, function(response) {
                    return $q.reject(response);
                });    
        }
    };
}); //End MyHTTP