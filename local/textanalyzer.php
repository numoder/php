<!-- preg_match_all -->
 <!-- accepts the $pattern (what we want to search), $subject(what we are searching), and $matches(reference to an array) and will store it in an array -->
<?php

  function count_words( $text ) {
    return str_word_count( $text );
  }

  function count_given_string( $str, $text ) {
    $str = strtolower( $str );
    $text = strtolower( $text); 
    preg_match_all($str, $text, $count);
    print_r($count);
    return sizeof( $count[0] );
  }

  $text = "Ryder passed his tongue over his parched lips. \"I will tell you it just as it happened, sir,\" said he. \"When Horner had been arrested, it seemed to me that it would be best for me to get away with the stone at once, for I did not know at what moment the police might not take it into their heads to search me and my room. There was no place about the hotel where it would be safe. I went out, as if on some commission, and I made for my sister's house. She had married a man named Oakshott, and lived in Brixton Road, where she fattened fowls for the market. All the way there every man I met seemed to me to be a policeman or a detective; and, for all that it was a cold night, the sweat was pouring down my face before I came to the Brixton Road. My sister asked me what was the matter, and why I was so pale; but I told her that I had been upset by the jewel robbery at the hotel. Then I went into the back yard and smoked a pipe, and wondered what it would be best to do. I had a friend once called Maudsley, who went to the bad, and has just been serving his time in Pentonville. One day he had met me, and fell into talk about the ways of thieves, and how they could get rid of what they stole. I knew that he would be true to me, for I knew one or two things about him; so I made up my mind to go right on to Kilburn, where he lived, and take him into my confidence. He would show me how to turn the stone into money. But how to get to him in safety? I thought of the agonies I had gone through in coming from the hotel. I might at any moment be seized and searched, and there would be the stone in my waistcoat pocket. I was leaning against the wall at the time, and looking at the geese which were waddling about round my feet, and suddenly an idea came into my head which showed me how I could beat the best detective that ever lived.";

  echo '<p>' . $text . '</p>';

echo "\n\n There are " . count_words( $text ) . " words in the text.\n";

