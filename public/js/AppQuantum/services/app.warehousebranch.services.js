(function () {
    "use strict";

    angular
        .module("QuantumApp")
        .service("WarehouseBranchService", WarehouseBranchService);

    WarehouseBranchService.$inject = ['$http', 'SERVER_CONFIG'];

    function WarehouseBranchService($http, SERVER_CONFIG) {

        var API_HOST = SERVER_CONFIG.WAREHOUSE_API;

        this.create = function (entity, Id) 
        {
            var request = $http({
                method: "post",
                url: API_HOST + 'warehouse-branch',
                data: entity,
                headers: {    
                    "Access-Control-Allow-Origin": true,                
                    "Content-Type": "application/json"
                }
            });
            return request;
        };

        this.read = function (Id) 
        {                                   
            var request = $http({
                method: "get",
                url: API_HOST + "warehouse/getOne/" + Id
            });            

            return request;
        };

        this.readAll = function (Id) 
        {
            var request = $http({
                method: "get",
                url: API_HOST + "warehouse/" + Id
            });
            return request;
        };

        this.update = function (entity, Id) 
        {            
            //var request = $http.put(API_HOST + "/" + Id, params);
            var request = $http({
                method: "patch",
                url: API_HOST + "warehouse/" + Id,  
                data: entity
            }); 
            return request;
        }
    }
})();