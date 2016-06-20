<?php
$menu = [
    ['link' =>'/' , 'title' => 'home'],
    ['link' =>'/services', 'title' => 'services'],
    ['link' =>'/news', 'title' => 'News'],
    ['link' =>'/contacs', 'title' => 'Write to us']
];

function showMenu($menuArray){
    for ($i=0; $i<5; $i++){
        echo $i;
        echo '<br>';
}

    }

    showMenu ($menu);
echo '<br>';
echo '<br>';

//$i=0;
    //while ($i<5){
      //      echo $i;
        //    $i++;
          //  echo '<br>';
       // };
?>


<ul>
    <li><a href = "/">Home</a></li>
    <li><a href = "/services">Services</a></li>
    <li><a href = "/news">News</a></li>
    <li><a href = "/contacs">Contacs</a></li>
</ul>