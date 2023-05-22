<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

// поключаем модуль инфоблоков
CModule::IncludeModule('iblock');
$PROP = array(); // данные для полей элемента инфоблока
$errors = array('status' => false); // переменная для результата

$json_ar = array('status' => 'error', 'errors' => $errors, 'form_id' => $_REQUEST['FORM_ID']);
$errors = array();
if($_REQUEST['NAME'] == ""){
    $errors[] = 'NAME';
}
if($_REQUEST['PHONE'] == "" and !in_array($_REQUEST['FORM_ID'], array('consultation'))){
    $errors[] = 'PHONE';
}
if($_REQUEST['EMAIL'] == "" and !in_array($_REQUEST['FORM_ID'], array('callback-form', 'form-1', 'form-2', 'consultation'))){
    $errors[] = 'EMAIL';
}

if(count($errors) > 0){
    $json_ar = array('status' => 'error', 'form_id' => $_REQUEST['FORM_ID'], 'errors' => $errors);
}else {
    $to = "asd191193@yandex.ru";
    $subject = "Gefest Logistic: ".$_REQUEST['FORM_NAME'];

    /* сообщение */
    $message = '<div style="color: black; font-size: 16px; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #EDEDED">Gefest Logistic</div>
    <div style="color: black;">Была заполнена форма обратной связи.</div>';

    if($_REQUEST['NAME'] != ''){
        $PROP['NAME'] = htmlspecialchars( $_REQUEST['NAME'], ENT_QUOTES );
        $message .= '<div style="color: black;">
                    <p><b>Ваше имя</b>:
                    '.$_REQUEST['NAME'].'</p>
                    </div>';
    }
    if($_REQUEST['PHONE'] != ''){
        $PROP['PHONE'] = htmlspecialchars( $_REQUEST['PHONE'], ENT_QUOTES );
        $message .= '<div style="color: black;">
                    <p><b>Телефон</b>:
                    '.$_REQUEST['PHONE'].'</p>
                    </div>';
    }
    if($_REQUEST['EMAIL'] != ''){
        $PROP['EMAIL'] = htmlspecialchars( $_REQUEST['EMAIL'], ENT_QUOTES );
        $message .= '<div style="color: black;">
                    <p><b>Телефон или email</b>:
                    '.$_REQUEST['EMAIL'].'</p>
                    </div>';
    }
    if($_REQUEST['TIME'] != ''){
        $PROP['TIME'] = htmlspecialchars( $_REQUEST['TIME'], ENT_QUOTES );
        $message .= '<div style="color: black;">
                    <p><b>Удобное время звонка</b>:
                    '.$_REQUEST['TIME'].'</p>
                    </div>';
    }

    // указываем тему отклика, в зависимости от передаваемого типа
    if (isset($_POST['action']) && $_POST['action'] == 'call'){
        $TITLE = 'Новая заявка звонка с сайта: '.$PROP['PERSON_NAME'].' от '.date("d.m.Y H:i:s");
    } else {
        $TITLE = 'Новая заявка: '.$PROP['NAME'].' от '.date("d.m.Y H:i:s");
    }

    $el = new CIBlockElement;

    // массив полей для нового элемента
    $arElem = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => 6,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $TITLE,
        "ACTIVE"         => "Y",
    );

    if ($PRODUCT_ID = $el->Add($arElem)){
        // устанавливаем статус
        $errors['status'] = true;
        $errors['msg'][] = array(
            'text' =>'Ваши данные отправлены успешно!<br>Ожидайте звонка наших операторов.',
            'type' => true
        );
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: test@ck69141.tw1.ru\r\n";
    mail($to, $subject, $message, $headers);

    $json_ar = array('status' => 'ok', 'form_id' => $_REQUEST['FORM_ID']);
}
}
echo json_encode($json_ar);
?>