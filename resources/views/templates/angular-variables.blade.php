<script>
var app = angular.module('App', []);
  app.controller('Ctrl', function($scope) {
    //display variables
    $scope.active_shelf = 1;
    $scope.shelf_items = 1;
    $scope.active_card_shelf_item=1;
    $scope.active_cv_shelf_item=1;
    $scope.active_letter_shelf_item=1;
    $scope.active_website_shelf_item=1;

    //Edit items variables
    $scope.edit_card = 0;
    $scope.edit_cv_basic = 0;
    $scope.edit_cv_objective = 0;
    $scope.edit_cv_experience = 0;
    //number of cards
    $scope.cards = [
      {card_id:1, card_code:"A", first_name: "John", second_name:"Kimani",title:"software engineer/ designer", telephone:"0724942245", email:"kimpita9@gmail.com",address:"Tokyo koganei shi kajinocho 1-9-32",website:"http://localhost:8000/new",bar_code_url:"http://localhost:8000/new"},

    ];
    //****website content*********//
    $scope.profession = "Programmer";
    $scope.location = "Njoro";
    $scope.main_pic = "img/profile.png";
    $scope.facebook_link = "img/profile.png";
    $scope.twitter_link = "img/profile.png";
    $scope.google_plus_link = "img/profile.png";
    $scope.linkedin_link = "img/profile.png";
    $scope.git_hub_link = "img/profile.png";
    $scope.tag_line_1 = "Hello, I'm Me";
    $scope.tag_line_2 = "A kondoo Based in here";
    //about section
    $scope.about_title = "About Mine";
    $scope.about_story_title = "A little brif ABOUT Me";
    $scope.about_story_title = "A little brif ABOUT Me";
    $scope.about_story = "Ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem. ipsum dolor sit amet, consectetur adipisicing elit.<br><br>sed do eiusmod temporincididunt ut labore et dolore magna aliqua. ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsa voluptatem.";
    $scope.resume_downloadable = 1;
    $scope.skill_title = "SKILLS";
    $scope.skill_1 = "Milking goats";
    $scope.skill_1_level = 90;
    $scope.skill_2 = "yapping";
    $scope.skill_2_level = 19;
    $scope.skill_3 = "Eating";
    $scope.skill_3_level = 29;
    $scope.skill_4 = "Making hay";
    $scope.skill_4_level = 09;
    //speciality areas
    $scope.speciality_title = "What i do";

    $scope.speciality_1 = "sijui";
    $scope.speciality_1_icon = "fa-mobile";
    $scope.speciality_1_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    $scope.speciality_2 = "UX / UI design";
    $scope.speciality_2_icon = "fa-book";
    $scope.speciality_2_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    $scope.speciality_3 = "Machine learning";
    $scope.speciality_3_icon = "fa-desktop";
    $scope.speciality_3_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";;

    $scope.speciality_4 = "Target";
    $scope.speciality_4_icon = "fa-envelope";
    $scope.speciality_4_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    //contact form section
    $scope.contact_section_title = "Drop me a message";
    $scope.contact_receiving_email = "nyau@nyau.com";
    $scope.contact_auto_reply_message = "dfgd";
    //new variables
    $scope.active_tool=1;
    $scope.my_tools=1;
    $scope.tool_A=1;
    $scope.tool_B=0;
    $scope.tool_C=0;
    $scope.tool_D=0;
  });
</script>
