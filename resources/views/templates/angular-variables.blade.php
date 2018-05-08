<script>
var app = angular.module('App', []);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.controller('Ctrl', function($scope, $http) {

    $scope.client = <?php echo $website; ?>;
    $scope.card = <?php echo $card; ?>;
    $scope.user_details = <?php echo $user; ?>;

    //variables
    $scope.active_tool=1;
    $scope.active_shelf=1;
    $scope.my_tools=1;
    $scope.tool_A={{Auth::user()->tool_A}};
    $scope.tool_B={{Auth::user()->tool_B}};
    $scope.tool_C={{Auth::user()->tool_C}};
    $scope.tool_D={{Auth::user()->tool_D}};
    $scope.edit_details=0;
    $scope.edit_publish_url=1;
    $scope.publish_notes =1;
    //if($scope.user_details.publishing_details.publishing_period==='1 years'){$scope.publishing_cost='99';}
    //if($scope.user_details.publishing_details.publishing_period==='2 years'){$scope.publishing_cost='179';}
    //if($scope.user_details.publishing_details.publishing_period==='3 years'){$scope.publishing_cost='249';}
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
      if($('#'+field).attr('type') === 'checkbox'){if($('#' + field).is(":checked")){value='true';}else{value='false';}}
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
      $("#website-preview").attr("src", 'http://localhost:8000/website/'+$('#design').val()+'/'+$('#theme').val()+'?id={{Auth::id()}}');
      $(".prev-link").attr("href", 'http://localhost:8000/website/'+$('#design').val()+'/'+$('#theme').val()+'?id={{Auth::id()}}');
    });
  });
</script>
<script>$("#website-preview").attr("src", 'http://localhost:8000/website/'+'{{$website->design}}/{{$website->theme}}?id={{Auth::id()}}');$(".prev-link").attr("href", 'http://localhost:8000/website/'+'{{$website->design}}/{{$website->theme}}?id={{Auth::id()}}');</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
</script>
