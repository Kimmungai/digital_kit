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
        //document.getElementById('website-preview').contentDocument.location.reload(true);//reload iframe
        //$('#website-preview').attr('src', $('#website-preview').attr('src'));
        //document.getElementById('id').src += '';
    });
  }
</script>
<script>
  $(document).ready(function(){
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
      $("#wait").css("display", "none");
      $("#website-preview").attr("src", 'http://localhost/personal/index.php');
    });
  });
</script>
<script>$("#website-preview").attr("src", 'http://localhost/personal/index.php');</script>
