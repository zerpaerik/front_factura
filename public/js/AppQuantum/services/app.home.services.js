(function () {
  "use strict";

  angular.module("QuantumApp").service("HomeService", HomeService);

  HomeService.$inject = ["$http", "SERVER_CONFIG", "API_ROUTE", "API_ACTION"];

  function HomeService($http, SERVER_CONFIG, API_ROUTE, API_ACTION) {
    var API_HOST = SERVER_CONFIG.API_HOST + API_ROUTE.BRANCH;

    this.readDocumentQuantity = function (company) {
      var request = $http({
        method: "get",
        url: API_HOST + "/documentQuantity/" + company,
      });

      return request;
    };
  }
})();
