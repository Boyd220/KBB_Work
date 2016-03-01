app.controller('productsCtrl', function ($scope, $modal, $filter, Data) {
    $scope.werknemer = {};
    Data.get('werknemers').then(function(data){
        $scope.werknemers = data.data;
    });
    $scope.changeWerknemerStatus = function(werknemer){
        werknemer.status = (werknemer.status=="Active" ? "Inactive" : "Active");
        Data.put("werknemers/"+werknemer.id,{status:werknemer.status});
    };
    $scope.deleteWerknemer = function(werknemer){
        if(confirm("Weet u zeker dat u de werknemer wilt verwijderen?")){
            Data.delete("werknemers/"+werknemer.id).then(function(result){
                $scope.werknemers = _.without($scope.werknemers, _.findWhere($scope.werknemers, {id:werknemer.id}));
            });
        }
    };
    $scope.open = function (p,size) {
        var modalInstance = $modal.open({
          templateUrl: 'partials/productEdit.html',
          controller: 'productEditCtrl',
          size: size,
          resolve: {
            item: function () {
              return p;
            }
          }
        });
        modalInstance.result.then(function(selectedObject) {
            if(selectedObject.save == "insert"){
                $scope.werknemers.push(selectedObject);
                $scope.werknemers = $filter('orderBy')($scope.werknemers, 'id', 'reverse');
            }else if(selectedObject.save == "update"){
                p.achternaam = selectedObject.achternaam;
                p.tussenvoegsel = selectedObject.tussenvoegsel;
                p.voornaam = selectedObject.voornaam;
                p.werktel = selectedObject.werktel;
                p.tel = selectedObject.tel;
                p.adres = selectedObject.adres;
                p.huisnr = selectedObject.huisnr;
                p.stad = selectedObject.stad;
                p.afkomst = selectedObject.afkomst;
                p.postcode = selectedObject.postcode;
                p.comments = selectedObject.comments;
            }
        });
    };
    
 $scope.columns = [
                    {text:"ID",predicate:"id",sortable:true,dataType:"number"},
                    {text:"achternaam",predicate:"achternaam",sortable:true},
                    {text:"tussenvoegsel",predicate:"tussenvoegsel",sortable:true},
                    {text:"voornaam",predicate:"voornaam",sortable:true},
                    {text:"werktel",predicate:"werktel",reverse:true,sortable:true},
                    {text:"tel",predicate:"tel",sortable:true},
                    {text:"adres",predicate:"adres",sortable:true},
                    {text:"huisnr",predicate:"huisnr",sortable:true},
                    {text:"stad",predicate:"stad",sortable:true},
                    {text:"afkomst",predicate:"afkomst",sortable:true},
                    {text:"postcode",predicate:"postcode",sortable:true},
                    {text:"comments",predicate:"comments",sortable:true},
                ];

});


app.controller('productEditCtrl', function ($scope, $modalInstance, item, Data) {

  $scope.werknemer = angular.copy(item);
        
        $scope.cancel = function () {
            $modalInstance.dismiss('Afsluiten');
        };
        $scope.title = (item.id > 0) ? 'Bewerk werknemer' : 'Voeg werknemer toe';
        $scope.buttonText = (item.id > 0) ? 'Sla bewerking op' : 'Voeg nieuwe werknemer toe';

        var original = item;
        $scope.isClean = function() {
            return angular.equals(original, $scope.werknemer);
        }
        $scope.saveWerknemer = function (werknemer) {
            werknemer.uid = $scope.uid;
            if(werknemer.id > 0){
                Data.put('werknemers/'+werknemer.id, werknemer).then(function (result) {
                    if(result.status != 'error'){
                        var x = angular.copy(werknemer);
                        x.save = 'update';
                        $modalInstance.close(x);
                    }else{
                        console.log(result);
                    }
                });
            }else{
                werknemer.status = 'Active';
                Data.post('werknemers', werknemer).then(function (result) {
                    if(result.status != 'error'){
                        var x = angular.copy(werknemer);
                        x.save = 'insert';
                        x.id = result.data;
                        $modalInstance.close(x);
                    }else{
                        console.log(result);
                    }
                });
            }
        };
});
