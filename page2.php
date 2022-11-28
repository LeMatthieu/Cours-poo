<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
    $textcolor="text-white";
    $couleur="success";
    $texte="";
    //var_dump($_GET['data'] );
    if($_GET['data'] == "UnePetiteCotelette?" || $_GET['data'] == "UnpetitTofu?"){
        
        $texte=$_GET["data"];
        $couleur="success";
    }
    else {
        $couleur=$_GET['data'];
        $texte="";
    }
    switch ($couleur) {
      case 'primary':
        $textcolor="text-white";
        break;
        case 'secondary':
          $textcolor="text-white";
          break;
          case 'success':
            $textcolor="text-white";
            break;
            case 'danger':
              $textcolor="text-white";
              break;
              case 'warning':
                $textcolor="text-white";
                break;
                case 'info':
                  $textcolor="text-white";
                  break;
                  case 'light':
                    $textcolor="text-dark";
                    break;
                    case 'dark':
                      $textcolor="text-white";
                      break;
                      case 'info':
                        $textcolor="text-dark";
                        break;
                        case 'link':
                          $textcolor="text-dark";
                          break;
      default:
        echo "erreur switchcase";
        break;
    }
    ?>
<header> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-<?=$couleur?>">
  <a class="navbar-brand ms-5" href="#">Bootstrap Color</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item bg-success">
        <a class="nav-link <?=$textcolor?> " href="page1.php?data=primary">primary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=secondary">Secondary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=success">success</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=danger">Danger</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=warning">Warning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=info">info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=light">light</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=dark">dark</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=$textcolor?>" href="page1.php?data=link">link</a>
      </li>
    </ul>
  </div>
</nav>
</header>
    <div class="container-fluid mt-5 ms-5">
   
    <h1>Liens Get</h1>
    <a href="page1.php?data=UnpetitTofu?">je suis vegan</a>
    <br>
    <a href="">Je suis carnivore</a>
    <?=$texte?>
    <br>
    <button type="button" class="btn btn-primary btn-lg ms-5 mt-5">Choisir un theme</button>
    </div>
    
   
</body>
</html>