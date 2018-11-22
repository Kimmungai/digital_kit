<?php
namespace App\Data;
 class Data
 {
   public function tag_line_1($user_name)
   {
     $rand=rand(0, 9);
     $tag_line_1=[
       "Have you met ".$user_name." ?",
       "Hey! I am ".$user_name." It is sooo nice to see you here!.",
       "Hello, I am ".$user_name.", welcome to my website.",
       "Bonjour! I'm ".$user_name.", welcome to my personal website.",
       "I'm ".$user_name.", it's a pleasure to welcome you to my site.",
       "Hi there, I am ".$user_name.".",
       "How is it going? I am ".$user_name."",
       "Hey! I am ".$user_name.", super excited to have you on board.",
       "Hello it's ".$user_name.", welcome aboard!",
       "Hi! this is ".$user_name." Nice to have you on board!",
     ];
     return $tag_line_1[$rand];
   }

   public function tag_line_2($user_company, $user_location)
   {
     $rand=rand(0, 9);

     $tag_line_A=[

       "I&quot;m fascinated with insightful arts like singing, dancing, instruments, etc. Currently in ".$user_location."",
       "I prefer always to be happy to sad. Being in the ".$user_company.", I don&quot;t cry at that day I sing a song that can make me happy.",
       "Where words leave off, music and dance begins. Find me in ".$user_location."",
       "Where words fail, music speaks!",
       "Music is the wine that fills the cup of silence",
       "Music is the moonlight in the gloomy night of life.",
       "I really believe in the power of music!",
       "The only thing better than singing is more singing.",
       "Music, The original mood-altering, non-fattening wonder drug.",
       "Music is a mantra that soothes the soul."

     ];

     $tag_line_B=[

       "I&quot;m fascinated with insightful arts like singing, dancing, instruments, etc.",
       "I prefer always to be happy to sad. Yes when I become sad I don’t cry at that day I sing a song that can make me happy.",
       "Where words leave off, music and dance begins.",
       "Where words fail, music speaks!",
       "Music is the wine that fills the cup of silence",
       "Music is the moonlight in the gloomy night of life.",
       "I really believe in the power of music!",
       "The only thing better than singing is more singing.",
       "Music, The original mood-altering, non-fattening wonder drug.",
       "Music is a mantra that soothes the soul."

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
     $rand=rand(0, 4);
     $about_story=[
       "I&quot;m a mixed media artist, treasure hunter, and soul searcher who believes in power of music to change the world. Regardless of the medium, my music has always been a manifestation of my personal and spiritual journey. I share my vision with the world in the hope of inspiring a deeper connection between you the listener and your own life journey. I make music to encourage people to live deeply. Love fearless, and to appreciate this heavenly place called earth.
While the organic aesthetics of Mother Nature are the main influence of my work, I am to create much more than superficially beautiful objects. My music is meant to challenge your preconceptions, expand your mind, honor the sacred and evoke feelings of adventure, exploration, and deep spiritual connection.",

       "I am a passionate artist with undying love for music. To me music is freedom that relentlessly exists . Freedom of speech , Freedom of thought , Freedom of creativity , Freedom of imagination  , you name it. I aspire to create music that unites people as family.  ",

       $username." is a composer, songwriter and multi-instrumentalist. He’s toured the world, written music for TV and topped the list of most popular artists. He has also been hired to write multiple bios for other artists.",

       "Music travels throughout my body. It can make me see sunlight when ther's only rain. I believe no matter what we see in life, no matter what we do, no matter what the heartache, there's a song to pull us through",

       "As a seasoned musician, I am all too farmiliar with the magic made by melody. A beautiful, soft, sweet tune that touches our hearts inside And heals our bleeding wound.",
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
       "Musical performance is step in the musical process during which musical ideas are realised and transmitted to a listener. Stay tuned for my upcoming shows and performances.",
       "Becoming a successful songwriter takes inspiration, mechanics, and marketing. You need to know how to craft compelling songs and understand music theory and sell yourself in the competitive music industry in $location. My undying passion for producing quality music keeps me going in this tough industry!",
       "As a music producer, I oversee and manage the sound recording and production of a band or performer's music, which may range from recording one song to recording a lengthy concept album. Contact me for your music projects.",
       "I give to improve life now and in the future for people in my community. Engaging and empowering the people of $location in order to inspire meaningful and lasting change in the community."
     ];
     $speciality_B=[
       "Musical performance is step in the musical process during which musical ideas are realised and transmitted to a listener. Stay tuned for my upcoming shows and performances.",
       "Becoming a successful songwriter takes inspiration, mechanics, and marketing. You need to know how to craft compelling songs and understand music theory and sell yourself in the competitive music industry. My undying passion for producing quality music keeps me going in this tough industry!",
       "As a music producer, I oversee and manage the sound recording and production of a band or performer's music, which may range from recording one song to recording a lengthy concept album. Contact me for your music projects.",
       "I give to improve life now and in the future for people in my community. Engaging and empowering in order to inspire meaningful and lasting change in the community."
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
      "At the core, I am an artist who is gifted with a passion for music, and have both the tremendous privilege and unshakable responsibility to share it. Music speaks for the heart, and profoundly impacts the growth, enrichment, inspiration, healing, maturity, and expression of the human experience.",
      "As an artist, I seek to be the wellspring of music in $location nourishing the soul of the community with music that speaks to, and sometimes for,  each person.",
      "I strive for artistic excellence and thrive on diversity in genre, and in collaboration with other musicians."
    ];
    $vision_B=[
      "At the core, I am an artist who is gifted with a passion for music, and have both the tremendous privilege and unshakable responsibility to share it. Music speaks for the heart, and profoundly impacts the growth, enrichment, inspiration, healing, maturity, and expression of the human experience.",
      "As an artist, I seek to be the wellspring of music  nourishing the soul of the community with music that speaks to, and sometimes for,  each person.",
      "I strive for artistic excellence and thrive on diversity in genre, and in collaboration with other musicians."
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
       "As an art maker, I aspire to create art of original, emotive and edifying quality, to be exhibited and purchased through gallery representation and online distribution channels",
       "Every time I pick up a microphone on stage, I feel like a star, for they chose me and they should never regret that.",
       "My mission is to advance artistic excellence, innovation, and creativity for the benefit of communities and the music industry as a whole.",
       "To refresh the world through music, inspire moments of optimism and happiness to humanity.",
       "To foster a more creatively geared society through music, song writing, and quality production.",
       "To continually produce music infused with a spirit of excitement and will presented in an entertaining context.",
       "My mission in life is to life a life of honesty, integrity, and unconditional love. To never loose sight of what is important, and to make the world a more beautiful place through art and my relationship with fans."
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
