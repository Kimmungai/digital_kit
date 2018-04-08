<script>
var app = angular.module('App', []);
  app.controller('Ctrl', function($scope, $http) {
    $http.get("/client").then(function(response){
      $scope.client = response.data;
    });

    //variables
    $scope.active_tool=1;
    $scope.my_tools=1;
    $scope.tool_A=true;
    $scope.tool_B=false;
    $scope.tool_C=false;
    $scope.tool_D=false;
    $scope.edit_details=0;
  });
</script>

  <div class="container" ng-cloak ng-show="edit_details==1"><!--edit card panel starts-->
    <div class="row">
      <div class="col-md-3  edit-pane edit-form-sec">
        <span class="close" ng-click="edit_details=0"><i class="fa fa-close" aria-hidden="true"></i></span>
        <h2><i class="fa fa-edit" aria-hidden="true"></i> Edit panel</h2>
        <form>
          <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="client.first_name">
          </div>
          <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" id="last_name" placeholder="E.g. Smith" ng-model="client.last_name">
          </div>
          <div class="form-group">
            <label for="title">Profession</label>
            <input type="text" class="form-control" id="title" placeholder="E.g. Engineer" ng-model="title">
          </div>
          <div class="form-group">
            <label for="bar_code_url">Bar code url</label>
            <input type="text" class="form-control" id="bar_code_url" placeholder="" ng-model="bar_code_url">
          </div>
          <div class="form-group">
            <label for="telephone">Phone</label>
            <input type="text" class="form-control" id="telephone" placeholder="E.g. 08031568951" ng-model="telephone">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="E.g. psmith@gmail.com" ng-model="email">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="" ng-model="address">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" id="website" placeholder="" ng-model="website">
          </div>
          <div class="form-group">
            <a class="" href="#" ng-click="edit_card=0"><span class="fa fa-thumbs-up"></span> Done</a>
          </div>
       </form>
      </div>
    </div>
  </div><!--edit card panel ends here-->
