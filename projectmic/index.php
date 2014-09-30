<?php 

if($_SERVER['HTTP_HOST'] == "paulltan.org" || $_SERVER['HTTP_HOST'] == "www.paulltan.org"){
	include('fb.php');
	exit();
}

if(!isset($_GET['lang'])){
	$_GET['lang'] = "en";
}

$lang = array();
switch($_GET['lang']){
	case "en":
		$lang['title'] = "BROKERY";
		$lang['lang_cap'] = "Language";
		$lang['home']= "Home";
		$lang['abt_us']= "About Us";
		$lang['reg_cap']= "Registration";
		$lang['login']= "Login";
		$lang['userid']= "UserID";
		$lang['password']= "Password";
		$lang['val_code']= "Validation Code";
		$lang['login_btn']= "LOGIN";
		$lang['livemkcap'] = "Live Market Prices";
		$lang['description']  = "<li class=\"adv_01\">
    <p><span>User Friendly</span></p>
    <p>Immediate Execution</p>
  </li>
  <li class=\"adv_02\">
    <p>No <span>Commission</span></p>
    <p>No Interest</p>
    <p>No Overnight Swap Cost</p>
  </li>
  <li class=\"adv_03\">
    <p>No Hidden Fees</p>
    <p>No Exchange <br><span>Conversion Loss</san></p>
  </li>
  <li class=\"adv_04\">
    <p>No Slippage</p>
    <p>No <span>Re-quote</span></p>
  </li>
  <li class=\"adv_05\">
    <p>Competitive Spreads</p>
    <p><span>Guaranteed Stop Loss</span></p>
  </li>";
		$lang['bottom_msg']  = "<h2>Our Platform</h2>
    <p>We aim to make the user experience as smooth and easy as possible with a customisable trading platform which we can access via the web.</p>
    <h2>Customer Support</h2>
    <p><span class=\"gray\">Need Help?</span><br/>Feel free to contact our helpdesk</p><p class=\"orange\">+639081876052</p> 
  </div>
  <div class=\"space\"></div>
  <div class=\"footer\"><span>&copy; Copyrights 2011. All Right reserved</span>";
	break;
	case "ch":
		$lang['title'] = "BROKERY";
		$lang['lang_cap'] = "語言";
		$lang['home']= "主页";
		$lang['abt_us']= "关于我们";
		$lang['reg_cap']= "註冊户口";
		$lang['login']= "登入";
		$lang['userid']= "户名";
		$lang['password']= "密码";
		$lang['val_code']= "验证码";
		$lang['login_btn']= "登陆";
		$lang['livemkcap'] = "市场信息";
		$lang['description']  = "<li class=\"adv_01\">
    <p><span>用户界面友好</span></p>
    <p>市价单立即执行</p>
  </li>
  <li class=\"adv_02\">
    <p>无<span>佣金</span></p>
    <p>无利息</p>
    <p>无隔夜留仓费用</p>
  </li>
  <li class=\"adv_03\">
    <p>无隐藏费用</p>
    <p>无外汇<span>兑换损失</span></p>
  </li>
  <li class=\"adv_04\">
    <p>无延误滑点</p>
    <p>无<span>重新报价</span></p>
  </li>
  <li class=\"adv_05\">
    <p>具竞争力的点差</p>
    <p><span>保证止损</span></p>
  </li>
		";
	$lang['bottom_msg']  = "<h2>我们的交易平台</h2>
    <p>我们提供可制订的交易平台,透过网络,让使用者经验顺畅和容易。</p>
    <h2>客户服务</h2>
    <p><span class=\"gray\">任何需要  请致电?</span><br/>客户服务时段：</p><p class=\"orange\">+639081876052</p>
  </div>
  <div class=\"space\"></div>
  <div class=\"footer\"><span>&copy; Copyrights 2011. All Right reserved</span>";
	break;
	case "th":
		$lang['title'] = "BROKERY";
		$lang['lang_cap'] = "ภาษา";
		$lang['home']= "บ้าน";
		$lang['abt_us']= "เกี่ยวกับเรา";
		$lang['reg_cap']= "การลงทะเบียน";
		$lang['login']= "เข้าสู่ระบบ";
		$lang['userid']= "รหัสผู้ใช้";
		$lang['password']= "รหัสผ่าน";
		$lang['val_code']= "รหัสการตรวจสอบ ";
		$lang['login_btn']= "เข้าสู่ระบบ";
		$lang['livemkcap'] = "ราคาตลาดสด";
		$lang['description']  = "<li class=\"adv_01\">
    <p><span>ใช้งานง่าย</span></p>
    <p>การดำเนินการอย่างรวดเร็ว</p>
  </li>
  <li class=\"adv_02\">
   <p>คณะกรรมการ<span>ไม่มี</span></p>
    <p>ไม่มีดอกเบี้ย</p>
    <p>ไม่มีค่าใช้จ่ายในชั่วข้ามคืน</p>
  </li>
  <li class=\"adv_03\">
 	<p>ไม่มีค่าที่ซ่อน</p>
    <p>ไม่มีการ<br><span>สูญเสียการแปลง</san><br>อัตราแลกเปลี่ยน</p>
  </li>
  <li class=\"adv_04\">
 	<p>Slippage  ไม่มี</p>
    <p>Re-quote <span>ไม่มี</span></p>
  </li>
  <li class=\"adv_05\">
    <p>กระจายการแข่งขัน</p>
    <p><span>หยุดการสูญเสียการรับประกัน</span></p>
  </li>";
		$lang['bottom_msg']  = "<h2>แพลตฟอร์มของเรา</h2>
    <p>เรามีจุดมุ่งหมายที่จะทำให้ประสบการณ์การใช้งานเป็นที่เรียบง่ายและเป็นไปได้ด้วยแพลตฟอร์มการซื้อขายที่ปรับแต่งที่เราสามารถเข้าถึงผ่านทางเว็บ</p>
    <h2>ฝ่ายบริการลูกค้า</h2>
    <p><span class=\"gray\">ต้องการความช่วยเหลือ?</span><br/>รู้สึกอิสระที่จะติดต่อผู้ช่วยของเรา</p><p class=\"orange\">+639081876052</p>
  </div>
  <div class=\"space\"></div>
  <div class=\"footer\"><span>&copy; ลิขสิทธิ์ 2011 สงวนลิขสิทธิ์</span>";
		break;
		case "vi":
			$lang['title'] = "nhà môi giới";
			$lang['lang_cap'] = "ngôn ngữ";
			$lang['home']= "quê hương";
			$lang['abt_us']= "Giới thiệu";
			$lang['reg_cap']= "Đăng ký";
			$lang['login']= "đăng nhập";
			$lang['userid']= "ID người dùng";
			$lang['password']= "mật khẩu";
			$lang['val_code']= "xác nhận mã số";
			$lang['login_btn']= "đăng nhập";
			$lang['livemkcap'] = "trực Giá cả thị trường";
			$lang['description']  = "<li class=\"adv_01\">
<p><span>thân thiện với người sử dụng</span></p>
    <p>nhanh chóng thực hiện</p>
  </li>
  <li class=\"adv_02\">
  <p>không có <span>hoa hồng</span></p>
    <p>không quan tâm</p>
    <p>không có chi phí qua đêm</p>
  </li>
  <li class=\"adv_03\">
  <p>không có lệ phí ẩn</p>
    <p>không<br><span>chuyển đổi</san><br>ngoại tệ mất</p>
  </li>
  <li class=\"adv_04\">
    <p>không Slippage</p>
    <p>không <span>Re-quote</span></p>
  </li>
  <li class=\"adv_05\">
  <p>cạnh tranh lan rộng</p>
    <p><span>Đảm bảo dừng mất</span></p>
  </li>";
			$lang['bottom_msg']  = "<h2>nền tảng của chúng tôi</h2>
    <p>Chúng tôi nhằm mục đích để làm cho kinh nghiệm người dùng trơn tru và dễ dàng nhất có thể với một nền tảng kinh doanh tùy chỉnh mà chúng ta có thể truy cập thông qua trang web </p>
    <h2>hỗ trợ khách hàng</h2>
    <p><span class=\"gray\">cần giúp?</span><br/>Hãy liên hệ với bộ phận trợ giúp của chúng tôi</p><p class=\"orange\">+639081876052</p> 
  </div>
  <div class=\"space\"></div>
  <div class=\"footer\"><span>&copy; Copyrights 2011. All Right reserved</span>";
			break;
			case "km":
				$lang['title'] = "របស់ចាស់";
				$lang['lang_cap'] = "ភាសារ";
				$lang['home']= "ហោមេ";
				$lang['abt_us']= "ាំបោុត ូៃ";
				$lang['reg_cap']= "ឬេងិសតរាតិោន";
				$lang['login']= "ចុចចូលលេខសំងាត់ដែលបានប្តូរ";
				$lang['userid']= "អត្តលេខអ្នកប្រើប្រាស់";
				$lang['password']= "លេខសំងាត់";
				$lang['val_code']= "សុពលភាពលេខកូដ";
				$lang['login_btn']= "ចុចចូលលេខសំងាត់ដែលបានប្តូរ";
				$lang['livemkcap'] = "បន្តរផ្ទាល់តម្លៃទីផ្សារ";
				$lang['description']  = "<li class=\"adv_01\">
    <p><span>អ្នកប្រើប្រាស់ពេញចិត្ត</span></p>
    <p>ការប្រតិបត្តិការណ៏រហ័ស</p>
  </li>
  <li class=\"adv_02\">
   <p>មិនមាន<span>កំរៃជើងសារ</span></p>
    <p>មិនមានការប្រាក់</p>
    <p>មិនមានការរំលងមួយយប់ប្តូរតំលៃ</p>
  </li>
  <li class=\"adv_03\">
    <p>មិនមានកាលាក់នៃថ្លៃឈ្នួល</p>
    <p>មិនមានការដោះដូ<br><span>រចំពោះការផ្លាសប្តូរការខាតបង់</san></p>
  </li>
  <li class=\"adv_04\">
    <p>មិនមាន​ slippage</p>
    <p>មិនមាន​ <span>Re-quote</span></p>
  </li>
  <li class=\"adv_05\">
   <p>ការរាលដាលនៃការប្រកូតប្រជែង</p>
    <p><span>ធនាបញ្ឈប់ការចាញ់</span></p>
  </li>";
				$lang['bottom_msg']  = " <h2>វេទីការបស់យើង</h2>
						<p>បំណងរបស់យើងគឺចង់អោយអ្នកប្រើប្រាស់ទទួលបាននូវការ</p>
    <h2>ការទំនុកបំរុងភ្ញៀវ</h2>
<p><span class=\"gray\">ត្រូវកាជំនួយ?</span><br/>ធេេល ធរេេ តោ ជោនតាចត<br/>
ៅុរ ះេលផដេសក</p><p class=\"orange\">+639081876052</p> 
						
  </div>
  <div class=\"space\"></div>
  <div class=\"footer\"><span>&copy; រក្សាសិទ្ធនិងថតចំលង់នៅឆ្នាំ2011</span>";
				break;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="scripts/mask.js"></script>
<script src='scripts/drop_down.js' type='text/javascript'></script>	
</head>
<body>

<script type="text/javascript">
var d = document.domain;
var da = d.split('.');
function is_int(value){ 
	  if((parseFloat(value) == parseInt(value)) && !isNaN(value)){
	       return true;
	   } else { 
	      return false;
	   } 
	}
if (da.length >= 2 && !is_int(da[da.length-1])) {
	document.domain = da[da.length-2] + '.' + da[da.length-1];	
}

	window.parent.document.title = "<?php echo $lang['title']; ?>";
	
	var linkItem = window.parent.document.createElement('link');
	linkItem.rel  = 'shortcut icon';
	linkItem.href = '/images/';
	window.parent.document.getElementsByTagName('head')[0].appendChild(linkItem);
</script>
<link href="front_images/_index/adv_<?php echo $_GET['lang']; ?>.css" rel="stylesheet" type="text/css" />
<link href="front_images/_index/main_<?php echo $_GET['lang']; ?>.css" rel="stylesheet" type="text/css" />
<script src='scripts/swfobject.js' type='text/javascript'></script>
<script src="scripts/mask.js"      type="text/javascript"></script>
<script>
            window.name = 'fin';
            var dialog = "_self";
            var from =  'brokery';

            function login(){
	                document.forms["form1"].target = dialog;
	                document.forms["form1"].submit();      
	             
            }
            function imgReload() {
                document.captcha.src="http://spreads.brokery.com/img.jpg?" + Math.random();
            }
            setInterval('imgReload()', 50000);
            function changeLang(lang) {
                document.location = "?lang="+lang;
            }
            function usernameOnClick(){
        		document.getElementById('uid2Text').style.display='none';document.getElementById('username').style.display='block';document.getElementById('username').focus();
        	}
            function passTextOnClick(){
        		document.getElementById('passText').style.display='none';document.getElementById('pass').style.display='block';document.getElementById('pass').focus();
        	}
            function validationOnClick(){
               document.getElementById('code2Text').style.display='none';document.getElementById('code').style.display='block';document.getElementById('code').focus();
        	}               
        </script>

<form action="login_action.php" method="post" name="form1" id="form1">

<div class="wrapper">
	<div class="language03"><?php echo $lang['lang_cap'];?>
		<label>
        	<select name="select" id="select" onchange="changeLang(this.options[this.selectedIndex].value);">
            
				<option <?php if($_GET['lang'] == "en"){?>selected<?php }?> value="en">English</option>
			
            	<option <?php if($_GET['lang'] == "ch"){?>selected<?php }?> value="ch">中文</option>
			
            	<option <?php if($_GET['lang'] == "th"){?>selected<?php }?> value="th">ภาษาไทย</option>
			
            	<option <?php if($_GET['lang'] == "vi"){?>selected<?php }?> value="vi">Việt</option>
			
            	<option <?php if($_GET['lang'] == "km"){?>selected<?php }?> value="km">Khmer</option>
			
            </select>
		</label>
	</div>
  <div class="logo_brokery"></div>
  <!--about start-->
  <div class="about_wrap">
  	<span class="corner_left"></span>
    <span class="corner_right"></span>
    
    <ul>
    	<li><a href="#"><?php echo $lang['home'];?></a>&nbsp;&nbsp;&nbsp;|</li>
        <li><a href="about_us_en.html?lang=<?php echo $_GET['lang']; ?>"><?php echo $lang['abt_us']; ?></a>&nbsp;&nbsp;&nbsp;|</li>
        <li><a href="register_en.html?lang=<?php echo $_GET['lang']; ?>"><?php echo $lang['reg_cap']; ?></a></li>
    </ul>
    
  </div>
  <!--about end-->
  <div class="main">
    <div class="login">
      <h1><?php echo $lang['login']; ?></h1>
      <table>
         <tr>
           <td><input class="textbox" type="text" name="uid2Text" id="uid2Text" maxlength="30"  autocomplete="off" value=" <?php echo $lang['userid']; ?>" onclick="usernameOnClick();" onkeyup="usernameOnClick();" />
           <input class="textbox" style="display:none;color:#444;" type="text" name="username" id="username" maxlength="30"  autocomplete="off" onblur="if(this.value==''){document.getElementById('uid2Text').style.display='block';this.style.display='none';}" />
           
           </td>
         </tr>
         <tr>
           <td><input class="textbox"  type="text" id="passText" name="passText" maxlength="30"  autocomplete="off" value=' <?php echo $lang['password']; ?>' onclick="passTextOnClick()" onkeyup="passTextOnClick();" />
           <input class="textbox" style="display:none;color:#444;" type="password" id="pass" name="pass" maxlength="30"  autocomplete="off" onblur="if(this.value==''){document.getElementById('passText').style.display='block';this.style.display='none';}" /></td>
         </tr>
         <tr>
           <td><input class="textbox2" type="text" name="code2Text" id='code2Text' maxlength="30"  autocomplete="off" value=' <?php echo $lang['val_code']; ?>' onclick="validationOnClick();" onkeyup="validationOnClick();" />
           <input class="textbox2" style="display:none;color:#444;" type="text" name="code" id='code' maxlength="30"  autocomplete="off" onblur="if(this.value==''){document.getElementById('	').style.display='block';this.style.display='none';}" /><div><img class="vp" id="captcha" name="captcha"/><script>document.captcha.src="http://spreads.brokery.com/img.jpg?" + Math.random();</script></div>
           </td>
         </tr>
         <tr>

  </tr>
      </table>
<!--      <p class="bt"><a href="#"  onclick="login();">i18n1.get("login.button.login") </a></p>-->
      <input type="submit" id="imgbtn" class="login_btn" onclick="login();" onmouseover="this.className='login_btn_over';" onmouseout="this.className='login_btn';" value="<?php echo $lang['login_btn'];?>">
    </div>
    <div class="space"></div>
  </div>
  <ul class="advAll">
  <?php echo $lang['description'];?>
  
<div class="clear"></div>
</ul> 
  <div class="info_left">
    <h2><?php echo $lang['livemkcap']; ?></h2>
     <div class="prices">
     <div class="swf" id="simpleFinancial">
        <a href="http://www.adobe.com/go/getflashplayer">
            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
        </a>
     </div>
     </div>
  </div>
  <div class="info_right">
  
  <?php echo $lang['bottom_msg']; ?> 
  
  </div>
</div>
<input id="lang" name="lang" type="hidden" value="en"/>
<input id="from" name="from" type="hidden" value="brokery"/>
</form>
<script>

        var flashvars = {lang:"<?php echo $_GET['lang']?>",mode:"0"};
        var params = {
            allowscriptaccess: "always",wmode:"opaque"
        };
        var attributes = {
            id: "flash",
            name: "flash"
        };
        swfobject.embedSWF("http://www.brokery.com/swf/simpleFinancial.swf", "simpleFinancial", "670", "200", "10.1.0","false", flashvars, params, attributes);
       
</script>	 	
	

</body>
</html>
<script>
	<?php if($_GET['error'] == "1"){?>
	alert("Invalid Username or Password ..");
	<?php }?>
</script>
