$text = 'There were four of us - George, and William Samuel Harris, and myself, and Montmorency.  We were sitting in my room, smoking, and talking about how bad we were—bad from a medical point of view I mean, of course. We were all feeling seedy, and we were getting quite nervous about it.  Harris said he felt such extraordinary fits of giddiness come over him at times, that he hardly knew what he was doing; and then George said that he had fits of giddiness too, and hardly knew what he was doing.  With me, it was my liver that was out of order.  I knew it was my liver that was out of order, because I had just been reading a patent liver-pill circular, in which were detailed the various symptoms by which a man could tell when his liver was out of order.  I had them all. It is a most extraordinary thing, but I never read a patent medicine advertisement without being impelled to the conclusion that I am suffering from the particular disease therein dealt with in its most virulent form.  The diagnosis seems in every case to correspond exactly with all the sensations that I have ever felt.';
  function cleanWords($text)
  {
        $text = strtolower($text);
    $words = [];
    $signs = ".,():;!?-\"";
    $words = explode(" ", $text);
    foreach ($words as $word) {
      $cleanedWords[] = trim($word, $signs);
    } return array_diff($cleanedWords, array(''));
    
  }
  $wordSet = cleanWords($text);
  $quantityOfWords = count($wordSet);
  $statistic = [];
  foreach ($wordSet as $word) {
    if (!array_key_exists($word, $statistic)) {
      $statistic[$word] = 1;
    } else {
      $statistic[$word] += 1;
    }
  }
    print_r ("Количество слов - {$quantityOfWords}\n");
  print_r($statistic);



