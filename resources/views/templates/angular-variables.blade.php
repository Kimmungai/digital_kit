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
    $scope.publish_url='https://'+$scope.client.first_name+$scope.client.last_name+'.com';
    $scope.edit_publish_url=1;
    $scope.publish_period='1 year';
    $scope.publish_cost ='$99';
    $scope.acc_bal ='$0';
    $scope.publish_notes =1;
  });
</script>
<script>
  //jquery ajax
  function update_val(field,value,length=494,width=668,model='Website',dir='profile',fname='main_image')
  {
    //alert($('#'+field).attr('type'));return 0;
    if($('#'+field).attr('type') === 'file')
    {
      //value = $('#'+field+'_form').submit();
      //return 0;
      //alert('#'+field+'_form')
      //alert(dir+fname+model);return 0;
      var formData = new FormData();
      formData.append(field, $('#'+field)[0].files[0]);
      formData.append('dir', dir);
      formData.append('fname', fname);
      formData.append('length', length);
      formData.append('width', width);
      if($('#'+field)[0].files[0].size > 1000000){alert('The file is too big. Max 1MB');return 0;}
      $.ajax({
        	url: "/client-update",
    			type: "POST",
    			data:  formData,
    			contentType: false,
        	processData:false,
    			success: function(data)
    		    {
              //alert('success'+data)
    			  },
    		  	error: function()
    	    	{
              //alert('chigau'+data)
    	    	}
    	  });
    }
    else
    {
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
      $(".prev-link").attr("href", 'http://localhost/personal/'+$('#design').val()+'/'+$('#theme').val()+'');
    });
  });
</script>
<script>$("#website-preview").attr("src", 'http://localhost/personal/{{$website["design"]}}/{{$website["theme"]}}');$(".prev-link").attr("href", 'http://localhost/personal/{{$website["design"]}}/{{$website["theme"]}}');</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
</script>
