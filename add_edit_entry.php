<pre><?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    require_once 'config.php';
    $ret = [];
    foreach ($_POST as $name => $value) {
        $ret[$name] = stripcslashes(htmlspecialchars($value));
    }

//    var_dump($ret);
    $uploader = new \classes\Uploader;
    if ($ret['edit'] == 1) {
        $uploader->editEntry(
            $ret['form_issue'], $ret['form_date_month'], $ret['form_date_year'], $ret['form_page'], $ret['form_comment'], $ret['form_entry_id']
        );
    } elseif ($ret['delete'] == 1) {
        $uploader->deleteEntry($ret['form_entry_id']);
    } else {
        $uploader->uploadEntry(
            $ret['form_issue'], $ret['form_date_month'], $ret['form_date_year'], $ret['form_page'], $ret['form_comment'], $ret['form_subject_id']
        );
    }
    $uploader->redirect();
