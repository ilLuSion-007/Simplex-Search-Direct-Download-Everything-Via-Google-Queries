
<?php

$value = $_POST["string"];

$music = " +(mp3|wav|ac3|ogg|flac|wma|m4a) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:\"index.of\" +\”last modified\” +\”parent directory\” +\"description\" +\"size\" -inurl:(listen77|mp3raid|mp3toss|mp3drug|index_of|wallywashis)";
$movie = " +(mkv|mp4|avi|mov|mpg|wmv|flv) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:\"index.of\" +\”last modified\” +\”parent directory\” +\"description\" +\"size\""; 
$ebook = " +(MOBI|EPUB|ODT|PDF|PRC|RTF|TCR|DOC|DOCX|PPT|PPTX) -inurl:(jsp|pl|php|html|aspx|htm|cf|shtml) intitle:\"index.of\" +\”last modified\” +\”parent directory\” +\"description\" +\"size\"";

$mp3 = $value . $music;
$video = $value . $movie;
$pdf = $value . $ebook;


if(isset($_POST['formSubmit'])) 
{
  $varOption = $_POST['formOption'];
  $errorMessage = "";
  
  if(empty($varOption)) 
  {
    $errorMessage = "<li>You forgot to select a choice!</li>";
  }
  
  if($errorMessage != "") 
  {
    echo("<p>There was an error with your choice:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 
  else 
  {
    

    switch($varOption)
    {
      case "mp3": $redirect = "https://www.google.com/search?hl=en&q=$mp3"; break;
      case "video": $redirect = "https://www.google.com/search?hl=en&q=$video"; break;
	  case "pdf": $redirect = "https://www.google.com/search?hl=en&q=$pdf"; break;
      default: echo("Error!"); exit(); break;
    }
    echo " redirecting to: $redirect ";
    
     header("Location: $redirect");


    exit();
  }
}

?>
