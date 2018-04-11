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
            <label for="telephone">Facebook profile</label>
            <input type="text" class="form-control" id="facebook_link" placeholder="E.g. 08031568951" ng-model="client.facebook_link" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="email">Twitter link</label>
            <input type="text" class="form-control" id="twitter_link" placeholder="E.g. psmith@gmail.com" ng-model="client.twitter_link" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="address">Goole plus link</label>
            <input type="text" class="form-control" id="google_plus_link" placeholder="" ng-model="client.google_plus_link" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="website">Linkedin link</label>
            <input type="text" class="form-control" id="linkedin_link" placeholder="" ng-model="client.linkedin_link" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="website">About me title</label>
            <input type="text" class="form-control" id="about_title" placeholder="" ng-model="client.about_title" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="website">About me subtitle</label>
            <input type="text" class="form-control" id="about_story_title" placeholder="" ng-model="client.about_story_title" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="website">About me</label>
            <textarea  class="form-control" id="about_story" placeholder="" ng-model="client.about_story" onblur="update_val(this.id,this.value)" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="website">Attach resume</label>
            <select   id="resume_downloadable" class="form-control" ng-model="client.resume_downloadable" onchange="update_val(this.id,this.value)">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
          <div class="form-group">
            <label for="website">Resume download link</label>
            <input type="text" class="form-control" id="resume_download_link" placeholder="" ng-model="client.resume_download_link" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <label for="website">Skills Section title</label>
            <input type="text"  class="form-control" id="skill_title" placeholder="" ng-model="client.skill_title" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Skill 1</label>
                <input type="text"  class="form-control" id="skill_1" placeholder="" ng-model="client.skill_1" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">level (%)</label>
                <input type="text" class="form-control" id="skill_1_level" placeholder="" ng-model="client.skill_1_level" onblur="update_val(this.id,this.value)">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Skill 2</label>
                <input type="text"  class="form-control" id="skill_2" placeholder="" ng-model="client.skill_2" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">level (%)</label>
                <input type="text" class="form-control" id="skill_2_level" placeholder="" ng-model="client.skill_2_level" onblur="update_val(this.id,this.value)">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Skill 3</label>
                <input type="text"  class="form-control" id="skill_1" placeholder="" ng-model="client.skill_3" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">level (%)</label>
                <input type="text" class="form-control" id="skill_3_level" placeholder="" ng-model="client.skill_3_level" onblur="update_val(this.id,this.value)">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Skill 4</label>
                <input type="text"  class="form-control" id="skill_1" placeholder="" ng-model="client.skill_1" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">level (%)</label>
                <input type="text" class="form-control" id="skill_4_level" placeholder="" ng-model="client.skill_4_level" onblur="update_val(this.id,this.value)">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="website">Speciality Section title</label>
            <input type="text"  class="form-control" id="speciality_title" placeholder="" ng-model="client.speciality_title" onblur="update_val(this.id,this.value)">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Speciality 1</label>
                <input type="text"  class="form-control" id="speciality_1" placeholder="" ng-model="client.speciality_1" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">icon</label>
                <select  class="form-control" id="speciality_1_icon" placeholder="" ng-model="client.speciality_1_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book</option>
                  <option value="fa-user">Person</option>
                  <option value="fa-globe">Globe</option>
                  <option value="fa-desktop">Computer</option>
                  <option value="fa-mobile">Mobile</option>
                  <option value="fa-home">Home</option>
                </select>
              </div>
            </div>
            <label for="website">Speciality sentence</label>
            <textarea  class="form-control" id="speciality_1_text" placeholder="" ng-model="client.speciality_1_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Speciality 2</label>
                <input type="text"  class="form-control" id="speciality_2" placeholder="" ng-model="client.speciality_2" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">icon</label>
                <select  class="form-control" id="speciality_2_icon" placeholder="" ng-model="client.speciality_2_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book</option>
                  <option value="fa-user">Person</option>
                  <option value="fa-globe">Globe</option>
                  <option value="fa-desktop">Computer</option>
                  <option value="fa-mobile">Mobile</option>
                  <option value="fa-home">Home</option>
                </select>
              </div>
            </div>
            <label for="website">Speciality sentence</label>
            <textarea  class="form-control" id="speciality_2_text" placeholder="" ng-model="client.speciality_2_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Speciality 3</label>
                <input type="text"  class="form-control" id="speciality_3" placeholder="" ng-model="client.speciality_3" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">icon</label>
                <select  class="form-control" id="speciality_3_icon" placeholder="" ng-model="client.speciality_3_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book</option>
                  <option value="fa-user">Person</option>
                  <option value="fa-globe">Globe</option>
                  <option value="fa-desktop">Computer</option>
                  <option value="fa-mobile">Mobile</option>
                  <option value="fa-home">Home</option>
                </select>
              </div>
            </div>
            <label for="website">Speciality sentence</label>
            <textarea  class="form-control" id="speciality_3_text" placeholder="" ng-model="client.speciality_3_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="website">Speciality 4</label>
                <input type="text"  class="form-control" id="speciality_4" placeholder="" ng-model="client.speciality_4" onblur="update_val(this.id,this.value)">
              </div>
              <div class="col-sm-6">
                <label for="website">icon</label>
                <select  class="form-control" id="speciality_4_icon" placeholder="" ng-model="client.speciality_4_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book</option>
                  <option value="fa-user">Person</option>
                  <option value="fa-globe">Globe</option>
                  <option value="fa-desktop">Computer</option>
                  <option value="fa-mobile">Mobile</option>
                  <option value="fa-home">Home</option>
                </select>
              </div>
            </div>
            <label for="website">Speciality sentence</label>
            <textarea  class="form-control" id="speciality_4_text" placeholder="" ng-model="client.speciality_4_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
          </div>
          <div class="form-group">
            <a class="" href="#" ng-click="edit_card=0"><span class="fa fa-thumbs-up"></span> Done</a>
          </div>
       </form>
      </div>
    </div>
  </div><!--edit card panel ends here-->
