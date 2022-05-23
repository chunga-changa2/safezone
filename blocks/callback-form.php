<div class="hystmodal" id="myModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <!-- <button data-hystclose class="hystmodal__close">Закрыть</button> -->
            <!-- Ваш HTML код модального окна -->






            <div class="calbac-form-box">
                <div class="head-calback-form">
                    <p data-hystmodal="#myModal2">Calback form</p>
                    <div data-hystclose class="close-button-calback-form">
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="calback-form">
                    <div class="left-form-calback">
                        <img src="../img/calback-img.png" alt="img">
                        <p>Muhammad Ali</p>
                        <span>online</span>
                    </div>
                    <div class="right-form-calback">
                        <p>Fill out the form below and as soon as we receive it we will call you back and answer your questions.</p>
                        <form action="" id="form-calback">
                            <input type="tel" maxlength="12" name="phone" placeholder="phone number" id="phone">
                            <input type="submit" value="Send"><br>
                            <input type="checkbox" id="scales" checked>
                            <label for="scales" id="lable">I agree to the processing of personal data indicated by the</label> <span data-hystmodal="#myModal2">link</span>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="social-form">
                    <p>You can contact us on social networks or by phone number <?php echo $phonenamber ?></p>




                    <!-- ------------------- -->

                    <div class="social-form">
        <?php
            if ($socVK == 1) {
                echo "<div class='sicial-form-box'>
                <a href='$linkVK' target='blank'>
                <svg viewBox='0 0 363 363' class='vk-form'>
                    <path d='M347.506,240.442c-7.91-9.495-16.899-18.005-25.592-26.235c-3.091-2.927-6.287-5.953-9.368-8.962 c-8.845-8.648-9.167-11.897-2.164-21.72c4.845-6.771,9.982-13.551,14.95-20.108c4.506-5.949,9.166-12.101,13.632-18.273l0.917-1.269 c8.536-11.811,17.364-24.024,22.062-38.757c1.22-3.887,2.501-9.607-0.428-14.39c-2.927-4.779-8.605-6.237-12.622-6.918 c-1.987-0.337-3.96-0.383-5.791-0.383l-55.901-0.04l-0.462-0.004c-8.452,0-14.148,3.983-17.412,12.178 c-3.116,7.83-6.539,16.168-10.445,24.096c-7.773,15.787-17.645,33.97-31.93,49.135l-0.604,0.645 c-1.687,1.813-3.598,3.866-4.995,3.866c-0.214,0-0.447-0.041-0.711-0.124c-2.959-1.153-4.945-8.316-4.855-11.648 c0.001-0.046,0.002-0.092,0.002-0.138l-0.039-64.61c0-0.224-0.016-0.446-0.045-0.668c-1.422-10.503-4.572-17.041-16.474-19.372 c-0.316-0.063-0.639-0.094-0.961-0.094h-58.126c-9.47,0-14.688,3.849-19.593,9.61c-1.324,1.54-4.08,4.746-2.714,8.635	c1.386,3.947,5.885,4.791,7.35,5.065c7.272,1.384,11.371,5.832,12.532,13.604c2.027,13.496,2.276,27.901,0.784,45.334 c-0.416,4.845-1.239,8.587-2.595,11.784c-0.315,0.746-1.432,3.181-2.571,3.182c-0.362,0-1.409-0.142-3.316-1.456 c-4.509-3.089-7.808-7.497-11.654-12.942c-13.084-18.491-24.065-38.861-33.575-62.288c-3.527-8.624-10.114-13.452-18.556-13.594 c-9.276-0.141-17.686-0.209-25.707-0.209c-8.764,0-16.889,0.081-24.823,0.246C8.914,83.74,4.216,85.776,1.744,89.676	c-2.476,3.903-2.315,9.03,0.479,15.236c22.366,49.723,42.645,85.876,65.755,117.228c16.193,21.938,32.435,37.123,51.109,47.784 c19.674,11.255,41.722,16.727,67.402,16.727c2.911,0,5.921-0.071,8.956-0.213c14.922-0.727,20.458-6.128,21.158-20.657 c0.333-7.425,1.145-15.212,4.795-21.853c2.304-4.184,4.452-4.184,5.158-4.184c1.36,0,3.046,0.626,4.857,1.799	c3.248,2.12,6.033,4.96,8.316,7.441c2.149,2.357,4.274,4.738,6.401,7.12c4.59,5.141,9.336,10.456,14.294,15.497	c10.852,11.041,22.807,15.897,36.538,14.843h51.252c0.109,0,0.219-0.004,0.328-0.011c5.107-0.337,9.53-3.17,12.135-7.772 c3.227-5.701,3.162-12.974-0.174-19.46C356.718,251.867,351.808,245.601,347.506,240.442z'/>
                </svg>
                </a>
            </div>";
            } else {
                echo "";
            }
        ?>

        <!--  -->

        <?php
            if ($socTwitter == 1) {
                echo "<div class='sicial-form-box'>
                    <a href='$linkTwitter' target='blank'>
                        <svg viewBox='0 0 310 310' class='twitter-form'><g>
                            <path id='XMLID_827_' d='M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                            c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                            c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                            C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                            c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                            c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                            c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                            c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                            c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                            c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                            c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                            C307.394,57.037,305.009,56.486,302.973,57.388z'/>
                        </svg>
                    </a>
                </div>";
            } else {
                echo "";
            }
        ?>

        <!--  -->

        <?php
            if ($socFacebook == 1) {
                echo "<div class='sicial-form-box'>
                    <a href='$linkFacebook' target='blank'>
                        <svg viewBox='0 0 310 310'><g>
                            <path d='M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064 c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996	V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545	C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703 c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z'/>
                        </svg>
                    </a>
                </div>";
            } else {
                echo "";
            }
        ?>

        <!--  -->

        <?php
            if ($socYT == 1) {
                echo "<div class='sicial-form-box'>
                        <a href='$linkYT' target='blank'>
                        <svg viewBox='0 0 461.001 461.001' class='yt-form'><g>
                            <path d='M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728	c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607	c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z'/>
                        </svg>
                        </a>
                    </div>";
                } else {
                    echo "";
                }
        ?>

        <!--  -->

        <?php
            if ($socInstagram == 1) {
                echo "
                <div class='sicial-form-box'>
                    <a href='$linkInstagram' target='blank'>
                        <svg viewBox='0 0 256 256'>
                            <path d='M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z'>
                            </path>
                        </svg>
                    </a>
                </div>";
                } else {
                    echo "";
                }
            ?>

        <!--  -->

        <?php
        
        if ($socTelegram == 1) {
            echo "<div class='sicial-form-box'>
                <a href='$linkTelegram' target='blank'>
                <svg viewBox='0 0 24 24' class='telegram-form'><path d='m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z'/></svg>
                </a>
                </div>";
            } else {
               echo "";
           }
        ?>
    </div>









                    <!-- ------------------- -->
                </div>
            </div>























        </div>
    </div>
</div>

<div class="hystmodal" id="myModal2" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <!-- <button data-hystclose class="hystmodal__close">Закрыть</button> -->
            <!-- Ваш HTML код модального окна -->
            <div class="privacy-policy-form">
                <div class="head-privacy-policy-form">
                    <p>Privacy Policy</p>
                    <div data-hystmodal="#myModal" class="close-privacy-policy-form">
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="content-privace-policy-form">
                    <p>safezone.nyc website administration is obliged to maintain your privacy on the Internet. We pay great attention to securing the data you provided to us. Our privacy policy is based on the General Data Protection Regulation (GDPR) of the European Union. The purposes, for which we collect your personal data are: improvement of our service, communication with visitors to this site, providing services associated with the website’s specialization, , and for other actions listed below.</p>

                    <p> Personal data storage and processing</p>

                    <p> We collect and process your personal data only with your willing consent. With your permission, we can collect and process the following data: phone number, . Collection and processing of your personal information is carried out in accordance with the laws of the European Union and the usa.</p>

                    <p>Data storage, alteration, and removal</p>

                    <p>The user, who has provided safezone.nyc with their personal data, has the right for their alteration and removal, as well as the right to recall the agreement to data processing. Time, during which your personal data will be stored is: 60 months. After finishing with the processing of your personal data, the website’s administration will permanently delete it. To access your personal data, you can contact the administration on: office@safezone.nyc. We will be able to pass your data to a third party only with your willing consent. If the data was transferred to a third party, which is not associated with our organization, we cannot perform any changes to that data.</p>

                    <p>Processing of visiting technical data</p>

                    <p>Records of your IP address, time of visit, browser settings, operational system and other technical information is saved in the database when you visit safezone.nyc. This data is necessary for the correct display of the website’s content. It is impossible to identify the person of the visitor using this data.</p>

                    <p>Children’s personal information</p>

                    <p>If you are a parent or a legal guardian of an underage child, and you know that the child has provided us with their personal information without your consent, please contact us on: office@safezone.nyc. It is forbidden to enter personal data of underage users without the agreement of parents or lawful guardians.</p>

                    <p>Cookies processing</p>

                    <p>We use cookie files for the correct display of the website’s content and for the convenience of browsing safezone.nyc. They are small files, that are stored on your device. They help the website to remember information about you, such as in which language you use the website and which pages have you already opened. This information will be useful in the next visit. Thanks to cookie files, the website’s browsing becomes much more convenient. You can learn more about these files here. You can set up cookies reception and blocking in your browser yourself. Inability to receive cookie files may limit the functionality of the website.</p>

                    <p>Processing of personal data by other services</p>

                    <p>This website uses third-party online services, which perform data collecting, independent from us. Such services include: Google Analytics.</p>

                    <p>Data collected by these services may be provided to other services within those organizations. They can use the data for advertising personalization of their own advertising network. You can learn about user agreements of those organizations on their websites. You can also refuse their collection of your personal data. For example, Google Analytics Opt-out Browser Add-on can be found here . We do not pass any personal data to other organizations or services, which are not listed in this privacy policy. As an exception, the collected data may be provided on a lawful request of state authorities, that are authorized to request such information.</p>

                    <p>Links to other websites</p>

                    <p>Our website safezone.nyc may contain links to other websites, which are not under our control. We are not responsible for the content of these websites. We recommend you familiarize yourself with the privacy policy of every website that you visit, if such policy exists.</p>

                    <p>Changes to the privacy policy</p>

                    <p>From time to time, our website safezone.nyc may update our privacy policy. We inform about any changes to the privacy policy, placed on this webpage. We are monitoring any changes in legislation, which is related to personal data in European Union and usa. If you have entered any of your personal data on our website, we will inform you about the changes in our privacy policy. If your personal data, and more specifically, your contact information was entered incorrectly, we will not be able to contact you.</p>

                    <p>Feedback and final clauses</p>

                    <p>You can contact the administration of safezone.nyc regarding any questions related to privacy policy on: office@safezone.nyc, or by filling a contact form specified in a corresponding section of this website. If you do not agree with this privacy policy, you cannot use the services of safezone.nyc. In this case you should avoid visiting our website.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ====================================================== -->



<?php

    for ($i = 0; $i < count($array); $i++) {
        print_r("
        <div class='hystmodal' id='myModal_e{$i}' aria-hidden='true'>
            <div class='hystmodal__wrap'>
                <div class='hystmodal__window' role='dialog' aria-modal='true'>
                <div class='privacy-policy-form'>
                <div class='head-privacy-policy-form'>
                    <p>{$array[$i]}</p>
                    <div data-hystclose class='close-privacy-policy-form'>
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class='content-privace-policy-form'>
                    {$array_text[$i]}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
        ");
    }
?>

<!-- ====================================================== -->