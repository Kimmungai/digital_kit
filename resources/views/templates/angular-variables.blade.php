<script>
var app = angular.module('App', []);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.controller('Ctrl', function($scope, $http) {

    $scope.client = <?php echo $website; ?>;
    $scope.card = <?php echo $card; ?>;

    //variables
    $scope.active_tool=1;
    $scope.active_shelf=1;
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
  function update_val(field,value,model='Website')
  {
    if(field === 'main_image')
    {
      value = $('#'+field+'_form').submit();
      return 0;
      //alert('#'+field+'_form')
    }
    $.post("/client-update",
      {
        field:field,
        value:value,
        model:model,
        "_token": "{{ csrf_token() }}",
      },
      function(data,status){

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
      $("#website-preview").attr("src", 'http://localhost/personal/'+$('#design').val()+'/'+$('#theme').val()+'');
    });
  });
</script>
<script>$("#website-preview").attr("src", 'http://localhost/personal/{{$website["design"]}}/{{$website["theme"]}}');</script>
