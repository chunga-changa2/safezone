<div class="solution-wrapp">
    <div class="head-text-box">
        <p>Solution</p>
    </div>
    <div class="head-text-solition">
        <p>Whether you’re upgrading an existing system, starting from scratch or have a system malfunction – Safezone your comprehensive solution.</p>
    </div>
    <!--  -->
    <div class="solution-box">
        <!--  -->
        <?php
            for ($s = 0; $s < count($sol_name_img); $s++) {
                print_r("
                <div class='solution-content-box'>
                <div class='solution-left'>
                    <div class='img-box color_id{$s}'>
                        <img src='../img/{$sol_name_img[$s]}' alt='img'>
                    </div>
                </div>
                <div class='solution-right'>
                    <div class='head-right-solution'>
                    <p>{$sol_head[$s]}</p>
                    </div>
                <div class='content-right-solution'>
                    {$sol_content[$s]}
                </div>
                <button data-hystmodal='#myModal_sol{$s}' class='solution id='button_id{$s}'>read more</button>
            </div>
        </div>
                ");
            }
        ?>
</div>