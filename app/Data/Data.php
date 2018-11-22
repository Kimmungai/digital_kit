<?php
namespace App\Data;
 class Data
 {
   public function tag_line_1($user_name)
   {
     $rand=rand(0, 9);
     $tag_line_1=[
       "Have you met ".$user_name." ?",
       "Hey! I am ".$user_name." It is sooo nice to see you here!&#46;",
       "Hello&#44; I am ".$user_name."&#44; welcome to my website&#46;",
       "Bonjour! I&#39;m ".$user_name."&#44; welcome to my personal website&#46;",
       "I&#39;m ".$user_name."&#44; it&#39;s a pleasure to welcome you to my site&#46;",
       "Hi there&#44; I am ".$user_name."&#46;",
       "How is it going? I am ".$user_name."",
       "Hey! I am ".$user_name."&#44; super excited to have you on board&#46;",
       "Hello it&#39;s ".$user_name."&#44; welcome aboard!",
       "Hi! this is ".$user_name." Nice to have you on board!",
     ];
     return $tag_line_1[$rand];
   }

   public function tag_line_2($user_company, $user_location)
   {
     $rand=rand(0, 9);

     $tag_line_A=[

       "I&#39;m fascinated with insightful arts like singing&#44; dancing&#44; instruments&#44; etc&#46; Currently in ".$user_location."",
       "I prefer always to be happy to sad&#46; Being in the ".$user_company."&#44; I don&#39;t cry at that day I sing a song that can make me happy&#46;",
       "Where words leave off&#44; music and dance begins&#46; Find me in ".$user_location."",
       "Where words fail&#44; music speaks!",
       "Music is the wine that fills the cup of silence",
       "Music is the moonlight in the gloomy night of life&#46;",
       "I really believe in the power of music!",
       "The only thing better than singing is more singing&#46;",
       "Music&#44; The original mood-altering&#44; non-fattening wonder drug&#46;",
       "Music is a mantra that soothes the soul&#46;"

     ];

     $tag_line_B=[

       "I&#39;m fascinated with insightful arts like singing&#44; dancing&#44; instruments&#44; etc&#46;",
       "I prefer always to be happy to sad&#46; Yes when I become sad I don&#44;t cry at that day I sing a song that can make me happy&#46;",
       "Where words leave off&#44; music and dance begins&#46;",
       "Where words fail&#44; music speaks!",
       "Music is the wine that fills the cup of silence",
       "Music is the moonlight in the gloomy night of life&#46;",
       "I really believe in the power of music!",
       "The only thing better than singing is more singing&#46;",
       "Music&#44; The original mood-altering&#44; non-fattening wonder drug&#46;",
       "Music is a mantra that soothes the soul&#46;"

     ];
     if($user_company ==='' || $user_location===''){
       return $tag_line_B[$rand];
     }else{
       return $tag_line_A[$rand];
     }

   }
   public function about_title($username)
   {
     $rand=rand(0, 9);
     $about_title=[
       "About me",
       "Who am I?",
       "My details",
       "A little about myself",
       "who is ".$username,
       "About myself ",
       "A preview of my life",
       "My life journey",
       "My story",
       "My profile"
     ];
     return $about_title[$rand];
   }

   public function about_story($username)
   {
     $rand=rand(0, 3);
     $about_story=[
       "I&#39;m a mixed media artist&#44; treasure hunter&#44; and soul searcher who believes in power of music to change the world&#46; Regardless of the medium&#44; my music has always been a manifestation of my personal and spiritual journey&#46; I share my vision with the world in the hope of inspiring a deeper connection between you the listener and your own life journey&#46; I make music to encourage people to live deeply&#46; Love fearless&#44; and to appreciate this heavenly place called earth&#46;
While the organic aesthetics of Mother Nature are the main influence of my work&#44; I am to create much more than superficially beautiful objects&#46; My music is meant to challenge your preconceptions&#44; expand your mind&#44; honor the sacred and evoke feelings of adventure&#44; exploration&#44; and deep spiritual connection&#46;",

       /*"I am a passionate artist with undying love for music&#46; To me music is freedom that relentlessly exists &#46; Freedom of speech &#44; Freedom of thought &#44; Freedom of creativity &#44; Freedom of imagination  &#44; you name it&#46; I aspire to create music that unites people as family&#46;  ",*/

       $username." is a composer&#44; songwriter and multi-instrumentalist&#46; He has toured the world&#44; written music for TV and topped the list of most popular artists&#46; He has also been hired to write multiple bios for other artists&#46;",

       "Music travels throughout my body&#46; It can make me see sunlight when there is only rain&#46; I believe no matter what we see in life&#44; no matter what we do&#44; no matter what the heartache&#44; there&#39;s a song to pull us through",

       "As a seasoned musician&#44; I am all too farmiliar with the magic made by melody&#46; A beautiful&#44; soft&#44; sweet tune that touches our hearts inside And heals our bleeding wound&#46;",
     ];
     return $about_story[$rand];
   }
   public function skill()
   {
     $skill=[
       "Performance",
       "Song writing",
       "Production",
       "I am Philanthropist"
     ];
     return $skill;
   }

   public function speciality($location)
   {
     $speciality_A=[
       "Musical performance is step in the musical process during which musical ideas are realised and transmitted to a listener&#46; Stay tuned for my upcoming shows and performances&#46;",
       "Becoming a successful songwriter takes inspiration&#44; mechanics&#44; and marketing&#46; You need to know how to craft compelling songs and understand music theory and sell yourself in the competitive music industry in ".$location."&#46; My undying passion for producing quality music keeps me going in this tough industry!",
       "As a music producer&#44; I oversee and manage the sound recording and production of a band or performer&#39;s music&#44; which may range from recording one song to recording a lengthy concept album&#46; Contact me for your music projects&#46;",
       "I give to improve life now and in the future for people in my community&#46; Engaging and empowering the people of ".$location." in order to inspire meaningful and lasting change in the community&#46;"
     ];
     $speciality_B=[
       "Musical performance is step in the musical process during which musical ideas are realised and transmitted to a listener&#46; Stay tuned for my upcoming shows and performances&#46;",
       "Becoming a successful songwriter takes inspiration&#44; mechanics&#44; and marketing&#46; You need to know how to craft compelling songs and understand music theory and sell yourself in the competitive music industry&#46; My undying passion for producing quality music keeps me going in this tough industry!",
       "As a music producer&#44; I oversee and manage the sound recording and production of a band or performer&#39;s music&#44; which may range from recording one song to recording a lengthy concept album&#46; Contact me for your music projects&#46;",
       "I give to improve life now and in the future for people in my community&#46; Engaging and empowering in order to inspire meaningful and lasting change in the community&#46;"
     ];
     if($location === ''){
       return $speciality_B;
     }else {
       return $speciality_A;
     }
   }
   public function vision($location)
   {
    $rand=rand(0, 2);
    $vision_A=[
      "At the core&#44; I am an artist who is gifted with a passion for music&#44; and have both the tremendous privilege and unshakable responsibility to share it&#46; Music speaks for the heart&#44; and profoundly impacts the growth&#44; enrichment&#44; inspiration&#44; healing&#44; maturity&#44; and expression of the human experience&#46;",
      "As an artist&#44; I seek to be the wellspring of music in $location nourishing the soul of the community with music that speaks to&#44; and sometimes for&#44;  each person&#46;",
      "I strive for artistic excellence and thrive on diversity in genre&#44; and in collaboration with other musicians&#46;"
    ];
    $vision_B=[
      "At the core&#44; I am an artist who is gifted with a passion for music&#44; and have both the tremendous privilege and unshakable responsibility to share it&#46; Music speaks for the heart&#44; and profoundly impacts the growth&#44; enrichment&#44; inspiration&#44; healing&#44; maturity&#44; and expression of the human experience&#46;",
      "As an artist&#44; I seek to be the wellspring of music  nourishing the soul of the community with music that speaks to&#44; and sometimes for&#44;  each person&#46;",
      "I strive for artistic excellence and thrive on diversity in genre&#44; and in collaboration with other musicians&#46;"
    ];
    if($location === ''){
      return $vision_B[$rand];
    }else {
      return $vision_A[$rand];
    }
   }
   public function mission()
   {
     $rand=rand(0, 6);
     $mission=[
       "As an art maker&#44; I aspire to create art of original&#44; emotive and edifying quality&#44; to be exhibited and purchased through gallery representation and online distribution channels",
       "Every time I pick up a microphone on stage&#44; I feel like a star&#44; for they chose me and they should never regret that&#46;",
       "My mission is to advance artistic excellence&#44; innovation&#44; and creativity for the benefit of communities and the music industry as a whole&#46;",
       "My mission is to refresh the world through music&#44; inspire moments of optimism and happiness to humanity&#46;",
       "My mission is to foster a more creatively geared society through music&#44; song writing&#44; and quality production&#46;",
       "My mission is to continually produce music infused with a spirit of excitement and will presented in an entertaining context&#46;",
       "My mission in life is to life a life of honesty&#44; integrity&#44; and unconditional love&#46; To never loose sight of what is important&#44; and to make the world a more beautiful place through art and my relationship with fans&#46;"
     ];
     return $mission[$rand];
   }
   public function speciality_title()
   {
     $rand=rand(0, 6);
     $speciality_title=[
       "What I do",
       "Some of my works",
       "My portfolio",
       "My experience",
       "What I have done",
       "See my work",
       "My achievement"
     ];
     return $speciality_title[$rand];
   }

 }
