<?php
const REGISTER_PARTNER_API_ACTION = 'https://newpas.cf';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Partner API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/base.css">
</head>
<body>
	<div class="hidden-md-down">
        <div class="pages-banner-main pages-banner-main-contact">
            <p class="pages-main-copy ff-futura fs-80 slide_in_right">
                <span class="c-000">R</span>
                <span class="c-1f2c70">E</span>
                <span class="c-000">G</span>
                <span class="c-1f2c70">I</span>
                <span class="c-1f2c70">S</span>
                <span class="c-1f2c70">T</span>
                <span class="c-000">E</span>
                <span class="c-1f2c70">R</span>
            </p>
        </div>
    </div>
    <div class="hidden-lg-up">
        <div class="pages-banner-main pages-banner-main-contact">
            <p class="pages-main-copy ff-futura fs-70 lh-1_5 slide_in_right">
                <span class="c-fff">C</span>
                <span class="c-fff">O</span>
                <span class="c-fff">N</span>
                <span class="c-fff">T</span>
                <span class="c-fff">A</span>
                <span class="c-fff">C</span>
                <span class="c-fff">T</span>
            </p>
        </div>
    </div>
    <div class="container py-5 my-3">
        <div class="row">
            <div class="col-xl-4 push-xl-8 slide_in_left_up">
                <div class="pages-main-about-us p-sm-5 p-4">
                    <p class="fs-24 c-0f213f"><b>アールナインへのお問い合わせ</b></p>
                    <p class="c-0f213f mt-4">
                        アールナインのサイトにご訪問いただきありがとうございます。お問い合わせ頂いた件については、１営業日以内に当社のコンサルタントが対応しご連絡させていただきます。「社員の定着率を改善したい」という根深い課題から「採用説明会の運営を任せたい」など、スポットでのご依頼でも、対応可能です。
                    </p>
                </div>
            </div>
            <div class="col-xl-8 pull-xl-4">
                <h3 class="fs-24 ls-01 mt-xl-0 mt-5"><em><b>お問い合わせ</b></em></h3>
                <hr class="bc-ccc">
                <br>
                <p>下記の入力フォームに必要事項をご入力の上、「送信ボタン」をクリックして下さい。<br>１営業日以内に当社のコンサルタントが対応しご連絡させていただきます。スポットでのご依頼、代表
                    長井への講演依頼など、何でもお気軽にお問い合わせください。<br><span class="c-ffd70a">＊</span>印は必須項目です。</p>
            </div>
        </div>
    </div>
    <div id="contact" class="container pb-5">
        <div class="row pb-5">
            <div class="col-xl-8">
                <div role="form" lang="ja" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="<?php echo REGISTER_PARTNER_API_ACTION; ?>" id="register-partner" method="post"
                          enctype="multipart/form-data" onsubmit="callApi(event)">
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">写真データ<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="avatar">
                                    <input type="file" name="avatar" size="40" class="form-control" required
                                           accept=".jpeg,.png,.bmp,.gif,.svg,.webp"
                                           aria-invalid="false">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">姓<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="last_name">
                                  <input type="text" name="last_name" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false"
                                         placeholder="Please input Last name">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">名<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="first_name">
                                  <input type="text" name="first_name" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false"
                                         placeholder="Please input first name">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">姓(カナ)<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="last_name_kana">
                                  <input type="text" name="last_name_kana" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false" placeholder="Please input Last name (Kana)">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">名(カナ)<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="first_name_kana">
                                  <input type="text" name="first_name_kana" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false" placeholder="Please input first name (Kana)">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">メールアドレス (PC)<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="email">
                                  <input type="email" name="email" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false"
                                         placeholder="Please input email">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">ﾒｰﾙｱﾄﾞﾚｽ(緊急時・携帯電話等)</p>
                            <p class="col-9 fs-14">
                                <span class="emergency_email">
                                  <input type="email" name="emergency_email" value="" size="40" class="txtarea form-control"
                                         aria-invalid="false"
                                         placeholder="Please input Emergency email">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">電話番号(携帯)<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="phone_number">
                                  <input type="text" name="phone_number" value="" size="40" class="txtarea form-control"
                                         required
                                         aria-invalid="false" placeholder="Please input Phone number">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">生年月日（年齢）<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="date_of_birth">
                                  <input type="text" name="date_of_birth" value="" size="40" class="txtarea form-control"
                                         required
                                         aria-invalid="false" placeholder="1980/01/01">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">性別<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="gender_id">
                                  <select name="gender_id" class="form-control" required aria-invalid="false">
                                    <option value=""> --性別を選択する-- </option>
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                    <option value="3">その他</option>
                                  </select>
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">郵便番号<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="postal_code">
                                  <input type="text" name="postal_code" value="" size="40" class="txtarea form-control"
                                         required
                                         aria-invalid="false" placeholder="0000000">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">都道府県<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="prefecture_id">
                                    <select name="prefecture_id" class="form-control"
                                            required aria-invalid="false">
                                        <option value=""> --都道府県を選択する-- </option>
                                        <option value="13">東京都</option>
                                        <option value="27">大阪府</option>
                                        <option value="23">愛知県</option>
                                        <option value="40">福岡県</option>
                                        <option value="1">北海道</option>
                                        <option value="2">青森県</option>
                                        <option value="3">岩手県</option>
                                        <option value="4">宮城県</option>
                                        <option value="5">秋田県</option>
                                        <option value="6">山形県</option>
                                        <option value="7">福島県</option>
                                        <option value="8">茨城県</option>
                                        <option value="9">栃木県</option>
                                        <option value="10">群馬県</option>
                                        <option value="11">埼玉県</option>
                                        <option value="12">千葉県</option>
                                        <option value="14">神奈川県</option>
                                        <option value="15">新潟県</option>
                                        <option value="16">富山県</option>
                                        <option value="17">石川県</option>
                                        <option value="18">福井県</option>
                                        <option value="19">山梨県</option>
                                        <option value="20">長野県</option>
                                        <option value="21">岐阜県</option>
                                        <option value="22">静岡県</option>
                                        <option value="24">三重県</option>
                                        <option value="25">滋賀県</option>
                                        <option value="26">京都府</option>
                                        <option value="28">兵庫県</option>
                                        <option value="29">奈良県</option>
                                        <option value="30">和歌山県</option>
                                        <option value="31">鳥取県</option>
                                        <option value="32">島根県</option>
                                        <option value="33">岡山県</option>
                                        <option value="34">広島県</option>
                                        <option value="35">山口県</option>
                                        <option value="36">徳島県</option>
                                        <option value="37">香川県</option>
                                        <option value="38">愛媛県</option>
                                        <option value="39">高知県</option>
                                        <option value="41">佐賀県</option>
                                        <option value="42">長崎県</option>
                                        <option value="43">熊本県</option>
                                        <option value="44">大分県</option>
                                        <option value="45">宮崎県</option>
                                        <option value="46">鹿児島県</option>
                                        <option value="47">沖縄県</option>
                                        <option value="48">海外</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">住所<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="street_address">
                                  <input type="text" name="street_address" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false" placeholder="Street address">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">履歴書・職歴書等<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="first_resume_file">
                                    <input type="file" name="first_resume_file" size="40" required class="form-control"
                                           accept=".pdf,.xls,.xlsx,.doc,.docx"
                                           aria-invalid="false">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <p class="col-9 fs-14">
                                <span class="second_resume_file">
                                    <input type="file" name="second_resume_file" size="40" class="form-control"
                                           accept=".pdf,.xls,.xlsx,.doc,.docx"
                                           aria-invalid="false">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <p class="col-9 fs-14">
                                <span class="third_resume_file">
                                    <input type="file" name="third_resume_file" size="40" class="form-control"
                                           accept=".pdf,.xls,.xlsx,.doc,.docx"
                                           aria-invalid="false">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">最終学歴：区分<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="education_type_id">
                                    <select name="education_type_id" class="form-control" required aria-invalid="false">
                                        <option value="">--最終学歴--</option>
                                        <option value="1">大卒</option>
                                        <option value="2">大学院卒</option>
                                        <option value="3">短大卒</option>
                                        <option value="4">専門学校卒</option>
                                        <option value="5">高卒</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">最終学歴：学校名<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="school_name">
                                  <input type="text" name="school_name" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false" placeholder="最終学歴：学校名">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">最終学歴：学部学科<span class="c-ffd70a">＊</span></p>
                            <p class="col-9 fs-14">
                                <span class="undergraduate_major">
                                  <input type="text" name="undergraduate_major" value="" size="40" class="txtarea form-control" required
                                         aria-invalid="false" placeholder="最終学歴：学部学科">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">自由記入欄</p>
                            <p class="col-9 fs-14">
                                <span class="education_introduce">
                                  <input type="text" name="education_introduce" value="" size="40" class="txtarea form-control"
                                         aria-invalid="false" placeholder="自由記入欄">
                                </span>
                            </p>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">保有資格</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="1" name="qualifications[]" style="margin-left: 0;">
                                    <label class="form-check-label" for="qualifications[]">国家資格キャリアコンサルタント</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="3" name="qualifications[]" style="margin-left: 0">
                                    <label class="form-check-label" for="qualifications[]">GCDF</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="2" name="qualifications[]" style="margin-left: 0">
                                    <label class="form-check-label">２級キャリア・コンサルティング技能士</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="4" name="qualifications[]" style="margin-left: 0">
                                    <label class="form-check-label">CDA</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="5" name="qualifications[]" style="margin-left: 0;">
                                    <label class="form-check-label" for="qualifications[]">産業カウンセラー</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="6" name="qualifications[]" style="margin-left: 0">
                                    <label class="form-check-label">ICCA</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">ご経験のある業界</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="1" name="experienced_industries[]" style="margin-left: 0;">
                                    <label class="form-check-label" for="experienced_industries[]">メーカー（機電系）</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="3" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label" for="experienced_industries[]">商社</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="2" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">メーカー（その他）</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="4" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">流通</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="5" name="experienced_industries[]" style="margin-left: 0;">
                                    <label class="form-check-label" for="experienced_industries[]">小売</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="6" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">金融</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="7" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">サービス</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="8" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">ソフトウエア、通信</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" value="9" name="experienced_industries[]" style="margin-left: 0;">
                                    <label class="form-check-label" for="experienced_industries[]">広告、出版、マスコミ</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" value="10" name="experienced_industries[]" style="margin-left: 0">
                                    <label class="form-check-label">官公庁、公社、団体</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">新卒採用実務経験</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="new_briefing_presentation" style="margin-left: 0;">
                                    <label class="form-check-label" for="new_briefing_presentation">説明会プレゼン</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="new_personal_interview" style="margin-left: 0">
                                    <label class="form-check-label" for="new_personal_interview">個人面接</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="new_group_interview" style="margin-left: 0">
                                    <label class="form-check-label">集団面接</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="new_group_discussion" style="margin-left: 0">
                                    <label class="form-check-label">ｸﾞﾙｰﾌﾟﾃﾞｨｽｶｯｼｮﾝ・ｸﾞﾙｰﾌﾟﾜｰｸ</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="new_seminar" style="margin-left: 0;">
                                    <label class="form-check-label" for="new_seminar">ｾﾐﾅｰ運営・ｱﾃﾝﾄﾞ・受付業務</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="new_school_around" style="margin-left: 0">
                                    <label class="form-check-label">学校回り</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="new_recruiter" style="margin-left: 0">
                                    <label class="form-check-label">リクルーター</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="new_navigation_site" style="margin-left: 0">
                                    <label class="form-check-label">ナビサイトの操作</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">中途採用実務経験</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="mid_briefing_presentation" style="margin-left: 0;">
                                    <label class="form-check-label" for="mid_briefing_presentation">説明会プレゼン</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="mid_personal_interview" style="margin-left: 0">
                                    <label class="form-check-label" for="mid_personal_interview">個人面接</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="mid_seminar" style="margin-left: 0">
                                    <label class="form-check-label">ｾﾐﾅｰ運営・ｱﾃﾝﾄﾞ・受付業務</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="mid_recruiter" style="margin-left: 0">
                                    <label class="form-check-label">リクルーター</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="mid_agent_control" style="margin-left: 0;">
                                    <label class="form-check-label" for="mid_agent_control">ｴｰｼﾞｪﾝﾄｺﾝﾄﾛｰﾙ</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="mid_navigation_site" style="margin-left: 0">
                                    <label class="form-check-label">ナビサイトの操作</label>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">経験業務</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="business_recruiting_advisor" style="margin-left: 0;">
                                    <label class="form-check-label" for="business_recruiting_advisor">リクルーティングｱﾄﾞﾊﾞｲｻﾞｰ(RA)</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="business_career_advisor" style="margin-left: 0">
                                    <label class="form-check-label" for="business_career_advisor">ｷｬﾘｱｱﾄﾞﾊﾞｲｻﾞｰ(CA)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="business_job_advertising_sales" style="margin-left: 0">
                                    <label class="form-check-label">求人広告営業経験</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="business_social_consulting" style="margin-left: 0">
                                    <label class="form-check-label">社会人向けｷｬﾘｱｺﾝｻﾙﾃｨﾝｸﾞ</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="business_student_consulting" style="margin-left: 0;">
                                    <label class="form-check-label" for="business_student_consulting">学生向けｷｬﾘｱｺﾝｻﾙﾃｨﾝｸﾞ・就職支援</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="business_third_resident" style="margin-left: 0">
                                    <label class="form-check-label">他社常駐経験</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14">その他業務</p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="other_training_instructor" style="margin-left: 0;">
                                    <label class="form-check-label" for="other_training_instructor">研修講師</label>
                                </div>
                                <div class="form-check form-check-inline col-6" style="margin-left: 0;">
                                    <input class="form-check-input" type="checkbox" name="other_facilitator" style="margin-left: 0">
                                    <label class="form-check-label" for="other_facilitator">ﾌｧｼﾘﾃｰﾀｰ</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 form-group">
                            <p class="col-3 fs-14"></p>
                            <div class="col-9 fs-14">
                                <div class="form-check form-check-inline col-6" style="float:left;">
                                    <input class="form-check-input" type="checkbox" name="other_lecture_speaker" style="margin-left: 0">
                                    <label class="form-check-label">講演話者</label>
                                </div>
                            </div>
                        </div>
                        <div id="result" class="mb-2"></div>
                        <div class="loading" style="display:none;">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <circle cx="50" cy="50" fill="none" stroke="#0a0a0a" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(111.848 50 50)">
                                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                                </circle>
                            </svg>
                        </div>
                        <div class="mb-2">
                            <div class="mt-2" style="text-align: center;"><br>
                                <input type="hidden" name="XDEBUG_SESSION_START" value="PHPSTORM">
                                <button class="button-white c-0f213f ff-futura" type="submit">
                                    この内容で送信する
                                </button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
                <p class="text-center fs-12 mt-4">
                    <a href="<?php echo home_url(); ?>/privacy/" class="link-defalut"
                       style="text-decoration: underline;">
                        個人情報・プライバシーポリシー
                    </a>
                    &nbsp;について
                </p>
            </div>
            <div class="col-xl-4 hidden-lg-down">
                <div id="sidebar">
                    <?php get_sidebar('contact'); ?>
                    <?php get_sidebar('links'); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery(document).ajaxStart(function() {
                jQuery('.loading').show();
            });

            jQuery(document).ajaxStop(function() {
                jQuery('.loading').hide();
            });
        });

        function callApi(event) {
            event.preventDefault();
            var formData = new FormData(document.getElementById('register-partner'));

            jQuery.ajax({
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?php echo REGISTER_PARTNER_API_ACTION; ?>",
                success: function (result) {
                    if (!result.success) {
                        let errors = '';

                        $.each(result.message, function (field, message) {
                            errors += '<p>' +  message + '</p>';
                        });

                        showErrorMessages(errors);
                    } else {
                        showSuccessMessage(result.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    showErrorMessages(errorThrown);
                }
            });
        }

        function showErrorMessages(messages) {
            const html = "<div class=\'alert alert-danger\'>" + messages + '</div>';

            $('#result').html(html);
        }

        function showSuccessMessage(message) {
            const html = "<div class='alert alert-success'>" + message + '</div>';

            $('#result').html(html);
        }
    </script>
</body>
</html>