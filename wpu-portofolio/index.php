<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true); // HARUS di-return
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCDF1373UXX4ifVWHgcoKVbw&key=AIzaSyCF0TF8Rb3HaiO4MiRr1zRHcRLfyfol7HI');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];


//latest video
$urlLatestVideo = ('https://www.googleapis.com/youtube/v3/search?key=AIzaSyCF0TF8Rb3HaiO4MiRr1zRHcRLfyfol7HI&channelId=UCDF1373UXX4ifVWHgcoKVbw&maxResults=1&order=date&part=snippet');
$result = get_CURL($urlLatestVideo);
$LatestVideoId = $result['items']['0']['id']['videoId'];

//instagram API
$clientID = "17841409893651074";
$accessToken = "IGAAZAnr6azy8hBZAE9DOFdkNzBaeDl3bnF4VGlLc3ZAvejRabEtaRXZAKS1RFUGJkTmxTdWgxdVlfSVdNbG0xa0ZAkZAFoxclhrUFJ4Y2RHZAnpBbXM0Xzl3U3hKaGhxUElzTW1YMVVvMTQ1U052V1V0d09HVzYxZAGhkY3pCa1BRcEV0NAZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAZAnr6azy8hBZAE9DOFdkNzBaeDl3bnF4VGlLc3ZAvejRabEtaRXZAKS1RFUGJkTmxTdWgxdVlfSVdNbG0xa0ZAkZAFoxclhrUFJ4Y2RHZAnpBbXM0Xzl3U3hKaGhxUElzTW1YMVVvMTQ1U052V1V0d09HVzYxZAGhkY3pCa1BRcEV0NAZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

//media IG
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/17956294295729908?fields=media_url&access_token=IGAAZAnr6azy8hBZAE9DOFdkNzBaeDl3bnF4VGlLc3ZAvejRabEtaRXZAKS1RFUGJkTmxTdWgxdVlfSVdNbG0xa0ZAkZAFoxclhrUFJ4Y2RHZAnpBbXM0Xzl3U3hKaGhxUElzTW1YMVVvMTQ1U052V1V0d09HVzYxZAGhkY3pCa1BRcEV0NAZDZD");
$resultGambar2 = get_Curl("https://graph.instagram.com/v22.0/18365200399025636?fields=media_url&access_token=IGAAZAnr6azy8hBZAE9DOFdkNzBaeDl3bnF4VGlLc3ZAvejRabEtaRXZAKS1RFUGJkTmxTdWgxdVlfSVdNbG0xa0ZAkZAFoxclhrUFJ4Y2RHZAnpBbXM0Xzl3U3hKaGhxUElzTW1YMVVvMTQ1U052V1V0d09HVzYxZAGhkY3pCa1BRcEV0NAZDZD");
$resultGambar3 = get_Curl("https://graph.instagram.com/v22.0/17985500464920964?fields=media_url&access_token=IGAAZAnr6azy8hBZAE9DOFdkNzBaeDl3bnF4VGlLc3ZAvejRabEtaRXZAKS1RFUGJkTmxTdWgxdVlfSVdNbG0xa0ZAkZAFoxclhrUFJ4Y2RHZAnpBbXM0Xzl3U3hKaGhxUElzTW1YMVVvMTQ1U052V1V0d09HVzYxZAGhkY3pCa1BRcEV0NAZDZD");


$gambar1 = $resultGambar1['media_url'];
$gambar2 = $resultGambar2['media_url'];
$gambar3 = $resultGambar3['media_url'];

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Elsifani Tri Amanza</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile3.jpeg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Elsifani Tri Amanza</h1>
          <h3 class="lead">Student | Programmer | Youtuber</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>I am a university student with a strong passion for technology and programming. Since discovering the world of code, I've been driven to explore different languages and tools to build useful and creative applications. My curiosity and dedication keep me learning and growing every day in this ever-evolving field.</p>
          </div>
          <div class="col-md-5">
            <p>Outside of academics and coding, I’m also a content creator on YouTube. I enjoy sharing my knowledge and experiences through videos, especially around hobbies, coding, and daily life as a student. For me, creating content is not just about teaching—it's about inspiring and learning together with others.</p>
          </div>
        </div>
      </div>
    </section>


    
<!-- Youtube & instagram -->
<section class="social bg-light" id="social">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Social Media</h2>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
          </div>
          <div class="col-md-8">
            <h5><?= $channelName; ?></h5>
            <bsc><?= $subscriber; ?> Subscriber</p>
            <div class="g-ytsubscribe" data-channelid="UCDF1373UXX4ifVWHgcoKVbw" data-layout="default" data-count="default"></div>
          </div>
        </div>

        
        <div class="row mt-3 pb-3">
          <div class="col">
            <div class="ratio ratio-16x9">
              <iframe 
                src="https://www.youtube.com/embed/<?= $LatestVideoId; ?>?rel=0" 
                title="YouTube video" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
          </div>          
          <div class="col-md-8">
            <h5><?= $usernameIG ?></h5>
            <p><?= $followersIG ?> Followers</p>
          </div>
        </div>

        <div class="row mt-3 pb-3">
          <div class="col">
            <div class="ig-thumbnail">
              <img src="<?= $gambar1; ?>">
            </div>
            <div class="ig-thumbnail">
              <img src="<?= $gambar2; ?>">
            </div>
            <div class="ig-thumbnail">
              <img src="<?= $gambar3; ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    


        <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/7.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">I collaborated with my team to develop a rental website for boarding houses (kos). This project aimed to simplify the search and booking process for students and workers looking for accommodations. I was involved in both the frontend and backend development using PHP, HTML, CSS, and MySQL.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/8.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">I created a movie listing website that fetches film data from the OMDb API. This project helped me understand how to work with external APIs, handle JSON data, and display dynamic content using JavaScript and Bootstrap for a responsive user interface.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/9.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Together with my team, I developed a web-based system for managing and monitoring internship tasks at an institution. The system includes features such as daily agendas, task assignments, progress tracking, and supervisor reviews—streamlining communication and task management between interns and supervisors.</p>
              </div>
            </div>
          </div>   
        </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Got a project idea, collaboration offer, or just want to connect? Feel free to reach out—I’d love to hear from you!</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Ekora No. 35, Padang</li>
              <li class="list-group-item">West Sumatra, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2025.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>  
  </body>
</html>