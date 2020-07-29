(function () {
  "use strict";

  angular.module("QuantumApp").controller("HomeController", HomeController);

  HomeController.$inject = ["$scope", "$http", "HomeService", "$rootScope"];

  function HomeController($scope, $http, HomeService, $rootScope) {
    var vm = this;

    vm.PlanCompany = [];

    vm.readDocumentPlan = function (idCompany) {
      var promise = HomeService.readDocumentQuantity(idCompany);
      promise.then(function (pl) {
        vm.PlanCompany = pl.data;
      });
    };
  }
})();
