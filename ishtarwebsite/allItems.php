<?php 
include_once "php/config.php";

$sql = mysqli_query($con, "SELECT * FROM items")
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- fonts link  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght,HEXP@160..700,0..100&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/main.css">
   <title>Ishtar</title>
</head>
<body>
   <div class="LodeR"><span class="loader"></span></div>

  <div class="home allitems" id="HomePage allitems">
   <div class="container">
      <nav class="navbar">
         <h2 class="logo">عشتار</h2>
         <ul class="menu-links">
            <li><a href="index.php">الرئيسيه</a></li>
            <li><a href="index.php#servises">الخدمات</a></li>
            <li><a href="#items">العناصر</a></li>
            <li><a href="index.php#call">اتصل بنا</a></li>
         </ul>
      </nav>
   </div>
  </div>

  <!-- start items page  -->
 <div class="itmes allitem" id="items" style="position: relative;">
   <div class="container" style="position:unset;">
      <div class="saerch">
         <input type="search" name="saerch" id="saerch" style="box-shadow: none; border: 1px solid #33333375;"><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
      </div>

   </div>
   <div class="items-box" style="box-shadow: none; display: grid;     grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;      height: 80vh; align-content: space-between;
    justify-content: space-evenly;">

   



<?php 
foreach($sql as $row){
 $price =  $row['UserPrice'] / 1000;
 $images = $row['item_images'];
 $imag = explode(",", $images);
echo '<div class="itme" id="Item" style="width: 300px;
      box-shadow: #727272 1px 1px 9px !important;
      padding: 15px;
      position: relative;
      display: flex;
      flex-direction: column;

      justify-content: space-between;
      align-items: stretch;">
         <a href="showItem.php?item_id='.$row['item_id'].'" class="itme-box" style=" display: block; width: 100%;">
            <img src="php/Orders_images/'.$imag[1].'" alt="" >
         </a>
         <p id="ItemName" >'.$row['item_descrption'].' </p>
         <h2>'.$row['item_title'].' </h2>
         <h5 style="max-width: 100%;
    overflow: hidden;
    direction: rtl;    height: 50px;">'.$row['item_descrption'].'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure illo omnis molestias voluptates, repellat beatae excepturi optio quam iusto unde minus quae aliquid accusantium esse sit soluta consectetur adipisci odio placeat illum est expedita veniam. Assumenda accusamus, doloribus quam illum maiores dolore molestiae similique, minus libero tempore voluptas. Voluptatum error architecto laudantium dolorum possimus obcaecati laborum praesentium adipisci soluta facere? Similique modi asperiores consequatur, voluptate beatae vitae dolor! Ab sit ratione accusamus maxime placeat nulla quo ipsum. Corporis eveniet quo commodi nobis laboriosam similique ea ut, velit aliquam expedita facilis id iusto vitae asperiores inventore, pariatur natus error voluptatibus, mollitia excepturi blanditiis doloribus eum. Molestiae nam inventore, odit cupiditate laboriosam molestias quod architecto similique alias at. Reprehenderit excepturi nostrum temporibus accusantium ratione iure corporis maiores accusamus eius, libero deleniti tempora asperiores numquam rem quo, facilis deserunt quia atque molestiae necessitatibus ipsum ipsa cum vitae. Illo, voluptatem cum aperiam perferendis perspiciatis, enim atque similique sunt, quis voluptates distinctio suscipit ullam debitis voluptate. Vero libero delectus sint facere nesciunt nemo saepe aperiam quibusdam, eaque vel. Delectus atque error autem libero perferendis in, fugit maxime culpa dolor vero provident ipsa omnis totam quis, sequi animi nesciunt deserunt tempora non itaque, sit consectetur? Aspernatur rerum, mollitia dicta id aliquid libero beatae quam hic deserunt sit ipsa enim voluptas voluptatem similique, unde ducimus repellat eaque repudiandae. Pariatur magnam suscipit voluptates dolore eum cupiditate blanditiis placeat sunt officia delectus. Molestiae, facere. Cumque, eum eaque incidunt ipsam quo doloremque quidem, aliquid tempora, sint exercitationem laudantium. Velit expedita pariatur reiciendis vel laborum sit praesentium explicabo accusamus? Incidunt libero laboriosam ut quaerat consectetur nesciunt voluptates odit quas eligendi harum voluptas fugit unde cumque sint praesentium, fugiat impedit et maiores culpa amet illo. Animi repellat dolorum, quo voluptatem dicta totam nihil minus distinctio labore nemo maxime quos aliquid repudiandae culpa asperiores soluta. Asperiores ex reprehenderit laborum quasi repudiandae eaque aspernatur incidunt voluptatem similique numquam illum unde repellendus quo ducimus, voluptate hic fugit obcaecati sint eligendi aperiam doloribus. Debitis laborum labore corrupti? Modi ipsa, blanditiis harum accusantium vel dolore quisquam aspernatur facere non est dolores et, nam porro itaque. Assumenda praesentium provident, laudantium aut numquam quia porro impedit modi molestiae perspiciatis odit tenetur autem necessitatibus at, delectus, adipisci voluptatibus commodi pariatur corrupti animi quos ad dolores. Eveniet sapiente, enim asperiores quisquam neque error molestiae adipisci quasi, quo culpa eligendi cumque sit doloremque id corporis aliquid omnis maxime laboriosam excepturi nostrum? Accusantium laborum quam, rerum voluptatum ut reprehenderit? Enim, sit maiores molestiae, commodi perspiciatis eveniet iusto dolore rerum a nihil perferendis dolorum aliquam animi possimus nostrum! Explicabo minima perspiciatis reiciendis corrupti ex nulla facilis amet, laudantium necessitatibus exercitationem illo eveniet non iure et dolorem asperiores odio. Magnam nam asperiores, culpa consequuntur doloremque quisquam porro ipsam fuga, ipsa fugiat ducimus iste blanditiis rerum, sunt saepe voluptatibus esse facere! Excepturi mollitia quibusdam quo consectetur ab quae aperiam eius cumque repudiandae ad similique perferendis provident, illo vel cum consequatur libero nisi odio nobis modi fugiat pariatur! Quis maiores quas obcaecati nostrum unde amet porro inventore nisi voluptate perspiciatis quasi quisquam pariatur aut optio rem, eaque asperiores non in placeat beatae sequi id! Deleniti vel officiis obcaecati nisi distinctio iure reprehenderit ullam, soluta, ipsam inventore velit quisquam unde quidem nobis ex modi corporis! Mollitia ratione asperiores itaque provident labore debitis? Accusamus quo culpa placeat quidem deleniti quis odio, mollitia totam consectetur? Voluptatibus assumenda, ea velit quisquam eius voluptatem perferendis optio nihil repellendus veniam! Laboriosam obcaecati sapiente nemo tempora aliquam a delectus odit quibusdam, recusandae, labore deserunt mollitia natus necessitatibus maxime debitis reiciendis fuga. Iure aliquid odit ad accusamus? Cupiditate praesentium quos doloribus repellendus magni ea quas quae, accusantium sed velit dolores officiis quisquam. Inventore odio repellat, ut sunt commodi sapiente consequuntur quod id eos minima nesciunt facilis laboriosam repudiandae, pariatur necessitatibus enim deserunt quidem, eveniet magnam illum quos soluta? Facilis at aut sunt perferendis animi vero fuga quisquam fugit ut autem quasi recusandae aspernatur odio dicta iure consequatur explicabo consequuntur, dolorum quo ullam sequi optio. Soluta sed harum quaerat alias totam quasi facilis commodi, est ipsa quisquam illo amet earum eligendi. Similique distinctio quibusdam veritatis quidem esse, atque itaque nam adipisci perspiciatis dolorum rerum maxime veniam mollitia laborum perferendis maiores explicabo labore ipsum ut pariatur quae eum? Dolorem reiciendis officiis id ad illo, officia maxime delectus dignissimos quod quis minima libero aut magnam hic? Consectetur saepe obcaecati placeat deserunt, excepturi praesentium explicabo, corporis ipsam enim quam dicta ipsum pariatur necessitatibus, adipisci recusandae est labore rem ad? Quia facilis eaque necessitatibus commodi architecto. Dolorum numquam quam quo error eaque quae amet similique delectus doloribus cum culpa consequatur, aut eligendi incidunt nostrum laborum obcaecati nemo quas dignissimos natus sapiente! Itaque ab accusantium veniam in sint quo dolore ipsum. Consectetur voluptas nulla saepe optio veritatis? Fugiat laboriosam maxime officiis reiciendis quo distinctio ducimus expedita atque consectetur pariatur blanditiis vel sint harum exercitationem recusandae, laudantium dignissimos sit temporibus molestias ab cupiditate labore saepe, sapiente unde! Omnis nesciunt ad consequuntur doloremque eligendi, ex repellat consequatur vitae nisi, consectetur suscipit exercitationem reiciendis aliquam quod debitis minima fuga assumenda voluptates architecto iure quibusdam numquam nemo saepe. Ratione numquam vel illo quas ipsam nostrum fugit iusto dignissimos perferendis explicabo, laudantium sequi necessitatibus modi cumque aliquam quisquam incidunt voluptatibus sit reprehenderit iure eaque deleniti quam aut? Sequi, minus recusandae iure ducimus saepe ipsum nostrum beatae id suscipit soluta obcaecati, dolore quae alias excepturi asperiores omnis a voluptatum. Mollitia officiis nulla officia voluptatem deserunt iusto adipisci quasi maiores vel, facere, pariatur impedit quidem numquam a, eligendi delectus earum inventore repellendus dolores? Animi expedita temporibus quisquam, quod atque veritatis nobis ipsam in eaque magnam itaque consequuntur suscipit culpa facere. Eveniet quia, vitae ipsa, recusandae earum omnis culpa doloribus hic mollitia fugiat quae voluptates ratione sit totam atque! Facilis tempora, enim, magnam non a itaque at iste modi error facere voluptatibus dignissimos unde dolores delectus ex distinctio, voluptatem temporibus dicta nam obcaecati necessitatibus officiis sapiente praesentium adipisci? Laboriosam dolor magnam eius similique omnis excepturi quam eaque illo voluptate. Error quaerat beatae praesentium hic perspiciatis obcaecati iusto, voluptate blanditiis.
 </h5>
         <div class="price-show-item" style="display: flex; align-items: center; justify-content: space-between;">
            <span style="font-size: 25px;">'.$price.'.000 IQD</span>
            <a href="showItem.php?item_id='.$row['item_id'].' " style="    display: block;
            text-decoration: none;
            color: #fff;
            background: var(--main-color);
            padding: 10px;
            font-size: 18px;
            border-radius: 17px 0 0 0;
        ">links</a>
         </div>
      </div>';
}
?>



   











   </div>
</div>
<!-- end items page  -->



   <script src="js/main.js"></script>
</body>
</html>