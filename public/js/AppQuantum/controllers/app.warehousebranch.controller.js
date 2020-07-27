(function () {
    "use strict";

    angular
        .module('QuantumApp')
        .controller('WarehouseBranchController', WarehouseBranchController);

        WarehouseBranchController.$inject = ['$scope', '$http', 'WarehouseBranchService', 'CompanyService', 'EntityMasterDataService', '$rootScope', 'toastr', 'HOST_ROUTE', 'SweetAlert', 'ENTITY'];

    function WarehouseBranchController($scope, $http, WarehouseBranchService, CompanyService, EntityMasterDataService, $rootScope, toastr,  HOST_ROUTE, SweetAlert, ENTITY) {
        
        var vm = this;

        vm.WarehouseBranchsList = [];
        vm.CompanyList = [];    
        vm.EmissionTypeList = "";
        vm.EnvironmentTypeList = "";
        vm.toggleSelected = true;  
        vm.emissionTypeSelected    = [];
        vm.environmentTypeSelected = [];  

        vm.create = function(id, company){

            vm.warehousebranch.warehouse_id = id;
            vm.warehousebranch.company_id = company;
            var promise = WarehouseBranchService.create(vm.warehousebranch, id);

            promise.then(function(pl){
                toastr.success("La bodega fué creado satisfactoriamente");
                window.location = HOST_ROUTE.WAREHOUSE+"/branches/"+id;
            }),
            function (errorPl) {
                toastr.error("Ocurrió un error al crear la bodega" + errorPl);
            };
        }

        vm.update = function(id){
            console.log(vm.warehouse);
            var promise = WarehouseBranchService.update(vm.warego, vm.warego.id);
            promise.then(function(pl){
                var retorno = pl.data;                
                toastr.success("El almacen fue actualizada satisfactoriamente");
                window.location = HOST_ROUTE.WAREHOUSE;
            }),
            function (errorPl) {
                toastr.error("Ocurrió un error al editar el almacen" + errorPl);
            };
        }  

        vm.delete = function(id){
            SweetAlert.swal({
                  title: 'Eliminar registro',
                  text: "¿Está seguro que desea eliminar el registro?",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Si',
                  cancelButtonText: 'No',
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false
            }, function (dismiss) {
              if (dismiss === true) {
                var promise = WarehouseBranchService.delete(id);
                promise.then(function(pl){
                    toastr.success("El registro fue eliminado satisfactoriamente");
                    window.location = HOST_ROUTE.BRANCH;    
                });
              }
            }); 

        } 

        vm.edit = function(id){
            var promise = WarehouseBranchService.read(id);
            promise.then(function(pl){
                vm.warehouse = pl.data.warehouse;
            });
        }        

         vm.loadList = function(UserRoleId, CompanyId){
            //vm.readCompanyList(UserRoleId, CompanyId);
            //vm.readCompany();
            //vm.readEnvironmentTypeList();
            //vm.readEmissionTypeList();
            console.log("DONE");
        }
    }
})();