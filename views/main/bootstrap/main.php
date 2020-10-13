    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner_center clearfix">
                <h1 class="h_logo_box">
                    <a href="<?php echo base_url()?>"><img src="/assets/images/head-logo.png" alt="맥쿰 로고" class="h_logo"></a>
                </h1>
                <nav class="gnb js-gnb-panel">
                    <ul class="gnb_list">
                        <li class="gnb_item js-gnb-item">
                            <a href="#sectMcCoom" class="gnb_link js-gnb-link">매쿰</a>
                        </li>
                        <li class="gnb_item js-gnb-item">
                            <a href="#sectFeatures" class="gnb_link js-gnb-link">특장점</a>
                        </li>
                        <li class="gnb_item js-gnb-item">
                            <a href="#sectEfficacy" class="gnb_link js-gnb-link">원리 및 사용법</a>
                        </li>
                        <li class="gnb_item js-gnb-item">
                            <a href="#sectSkintype" class="gnb_link js-gnb-link">추천</a>
                        </li>
                        <li class="gnb_item">
                            <a href="<?php echo base_url('/main/hospital_list');?>" class="gnb_link ">병원찾기</a>
                        </li>
                        <?php if ($this->member->is_admin() === 'super') { ?>
                        <li class="gnb_item"><a href="<?php echo base_url('login/logout'); ?>" class="gnb_link ">Log Out</a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <button type="button" class="h_gnb_button js-gnb-button open"><img src="/assets/images/h_icon_ham.svg" alt="네비게이션 버튼" class="icon"></button>
            </div>
        </header>

        <!-- main -->
        <div class="main_cont">
            <!-- 자연스럽게 차오르는 피부자신감 McCoom -->
            <section class="sect_bnr_title">
                <h2 class="blind">자연스럽게 차오르는 피부자신감 McCoom </h2>
                <div class="img_box inner_center">
                    <img src="/assets/images/sect01-main.jpg" alt="자연스럽게 차오르는 피부자신감 McCoom" class="img">
                </div>
            </section>
            <!-- McCoom? -->
            <section class="sect_mccoom" id="sectMcCoom">
                <div class="inner_center inner_container">
                    <div class="txt_wrap">
                        <div class="txt_container">
                            <h2 class="title_mccoom fadein_ani_ready">McCoom(매쿰)?</h2>
                            <div class="txt_mccoom fadein_ani_ready">
                                <span class="emph_mccoom">자연스럽게 차오르는 피부 자신감 매쿰</span> <br>
                                피부과에서 만나볼 수 있는 더말 코스메틱으로 <br>
                                자연스럽게 매끈하고 광택 있는 피부로 장시간 유지시켜 줍니다. <br>
                            </div>
                        </div>
                    </div>
                    <div class="img_box_mccoom">
                        <img src="/assets/images/sect02-item.png" alt="매쿰상품이미지" class="img_mccoom_item slide_right_ready">
                    </div>
                </div>
            </section>
            <!-- 특장점 -->
            <section class="sect_features" id="sectFeatures">
                <h2 class="title01"><span class="title01_txt">특장점</span></h2>
                <div class="img_container_features">
                    <div class="img_box fadein_ani_ready">
                        <img src="/assets/images/sect03-main.jpg" alt="mccoom 특장점" class="img">
                    </div>
                    <div class="blind">
                        생체적합성물질, PLLA성분, Micro입자, 장시간 지속력, 뛰어난 흡수력
                    </div>
                </div>
                <div class="features_icon_container">
                    <ul class="features_icon_list">
                        <li class="features_icon_item fadein_ani_ready">
                            <div class="features_icon_box">
                                <img src="/assets/images/sect03-icon01.png" alt="아이콘" class="icon">
                            </div>
                            <div class="features_icon_txt_box">
                                <div class="txt_feature01">일회용 VIAL</div>
                                <div class="txt_feature02">[안전하고 위생적]</div>
                            </div>
                        </li>
                        <li class="features_icon_item fadein_ani_ready">
                            <div class="features_icon_box">
                                <img src="/assets/images/sect03-icon02.png" alt="아이콘" class="icon">
                            </div>
                            <div class="features_icon_txt_box">
                                <div class="txt_feature01">입자 크기 30 µm</div>
                                <div class="txt_feature02">[생분해 용이]</div>
                            </div>
                        </li>
                        <li class="features_icon_item fadein_ani_ready">
                            <div class="features_icon_box">
                                <img src="/assets/images/sect03-icon03.png" alt="아이콘" class="icon">
                            </div>
                            <div class="features_icon_txt_box">
                                <div class="txt_feature01">PLLA 성분</div>
                                <div class="txt_feature02">[광택있는 피부]</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- 사용 및 효능 원리 -->
            <section class="sect_efficacy" id="sectEfficacy">
                <h2 class="title01"><span class="title01_txt">사용 및 효능 원리</span></h2>
                <div class="inner_container inner_center clearfix">
                    <div class="img_box_efficacy">
                        <img src="/assets/images/sect04-item.png" alt="매쿰 상품이미지" class="img_efficacy">
                    </div>
                    <div class="txt_box_efficacy">
                        <h3 class="title_efficacy">
                            <span class="title_txt_efficacy01 slide_right_ready">Needling시술과 함께 사용하여</span>
                            <span class="title_txt_efficacy02 slide_right_ready">부작용은 낮추고 효과는 극대화!</span>
                        </h3>
                        <ul class="efficacy_list">
                            <li class="efficacy_item slide_right_ready">
                                <span class="efficacy_num"><img src="/assets/images/sect04-num01.png" alt="1" class="img"></span>
                                <span class="efficacy_txt">원하는 특정 부위에 시술 가능</span>
                            </li>
                            <li class="efficacy_item slide_right_ready">
                                <span class="efficacy_num"><img src="/assets/images/sect04-num02.png" alt="2" class="img"></span>
                                <span class="efficacy_txt">필요한 피부층에 정확하게</span>
                            </li>
                            <li class="efficacy_item slide_right_ready">
                                <span class="efficacy_num"><img src="/assets/images/sect04-num03.png" alt="3" class="img"></span>
                                <span class="efficacy_txt">균일한 도포로 효과 증대</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- FAQ -->
            <section class="sect_faq inner_center">
                <h2 class="title01"><span class="title01_txt">FAQ</span></h2>
                <div class="faq_container fadein_ani_ready">
                    <ul class="faq_list">
                        <!-- 1 -->
                        <li class="faq_item">
                            <div class="question_box clearfix">
                                <span class="question_icon">Q.</span>
                                <span class="question_txt">권장 시술 횟수는?</span>
                            </div>
                            <div class="answer_box clearfix">
                                <span class="answer_icon">A.</span>
                                <span class="answer_txt">
                                    1번의 시술로도 효과를 볼 수 있지만, <br>
                                    3회 시술을 선택할 경우 더욱 장기간 효과를 볼 수 있습니다.
                                </span>
                            </div>
                        </li>
                        <!-- 2 -->
                        <li class="faq_item">
                            <div class="question_box clearfix">
                                <span class="question_icon">Q.</span>
                                <span class="question_txt">시술 간격은?</span>
                            </div>
                            <div class="answer_box clearfix">
                                <span class="answer_icon">A.</span>
                                <span class="answer_txt">4-6주의 간격으로 시술합니다.</span>
                            </div>
                        </li>
                        <!-- 3 -->
                        <li class="faq_item">
                            <div class="question_box clearfix">
                                <span class="question_icon">Q.</span>
                                <span class="question_txt">즉시 효과가 나타나나요? 시술의 효과가 보이는 시점은?</span>
                            </div>
                            <div class="answer_box clearfix">
                                <span class="answer_icon">A.</span>
                                <span class="answer_txt">시술 후 3주부터 조금씩 효과가 보이기 시작하며, 6주 후에 두드러집니다.</span>
                            </div>
                        </li>
                        <!-- 4 -->
                        <li class="faq_item">
                            <div class="question_box clearfix">
                                <span class="question_icon">Q.</span>
                                <span class="question_txt">시술의 지속 효과는?</span>
                            </div>
                            <div class="answer_box clearfix">
                                <span class="answer_icon">A.</span>
                                <span class="answer_txt">1년에서 2년 까지 지속됩니다.</span>
                            </div>
                        </li>
                        <!-- 5 -->
                        <li class="faq_item">
                            <div class="question_box clearfix">
                                <span class="question_icon">Q.</span>
                                <span class="question_txt">시술 후 주의사항</span>
                            </div>
                            <div class="answer_box clearfix">
                                <span class="answer_icon">A.</span>
                                <span class="answer_txt"> 시술 후 가벼운 항생제 연고나 재생 크림을 사용합니다. 시술 당일은 가급적 세안을 피합니다.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="img_paper"></div>
                    <div class="img_clip"></div>
                </div>
            </section>
            <!-- 매쿰이 필요한 피부타입 -->
            <section class="sect_skintype inner_container" id="sectSkintype">
                <h2 class="title01">
                    <span class="title01_txt">
                        <span class="title01_emph">매쿰</span>이 필요한 피부타입
                    </span>
                </h2>
                <div class="sub_title01">이런 분들에게 효과적입니다.</div>
                <div class="inner_container">
                    <ul class="skintype_list">
                        <li class="skintype_item fadein_ani_ready">
                            <div class="skintype_img_box">
                                <img src="/assets/images/sect06-skin01.png" alt="피부이미지" class="img">
                            </div>
                            <div class="skintype_txt_box fadein_ani_ready">
                                흉터가 있는 피부
                            </div>
                        </li>
                        <li class="skintype_item fadein_ani_ready">
                            <div class="skintype_img_box">
                                <img src="/assets/images/sect06-skin02.png" alt="피부이미지" class="img">
                            </div>
                            <div class="skintype_txt_box fadein_ani_ready">
                                잔주름이 <br> 
                                걱정되는 피부
                            </div>
                        </li>
                        <li class="skintype_item fadein_ani_ready">
                            <div class="skintype_img_box">
                                <img src="/assets/images/sect06-skin03.png" alt="피부이미지" class="img">
                            </div>
                            <div class="skintype_txt_box fadein_ani_ready">
                                수분이 부족하여 <br> 
                                푸석푸석한 피부
                            </div>
                        </li>
                        <li class="skintype_item fadein_ani_ready">
                            <div class="skintype_img_box">
                                <img src="/assets/images/sect06-skin04.png" alt="피부이미지" class="img">
                            </div>
                            <div class="skintype_txt_box fadein_ani_ready">
                                모공이 도드라져 <br>
                                보이는 피부
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- footer -->
        <footer class="footer">
            <div class="footer_inner_center">
                <div class="logo_img"><img src="/assets/images/logo_jeisys.svg" alt="제이시스 로고" class="img"></div>
                <div class="txt_container">
                    <div class="txt">(주)제이시스메디칼 | 대표명 : 강동환 | 사업자등록번호 : 119-81-75293</div>
                    <div class="txt">주소 : 서울시 금천구 가산동 481-11 대륭테크노타워 8차 307,308,401,410 | TEL : 02.2603.6417</div>
                    <div class="txt">Mail : marketing@jeisys.com</div>
                   
                </div>
                <div class="sns_box">
                    <a href="https://www.youtube.com/channel/UCqAKu5loQ8arXmiVQ-SFXQQ?view_as=subscriber" class="sns_link sns_youtube"><img src="/assets/images/logo_youtube.svg" alt="제이시스 유튜브" class="img"></a>
                    <a href="https://www.instagram.com/jeisysmedical_kr/" class="sns_link sns_instagram"><img src="/assets/images/logo_instagram.svg" alt="제이시스 인스타그램" class="img"></a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        $(function() {
            //모바일 헤더 여닫기
            var $gnbPanel = $('.js-gnb-panel')
            var $gnbBtn = $('.js-gnb-button')
            function openGnb(){
                $gnbPanel.slideDown(400,function(){
                    $gnbBtn.removeClass('open');
                    $(this).stop(true,true);
                });
            }
            function closeGnb(){
                $gnbPanel.slideUp(400,function(){
                    $gnbBtn.addClass('open');
                    $(this).stop(true,true);
                    $gnbPanel.css('display','');
                });
            }
            
            $gnbBtn.on('click',function(){
                var gnbBtnClass = $(this).hasClass('open');
                if(gnbBtnClass == true){
                    openGnb();
                }else{
                    closeGnb();
                }
                
            });

            // header 메뉴 클릭시 scroll animation
            $(".js-gnb-item:not('.noscroll')>a").on("click", function() {
                var menuId = $(this).attr('href');
                var scrollName = $(menuId).offset().top;
                $('html,body').animate({
                    scrollTop: scrollName - 100
                }, 400, 'swing');

                if(!$gnbBtn.hasClass('open')) closeGnb();
                
                return false;
            });

            $(window).scroll(function() {
                //스크롤시 요소 fadeIn animation
                $(".fadein_ani_ready, .slide_right_ready, .slide_left_ready").each(function() {
                    var paragraphMiddle = $(this).offset().top + (0.4 * $(this).height());
                    var windowBottom = $(window).scrollTop() + $(window).height();

                    if (paragraphMiddle < windowBottom) {
                        $(this).addClass("fadein_ani");
                    }
                });
            });

        });

        $(window).load(function(){
            $(window).scroll();
        });
        
        $(document).ready(function() {
                <?php if(element('section',$view)){?>
                    var offset = $('#<?php echo element("section",$view);?>').offset();
                    $('html, body').animate({scrollTop : offset.top-40}, 40);
                <?php }  ?>
                
            });
    </script>
