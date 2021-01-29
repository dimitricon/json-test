<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Underscores
*/

get_header();
?>

<main id="primary" class="site-main pt-md-5">
  
  <?php
  $url = "https://v3-static.supadu.io/dev/products/9780060577315.json";
  
  // $data = json_decode($result, true);
  // foreach ($posts as $post) {}
  
  $json = file_get_contents($url);
  $data = json_decode($json, TRUE);
  
  $image = $data['image'];
  $title = $data['title'];
  $description = $data['description'];
  $contributors = $data['contributors'][1]['bio'];
  $prices = $data['prices'][0]['amount'];
  $sale_date = $data['sale_date'];
  $reviews = $data['reviews'][0];
  $retailers = $data['retailers'];
  
  // // Decode JSON data to PHP associative array
  // $arr = json_decode($json, true);
  // 
  // // Loop through the associative array
  // foreach($arr as $key=>$value){
  //   echo $key . "=>" . $value . "<br>";
  // }
  // echo "<hr>";
  // // Decode JSON data to PHP object
  // $obj = json_decode($data);
  // 
  // // Loop through the object
  // foreach($obj as $key=>$value){
  //   echo $key . "=>" . $value . "<br>";
  // }
  
  ?>
  
  <div class="container pt-5">
    <div class="row">
      
      <div class="col-auto mb-3 mb-md-0">                  
        <img class="book" src="<?php print_r($image); ?>" width="300">
      </div>
      
      <div class="col">
        <h2><?php print_r($title); ?></h2>
        <p><?php print_r($description); ?></p>
        <p><?php print_r($contributors); ?></p>
        <p><?php print_r($prices); ?></p>
        <p><?php print_r($sale_date); ?></p>
        <p><?php print_r($reviews); ?></p>
        <p><?php print_r($retailers); ?></p>
      </div>
      
    </div>    
  </div>
  
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
