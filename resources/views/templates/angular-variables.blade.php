<script>
var app = angular.module('App', []);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
app.controller('Ctrl', function($scope, $http, $filter) {

    $scope.client = <?php echo $website; ?>;
    $scope.card = <?php echo $card; ?>;
    $scope.user_details = <?php echo $user; ?>;
    $scope.posts = <?php echo Auth::user()->blog->reverse(); ?>;

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
    //if($scope.user_details.publishing_details.publishing_period==='3 years'){$scope.publishing_cost='249';}]
    $scope.currentPage = 0;
    $scope.pageSize = 3;
    $scope.all_posts = [];
    $scope.q = '';
    $scope.getData = function () {
      // needed for the pagination calc
      // https://docs.angularjs.org/api/ng/filter/filter
      return $filter('filter')($scope.all_posts, $scope.q)
       }
       $scope.numberOfPages=function(){
           return Math.ceil($scope.getData().length/$scope.pageSize);
       }

       for (var i=0; i<{{count(Auth::user()->blog)}}; i++) {
           $scope.all_posts.push($scope.posts[i]);
       }
  });
  app.filter('startFrom', function() {
      return function(input, start) {
          start = +start; //parse to int
          return input.slice(start);
      }
  });

</script>
<script>
  //jquery ajax
  function update_val(field,value,length=494,width=668,model='Website',dir='profile',fname='main_image')
  {
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
        	url: "{{url('/client-update')}}",
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
      if(field==='qr_url'){$(".card-qr").attr("src", 'https://api.qrserver.com/v1/create-qr-code/?data="'+value+'"');}// change to the typed url
      $.post("{{url('/client-update')}}",
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
      $("#website-preview").attr("src", '{{url("/")}}/website/'+$('#design').val()+'/'+$('#theme').val()+'?id={{Auth::id()}}');
      $(".prev-link").attr("href", '{{url("/")}}/website/'+$('#design').val()+'/'+$('#theme').val()+'?id={{Auth::id()}}');
      if(parseFloat($('#pub_cost').val()) > {{$user->payment_details[0]->acc_bal}}){
        $('#publish-btn').addClass('disabled');
      }else if(parseFloat($('#pub_cost').val()) < {{$user->payment_details[0]->acc_bal}}){
        $('#publish-btn').removeClass('disabled');
      }
    });
  });
</script>
<script>
$(document).ready(function(){
  $('#website-preview').css('height',window.innerHeight +'px');
  $("#website-preview").attr("src", '{{url("/")}}/website/'+'{{$website->design}}/{{$website->theme}}?id={{Auth::id()}}');$(".prev-link").attr("href", '{{url("/")}}/website/'+'{{$website->design}}/{{$website->theme}}?id={{Auth::id()}}');
  $(".card-qr").attr("src", 'https://api.qrserver.com/v1/create-qr-code/?data="{{$card->qr_url}}"');
});
</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
</script>
<script>
  function unblur_bg()
  {
    $('#passwordEmailPrompt').fadeOut('slow');
    $('#site-panel').removeClass('blur-bg');
  }
  function blur_bg()
  {
    $('#site-panel').addClass('blur-bg');
  }
</script>
<script>
  function submit_help()
  {
    event.preventDefault();
    $.ajax({
        type: 'post',
        url: '{{url('/client-help')}}',
        data: $('#help_form').serialize(),
        success: function (data,status) {
          $('#help_alert').removeClass('d-none');
        }
    });
  }
  function submit_blog()
  {
    event.preventDefault();
    $.ajax({
        type: 'post',
        url: '{{url('/client-blog')}}',
        data: $('#blog_form').serialize(),
        success: function (data,status) {
          $('#blog_alert').removeClass('d-none');
          $('#twitter-share-btn').attr('href','https://twitter.com/intent/tweet?text='+data+'');
          $('#blog-social-icons').removeClass('d-none');
        }
    });
  }
  function submit_song()
  {
    event.preventDefault();
    var form = $('#song_form')[0];
    //data = new FormData();
    //data.append($('#song_form').serialize());
    //data.append('music-file', $('#music-file')[0].files[0]);
    //data.append('song-title', 'field');
    var data = new FormData(form);
    /*$.ajax({
        type: 'post',
        enctype: 'multipart/form-data',
        url: '{{url('/client-song')}}',
        data: data,
        contentType: false,
        processData:false,
        success: function(data)
          {
            alert('success'+data)
          },
          error: function()
          {
            alert('chigau'+data)
          }
    });*/
    $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "{{url('/client-song')}}",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

                $("#song-tool").click();
                alert( data);
                //$("#btnSubmit").prop("disabled", false);

            },
            error: function (e) {

                //$("#result").text(e.responseText);
                alert(e);
                //$("#btnSubmit").prop("disabled", false);

            }
        });

  }
  function upload_file(field,model,dir)
  {
    if($('#'+field).attr('type') === 'file')
    {
      var formData = new FormData();
      formData.append(field, $('#'+field)[0].files[0]);
      formData.append('field', field);
      formData.append('model', model);
      formData.append('dir', dir);

      if($('#'+field)[0].files[0].size > 1000000){alert('The file is too big. Max 1MB');return 0;}
      $.ajax({
          url: "{{url('/client-update')}}",
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
  }
</script>
<script>
  function update_profile()
  {
    if($('#profile_retype_password').val()===$('#profile_password').val() &&  $('#profile_password').val().length !=0)
    {
      $.ajax({
          type: 'post',
          url: '{{url('/profile-update')}}',
          data: $('#profile_form').serialize(),
          success: function (data,status) {
            $('#profile_update_alert').removeClass('d-none');
          }
      });
    }else{
      alert("Passwords did not match. Please try again.")
    }
  }
</script>
