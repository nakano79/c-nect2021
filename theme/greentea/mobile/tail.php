<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
		</div>
		<?php if (!defined("_DONT_WRAP_IN_CONTAINER_")) { ?>
	    <aside id="con_right">
	        <?php echo outlogin('theme/basic'); // 로그인 ?>

	        <ul class="hd_nb">
			    <li><a href="<?php echo G5_BBS_URL ?>/faq.php"><i class="fa fa-question-circle"></i> 자주묻는 질문</a></li>
			    <li><a href="<?php echo G5_BBS_URL ?>/qalist.php"><i class="fa fa-comments"></i> 1:1문의</a></li>
			    <li class="hd_visit">
			        <a href="<?php echo G5_BBS_URL ?>/current_connect.php"><i class="fa fa-users"></i> 접속자 <span class="visit_num"><?php echo connect("theme/basic"); // 현재 접속자수 ?></span></a>
			        <button class="visit_btn visit_open"><span class="sound_only">접속자집계 보기</span></button>
			        <div class="open_area oa_open oa_close">
			            <?php echo visit("theme/basic"); // 방문자수 ?>
			        </div>
			    </li>
			    <li><a href="<?php echo G5_BBS_URL ?>/new.php"><i class="fa fa-history"></i> 새글</a></li>
			</ul>

			<?php echo poll('theme/basic'); // 설문조사 ?>
	    </aside>
		</div><!-- } container_inner 끝 -->
	</div><!-- } container 끝 -->
</div><!-- } wrapper 끝 -->
<?php } ?>


<div id="ft">
    <div id="ft_copy">
        <div id="ft_company">
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
        </div>
        Copyright &copy; <b>c-nect.kro.kr</b> All rights reserved.<br>
        <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    </div>

    <script>
    $(function() {
    	// 폰트 리사이즈 쿠키있으면 실행
        font_resize("html_wrap", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>


<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
