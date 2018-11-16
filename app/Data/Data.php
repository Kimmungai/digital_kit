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

       "I'm fascinated with insightful arts like singing, dancing, instruments, etc. Currently in ".$user_location."",
       "I prefer always to be happy to sad. Yes when I become sad (Being in the ".$user_company.",) I don’t cry at that day I sing a song that can make me happy.",
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

       "I'm fascinated with insightful arts like singing, dancing, instruments, etc.",
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

 }
