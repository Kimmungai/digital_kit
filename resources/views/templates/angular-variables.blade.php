<script>
var app = angular.module('App', []);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.controller('Ctrl', function($scope, $http) {

    $scope.client = <?php echo $data; ?>

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
<script>
  //jquery ajax
  function update_val(field,value)
  {
    $.post("/client-update",
      {
        field:field,
        value:value,
        "_token": "{{ csrf_token() }}",
      },
      function(data,status){

    });
    $("#website-preview").attr("src", 'http://localhost/');//reload iframe
  }
</script>
<script>
  $(document).ready(function(){
      $(document).ajaxStart(function(){
          $("#wait").css("display", "block");
      });
      $(document).ajaxComplete(function(){
          $("#wait").css("display", "none");
      });
      $("button").click(function(){
          $("#txt").load("demo_ajax_load.asp");
      });
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
            <input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="client.first_name" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" id="last_name" placeholder="E.g. Smith" ng-model="client.last_name" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="title">Tagline 1</label>
            <input type="text" class="form-control" id="tag_line_1" placeholder="E.g. Engineer" ng-model="client.tag_line_1" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="bar_code_url">Tagline 2</label>
            <input type="text" class="form-control" id="tag_line_2" placeholder="" ng-model="client.tag_line_2" onblur="update_val(this.id,this.value)">
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
