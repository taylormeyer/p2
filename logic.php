<?php
//
$form = new p2\Form($_GET);
if ($_REQUEST) {
    //$form = new p2\Form($_GET);

    if ($form->isSubmitted()) {
        $errors = $form->validate(
            [
                'split_way' => 'required|numeric',
                'tab' => 'required|numeric'
            ]
        );

        if (!$errors) {
            $splitterVal = 0;
            $subTotal = $_REQUEST['tab'] + ($_REQUEST['service-tip'] * $_REQUEST['tab'] / 100);
            $splitterVal = $subTotal / $_REQUEST['split_way'];
            if (isset($_REQUEST['round-up']) AND $_REQUEST['round-up'] == 'yes') {
                $splitterVal = ceil($splitterVal);
            }
        }
    }
}
?>