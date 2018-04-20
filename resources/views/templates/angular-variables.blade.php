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
    $.post("/client-update",
      {
        field:field,
        value:value,
        model:model,
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
      $("#website-preview").attr("src", 'http://localhost/personal/'+$('#design').val()+'/'+$('#theme').val()+'');
    });
  });
</script>
<script>$("#website-preview").attr("src", 'http://localhost/personal/{{$website["design"]}}/{{$website["theme"]}}');</script>
<script>
  $('#main_image').ssi_uploader({url: 'http://localhost:8000/upload-image'});
</script>
