<?php
function translateText(string $text):string{
    $temporaryText = translateTextItalic($text);
    $translatedText = translateTextBold($temporaryText);
    return $translatedText;
}
function translateTextItalic($text){
    $temporary = $text;
    for ($i=0;$i<substr_count($text,'_')/2;$i++){
        $firstPosition = strpos($temporary,'_');
        $secondPosition = strpos($temporary,'_',$firstPosition+1);
        $translatedText = substr_replace($temporary,'</i>',$secondPosition,1);
        $translatedText = substr_replace($translatedText,'<i>',$firstPosition,1);
        $temporary = $translatedText;
    }

    return $translatedText;
}
function translateTextBold($text){
    $temporary = $text;
    for ($i=0;$i<substr_count($text,'*')/2;$i++){
        $firstPosition = strpos($temporary,'*');
        $secondPosition = strpos($temporary,'*',$firstPosition+1);
        $translatedText = substr_replace($temporary,'</b>',$secondPosition,1);
        $translatedText = substr_replace($translatedText,'<b>',$firstPosition,1);
        $temporary = $translatedText;
    }
    return $translatedText;
}
