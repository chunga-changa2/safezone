<div class="header">
    <div class="logo">
        <div class="beta-test">Beta test</div>
        <a href="/">
            <img src="../img/logo.png" alt="logo">
        </a>
    </div>
    <nav>
     <ul>
         <li class='home'><a href="/"><?php echo $nav[0] ?></a></li>
         <li class='servis'><a href="#top"><?php echo $nav[1] ?></a></li>
         <li class='about'><?php echo $nav[2] ?></li>
         <li class='solution'><?php echo $nav[3] ?></li>
         <li class='promo'><?php echo $nav[4] ?></li>
         <li data-hystmodal="#myModal" class='contact'><?php echo $nav[5] ?></li>
         <li>
             <button>
                 <a href="tel:<?php echo $phonenamber?>">
                 <span><?php echo $phonenamber?></span>
                 </a>
             </button>
         </li>
     </ul>
</div>